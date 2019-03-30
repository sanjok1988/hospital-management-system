<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Doctor;
use Alert;
use App\Viewappointment;

class AppointmentController extends Controller
{
	 protected $appointment;

	 public function __construct(Appointment $appointment){
      //$this->middleware('auth');
      $this->appointment = $appointment;
      

    }
public function store(Request $request){

      $data = $request->only(['name','address','phone','gender','dob','appointment_date','doctor_id']);
      $data['staus']="open";
      $create = $this->appointment->create($data);
      if($create){
        Alert::success('','Successfully');
        return redirect('home');
      }

    }

   public function index(){
   	$doctor = Doctor::get();
   	 $appointment = $this->appointment->get();
   	return view('appointment')->with(compact('appointment', 'doctor'));
   }




public function viewdoctor() {
   $viewdoctor = Doctor::all()->toArray();
          return view('viewdoctor')->with(compact('viewdoctor'));
  }

 
}
