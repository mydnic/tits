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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/css/linearicons.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div id="app">
        @include('partials.errors')
        @include('partials.flash')
        @yield('content')
        @include('partials.footer')
    </div>

    <!-- Scripts -->
    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/main.js"></script>
    @include('partials.ga')
</body>
</html>
