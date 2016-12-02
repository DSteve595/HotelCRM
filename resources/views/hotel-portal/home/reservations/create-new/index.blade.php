@extends('hotel-portal.home.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h3 class="page-header">
                New Reservation
                <br/>
                <small>Update success!</small>
            </h3>

        </div>
    </div> <!-- / .row -->

    <!-- Dashboard: Stats -->
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Basic form</h4>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox_1" checked>
                            <label for="checkbox_1">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div> <!-- / .row -->
@endsection

@section('more-js')
    <script type="text/javascript">
        $(document).ready(function() {

            // TODO: write some js maybe?

        });
    </script>
@endsection