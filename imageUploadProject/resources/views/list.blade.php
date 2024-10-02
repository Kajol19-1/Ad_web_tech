
@extends('layouts.main')
@section('content')


<h1>Show all student list:</h1>
   
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
        </tr>
        @foreach($stds as $s)
            <tr>
                <td><a href="{{route('details',['id'=>$s->id])}}">{{$s->id}}</a></td>
                <td>{{$s->name}}</td>
                <td>{{$s->image}}</td>
            </tr>
        @endforeach
    </table>
@endsection
