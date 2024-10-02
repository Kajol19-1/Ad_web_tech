<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //

    public function Login(){

        return view('pages.login');
    }
    public function loginSubmit(Request $request){
        $register = Register::where('phone',$request->phone)
                            ->where('password',md5($request->password))
                            ->first();
        if($register){
            $request->session()->put('user',$register->name);
            return redirect()->route('registerDash');
        }

        return back();

    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}
