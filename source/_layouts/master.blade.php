<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ARC</title>
    <meta name="description" content="ARC - Autoridade Reguladora para a Comunicação Social">
    <meta name="keywords" content="arc, autoridade reguladora, comunicação social">
    <link rel="stylesheet" type="text/css" href="{{ $page->baseUrl . '/css/font-awesome.min.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ $page->baseUrl . '/css/bootstrap.min.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ $page->baseUrl . '/css/style.css' }}">
</head>
<body>
    <!--Navigation bar-->
        @include('_partials.nav')
    <!--/ Navigation bar-->


    <!-- Content -->
        @yield('content')
    <!--/ Content -->

    <!-- Footer -->
        @include('_partials.footer')
    <!--/ Footer-->

    <!-- Scripts -->
        @include('_partials.scripts')
    <!--/ Scripts -->
</body>
</html>