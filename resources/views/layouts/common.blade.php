<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SIS</title>
        <!-- cssをインポート -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link href="slick/slick-theme.css" rel="stylesheet" type="text/css">
        <link href="slick/slick.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    
    </head>
    <body>
        @include('parts.header')

        <script src="js/top.js"></script>
       
        @yield('content')
        <footer class="footer bg-dark  fixed-bottom">
            @include('parts.footer')          
        </footer>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>