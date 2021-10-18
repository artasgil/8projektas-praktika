@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Company') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="company_title" class="col-md-4 col-form-label text-md-right">{{ __('Company title') }}</label>

                            <div class="col-md-6">
                                <input id="company_title" type="text" class="form-control" name="company_title" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_description" class="col-md-4 col-form-label text-md-right">{{ __('Company description') }}</label>

                            <div class="col-md-6">
                                <textarea class="summernote" cols="38" rows="5" name="company_description"> </textarea>
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="company_logo" class="col-md-4 col-form-label text-md-right">{{ __('Company Logo') }}</label>
                            <div class="col-md-6">
                            <input id="imageurl" type="file" class="form-control" name="company_logo" >
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="company_contact_phone" class="col-md-4 col-form-label text-md-right">{{ __('Contact phone') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="company_contact_phone">
                                    @foreach ($contacts as $contact)
                                        <option value="{{$contact->id}}">{{$contact->phone}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
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
