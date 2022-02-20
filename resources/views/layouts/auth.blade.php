<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @stack('script')
</body>
</html>
