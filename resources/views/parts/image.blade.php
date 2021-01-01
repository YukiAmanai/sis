<!DOCTYPE html>
<html lang="ja">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="slick.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="slick-theme.css" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="slick.min.js"></script>
    <title>SIS</title>
</head>
<body>
<div class="viewer">
    <ul>
        <li><img src="img/photo01.jpg" width="400" height="300" alt=""></li>
        <li><img src="img/photo02.jpg" width="400" height="300" alt=""></li>
        <li><img src="img/photo03.jpg" width="400" height="300" alt=""></li>
        <li><img src="img/photo04.jpg" width="400" height="300" alt=""></li>
        <li><img src="img/photo05.jpg" width="400" height="300" alt=""></li>
    </ul>
</div><!--/.viewer-->

</body>
</html>