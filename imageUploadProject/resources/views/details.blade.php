@extends('layouts.main')
@section('content')
<h1> Student Details</h1>
ID:  {{$stds->id}}</br>
Name: {{$stds->name}}</br>
Image:</br>
<a href="#"><img src="{{asset('uploads/students/' . $stds->image)}}" width=150 height=150 alt=""><br></a>
@endsection