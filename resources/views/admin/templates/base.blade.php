<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" sizes="96x96">
    <script src="https://cdn.tiny.cloud/1/yqgc71vzdboo9xg6kwcct3l3mn0677x4xslh5ei0zw6ebsvz/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <title>@yield('title')</title>
</head>
@if(View::hasSection('has_menu'))
    <body class="has-menu">
    @yield('content')
    </body>
@else
    <body class="pattern">
    @yield('content')
    </body>
@endif
</html>
