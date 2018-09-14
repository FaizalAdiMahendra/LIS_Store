<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    @isset($title)
            {{ $title }} | 
        @endisset
        {{ config('app.name') }}
    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('styles')
</head>
<body>

@yield('content')
@yield('scripts')
</body>
</html>