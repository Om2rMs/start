@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.Add your offer') }}</div>

                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{route('offer.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('messages.Offer Name ar') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="{{__('messages.Offer Name')}}">
                                @error('name')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('messages.Offer Name en') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="{{__('messages.Offer Name')}}">
                                @error('name')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{__('messages.Offer Price')}}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="price" placeholder="{{__('messages.Offer Price')}}">
                                @error('price')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-md-4 col-form-label text-md-right">{{__('messages.Offer details ar')}}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="details" placeholder="{{__('messages.Offer details')}}">
                                @error('details')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="details" class="col-md-4 col-form-label text-md-right">{{__('messages.Offer details en')}}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="details" placeholder="{{__('messages.Offer details')}}">
                                @error('details')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{__('messages.Save Offer')}}
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
