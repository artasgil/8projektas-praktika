@extends('layouts.app')

@section("content")
    <div class="container">

        <h2>{{$company->id}}. {{$company->title}}</h2>
        <p>Company description: {{$company->description}}</p>
        <img src="{{$company->logo}}" alt="{{$company->title}}" width="200" height="200">
    </div>
@endsection
