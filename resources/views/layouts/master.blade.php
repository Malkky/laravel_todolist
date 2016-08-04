<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('src/css/main.css') }}">
    </head>
    <body>
        @include('includes.header')
    <div class="main">
        @yield('content')
    </div>
    </body>
 </html>