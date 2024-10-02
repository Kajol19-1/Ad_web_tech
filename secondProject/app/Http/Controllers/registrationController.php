<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registrationController extends Controller
{
    //
    public function create(){
        return view('pages.registers.create');
    }

    public function createSubmit(Request $request){

        $var = new Register();
        $var->name = $request->name;
        $var->phone = $request->phone;
        $var->password = md5($request->password);
        $var->save();
        return "Added";
    }

    public function list(){

        $registers = Register::all();
        return view('pages.registers.list')->with('registers',$registers);
    }

//     public function teacherCourses(){

//         $t = Teacher::where('id',1)->first();
//         //hasmany
//         // return $t->courses;

//         //eloquent
//         return $t->assignedCourses();
//     }
// 
}
