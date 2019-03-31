<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use Alert;
use App\Viewdoctor;
use App\Viewappointment;
use App\Appointment;
use DB;
use App\Schedule;
use App\Patient;
use App\Preception;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
class DoctorController extends Controller
{
    protected $doctor;



    

    public function __construct(Doctor $doctor){
      $this->middleware('auth');
      $this->doctor = $doctor;
      

    }

    
    
   public function view() {
          return view('viewdoctor')->with(compact('doctor'));
}

    public function index()
    {
      if(Auth::user()->hasRole('doctor')){
        $doctor = $this->doctor->where('id', User::getDoctorId())->get();
      }else{
        $doctor = $this->doctor->get();
      }
       
        return view('doctor')->with(compact('doctor'));

    }

     public function add(){
     // $doctor = User::get();
      return view("adddoctor")->with(compact('doctor'));
    }

    /**
    * Store new doctor
     */
    public function store(Request $request){

      $hash = bcrypt($request->password);

    $user = User::create(['name'=>$request->name, 'email'=>$request->email, 'password'=>$hash]);

    if($user){
      DB::table('role_user')->insert(['user_id'=>$user->id, 'role_id'=>2]);
      //$user->attachRole('doctor');
    }
    $data = $request->only(['name','contact','email','address','nmc_num','specialization','gender',
      'fee']);

      $create = $this->doctor->create($data);
      if($create){
        Alert::success('message','Successfully Added');
        return redirect('doctor')->withErrors("successfully saved");
      }

    }

    public function edit($id){
         if(!empty($id)){
        $doctor = $this->doctor->find($id);
        if(isset($doctor)){
          return view('editdoctor')->with(compact('doctor'));
        }

      }
    }

     public function update(Request $request, $id){
      $data = $request->only(['name','contact','email','password','address','nmc_num','specialization','gender',
        'fee']);
      $find = $this->doctor->find($request->id);

      $create = $find->update($data);
      if($create){
        Alert::success('','Successfully Updated!');
        return redirect('doctor')->withErrors('success', 'updated successfully');
      }
    }

    public function destroy($id){
      $data = $this->doctor->find($id);
      
      if(isset($data)){
        $destroy = $data->destroy($id);
        if($destroy){

           Alert::warning('','Successfully Deleted!');

          return redirect('doctor')->withErrors("successfully saved");
        }
      }

    }


  public function viewappointment() {
            $appointment = DB::table("appointment as a")->select("a.*","d.name as doctor")
            ->join('doctor as d', 'a.doctor_id','=', 'd.id')
            ->get();
          
          return view('viewappointment')->with(compact('appointment'));
    }


// doctors types 

  public function viewneurologist($type){
   $viewneurologist = Doctor::where('specialization',$type)->get();  
    return view('Doctor_types.neurology')->with(compact('viewneurologist'));

  }


// doctor details 

  public function doctordetails($id) {
    $viewneurologist = Doctor::where('id',$id)->get(); 
    //$schedules = Schedule::all();
    $schedules = Schedule::where('doctor_id',$id)->get();
    return view('Doctor_types.doctordetails')->with(compact('viewneurologist','schedules'));
  }



// open doctor own profile

  public function profile () {
    return view('doctor.index');
  }


public function dashboard () {
    return view('doctor.index');
  }

  public function patients () {
    if(User::isDoctor()){
      $patients = Preception::join('appointment as a','a.id', 'preceptions.appointment_id')
     ->where('a.status','open')->where('a.doctor_id', User::getDoctorId())->get();
    }else{
      $patients = Preception::join('appointment as a','a.id', 'preceptions.appointment_id')
     ->where('a.status','open')->get();
    }
     
    
      return view('doctor.patients')->with(compact('patients'));
  }
  public function appointments () {
  
    if(Auth::user()->hasRole('doctor')){
          $data = DB::table("appointment as a")->select("a.*","d.name as doctor")
            ->join('doctor as d', 'a.doctor_id','=', 'd.id')
            ->where('d.id', User::getDoctorId())
            ->where('status','open')->get();
    }else if(Auth::user()->hasRole('admin')){
      $data = DB::table("appointment as a")->select("a.*","d.name as doctor")
            ->join('doctor as d', 'a.doctor_id','=', 'd.id')
            ->where('status','open')->get();
    }
    
    
            
      return view('doctor.appointment')->with(compact('data'));
    
  }

   public function preception(Request $request) {
   // dd($request->all());
   // $doctor = Doctor::find($request->doctor_id);
    //  dd($request->doctor_id);
      $appointment = Appointment::find($request->id);
    return view ('doctor.doctorpreception')->with(compact('appointment'));
  }
}
