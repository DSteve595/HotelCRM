<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>HotelCRM.Solutions | A reservation system for everyone</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ @asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/style.css') }}">
    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{ @asset('css/headers/header-default.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/footers/footer-v1.css') }}">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ @asset('plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ @asset('plugins/line-icons/line-icons.css') }}">
    <link rel="stylesheet" href="{{ @asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ @asset('plugins/owl-carousel/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ @asset('plugins/sky-forms-pro/skyforms/css/sky-forms.css') }}">
    <link rel="stylesheet" href="{{ @asset('plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css') }}">
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="{{ @asset('plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css') }}">
    <![endif]-->
    <link rel="stylesheet" href="{{ @asset('css/pages/page_search.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/theme-skins/dark.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/welcome.css') }}">
</head>
<body class="@yield('theme')">
<div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container" style="height: 100px;">
            <div class="pull-right header-desc" style="margin-top: 15px;">
                <h3>For hotels everywhere</h3>
            </div>
        </div><!--/end container-->
    </div>
    <!--=== End Header ===-->
    @yield('content')
</div>
<!--/End Wrapepr-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{ @asset('plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ @asset('plugins/jquery/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ @asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{ @asset('plugins/back-to-top.js') }}"></script>
<script type="text/javascript" src="{{ @asset('plugins/counter/jquery.counterup.min.js') }}"></script>
<!-- JS Customization -->
<script type="text/javascript" src="{{ @asset('js/custom.js') }}"></script>
@yield('additional-js')
</body>
</html>