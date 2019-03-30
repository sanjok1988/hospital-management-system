<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Alert;
use App\Doctor;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $users;

    public function __construct(User $users)
    {
     //   $this->middleware('guest:admin');
        $this->users = $users;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index(){
        return view('logins');
    }

    public function view_users() {
       $users = Doctor::get();
       // $users = Admin::get();
        return view('Users.index')->with(compact('users'));
    }

    // user create

    public function create_user() {
        return view('Users.form');
    }


// store the users details in the database



    public function store(Request $request ){

       

    $data = $request->only([
        'name', 'email', 'password','doctor_id','role',
  ]);

      $create = $this->users->create($data);
      if($create){
        Alert::success('','Successfully Added');
        
        return view('Users.form')->withErrors("successfully saved");
      }

    }
}
