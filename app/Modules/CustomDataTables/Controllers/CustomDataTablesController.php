<?php

namespace App\Modules\CustomDataTables\Controllers;

use App\User;

use Yajra\Datatables\Datatables;
use App\Modules\News\Models\News;
use App\Modules\Page\Models\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use App\Modules\Company\Models\Company;
use App\Modules\Vacancy\Models\Vacancy;
use App\Modules\Category\Models\Category;

class CustomDataTablesController extends Controller
{
    public function getAction()
    {
        App::setLocale(Cookie::get('locale'));
        $edit = trans('Vacancy::words.edit');
        $view = trans('Vacancy::words.view');
        $delete = trans('Vacancy::words.delete');
        return ['edit'=>$edit, 'view'=>$view, 'delete'=>$delete];
    }
    
    public function getCategoryDataTable()
    {
        $action = $this->getAction();
        return Datatables::of(Category::query())
        ->addColumn('action', function ($query) use ($action) {
            return '<a href="'.route("editCategory", $query->id).'" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> '.$action['edit'].'</a>
                    <a href="'.route("viewCategory", $query->id).'" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-view"></i> '.$action['view'].'</a>
                    <a href="'.route("deleteCategory", $query->id).'" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> '.$action['delete'].'</a>';
        })
        ->editColumn('id', 'ID: {{$id}}')
        ->make(true);
    }
    
    public function getNewsDataTable()
    {
        $action = $this->getAction();
        return Datatables::of(News::query())
            ->addColumn('action', function ($query) use ($action) {
                return '<a href="'.route("editNews", $query->id).'" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> '.$action['edit'].'</a>
                        <a href="'.route("viewNews", $query->id).'" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-view"></i> '.$action['view'].'</a>
                        <a href="'.route("deleteNews", $query->id).'" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> '.$action['delete'].'</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }

    public function getCompanyDataTable()
    {
        $action = $this->getAction();
        return Datatables::of(Company::query())
            ->addColumn('action', function ($query) use ($action) {
                return '<a href="'.route("editCompany", $query->id).'" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> '.$action['edit'].'</a>
                        <a href="'.route("viewCompany", $query->id).'" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-view"></i> '.$action['view'].'</a>
                         <a href="'.route("deleteCompany", $query->id).'" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> '.$action['delete'].'</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }

    public function getVacancyDataTable()
    {
        $action = $this->getAction();
      
        // $query = DB::table('vacancies as v')
        // ->join('companies as c', 'v.company_id', '=', 'c.id')
        // ->select('v.id', 'company_name', 'position', 'working_time', 'number_of_vacancies', 'salary', 'location')
        // ->get();
        $query = Vacancy::select('vacancies.id', 'company_name', 'position', 'working_time', 'number_of_vacancies', 'salary', 'location')
        ->join('companies as c', 'vacancies.company_id', '=', 'c.id')
        ->get();
       
        return Datatables::of($query)
            ->addColumn('action', function ($query) use ($action) {
                return '<a href="'.route("editVacancy", $query->id).'" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i>'.$action['edit'].'</a>
                        <a href="'.route("viewVacancy", $query->id).'" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-view"></i> '.$action['view'].'</a>
                        <a href="'.route("deleteVacancy", $query->id).'" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> '.$action['delete'].'</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }

    
    public function getPageDataTable()
    {
        $action = $this->getAction();
        return Datatables::of(Page::query())
            ->addColumn('action', function ($query) use ($action) {
                return '<a href="'.route("editPage", $query->id).'" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> '.$action['edit'].'</a>
                        <a href="'.route("viewPage", $query->id).'" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-view"></i> '.$action['view'].'</a>
                        <a href="'.route("deletePage", $query->id).'" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> '.$action['delete'].'</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }

    public function getUsersDataTable()
    {
        $action = $this->getAction();
        return Datatables::of(User::query())
            ->addColumn('action', function ($query) use ($action) {
                return '<a href="'.route("editUser", $query->id).'" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> '.$action['edit'].'</a>
                        <a href="'.route("viewUser", $query->id).'" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-view"></i> '.$action['view'].'</a>
                        <a href="'.route("deleteUser", $query->id).'" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> '.$action['delete'].'</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }
}
