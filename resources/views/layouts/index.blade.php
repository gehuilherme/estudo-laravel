<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>??? - @yield('title')</title>

        {{-- Styles --}}
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/adminlte.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
        
        {{-- Scripts --}}
        <script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('assets/js/all.min.js') }}"></script>
    </head>

    <body class="bg-light">
        @include('layouts.navbar')

        <div class="container mt-4">
            <h1 class="mb-2 pb-2">@yield('title')</h1>
            <div class="card p-3">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>
