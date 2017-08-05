<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manage</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/sb-admin.css') }}" rel="stylesheet" type="text/css">

</head>
<body style="padding-top: 0">

@include('manage.partials._nav')

<div class="content-wrapper py-3">
    <div class="container-fluid">
        @yield('content')
    </div>
</div>

<script src="{{asset('/js/app.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/sb-admin.js')}}" type="text/javascript"></script>
</body>
</html>
