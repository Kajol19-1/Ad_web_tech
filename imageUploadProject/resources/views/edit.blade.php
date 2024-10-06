@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

        
            <div class="card">
                <div class="card-header">

                    <h4>Edit Student Form</h4>

                </div>

                <div class="card-body">

                <form action="{{route('edit')}}" method="POST" enctype="multipart/form-data">

                @csrf
                <input type="hidden" name="id" value="{{$stds->id}}">

               
                <div class="mb-3">
                <label for="">Student Name</label> 
                <input type="text" value="{{$stds->name}}" name="name"> </br>
                @error('name')
                <span class="text-danger">{{$message}}</span><br>
                @enderror
                </div>

                 <!-- Display the Previous Image if Exists -->
                 @if ($stds->image)
                        <div class="mb-3">
                            <label for="">Current Image</label><br>
                            <img src="{{ asset('uploads/students/' . $stds->image) }}" alt="Student Image" style="max-width: 100px;">
                        </div>
                        @endif

                <div class="mb-3">
                <label for="">Upload New Image</label>
                <input type="file"  value="{{$stds->image}}" name="image"> </br>
                @error('image')
                <span class="text-danger">{{$message}}</span><br>
                @enderror
                </div>


                <div class="mb-3">
                <button type="submit" value= "upload" class="btn btn-success">Save</button>
                </div>

                </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection