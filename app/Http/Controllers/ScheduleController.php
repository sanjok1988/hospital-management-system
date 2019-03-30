<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use Alert;
use DB;
use App\Doctor;

class ScheduleController extends Controller
{
	protected $schedules;

 public function __construct(Schedule $schedules){
      //$this->middleware('auth');
      $this->schedules = $schedules;
      }


// pull data from database for schedule of the doctor  
    public function schedule($id) {
       $schedules = DB::table("schedules as s")->select("s.*","d.name as doctor")
            ->join('doctor as d', 's.doctor_id','=', 'd.id')
            ->where('doctor_id',$id)->first();
          return view('schedule')->with(compact('schedules','id'));
  }   


    // manage doctor schedule form

     public function manage_schedule($id){
    	 $doctor = DB::table("doctor")->select("name as doctor")->find($id);
          $doctor=$doctor->doctor;
      return view('Doctor_schedule.manage_schedule')->with(compact('doctor','id'));
    }

 public function store(Request $request){

    $data = $request->only(['sunday','monday','tuesday','wednesday','thursday','friday','saturday','doctor_id']);
 
      $create = $this->schedules->create($data);
      if($create){
        Alert::success('','Successfully Added');
        return redirect('doctor')->withErrors("successfully saved");
      }

    }

public function edit($id) {

  if(!empty($id)){

        $schedules = $this->schedules->find($id);
   
        if(isset($schedules)){
         
          return view('Doctor_schedule.edit_schedule')->with(compact('schedules'));
        }

      }
}
   
public function update(Request $request, $id){
      $data = $request->only(['sunday','monday','tuesday','wednesday','thursday','friday','saturday']);
      $find = $this->schedules->find($request->id);

      $create = $find->update($data);
      if($create){
        Alert::success('','Successfully Updated!');
        return redirect('doctor')->withErrors("successfully saved");
      }
    }
  
}