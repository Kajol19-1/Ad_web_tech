<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    // Function to return the form view

    public function Home(){
        return view('home');
    }
    public function Store(){
        return view('studentCreate');
    }

    // Function to handle the file upload and saving student data
    public function StoreImage(Request $request)
    {
        

        // Create a new student model instance
        $stds = new StudentModel();
        $stds->name = $request->input('name');

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // Get file extension
            $filename = time() . '.' . $extension; // Create a unique filename
            $file->move('uploads/students/', $filename); // Move the file to the uploads directory
            $stds->image = $filename; // Save the filename in the database
        }

        // Save student data
        $stds->save();

        // Redirect or return a response
        return "Image uploade done";
    }

    function details(Request $req)
    {
        $stds = StudentModel::where('id', '=', $req->id)
                                ->select('id','name','image')
                                ->first();
                                
        return view('details')
                    ->with('stds', $stds);
    }

    function list()
    {
        $stds = StudentModel::all();
        return view('list')->with('stds',$stds);
    } 
}
