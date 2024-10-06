
@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

        
            <div class="card">
                <div class="card-header">

                    <h4>Show all student list</h4>

                </div>

                <div class="card-body">
   
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($stds as $s)
            <tr>
                <td><a href="{{route('details',['id'=>$s->id])}}">{{$s->id}}</a></td>
                <td>{{$s->name}}</td>
                <td>{{$s->image}}</td>

                <td><a class="btn btn-success" href="/edit/{{$s->id}}/{{$s->name}}">Edit</a></td>
                <td><a class="btn btn-danger" href="{{route('delete',['id'=>$s->id])}}">Delete</a></td>
                
            </tr>
        @endforeach
    </table>
    </div>

            </div>
        </div>
    </div>
</div>

@endsection
