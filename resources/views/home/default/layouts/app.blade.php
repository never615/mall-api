<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', $_theme_info['default_title'] ?? 'Cms') | {{ $_theme_info['default_title'] ?? 'klinson' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', $_theme_info['description'] ?? 'klinson个人站')" />
    <meta name="keyword" content="@yield('keyword', $_theme_info['keyword'] ?? 'klinson,cms')" />
    <meta name="author" content="@yield('keyword', $_theme_info['author'] ?? 'klinson')" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.proxy.ustclug.org/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.proxy.ustclug.org/css?family=Nunito:200,300,400" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset($_theme_info['style_root_path'].'/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset($_theme_info['style_root_path'].'/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset($_theme_info['style_root_path'].'/css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset($_theme_info['style_root_path'].'/css/magnific-popup.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset($_theme_info['style_root_path'].'/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset($_theme_info['style_root_path'].'/css/owl.theme.default.min.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset($_theme_info['style_root_path'].'/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset($_theme_info['style_root_path'].'/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset($_theme_info['style_root_path'].'/js/respond.min.js') }}"></script>
    <![endif]-->

    @yield('styles')
</head>

<body>
<div id="app">
    @include($_theme_info['view_root_path'].'.layouts._header')

    <div class="container">
        @include($_theme_info['view_root_path'].'.layouts._message')
        @yield('content')
    </div>

    @include($_theme_info['view_root_path'].'.layouts._footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>