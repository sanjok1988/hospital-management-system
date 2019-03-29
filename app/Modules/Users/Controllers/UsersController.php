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

    public function store(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',

            'email' => 'required|email|unique:users,email',

            'password' => 'required|same:confirm-password',

            'roles' => 'required'

        ]);

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);

        $user->attachRole($request->input('roles'));
        return redirect('users.create');
    }




        /**

        * Show the form for editing the specified resource.

        *

        * @param  int  $id

        * @return \Illuminate\Http\Response

        */

        public function getRole($id)

        {

          $user = User::find($id);

          $roles = Role::lists('display_name','id');

          $userRole = $user->roles->lists('id')->toArray();


          return response()->json($userRole);

        }


        /**

        * Update the specified resource in storage.

        *

        * @param  \Illuminate\Http\Request  $request

        * @param  int  $id

        * @return \Illuminate\Http\Response

        */

        public function update(Request $request)

        {

            $this->validate($request, [

                'name' => 'required',

                'email' => 'required|email|unique:users,email,'.$request->id,

                'password' => 'same:confirm-password',

                'roles' => 'required'

            ]);


            $input = $request->all();

            if(!empty($input['password'])){

                $input['password'] = Hash::make($input['password']);

            }else{

                $input = array_except($input,array('password'));

            }


            $user = User::find($request->id);

            $user->update($input);

            DB::table('role_user')->where('user_id',$request->id)->delete();

            $user->attachRole($request->input('roles'));

            return response()->json($user);

          }

    /*
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy(Request $request)
    {

        if($request->ajax()){
            $success = $this->user->find($request->id)->delete();

            if($success){
                return response()->json($success);
            }else{
                return response()->json($success);
            }

        }else{
            return response()->json($success);
        }
    }

}
