@extends('hotel-portal.welcome.master')

@section('theme')
    dark
@stop

@section('content')
    <div class="search-block parallaxBg">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <h1 style="text-transform: none;">Welcome to HotelCRM, <span class="color-green">{{ \App\Utility::getFirstNameFromStr($name) }}</span></h1>
                <h3><a href="{{ @url('') }}">Click here to return home and login to your account.</a></h3>
            </div>
        </div>
    </div>
    @include('hotel-portal.welcome.footer')
@stop