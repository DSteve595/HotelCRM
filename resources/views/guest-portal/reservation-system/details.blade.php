@extends('guest-portal.reservation-system.master')
@section('theme')
    dark
@endsection

@section('content')
    <div class="header">
        <div class="container" style="height: 100px;">
            <div class="pull-right header-desc" style="margin-top: 15px;">
                <h3>HotelCRM - Search Page</h3>
            </div>
        </div><!--/end container-->
    </div>
    <style>
        #move{
            border-style:solid;
            border-width:5px;
            margin-left:20px;
            width:600px;
            height:270px;
            border-color: #161717;
            background: #1e1e1e;
        }
        #button{
            margin-left: -130px;
        }
    </style>
    <div class="search-block parallaxBg">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <h1 style="text-transform: none;"><span class="color-green"> HotelCRM</span></h1>
                <h3 about="">Enter your information</h3>

                <form method="get" action="{{ @url('booking/policies') }}"class="form-horizontal" id="move"><br>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="guests">Number of Guests:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="gues" placeholder="Guests">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nights">Number of Nights:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="nights" placeholder="Nights">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-md-8 ">
                            <input type="text" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" id="button" name="sub">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('hotel-portal.welcome.footer')
@endsection