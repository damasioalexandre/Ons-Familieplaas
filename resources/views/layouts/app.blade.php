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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Fonts --}}
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>

    {{-- Meta --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--Additional SEO tags--}}
    @include('layouts.meta.meta')
    @yield('seo')
</head>
<body class="user-body">
<div class="wrapper">
    <body id="page-top">
    @include('layouts.nav.app-nav')
    @yield('content')
    </body>
</div>

{{-- JS --}}
@yield('scripts')
</body>
</html>
