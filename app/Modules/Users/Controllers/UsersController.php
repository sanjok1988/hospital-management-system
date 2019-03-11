<?php

namespace App\Modules\Users\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UsersController extends Controller
{
    protected $model;
    private $page = "users";

    public function __construct(User $user){
        $this->model = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = $this->page;
        $data = $this->model->paginate(10);
        return view("Users::index", compact('data', 'page'));
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
      
        return view("Users::create", compact('page','action'));
    }

    public function assignRole($id)
    {
        $page = $this->page;
        $action = "assignRole";
        $data = $this->model->find($id);
        $roles = Role::get();
      
        return view("Users::create", compact('data','roles','page','action'));
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
      
        return view("Users::create", compact('data','page','action'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
