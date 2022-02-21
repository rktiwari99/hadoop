<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wismad @yield('title')</title>
    <x-header />
</head>
<body>
    @include('home')
    @yield('main');
</body>
<footer>
    <x-footer />
</footer>
</html>