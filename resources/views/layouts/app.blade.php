<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','SevDot')|SevDot-关注独立开发和自由职业</title>
    <link rel="shortcut icon" type="image/x-ico" sizes="16x16" href="/favicon.ico"/>
    <meta name="author" content="sevdot(sevdot8@gmail.com)"/>
    <meta name="keywords" content="SevDot，独立开发，自由职业"/>
    <meta name="description" content="崇尚独立开发，追求自由职业，记录在独立自由上的探索。"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
@include('layouts.header')
@yield('content')
@include('layouts.footer')
</body>
</html>
