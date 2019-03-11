<?php

namespace App\Modules\Attendance\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Modules\Attendance\Models\Attendance;
use Illuminate\Support\Facades\Auth;


class AttendanceController extends Controller
{

    public function __construct(Attendance $attendance){
        $this->middleware('auth');
        $this->model = $attendance;
    }

    public function index()
    {
        $now = Carbon::now();
        
        $data = $this->model
        ->select('e.first_name','e.middle_name', 'e.last_name', 'attendance.*')
        ->join('employees as e', 'e.id', '=', 'attendance.employee_id')
        ->whereDay('attendance.created_at', $now->day)->whereYear('attendance.created_at', $now->year)->paginate(10);       
        
        return view("Attendance::index", compact('data'));
    }

    public function myattendance(){
        $now = Carbon::now();
        
        $data = $this->model
        ->select('e.first_name','e.middle_name', 'e.last_name', 'attendance.*')
        ->join('employees as e', 'e.id', '=', 'attendance.employee_id')
        ->whereDay('attendance.created_at', $now->day)
        ->whereYear('attendance.created_at', $now->year)
        ->where('employee_id', Auth::user()->id)
        ->paginate(10);
        
        
        return view("Attendance::my", compact('data'));
    }

    public function getData()
    {
        $now = Carbon::now();
        
        $data = $this->model
        ->select('e.first_name','e.middle_name', 'e.last_name', 'attendance.*')
        ->join('employees as e', 'e.id', '=', 'attendance.employee_id')
        ->whereDay('attendance.created_at', $now->day)->whereYear('attendance.created_at', $now->year)->paginate(10);
        
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
     * Fetch present Employees
     * Fetch All Employees
     * Difference is Absent Employees
     *
     * @return void
     */
    public function getAbsentEmployees(){
        $now = Carbon::now();
       
        // $data = DB::table('employees as e')
        // ->select('e.first_name','e.middle_name', 'e.last_name', 'a.*')
        // ->leftJoin('attendance as a', 'a.employee_id', '=', 'e.id')
        
        // ->whereNull('a.employee_id')
        // ->paginate(10);

        // $att = DB::table('attendance')->whereDay('attendance.created_at', $now->day)->whereYear('attendance.created_at', $now->year)->get();
        // $data = DB::table('employees as e')->whereNotExists($att)->paginate(10);
        // $data = DB::table('employees as e')->select('first_name')
        // ->whereNotExists($att)->paginate(10);

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
     * Employee Sign In Function
     * Check is already sign in
     * If not record current time
     * Employee can only sign in with current date
     * @return void
     */
    public function signIn(Request $request){
        $uid = Auth::user()->id;

        if(Attendance::get_signed_id()) {
            if(Attendance::is_signout())
            $request->session()->flash('message', "You have already sign out. Please sign in tomorrow");
            else
            $request->session()->flash('message', "You have already sign in. Please sign out if you want to leave!");
            return redirect(route('attendance.index')); 
        }

        if($uid){
            $current_time = Carbon::now()->toDateTimeString();
            $data = [
                'employee_id' => $uid,
                'time_in' => $current_time,
                'time_out' => $current_time
            ];
            $this->model->create($data);
            $request->session()->flash('message', "successfully Recorded. Thank you!");
            return redirect(route('attendance.index'));
        }else{
            return redirect(route('attendance.index'));
        }
    }

    /**
     * Employee signout
     * Check is already sign in
     * If not first sign in message
     * If already signned in Update with sign in id
     * If Employee forget to signout today, he cannot signout in following days for today
     * @return void
     */
    public function signOut(Request $request){
        $uid = Auth::user()->id;
        
        if($uid){
        
            if($sid = Attendance::get_signed_id()){
                $current_time = Carbon::now()->toDateTimeString();
                $data = [
                    'employee_id' => $uid,               
                    'time_out' => $current_time
                ];
                $find = $this->model->find($sid);
                //if already sign out then do not allow to signout again
                if($find->time_in != $find->time_out) {
                    $request->session()->flash('message', "Already Sign out. You cannot sign out again. Thank you!");
                    return redirect(route('attendance.index'));
                }
                if($find->update($data)){
                    $request->session()->flash('message', "successfully Recorded. Thank you!");
                    return redirect(route('attendance.index'));
                } else {
                    return "signout process failed";
                }
               
            } else {
                $request->session()->flash('message', "Sign in first!");
                return redirect(route('attendance.index')); 
            }
            
        }else{
            return redirect(route('attendance.index'));
        }
    }

    /**
     * Check if Employee is late
     */
    public function is_late_sign_in() {

    }
    /**
     * Fetch late time
     */
    public function get_late_period() {

    }

    /**
     * Is Signout early
     */
    public function is_eary_sign_out() {

    }

}
