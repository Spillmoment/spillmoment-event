<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> --}}
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="shortcut icon" href="https://cdn.spillmoment.id/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/vendor/owl-carousel/assets/owl.theme.default.min.css">
</head>

<body>
    <div id="app">
        @include('components.header')

        @yield('content')

        @include('components.footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/vendor/owl-carousel/owl.carousel.min.js"></script>
    @stack('script')
</body>

</html>
