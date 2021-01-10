<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">
    <title>TrungPhuNA</title>

    <link href="{{ mix('css/home.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
@include('components._inc_nav')
@yield('content')
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
