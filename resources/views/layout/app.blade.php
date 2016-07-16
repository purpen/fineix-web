<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title')Fineix</title>
    <link rel="stylesheet" href="{{ elixir('assets/css/base.css') }}">

    @yield('partial_css')
    
    <style type="text/css">
        @yield('customize_css')

    </style>
    
</head>
<body id="app-layout">
    
    @yield('header')

    @yield('content')
    
    @yield('footer')

    <script src="{{ ('build/assets/js/jquery.min.js') }}"></script>
    <script src="{{ ('build/assets/js/swiper.min.js') }}"></script>
    <script src="{{ elixir('assets/js/base.js') }}"></script>
    @yield('partial_js')
    <script type="text/javascript">
        @yield('customize_js')
    </script>
</body>
</html>

