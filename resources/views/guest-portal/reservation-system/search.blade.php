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
        #searchForm{
            border-style:solid;
            border-width:5px;
            margin-left:20px;
            width:500px;
            height:130px;
            border-color: #161717;
            background: #1e1e1e;

        }
        #start{
            width:200px;
            padding:7px;
            border:1px solid#607D8B;
        }
        #end{
            padding: 7px;
            border: 1px solid #607D8B;
            margin-left: -2px;
        }
        #sd{
            margin-left:-230px;
            word-spacing: 170px;
        }


    </style>
    <div class="search-block parallaxBg">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <h1 style="text-transform: none;">Welcome to<span class="color-green"> HotelCRM</span></h1>
                <h3 about="">Search for hotel reservations here!</h3>
                <form method="get" action="{{ @url('booking/results') }}" id="searchForm">
                    <br>
                    <label id="sd">Start: End:</label><br><input type="date" name="start" min="2016-12-01" id="start">
                    <input type="date" name="end" min="2016-12-01" id="start">
                    <input type="submit" placeholder="Search" name="search" id="end">
                    <br>
                </form>
            </div>
        </div>
    </div>


    @include('hotel-portal.welcome.footer')
@endsection