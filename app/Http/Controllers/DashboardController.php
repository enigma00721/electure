<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
     public function index()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        // coordinator
        if(Auth::user()->role == 'coordinator'){
            return view('coordinator.index');   
        }
        // teacher
        if(Auth::user()->role == 'teacher'){
            return view('teacher.index');
        }
        // student
        if(Auth::user()->role == 'student'){
            return view('student.index');
        }
    }
}
