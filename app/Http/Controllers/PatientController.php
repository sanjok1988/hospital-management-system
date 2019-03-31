<?php

namespace App\Http\Controllers;

use Alert;
use App\Doctor;
use App\Patient;
use App\User;
use App\Mail\Email;
use App\Preception;
use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
      
        if(User::isDoctor()){
            $patients = Appointment::where('doctor_id', User::getDoctorId())->get();
            
        }else{
            $patients = Appointment::get();
        }
        return view('patient', compact('patients'));
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

     Mail::send(new Email);
   
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

