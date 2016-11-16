<div class="col-md-4 col-sm-12">
    <div class="section-block signUpSection">
        <div class="text-center">
            <h2><i class="fa fa-child"></i> Sign Up</h2>
            <p>Create an account in less than 2 minutes!</p>
        </div><br />
        @if (count($errors))
            <div class="input-group alert alert-danger col-xs-12" style="margin-bottom: 10px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('sign-up') }}" method="post" id="signUpForm">
            <div class="input-group">
                {{ csrf_field() }}
                <input type="hidden" name="randomStr" value="">
                <div class="alert alert-danger hidden" id="signUpError">
                    <strong>Error: </strong><span id="signUpErrorMsg">

                    </span>
                </div>
                <input type="text" class="form-control has-popover" name="newUsername" id="newUsername" value="{{ old('username') }}" placeholder="Username" style="margin-bottom: 10px;"
                       data-toggle="popover" data-placement="left" data-trigger="focus"
                       data-content="<strong>Must be between 6 - 20 characters in length and contain only letters and / or numbers.</strong>" data-html="true" required>

                <input type="password" class="form-control has-popover" name="password1" id="password1" placeholder="Password" maxlength="20"
                       style="margin-bottom: 10px;" required data-toggle="popover" data-placement="left" data-trigger="focus"
                       data-content="<strong>Must be between 6 - 20 characters in length.</strong>" data-html="true">

                <input type="password" class="form-control has-popover" name="password2" id="password2" placeholder="Confirm password"
                       maxlength="20" style="margin-bottom: 10px;" required data-toggle="popover" data-placement="left" data-trigger="focus"
                       data-content="<strong>Type in your desired password again.</strong>" data-html="true">

                <input type="text" class="form-control has-popover" name="name" id="name" value="{{ old('name') }}" placeholder="Your name" style="margin-bottom: 10px;"
                       maxlength="50" required data-toggle="popover" data-placement="left" data-trigger="focus"
                       data-content="<strong>This is how we will greet you when you login.</strong>" data-html="true">

                <input type="text" class="form-control has-popover" name="companyName" value="{{ old('company_name') }}"
                       placeholder="Company Name (optional)" maxlength="50" style="margin-bottom: 10px;" required data-toggle="popover"
                       data-placement="left" data-trigger="focus"
                       data-content="<strong>If you leave your company, you can still take your account with you.</strong>" data-html="true">

                <input type="text" class="form-control has-popover" name="phoneNumber" id="phoneNumber" value="{{ old('phoneNumber') }}"
                       placeholder="Contact phone number" maxlength="15" style="margin-bottom: 10px;" required data-toggle="popover" data-trigger="focus"
                       data-placement="left" data-html="true"
                       data-content="<strong>We will call you at this number to finalize the sign up process and will go over any questions you may have.</strong>">

                <input type="email" class="form-control has-popover" name="email" id="email" placeholder="Email address" maxlength="50"
                       value="{{ old('email') }}" style="margin-bottom: 10px;" required data-toggle="popover" data-trigger="focus" data-placement="left"
                       data-content="<strong>Must be a valid email address. We will not spam you.</strong>" data-html="true">

                <button type="button" class="btn-u btn-u btn-u-lg col-xs-12" id="signUpBtn">
                    Sign up <i class="fa fa-user"></i>
                </button>
            </div>
        </form>
    </div>
</div>