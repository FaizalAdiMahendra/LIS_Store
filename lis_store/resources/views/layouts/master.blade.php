<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('link')
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/clean-blog.min.css') }}"/>
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
<body class="text-center">
@include('partials.header')
@include('partials.header2')
<div class= 'container'>
@yield('content')
</div>
@yield('partials.footer')
@yield('scripts')
<script type="text/javascript" src="{{URL::to('js/clean-blog.min.js')}}"></script>
</body>
</html>