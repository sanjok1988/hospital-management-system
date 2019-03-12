<?php

namespace App\Modules\Employees\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Modules\Employees\Models\Employees;
use App\Modules\Reviews\Models\ReviewResult;

class EmployeesController extends Controller
{
    protected $model;

    private $page = "employees";

    private $is_admin = 'false';
    private $is_hr = 'false';
    private $is_employee = 'false';

    public function __construct(Employees $model)
    {
        $this->middleware('auth');
        $this->user = Auth::user();
      
        $this->model = $model;
        
        // $this->is_admin = $this->user->hasRole('admin');
        // $this->is_hr = $this->user->hasRole('hr');
        // $this->is_employee = $this->user->hasRole('employee');
    }

    public function getEmployees()
    {
        return response()->json(DB::table("employees")->select('id', 'first_name', 'last_name')->get());
    }

    /**
     * Show Employee Table list page
     */
    public function index()
    {
        $page = "employees";
        $data = $this->model->paginate(10);
        return view("Employees::index", compact('data', 'page'));
    }

    public function create()
    {
        $page = "employees";
        $action = "create";
        return view("Employees::create", compact('page', 'action'));
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

    /**
     * Store Employee
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {
        if ($request->has('id')) {
            $find = $this->model->find($request->id);
           
            if ($find) {
                $data = $request->except('_token','id');
                $find->update($data);
            }
        } else {
            if ($this->model->create($request->except("_token"))) {
                //lets create user account for employee
             
                $user['name'] = $request->first_name;
                $user['email'] = $request->work_email;
                $user['password'] = Hash::make('last_name');

                if ($user = User::createUserAccount($user)) {
                    
                    if ($user->attachRole(Role::getIdByName('employee'))) {
                        $request->session()->flash('message', trans('words.success'));
                    } else {
                        $request->session()->flash('message', trans('words.cannot assign role'));
                    }
                } else {
                    $request->session()->flash('message', trans('words.cannot create user account'));
                }
            } else {
                $response = "cannot create employee";
            }
        }
        
        
        if ($request->ajax()) {
            return response()->json($response);
        } else {
            $request->session()->flash('message', trans('words.success'));
            if(!Auth::user()->hasRole('employee'))
            return redirect(route('employees.index'));
            else
            return redirect(route('employee.profile'));
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $page = "employees";
        $action = "edit";
        $data = $this->model->find($id);
        if ($request->ajax()) {
            return response()->json($data);
        } else {
            return view('Employees::create', compact('data', 'page', 'action'));
        }
    }
    //update
    // public function update(Request $request, $id)
    // {
    //     $data = $request->except('_token');
     
    //     if ($this->model->update($id, $data)) {
    //         $response = "success";
    //     } else {
    //         $response = "failed";
    //     }
    //     return response()->json($response);
    // }

    
    //deleting the table
    public function destroy(Request $request, $id)
    {
        if ($this->model->delete($id)) {
            $response = "success";
        } else {
            $response = "failed";
        }
        if ($request->ajax()) {
            return response()->json($response);
        } else {
            $request->session()->flash('message', trans('words.success'));
            return redirect(route('employees.index'));
        }
    }

    public function profile(){
        $page = $this->page;
        $action = "show";

        $rating = ReviewResult::where('employee_id', Employees::getIdByEmail(Auth::user()->email))->get();
        
        $data = $this->model->where('work_email', Auth::user()->email)->first();
        return view('Employees::profile', compact('data','page','action'));
    }

    
}
