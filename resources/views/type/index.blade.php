@extends('layouts.app')


@section('content')
<div class="container">
    <a href="{{route('type.create')}}" class="btn btn-success">Add type</a>
    <table class="table table-striped">

    <tr>
        <th> ID </th>
        <th> Title </th>
        <th> Description </th>
        <th> Company title </th>
        <th> Show </th>
        <th> Edit </th>
        <th> Delete </th>
    </tr>

    @foreach ($types as $type)
    <tr>
        <td>{{$type->id}} </td>
        <td>{{$type->title}} </td>
        <td>{!! $type->description !!} </td>
        <td>{{$type->companyType->title}}</td>
        <td>
            <a href="{{route('type.show',[$type])}}" class="btn btn-secondary">Show </a>
        </td>
        <td>
            <a href="{{route('type.edit',[$type])}}" class="btn btn-primary">Edit </a>
        </td>
        <td>
            <form method="post" action={{route('type.destroy',[$type])}}>
                @csrf
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach

    </table>
</div>
@endsection
