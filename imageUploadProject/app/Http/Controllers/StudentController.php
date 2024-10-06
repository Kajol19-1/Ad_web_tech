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
    public function Create(){
        return view('studentCreate');
    }

    // Function to handle the file upload and saving student data
    public function CreateSubmit(Request $request)
    {
        
        
        $this->validate($request,
             [
                "name"=>"required|max:20|regex:^[a-zA-Z\s\.\-]+$^",
                "image"=>"required|mimes:jpg,png,jpeg,gif,svg"
             ],
             [
                 "name.required"=> "Please provide the student name",
                 "name.max"=> "Name should not exceed 20 characters",
                 "name.regex"=>"Names can only include letters, spaces, periods, and hyphens. Please avoid using numbers or special characters.",
                 "image.mimes"=> "Please provide jpg,png,jpeg, gif, svg file"
             ]
            );
        // Create a new student model instance
        $stds = new StudentModel();
        $stds->name = $request->name;
        $stds->image = $request->image;

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


             //for eitd infomation

                public function edit(Request $request){
                    //return $request->id;
                    $id =$request->id;
                    $stds= StudentModel::where('id',$id)->first();
                    //return $student;
                    return view('edit')->with('stds', $stds);
                
                }


                 public function editSubmit(Request $request){
                            $this->validate($request,
                            [
                            "name"=>"required|max:20|regex:^[a-zA-Z\s\.\-]+$^",
                            "image"=>"required|mimes:jpg,png,jpeg,gif,svg"
                            ],
                            [
                                "name.required"=> "Please provide the student name",
                                "name.max"=> "Name should not exceed 20 characters",
                                "name.regex"=>"Names can only include letters, spaces, periods, and hyphens. Please avoid using numbers or special characters.",
                                "image.mimes"=> "Please provide jpg,png,jpeg, gif, svg file"
                            ]
                        );
                            // Create a new student model instance
                            $stds = new StudentModel();
                            $stds->name = $request->name;

                            $stds= StudentModel::where('id', $request->id)->first();
                            $stds->name = $request->name;


                            if ($request->hasFile('image'))
                            {
                                    $file = $request->file('image');
                                    $extension = $file->getClientOriginalExtension(); // Get file extension
                                    $filename = time() . '.' . $extension; // Create a unique filename
                                    $file->move('uploads/students/', $filename); // Move the file to the uploads directory
                                    $stds->image = $filename; // Save the filename in the database
                            }
                            $stds->save();
                            return redirect()->route('list');
   
     } 

                function delete(Request $request)
                {
                   
                    $stds = StudentModel::where('id',$request->id)->delete();
                    return redirect()->route('list');
                    
                }

                function search(Request $request)
                {
                    //return $req;
                    $stds = StudentModel::where('id',$request->SearchId)->get();
                    return view('search')->with('stds',$stds);
                }

}
