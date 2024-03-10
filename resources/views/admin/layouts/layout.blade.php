<!DOCTYPE html>
<html lang="en">
@include('admin.fixed.head')

<body>


@include('admin.fixed.navigation')
@include('admin.fixed.sideNavigation')

@yield('content')


{{--@include('admin.fixed.footer')--}}


@include('admin.fixed.scripts')

</body>

</html>
