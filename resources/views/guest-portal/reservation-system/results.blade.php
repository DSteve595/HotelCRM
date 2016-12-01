@extends('guest-portal.reservation-system.master')
@section('theme')
    dark
@endsection

@section('content')
    <div class="header">
        <div class="container" style="height: 100px;">
            <div class="pull-right header-desc" style="margin-top: 15px;">
                <h3>HotelCRM - Results Page</h3>
            </div>
        </div><!--/end container-->
    </div>
    <style>
        button{
            margin-left: -10px;
        }
    </style>
    <div class="search-block">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <h1 style="text-transform: none;"><span class="color-green"> HotelCRM</span></h1>
                <h3 about="">Rooms Available</h3>
                <table class="table">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Room #</th>
                        <th>Max Guests</th>
                        <th>Smoking</th>
                        <th>Price Per Night</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($rooms as $room)
                        <tr>
                            <th scope="row">{{  $room->id }}</th>
                            <td>{{$room->max_guests }}</td>
                            <td>{{$room->is_smoking }}</td>
                            <td>{{$room->nightly_price}}</td>
                            <td id="button">
                                <form method="get" action="{{ @url('booking/details') }}" id="reserve">
                                    <input type="hidden" name="room_id" value="{{$room->id}}">
                                    <input type="submit" name="sub" placeholder="Reserve">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('hotel-portal.welcome.footer')

@endsection
@section('additional-js')

@endsection