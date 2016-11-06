<form class="sky-form page-search-form loginForm" action="{{ url('login') }}" method="post" id="loginForm">
    {{ csrf_field() }}
    @if (count($errors->login))
        <div class="input-group alert alert-danger col-xs-12 col-sm-offset-3 col-md-offset-1 col-lg-offset-2" style="max-width: 370px; margin-bottom: 10px;">
            @foreach ($errors->login->all() as $error)
                {{ $error }}<br />
            @endforeach
        </div>
    @endif

    <div class="input-group margin-bottom-20 col-sm-offset-3 col-md-offset-1 col-lg-offset-2" style="max-width: 370px;">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
    </div>

    <div class="input-group margin-bottom-20 col-sm-offset-3 col-md-offset-1 col-lg-offset-2" style="max-width: 370px;">
        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
        <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" placeholder="Password" required>
    </div>

    <div class="col-sm-offset-3 col-md-offset-1 col-lg-offset-2">
        <div class="inline-group" style="margin-bottom: 5px;">
            <label class="checkbox">
                <input type="checkbox" name="remember"><i style="border: 1px solid #555;"></i>
                <div style="font-size: 16px;">Stay signed in</div>
            </label>
        </div>
    </div>
    <button class="btn-u btn-u-lg col-xs-12 col-sm-offset-3 col-md-offset-1 col-lg-offset-2 signin-button" id="signinButton" style="max-width: 370px;">
        Sign in <i class="fa fa-sign-in"></i>
    </button>
</form>