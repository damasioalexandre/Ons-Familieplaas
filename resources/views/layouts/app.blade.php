<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @if(isset($title))
            {{$title}}
        @else
            Ons Familie Plaas
        @endif
    </title>

    {{-- All the JS, ever --}}
    <script src="{{asset('js/app.js')}}"></script>

    {{--Bootstrap--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    {{--CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- Meta --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--Additional SEO tags--}}
    @include('layouts.meta')
    @yield('seo')
</head>
<body class="user-body">
<div class="wrapper">
    @include('welcome')
</div>

{{-- JS --}}
@yield('scripts')
</body>
</html>
