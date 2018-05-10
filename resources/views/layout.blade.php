<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/images/icon.png" type="image/png"/>

    <meta name="description" content="@yield('meta-description', 'We don\'t need suits to get shit done')">
    <meta name="keywords" content="tech,in,tshirt,shirt,web,agency,portfolio,laravel,mydnic">
    <meta name="author" content="My Dynamic Production SPRL">
    <meta property="og:title" content="@yield('meta-title', 'Tech In T-Shirt')"/>
    <meta property="og:url" content="@yield('meta-url', 'https://techintshirt.com')"/>
    <meta property="og:image" content="@yield('meta-image', 'https://techintshirt.com/images/facebook_poster.png')"/>
    <meta property="og:site_name" content="Tech In T-Shirt"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="@yield('meta-description', 'We don\'t need suits to get shit done')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta-title', 'Tech In T-Shirt')</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('partials.errors')
        @include('partials.flash')
        @yield('content')
        @include('partials.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}"></script>
    @include('partials.ga')
</body>
</html>
