<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?version:1.0"/>

    @yield('style')

</head>
<body>
<div class="container-fluid wrapper">
    <header>
        <p class="left"><a href="{{ url('/') }}" target="_blank">Visit Site</a></p>
        <p class="right">Welcome {{ Auth::user()->name }}&nbsp;[{{ Auth::user()->role->name }}]</p>
    </header>
    <div class="col-md-2 navbar">
    @include('inc.aside')
    </div>
    <div class="col-md-10">

    @yield('content')
        </div>
    @include('inc.footer')
</div>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

@yield('script')

</body>
</html>