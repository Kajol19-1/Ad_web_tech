<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function pageCheck(){
        return view('pages.home');
    }

    public function pageData(){
        $title = "Hello";
        $des = "This is a description";

        $data = [
            'itemOne' => 'Mobile',
            'itemTwo' => 'Laptop'
        ];

        $names = ['Mr-x', 'Mr-y'];

       // return view('helloPage2', compact('title','des'));
     //  return view('helloPage2')->with('data', $data);
     return view('helloPage2', [
     'names' => $names]);
    }
}
