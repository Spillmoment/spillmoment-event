<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts.style')
    @stack('styles')
</head>

<body>
    <div id="app">

        @include('components.header')

        @yield('content')

        @include('components.footer')

    </div>

    @include('layouts.script')
    @stack('script')
</body>

</html>
