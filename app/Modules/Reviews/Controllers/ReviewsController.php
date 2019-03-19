<?php

namespace App\Modules\Reviews\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Modules\Forms\Models\Forms;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Modules\Reviews\Models\Reviews;
use Illuminate\Support\Facades\Session;
use App\Modules\Reviews\Models\ReviewList;
use App\Modules\Employees\Models\Employees;
use App\Modules\Reviews\Models\ReviewResult;

class ReviewsController extends Controller
{
    protected $review;

    public function __construct(Reviews $review, ReviewList $reviewList, Employees $employees, Forms $form)
    {
        $this->review = $review;
        $this->reviewList = $reviewList;
        $this->employees = $employees;
        $this->form = $form;
    }

    public function selectCandidate(){
        $page = "select.candidate";
        $action = "create";
        $data = $this->employees->get();
        $forms = $this->form->get();
       
        return view('Reviews::select_candidate',compact('data','forms', 'page','action'));

    }

    public function showForm(){
        $form = $this->reviewList->where('employee_id', Auth::user()->id)->whereStatus(NULL)->first();
       
        if($form){
            return view("Reviews::".$form->form_name);
        }else{
            return back();
        }

    }
    /**
     * Create Template form for review
     * temp_id, json_data, request->schema
     *
     * @param Request $request
     * @return void
     */
    public function createTemplate(Request $request)
    {
        $this->template->create($request->all());
    }

    public function saveReview(Request $request){
        $data = $request->except('_token','submit','employee_id');
        
        $id = $request->employee_id;
   
        $result = [];
        foreach($data as $key=>$value){
    
            $result[] = ['employee_id'=>$id, 'field_name'=>$key, 'point'=>$value];
        }
       
        ReviewResult::insert($result);
        ReviewList::where('employee_id', Auth::user()->id)->update(['status'=>'completed']);
        return "thank you for review";

    }

    /**
     * Store Each Review of Employee
     * emp_id, temp_id, model
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $data['employee_id'] = 1;
        $data['temp_id'] = 1;
        
        $data['json_data'] = json_encode($request->all());
   
        $this->review->create($data);
    }

    public function sendForReview(Request $request)
    {
        foreach($request->employee_ids as $employee_id){
            $this->review->create(['employee_id'=> $employee_id, 'temp_id'=>$request->temp_id]);
        }
    }

    public function storeCandidate(Request $request){
       
        $employees = $request->employee_id;
        $fid = $request->form_id;
        $data = [];
        foreach($employees as $id){
            $data[] = ['employee_id'=> $id, 'form_name'=>'', 'form_id'=>$fid];
        }
        $this->reviewList->insert($data);
      
        Session::flash('message', "success");
        return redirect(route('review.candidates'));
    }

    public function getCandidates(){
        $page = "candidates";
        $data = DB::table('review_list as r')->select('e.id', 'e.first_name', 'e.last_name')->join('employees as e', 'e.id', '=', 'r.employee_id')->get();
        return view('Reviews::candidates', compact('data', 'page'));
    }
}
