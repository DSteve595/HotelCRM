@extends('guest-portal.home.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">

            <h3 class="page-header">
                Account settings <small>What's up!</small>
            </h3>

        </div>
    </div> <!-- / .row -->

    <!-- Dashboard: Stats -->
    <div class="row">

    </div> <!-- / .row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Reservations today</h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table" id="datatables__example">
                            <thead>
                            <tr>
                                <th>
                                    <form action="{{ url('reservations/account-settings') }}" method = "post" id="nameBtn">
                                        {{ csrf_field() }}
                                        <h2>Change Username?</h2>
                                        <input type="text" class="form-control" name="usernameChange">
                                        <div class="input-group-btn">
                                            <button type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </th>
                                <th>
                                    <form action="{{ url('reservations/account-settings') }}" method = "post" id="pwBtn">
                                        {{ csrf_field() }}
                                        <h2>Change Password?</h2>
                                        <input type="text" class="form-control" name="password">
                                        <div class="input-group-btn">
                                            <button type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </th>
                                <th>
                                    <form action="{{ url('reservations/account-settings') }}" method = "post" id="emailBtn">
                                        {{ csrf_field() }}
                                        <h2>Change email?</h2>
                                        <input type="text" class="form-control" name="emailChange">
                                        <div class="input-group-btn">
                                            <button type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </th>
                                <th>
                                    <form action="{{ url('reservations/account-settings') }}" method = "post" id="phoneBtn">
                                        {{ csrf_field() }}
                                        <h2>Change Phone?</h2>
                                        <input type="text" class="form-control" name="phoneChange">
                                        <div class="input-group-btn">
                                            <button type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($reservations as $reservation)
                                <tr>
                                    <td>
                                        <strong>{{ $reservation->hotelGuest->name }}</strong>
                                    </td>
                                    <td>
                                        Admin
                                    </td>
                                    <td>
                                        Jan 01, 2016
                                    </td>
                                    <td>
                                        1 minute ago
                                    </td>
                                    <td>
                                        <div class="table__status online">
                                            <i class="fa fa-circle-o"></i> Online
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
@endsection

@section('more-js')
    <script type="text/javascript">
        $(document).ready(function() {

            nameBtn.click(function(e){
                var username = document.getElementById('username');



            });

            pwBtn.click(function(e) {
                var password = document.getElementById('password');
                var changedPW = ("#password");
            });

            emailBtn.click(function(e){
                var email = document.getElementById('email');
            });

            phoneBtn.click(function(e){
                var phone = document.getElementById('phoneNumber')
            });

        });
    </script>
@endsection