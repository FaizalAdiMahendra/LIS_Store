<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::to('src.css.costum_1.css')}}">
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
@include('partials.header')
<div class= 'container'>
@yield('content')
</div>

@yield('scripts')
</body>
</html>