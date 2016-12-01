<div class="modal fade" tabindex="-1" role="dialog" id="viewReservationModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Reservation Details</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-default">
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
                                <tr>
                                    <td>
                                        <strong><span id="viewReservationModalName"></span></strong>
                                    </td>
                                    <td>
                                        <span id="viewReservationModalPhoneNumber"></span>
                                    </td>
                                    <td>
                                        <span id="viewReservationModalNights"></span>
                                    </td>
                                    <td>
                                        <span id="viewReservationModalGuests"></span>
                                    </td>
                                    <td>
                                        <div class="table__status online">
                                            <span id="viewReservationModalStatus"></span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="modalCheckInBtn" class="btn btn-success col-xs-12" style="margin-bottom: 7px;">Check in</button><br />
                <button type="button" id="modalCheckOutBtn" class="btn btn-danger col-xs-12">Check out</button>
            </div>
        </div>
    </div>
</div>