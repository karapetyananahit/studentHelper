<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Helper | @stack('_title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="keywords" content="Student Helper">
    <meta name="description" content="Student Helper | Վեբ Կայք | Դասեր | Հարցաշարեր">
    <meta property="og:image" content="https://martinelizbaryan.am/img/logo_white.png" />

    <link rel="shortcut icon" type="image/png" href="/img/logo_white.png"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">


    <link href="/css/global/main.css" rel="stylesheet">
    @stack('_styles')
</head>
<body>
{{--    @include("globals.cursor")--}}

    @include("globals.menu_desktop")

    <main>
        @yield('content')
    </main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/js/plugins/owl.js"></script>
<script src="/js/plugins/welcome.js"></script>
    <script>
        $(document).ready(function () {
            $(".__bar").click(function(){
                $("header nav").css({
                    right: 0
                })
                $("body").css({
                    overflow: "hidden"
                })
            })
            $(".close-menu").click(function(){
                $("header nav").css({
                    right: "-280px"
                })
                $("body").css({
                    overflow: "auto"
                })
            })
        })
    </script>
@stack('_js')
</body>
</html>
