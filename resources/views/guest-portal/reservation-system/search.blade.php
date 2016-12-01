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
    <div class="search-block parallaxBg">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <h1 style="text-transform: none;">Welcome to<span class="color-green"> HotelCRM</span></h1>
                <h3 about="">Search for hotel reservations here!</h3>
                <form method="post" action="search?go" id="searchForm">
                    {{ csrf_field() }}
                    <label>Start date:</label><input type="date" name="start" min="2016-12-01"><br>
                    <label>End date:</label><input type="date" name="end" min="2016-12-01"><br>
                    <input type="submit" placeholder="Search" name="submit">
                </form>

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
    <div class = "blue">
        <div class = "pricing-medium-dark">
            <table>
                <tr class ="pricing-head">
                    <th class ="col-md-1"><h3>Hotel Name</h3></th>
                    <th class ="col-md-1"><h3>Max Guests</h3></th>
                    <th class ="col-md-2"><h3>Phone Number</h3></th>
                    <th class ="col-md-2"><h3>Smoking</h3></th>
                    <th class ="col-md-2"><h3>Price Per Night</h3></th>
                    <th class ="col-md-4"><h3>Make a reservation</h3></th>
                </tr>


            </table>
        </div>
    </div>
    </div>
    </div>
    </div>


    @include('hotel-portal.welcome.footer')
@endsection