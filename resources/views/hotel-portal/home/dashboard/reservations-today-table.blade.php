<!-- Basic table -->
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

                        </tr>
                        @endforeach
                        <tr>
                            <td>
                                <strong>John Doe</strong>
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
                        <tr>
                            <td>
                                <strong>Mary Major</strong>
                            </td>
                            <td>
                                Moderator
                            </td>
                            <td>
                                Jun 15, 2015
                            </td>
                            <td>
                                5 days ago
                            </td>
                            <td>
                                <div class="table__status offline">
                                    <i class="fa fa-circle-o"></i> Offline
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Richard Roe</strong>
                            </td>
                            <td>
                                Moderator
                            </td>
                            <td>
                                Sep 26, 2015
                            </td>
                            <td>
                                15 minutes ago
                            </td>
                            <td>
                                <div class="table__status online">
                                    <i class="fa fa-circle-o"></i> Online
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Jane Roe</strong>
                            </td>
                            <td>
                                User
                            </td>
                            <td>
                                May 15, 2015
                            </td>
                            <td>
                                2 minutes ago
                            </td>
                            <td>
                                <div class="table__status online">
                                    <i class="fa fa-circle-o"></i> Online
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Lisa Doe</strong>
                            </td>
                            <td>
                                User
                            </td>
                            <td>
                                Jan 02, 2016
                            </td>
                            <td>
                                30 days ago
                            </td>
                            <td>
                                <div class="table__status offline">
                                    <i class="fa fa-circle-o"></i> Offline
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> <!-- / .row -->
