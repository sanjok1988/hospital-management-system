<?php

namespace App\Modules\Reviews\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Modules\Reviews\Models\Reviews;
use App\Modules\Reviews\Models\ReviewList;
use App\Modules\Reviews\Models\ReviewResult;

class ReviewsController extends Controller
{
    protected $review;

    public function __construct(Reviews $review, ReviewList $reviewList)
    {
        $this->review = $review;
        $this->reviewList = $reviewList;
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
}
