<head>
    <title>@yield('title')</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <meta name="csrf-token" content="{{csrf_token()}}">



    <!-- Fontfaces CSS-->
    <link href={{asset('adminAssets/css/bootstrap.css')}} rel="stylesheet"/>
    <link href={{asset('adminAssets/css/font-face.css')}} rel="stylesheet"/>
    <link href={{asset('adminAssets/vendor/font-awesome-4.7/css/font-awesome.min.css')}} rel="stylesheet"/>
    <link href={{asset('adminAssets/vendor/font-awesome-5/css/fontawesome-all.min.css')}} rel="stylesheet"/>
    <link href={{asset('adminAssets/vendor/mdi-font/css/material-design-iconic-font.min.css')}} rel="stylesheet"/>
    <link href={{asset('adminAssets/vendor/animsition/animsition.min.css')}} rel="stylesheet"/>
    <link href={{asset('adminAssets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}} rel="stylesheet"/>
    <link href={{asset('adminAssets/vendor/wow/animate.css')}} rel="stylesheet"/>
    <link href={{asset('adminAssets/vendor/css-hamburgers/hamburgers.min.css')}} rel="stylesheet"/>
    <link href={{asset('adminAssets/vendor/slick/slick.css')}} rel="stylesheet"/>
    <link href={{asset('adminAssets/vendor/select2/select2.min.css')}} rel="stylesheet"/>
    <link href={{asset('adminAssets/vendor/perfect-scrollbar/perfect-scrollbar.css')}} rel="stylesheet"/>
    <link href={{asset('adminAssets/css/theme.css')}} rel="stylesheet" media="all"/>




</head>
