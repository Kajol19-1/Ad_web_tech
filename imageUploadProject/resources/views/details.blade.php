@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

        
            <div class="card">
                <div class="card-header">

                    

                    <h4>Student Details</h4>

                </div>

                <div class="card-body">



ID:  {{$stds->id}}</br>
Name: {{$stds->name}}</br>
Image:</br>
<a href="#"><img src="{{asset('uploads/students/' . $stds->image)}}" width=150 height=150 alt=""><br></a>




                
                </div>

            </div>
        </div>
    </div>
</div>
@endsection