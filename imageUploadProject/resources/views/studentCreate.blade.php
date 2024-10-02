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

                <form action="{{route('uploadImage')}}" method="POST" enctype="multipart/form-data">

                @csrf

                    <div class="mb-3">
                    <label for= "">Name</lable>
                    <input tyoe="text" name="name" required class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Upload Image</label>
                        <input type="file" name="image" required class="form-control">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection