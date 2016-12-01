@extends('guest-portal.reservation-system.master')

@section('theme')
    dark
@stop

@section('content')

    <div class="header">
        <div class="container" style="height: 100px;">
            <div class="pull-right header-desc" style="margin-top: 15px;">
                <h3>HotelCRM - Search Page</h3>
            </div>
        </div><!--/end container-->
    </div>
    <div class="search-block parallaxBg">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <h1 style="text-transform: none;"><span class="color-green">Room Details</span></h1>
                <h3 about="">Your room name here</h3>

                <br/><br/>

                <h3 about="">details details details</h3>
                <h3 about="">details details details</h3>
                <h3 about="">details details details</h3>
                <h3 about="">details details details</h3>
                <h3 about="">details details details</h3>


                <?php

                /*if(isset($_POST['submit']))
                    {
                        $db = mysqli_connect("localhost", "root", "root") or die("we dun fucked up");
                        $mydb = mysqli_select_db($db,"hotel-crm") or die("cant select database");
                        $result = mysqli_query($db,"SELECT * FROM hotels WHERE name LIKE '$name%'");

                        $array = [];
                        while($row=mysqli_fetch_array($result))
                            {

                                $id = $row['id'];
                                $reservations = mysqli_query($db,"SELECT * FROM reservations WHERE hotel_id LIKE $id");
                                while($res = mysqli_fetch_array($reservations)){
                                    $checkin = $res['check_in_date'];
                                    $checkout = $res['check_out_date'];
                                    if(($start>=$checkin&&$start<=$checkout)||($end>=$checkin&&$end<=$checkout)||
                                    ($start<$checkin&&$end>$checkout))
                                    {
                                        array_push($array,$res['room_id']);
                                    }
                                }

                                $numr = mysqli_num_rows($reservations);
                            }
                    */
                ?>
            </div>
        </div></div>

    </div>
    </div>
    </div>


    @include('hotel-portal.welcome.footer')
@endsection
