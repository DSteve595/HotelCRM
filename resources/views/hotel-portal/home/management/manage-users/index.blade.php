@extends('hotel-portal.home.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h3 class="page-header">
                Manage users
                <br/>
                <small>See and edit accounts for your hotel's employees</small>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class="table-responsive">
                @include('hotel-portal.home.management.manage-users.users-table')
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            @if (auth()->user()->hotelAgent->is_admin)
                @include('hotel-portal.home.management.manage-users.edit-users')
            @endif
        </div>
    </div>
@endsection

@section('more-js')
    <script type="text/javascript">
        $(document).ready(function() {

            // TODO: write some js maybe?

        });
    </script>
@endsection