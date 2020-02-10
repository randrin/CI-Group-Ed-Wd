<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.dashboard._head')

        @yield('style')
    </head>
    <body>

        @section('content')

        @show

        @include('layouts.dashboard._script')

        @yield('script')
    </body>
</html>
