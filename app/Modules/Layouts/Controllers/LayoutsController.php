<?php

namespace App\Modules\Layouts\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LayoutsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    public function showDashboard(){
       
        return view("Layouts::dashboard");
    }
}
