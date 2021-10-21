
@extends('layouts.app')


@section('content')
<div class="container">
    @if(session()->has('error_message'))
    <div class="alert alert-danger">
    {{session()->get("error_message")}}
    </div>
    @endif

    @if(session()->has('sucess_message'))
    <div class="alert alert-success">
    {{session()->get("sucess_message")}}
    </div>
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success">
    {{session()->get('success')}}
    </div>
    @endif

    <a href="{{route('company.create')}}" class="btn btn-success">Add company</a>
    <table class="table table-striped">

    <tr>
        <th> ID </th>
        <th>Company type</th>
        <th> Company title </th>
        <th> Description </th>
        <th> Logo </th>
        <th> Company phone </th>
        <th> Show </th>
        <th> Edit </th>
        <th> Delete </th>
    </tr>

    @foreach ($companies as $company)
    <tr>
        <td>{{$company->id}} </td>

        <td>
        @foreach ($company->companyTypeAll as $type)
          {{$type->title}}
        @endforeach
        </td>
        <td>{{$company->title}} </td>
        <td>{!! $company->description !!} </td>
        <td><img src="{{ $company->logo }}" alt="{{$company->title}}" width="50" height="50"></td>
        <td>{{$company->companyContact->phone}}</td>
        <td>
            <a href="{{route('company.show',[$company])}}" class="btn btn-secondary">Show </a>
        </td>
        <td>
            <a href="{{route('company.edit',[$company])}}" class="btn btn-primary">Edit </a>
        </td>
        <td>
            <form method="post" action={{route('company.destroy',[$company])}}>
                @csrf
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach

    </table>
</div>
@endsection
