@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Company') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('company.update', [$company]) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="book_name" class="col-md-4 col-form-label text-md-right">{{ __('Company title') }}</label>

                            <div class="col-md-6">
                                <input id="company_title" type="text" class="form-control" name="company_title" value="{{$company->title}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_description" class="col-md-4 col-form-label text-md-right">{{ __('Company description') }}</label>

                            <div class="col-md-6">
                                <textarea class="summernote" cols="38" rows="5" name="company_description">{{$company->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="company_logo" class="col-md-4 col-form-label text-md-right">{{ __('Company logo') }}</label>
                            <div class="col-md-6">

                                <input id="imageurl" type="file" class="form-control" name="company_logo" >
                                <img src="{{ $company->logo }}" alt="{{$company->title}}" width="50" height="50">
                                    </div>
                                </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
@endsection
