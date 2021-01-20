<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function __construct()
    {
        // return $this->middleware(['teacher'], ['except' => 'index'])
    }

    public function index(){
        return view('teacher.index');
    }
}
