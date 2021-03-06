<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @if(isset($title))
            {{$title}}
        @else
            Ons FamiliePlaas
        @endif
    </title>

    {{-- All the JS, ever --}}
    <script src="{{asset('js/app.js')}}"></script>

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

    @yield('styles')
    <style>
        .navbar-toggler {
            z-index: 1;
        }

        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
            }
        }
    </style>
</head>

<body id="page-top">
{{-- Nav --}}
@include('layouts.nav.app-nav')

{{-- Content --}}
@yield('content')

{{-- JS --}}
@yield('scripts')

{{--Bootstrap core JavaScript--}}
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/tether.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

{{--Plugin JavaScript--}}
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/scrollreveal.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

{{--Custom scripts for this template--}}
<script src="{{asset('js/creative.min.js')}}"></script>
</body>
</html>
