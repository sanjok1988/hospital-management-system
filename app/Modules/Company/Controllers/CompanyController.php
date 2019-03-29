<?php

namespace App\Modules\Company\Controllers;

use Session;
use Illuminate\Http\Request;

use App\Http\Traits\UploadTrait;
use App\Http\Controllers\Controller;
use App\Modules\Company\Models\Company;

class CompanyController extends Controller
{
    use UploadTrait;

    protected $model;
    protected $page = "company";

    public function __construct(Company $model)
    {
        $this->middleware('auth');
        $this->model = $model;
    }

    public function index(){
        $page = $this->page;
        $data = $this->model->paginate(10);
        return view('Company::index', compact('page', 'data'));
    }

    public function getData()
    {
        
        $data = $this->model->paginate(10);
        
        $response = [
            'pagination' => [
                'total' => $data->total(),
                'per_page' => $data->perPage(),
                'current_page' => $data->currentPage(),
                'last_page' => $data->lastPage(),
                'from' => $data->firstItem(),
                'to' => $data->lastItem()
            ],
            'data' => $data
          

        ];
        return response()->json($response);
    }

    public function store(Request $request)
    {   if($request->has('id')){
        $data = $this->model->find($request->id);
            if ($this->model->update($request->only('name', 'details'))) {
                Session::flash('message', 'success');
            } else {
                Session::flash('message', 'failed');
            }
        } else {
            if ($this->model->create($request->only('name', 'details'))) {
                Session::flash('message', 'success');
            } else {
                Session::flash('message', 'failed');
            }
        }
        
        return redirect(route('company.index'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = $this->page;
        $action = "create";
      
        return view("Company::create", compact('page','action'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = $this->page;
        $action = "edit";
        $data = $this->model->find($id);
      
        return view("Company::create", compact('data','page','action'));
    }



    //update
    public function update(Request $request, $id)
    {

       // dd($request->all());
        $company = $request->except('_token');
        //$company['image'] = $this->upload($request->file('image'));

        if ($this->model->update($id, $company)) {
            Session::flash('message', 'success');
        } else {
            Session::flash('message', 'failed');
        }
        return redirect(route('company.index'));
    }

      public function show($id)
    {
        $companies  = $this->model->find($id);


        return view('Company::show', compact('companies'));
    }
    //deleting the table
    public function destroy($id)
    {
        if ($data = $this->model->find($id)) {
            $data->delete();
            Session::flash('message', 'success');
        } else {
            Session::flash('message', 'failed');
        }
        return redirect(route('company.index'));
    }
}
