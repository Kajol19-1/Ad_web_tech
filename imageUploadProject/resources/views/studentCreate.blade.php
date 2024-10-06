@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

        
            <div class="card">
                <div class="card-header">

                    <h4>Student Form</h4>

                </div>

                <div class="card-body">

                <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">

                @csrf

                
                <div class="mb-3">
                <label for="">Student Name</label> 
                <input type="text" value="{{old('name')}}" name="name"> </br>
                @error('name')
                <span class="text-danger">{{$message}}</span><br>
                @enderror
                </div>

                <div class="mb-3">
                <label for="">Upload Image</label>
                <input type="file" name="image" value="{{old('image')}}"> </br>
                @error('image')
                <span class="text-danger">{{$message}}</span><br>
                @enderror
                </div>


                <div class="mb-3">
                <button type="submit" value= "Create" class="btn btn-success">Save</button>
                </div>

                </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection