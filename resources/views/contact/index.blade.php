@extends('layouts.app')


@section('content')
<div class="container">
    <a href="{{route('contact.create')}}" class="btn btn-success">Add Contact</a>
    <table class="table table-striped">

    <tr>
        <th> ID </th>
        <th> Contact title </th>
        <th> Phone </th>
        <th> Address </th>
        <th> E-mail </th>
        <th> Counrty </th>
        <th> City </th>

        <th> Show </th>
        <th> Edit </th>
        <th> Delete </th>
    </tr>

    @foreach ($contacts as $contact)
    <tr>
        <td>{{$contact->id}} </td>
        <td>{{$contact->title}}</td>
        <td>{{$contact->phone}} </td>
        <td>{{$contact->address}} </td>
        <td>{{$contact->email}} </td>
        <td>{{$contact->country}} </td>
        <td>{{$contact->city}} </td>

        <td>
            <a href="{{route('contact.show',[$contact])}}" class="btn btn-secondary">Show </a>
        </td>
        <td>
            <a href="{{route('contact.edit',[$contact])}}" class="btn btn-primary">Edit </a>
        </td>
        <td>
            <form method="post" action={{route('contact.destroy',[$contact])}}>
                @csrf
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach

    </table>
</div>
@endsection
