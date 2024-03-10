<head>
    <title>@yield('title')</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <meta name="csrf-token" content="{{csrf_token()}}">

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>

    <link href={{asset('assets/css/bootstrap.css')}} rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> Bootstrap css -->
        <!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> Main css -->

    <link href={{asset('assets/css/style.css')}} rel="stylesheet" />

        <!--<link rel="stylesheet" href="css/fontawesome-all.css"> Font-Awesome-Icons-CSS -->
    <link href={{asset('assets/css/fontawesome-all.css')}} rel="stylesheet"/>

        <!--<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" /> pop-up-box -->
    <link href={{asset('assets/css/popuo-box.css')}} rel="stylesheet"/>

        <!--  <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> menu style -->
    <link href={{asset('assets/css/menu.css')}} rel="stylesheet"/>


    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet"/>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet"/>


</head>
