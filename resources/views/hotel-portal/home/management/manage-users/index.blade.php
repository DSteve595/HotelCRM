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
    <div class="row" style="padding-left:24px">
        <div class="table-responsive">
            <table class="table" id="datatables__example">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Has administrative rights</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($hotelAgents as $hotelAgent)
                    <tr>
                        <td>
                            <strong>{{ $hotelAgent->user->name }}</strong>
                        </td>
                        <td>
                            {{ $hotelAgent->formatPrettyIsAdmin() }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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