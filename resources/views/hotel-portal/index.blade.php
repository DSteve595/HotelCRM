@extends('hotel-portal.welcome.master')

@section('theme')
    dark
@stop

@section('content')
    <div class="search-block parallaxBg">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <h1 style="text-transform: none;">Welcome to <span class="color-green">HotelCRM</span></h1>
                @include('hotel-portal.welcome.login')
            </div>
        </div>
    </div>
    <div class="container content content-home">
        <div class="headline"><h2>What is HotelCRM.Solutions?</h2></div>
        <div class="row category margin-bottom-20">
            @include('hotel-portal.welcome.features')
            @include('hotel-portal.welcome.signup')
        </div>
    </div>
    @include('hotel-portal.welcome.footer')
@stop

@section('additional-js')
    <script type="text/javascript">
        function cancelEvent(evt) {
            evt = evt || window.event;
            if (evt.stopPropagation)
                evt.stopPropagation();
            evt.cancelBubble = true;
            evt.preventDefault();
        }
        function isAlphaNum(str){
            return !/[^a-zA-Z0-9]/.test(str);
        }
        function isValidEmail(email) {
            return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                    .test(email);
        }
        function displaySignUpError(errMsg) {
            $("#signUpErrorMsg").text(errMsg);
            $("#signUpError").removeClass('hidden');
            $("#signUpBtn").html('Sign up <i class="fa fa-user"></i>').prop('disabled', false);
        }
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.has-popover').popover();

            var username = document.getElementById('username');
            var password = document.getElementById('password');

            var newUsername = $("#newUsername");
            var password1 = $('#password1');
            var password2 = $("#password2");
            var name = $("#name");
            var email = $("#email");
            var phoneNumber = $("#phoneNumber");

            var loginForm = $('#loginForm');
            var signinButton = $('#signinButton');
            var signUpBtn = $("#signUpBtn");
            var signUpForm = $("#signUpForm");

            loginForm.submit(function() {
                signinButton.prop('disabled', true);
                signinButton.text('Signing in...');
            });

            signUpBtn.click(function(e) {
                cancelEvent(e);
                var err = false;
                $(this).prop('disabled', true).text('One sec...');
                var usernameStr = newUsername.val().trim();
                var nameStr = name.val().trim();
                var emailStr = email.val().trim();
                var phoneNumberStr = phoneNumber.val().replace(/[^0-9\.]/g, '');
                if (usernameStr.length < 6 || usernameStr.length > 20) {
                    displaySignUpError("Your username must be between 6 and 20 characters in length.")
                    err = true;
                }
                if (!isAlphaNum(usernameStr) && !err) {
                    displaySignUpError("Your username can only contain letters and / or numbers.")
                    err = true;
                }
                if ((password1.val().length < 6 || password1.val().length > 20) && !err) {
                    displaySignUpError("Your password must be between 6 and 20 characters in length.");
                    err = true;
                }
                if (password1.val() != password2.val() && !err) {
                    displaySignUpError("Your passwords do not match. Please try again.");
                    err = true;
                }
                if (nameStr.length == 0 && !err) {
                    displaySignUpError("Please enter your name.");
                    err = true;
                }
                if ((phoneNumberStr.length < 10 || phoneNumberStr.length > 11) && !err) {
                    displaySignUpError("That does not look like a valid phone number.");
                    err = true;
                }
                if (emailStr.length == 0 && !err) {
                    displaySignUpError("Please enter your email address.");
                    err = true;
                }
                if (!isValidEmail(emailStr) && !err) {
                    displaySignUpError("Your email address does not look valid. Please try again.");
                    err = true;
                }
                if (err == false) {
                    $("#signUpError").addClass('hidden');

                    $.post('{{ @url('sign-up/verify-new-user') }}', { username: usernameStr, email: emailStr })
                            .done(function(result) {
                                if (result == -1) {
                                    displaySignUpError("That username has already been taken.");
                                }
                                else if (result == 0) {
                                    displaySignUpError("That email address has already been taken.");
                                }
                                else if (result == 1) {
                                    signUpForm.submit();
                                }
                            });
                }
            });

        });
    </script>
@stop