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
                            <th>Name</th>
                            <th>Phone number</th>
                            <th># nights</th>
                            <th># guests</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <td>
                                    <strong></strong>
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
</div>