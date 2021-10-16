@extends('layouts.app')

@section("content")
    <div class="container">

        <h2>{{$contact->id}}. {{$contact->title}}</h2>
        <p>Phone: {{$contact->phone}}</p>
        <p>Address: {{$contact->address}}</p>
        <p>E-mai: {{$contact->email}}</p>
        <p>Country: {{$contact->country}}</p>
        <p>City: {{$contact->city}}</p>
    </div>
@endsection
