<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    @include('layouts.incs.links')


    <!-- Custom Google Fonts-->

    <!-- Page Title -->
    <title>@yield('title', 'Your Default Title')</title>

</head>
<body class="">
@include('layouts.incs.header')

<!-- Main Section-->
<section class="mt-0 overflow-hidden ">
    @yield('content')
</section>
<!-- / Main Section-->
<!-- Theme JS -->
<!-- Vendor JS -->
@include('layouts.incs.scripts')
</body>

</html>
