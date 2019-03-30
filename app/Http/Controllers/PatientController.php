<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preception;
use App\Doctor;
use App\Appointment;
use Alert;
use App\Patient;
class PatientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     protected $preceptions;
    public function __construct(Preception $preceptions)
    {
         $this->preceptions = $preceptions;
     //   $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('patient');
    }

// view the patients details with doctor preceptions
    
    public function patients() 
    {
         $patients = Presception::join('appointment as a','a.id', 'prescreption.appointment_id')->all();

        return view('patient')->with(compact('patients'));
    }
// store the preceptions in the database
   

    public function store (Request $request) {
 
     // $patients = Patient::all();
   
    $data = Appointment::select('id','name','address','phone','gender','appointment_date')->find($request->appointment_id);
$d = $request->only('preception');

    $d['appointment_id'] = $data->id;
    $data->update(['status'=>'closed']);
        
    
      $create = $this->preceptions->create($d);
      if($create){
        Alert::success('','Successfully Added');
        return view('doctor.index')->with(compact('patients'));
      }
    }

    
}

