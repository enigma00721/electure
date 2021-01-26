<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class TeacherController extends Controller
{

    public function __construct()
    {
        // return $this->middleware(['teacher'], ['except' => 'index'])
    }

    // get all teacher
    public function index(){
        $teachers = User::where('role', 'teacher')
                    ->orderBy('created_at', 'DESC')
                    ->get();

        return view('coordinator.teachers',[
            'teachers'=> $teachers
        ]);
    }

    // create new teacher
    public function store(Request $request){
        
        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|confirmed',
        ]);
            
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role'=> 'teacher',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('status', 'Teacher Creation Successful!');

        return back();
    }

    // update teacher by id
    public function update(Request $request, $id){


        dd($request->all());
        
        User::update($request->all());
        return back();
            
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'role'=> 'teacher',
        //     'password' => Hash::make($request->password),
        // ]);

        return redirect()->back()->with('status', 'Teacher Update Successful!');

        return back();
    }

    // delete teacher by id
    public function destroy($id){
        $model=User::where('id',$id)->delete();

        return redirect()->back()->with('status', 'Teacher Deletion Successful!');
    }
}
