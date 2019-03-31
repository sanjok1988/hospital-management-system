<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
      public function index()
    {
        return view('home');
    }
    
     public function home()
    {
        return view('home');
    }
    
    public function login(){
        return view('auth.login');
    }
    public function admin () {
        return view('admin.index');
    }
    public function dashboard () {
       
         return view('admin.index');
    }
}