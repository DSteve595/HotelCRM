@extends('guest-portal.reservation-system.master')
@section('theme')
    dark
@endsection
@section('content')
    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                <i class="ion ion-cash" style="padding: 0; margin: 0;"> </i> Enter payment details
                            </h3>
                        </div>
                        <div class="box-body">
                            <form id="payment-form" action="https://itextblast.com/home/handle-payment" method="post">
                                <select class="form-control" name="itemPurchased" style="width: 240px;">
                                    <option value="1001">1000 text credits - $10</option>
                                    <option value="1002">2000 text credits - $20</option>
                                    <option value="1004">4000 text credits - $40</option>
                                    <option value="1008">8000 text credits - $80</option>
                                    <option value="1015">15000 text credits - $150</option>
                                    <option value="1030">30000 text credits - $300</option>
                                    <option value="1050">50000 text credits - $500</option>
                                </select>
                                <div class="form-group">
                                    <label><br />Credit card number</label>
                                    <input type="text" size="20" maxlength="20" autocomplete="off" id="card-number" data-stripe="number" class="form-control card" autocomplete="off" placeholder="#### #### #### ####" style="width: 240px;"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" size="4" maxlength="4" autocomplete="off" id="card-cvc" data-stripe="cvc" class="form-control card" autocomplete="off" placeholder="CVC" style="width: 30%;"/>
                                </div>
                                <div class="form-group">
                                    <label>Expiration (MM/YYYY)</label><br />
                                    <input type="text" size="2" maxlength="2" id="card-month" data-stripe="exp-month" class="form-control card" placeholder="##" autocomplete="off" style="width: 50px; display:inline-block;"/>
                                    <span> / </span>
                                    <input type="text" size="4" maxlength="4" id="card-year" data-stripe="exp-year" class="form-control card" placeholder="####" autocomplete="off" style="width: 70px; display:inline-block;"/>
                                </div>
                                <div class="form-group">
                                    <strong>
                                        <div class="alert alert-danger payment-errors hidden" style="padding: 5px; margin-bottom: 10px;">
                                            Your card number is incorrect
                                        </div>
                                    </strong>
                                    <button type="submit" class="btn btn-success col-xs-12" id="submitPaymentBtn" style="margin-bottom: 5px;">
                                        <div style="font-size: 18px;">
                                            <i class="fa fa-shopping-cart"></i> Submit payment
                                        </div>
                                    </button>
                                    <button type="reset" class="btn btn-danger col-xs-12" style="margin-bottom: 5px;">
                                        <div style="font-size: 18px;">Reset</div>
                                    </button>
                                </div>
                                <input type="hidden" name="_token" value="oDVRc1OXTwAcXrn0Nk4745U0Cg8wlvmuVwucHILB">                        </form>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>


    <div class="header">
        <div class="container" style="height: 100px;">
            <div class="pull-right header-desc" style="margin-top: 15px;">
                <h3>HotelCRM - Search Page</h3>
            </div>
        </div><!--/end container-->
    </div>
    <style>
        #body{
            border:20px solid#1e1e1e;
            background:#1e1e1e;
            height:100%;
            width:120%;
            margin-left: -50px;
        }
    </style>
    <div class="search-block ">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <h1 style="text-transform: none;"><span class="color-green"> HotelCRM</span></h1>
                <h3 about="">Terms and Conditions</h3>
                <div id="body">
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    This is where I will put the terms and conditions.
                    <form method="get" action="payment?go"><br>

                        <input type="checkbox" placeholder="I agree to the terms and conditions" id="yes">
                        <label>I agree to the terms and conditions</label><br><br>
                        <button type="button" class="btn btn-default" id="acceptTermsBtn">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    @include('hotel-portal.welcome.footer')
@endsection

@section('additional-js')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        Stripe.setPublishableKey({{ env('STRIPE_PK_KEY') }});

        $(function() {
            var $form = $('#payment-form');
            $form.submit(function(event) {
                // Disable the submit button to prevent repeated clicks:
                $('#submitPaymentBtn').prop('disabled', true);

                // Request a token from Stripe:
                Stripe.card.createToken($form, stripeResponseHandler);

                // Prevent the form from being submitted:
                return false;
            });
        });
        function stripeResponseHandler(status, response) {
            // Grab the form:
            var $form = $('#payment-form');

            if (response.error) { // Problem!

                // Show the errors on the form
                $form.find('.payment-errors').text(response.error.message).removeClass('hidden');
                $('#submitPaymentBtn').prop('disabled', false); // Re-enable submission

            } else { // Token was created!
                $form.find('.payment-errors').addClass('hidden');
                // Get the token ID:
                var token = response.id;

                // Insert the token ID into the form so it gets submitted to the server:
                $form.append($('<input type="hidden" name="stripeToken">').val(token));

                // Submit the form:
                $form.get(0).submit();
            }
        };
        $(document).ready(function() {
            var acceptTermsBtn = $("#acceptTermsBtn");
            var paymentModal = $("#paymentModal");

            acceptTermsBtn.click(function() {
                paymentModal.modal('show');
            });
        })
    </script>
@endsection