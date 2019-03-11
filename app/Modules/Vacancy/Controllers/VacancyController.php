<?php

namespace App\Modules\Vacancy\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Modules\BaseController;
use App\Http\Traits\UploadTrait;
use App\DataTables\VacancyDataTable;
use App\Modules\Vacancy\Repository\IVacancy;
use App\Modules\Company\Repository\ICompany;

class VacancyController extends BaseController
{
    use UploadTrait;
    protected $model;
    protected $company;
    
    public function __construct(IVacancy $model, ICompany $company)
    {
        $this->middleware('auth');
        $this->model = $model;
        $this->company = $company;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(VacancyDataTable $dataTable)
    {
        return $dataTable->render('Vacancy::index');
    }

    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = $this->company->getAll();
        return view("Vacancy::create", compact('companies')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacancy = $this->model->find($id);
        $companies = $this->company->getAll();
        return view('Vacancy::edit', compact('vacancy', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('position', 'company_id', 'working_time', 'number_of_vacancies', 'employee_form', 'salary', 'example', 'insurance', 'job_description', 'holiday_type', 'location', 'information');
        $data['image'] = $this->upload($request->file('image'));

        if ($this->model->create($data)) {
            Session::flash("message", "success");
        } else {
            Session::flash("message", "failed");
        }
        return redirect(route('indexVacancy'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only('position', 'company_id', 'working_time', 'number_of_vacancies', 'employee_form', 'salary', 'example', 'insurance', 'job_description', 'holiday_type', 'location', 'information');
        $data['image'] = $this->upload($request->file('image'));

        if ($this->model->update($id, $data)) {
            Session::flash("message", "success");
        } else {
            Session::flash("message", "failed");
        }
        return redirect(route('indexVacancy'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $vacancy = $this->model->find($id);
        $companies = $this->company->getAll();
        return view('Vacancy::show', compact('vacancy', 'companies'));
    }

    public function destroy($id)
    {
        if ($this->model->delete($id)) {
            Session::flash("message", "success");
        } else {
            Session::flash("message", "failed");
        }

        return redirect(route('indexVacancy'));
    }
}
