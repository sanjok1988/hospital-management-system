<?php

namespace App\Modules\Roles\Controllers;
use DB;

use Auth;
use App\Permission;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;

class RolesController extends Controller
{
    protected $role;
    function __construct(Role $role){
      $this->middleware('auth');
      $this->role = $role;
    }

    public function index(){
        $page = "roles";
        $data = Role::select('id','name','display_name','description')->orderBy('id','ASC')->paginate(10);
       
        
      return view('Roles::index', compact('data', 'roles', 'page'));
    }

    public function create(){
      $page = "roles";
      $action = "create";
      $data = Role::select('id','name','display_name','description')->orderBy('id','ASC')->paginate(10);
      $permissions = Permission::get();
      
    return view('Roles::create', compact('data', 'permissions', 'roles', 'page', 'action'));
  }

  public function edit($id){
    $page = "roles";
    $action = "edit";
    $data = $this->role->find($id);
    $old_permission =  DB::table('permission_role')->where('role_id', $id)->pluck('permission_id');
    $p = [];
    foreach($old_permission as $value){
      $p[] = $value;
    }
  
    $permissions = Permission::get();
    
  return view('Roles::create', compact('data', 'permissions', 'roles', 'page', 'action', 'p'));
}
          /**

        * Display a listing of the resource.

        *

        * @return \Illuminate\Http\Response

        */

        public function getJsonData(Request $request)

        {

          $posts = Role::select('id','name','display_name','description')->orderBy('id','ASC')->paginate(10);
          $permission = $permission = Permission::get();

         $response = [
                     'pagination' => [
                         'total' => $posts->total(),
                         'per_page' => $posts->perPage(),
                         'current_page' => $posts->currentPage(),
                         'last_page' => $posts->lastPage(),
                         'from' => $posts->firstItem(),
                         'to' => $posts->lastItem()
                     ],
                     'data' => $posts,
                     'permission' => $permission

                 ];
               return response()->json($response);

        }




        /**

        * Store a newly created resource in storage.

        *

        * @param  \Illuminate\Http\Request  $request

        * @return \Illuminate\Http\Response

        */

        public function store(Request $request)

        {

         
          $data = $request->only('name', 'display_name', 'description');
        
          //if edit
          if($request->has('id')){
            $this->validate($request, [

              'name' => 'required',

              'display_name' => 'required',


          ]);
            $role = $this->role->find($request->id);
            DB::table("permission_role")->where("permission_role.role_id",$request->id)->delete();
            $role->update($data);
          } else {
            $this->validate($request, [

              'name' => 'required|unique:roles,name',

              'display_name' => 'required'

          ]);
            $role = $this->role->create($data);
          }         

          if($request->has('permission')){
            foreach ($request->input('permission') as $key => $value) {

              $role->attachPermission($value);

            }
          }
          


          return redirect(route('roles.index'));

        }

        /**

        * Display the specified resource.

        *

        * @param  int  $id

        * @return \Illuminate\Http\Response

        */

        public function show($id)

        {

          $role = Role::find($id);

          $rolePermissions = Permission::join("permission_role","permission_role.permission_id","=","permissions.id")

              ->where("permission_role.role_id",$id)

              ->get();


          return view('admin.roles.show',compact('role','rolePermissions'));

        }



        public function getRolePermissions($id){
          $rolePermissions = DB::table("permission_role")->where("permission_role.role_id",$id)

              ->pluck('permission_role.permission_id','permission_role.permission_id');

              return $rolePermissions;
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

              'display_name' => 'required',

              'description' => 'required',

              'permission' => 'required',

          ]);


          $role = Role::find($request->id);

          $role->display_name = $request->input('display_name');

          $role->description = $request->input('description');

          $role->save();


          DB::table("permission_role")->where("permission_role.role_id",$request->id)

              ->delete();


          foreach ($request->input('permission') as $key => $value) {

              $role->attachPermission($value);

          }


          return response()->json($role);

        }

        /**

        * Remove the specified resource from storage.

        *

        * @param  int  $id

        * @return \Illuminate\Http\Response

        */

        public function destroy($id)

        {
          $user = Auth::user();
          if($user->hasRole('super')){
            $delete = DB::table("roles")->where('id',$id)->delete();
            return response()->json($delete);
          }


        }
}
