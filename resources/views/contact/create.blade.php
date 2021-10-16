@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Contact') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('type.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="contact_title" class="col-md-4 col-form-label text-md-right">{{ __('Contact title') }}</label>

                            <div class="col-md-6">
                                <input id="contact_title" type="text" class="form-control" name="contact_title" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact_phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="contact_phone" type="text" class="form-control" name="contact_phone" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact_address" class="col-md-4 col-form-label text-md-right">{{ __('Contact address') }}</label>

                            <div class="col-md-6">
                                <input id="contact_address" type="text" class="form-control" name="contact_address" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact_email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="contact_email" type="text" class="form-control" name="contact_email" required autofocus>
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="type_companyid" class="col-md-4 col-form-label text-md-right">{{ __('Company ID') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type_companyid">
                                    @foreach ($companies as $company)
                                        <option value="{{$company->id}}">{{$company->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}


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
@endsection
