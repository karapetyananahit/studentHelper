<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Student Helper</title>

    <link href="/admin/css/fullcalendar.bundle.css" rel="stylesheet" type="text/css">

    <link href="/admin/css/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="/admin/css/prismjs.bundle.css" rel="stylesheet" type="text/css">
    <link href="/admin/css/style.bundle.css" rel="stylesheet" type="text/css">

    <link href="/admin/css/base-light.css" rel="stylesheet" type="text/css">
    <link href="/admin/css/menu-light.css" rel="stylesheet" type="text/css">
    <link href="/admin/css/brand-dark.css" rel="stylesheet" type="text/css">
    <link href="/admin/css/aside-dark.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="/img/logo_white.png">
    <style>
        :root {
            --facebook: #1094F4;
            --facebook-hover: #0166E1;
            --instagram: #D4005E;
            --instagram-hover: #BE0292;
            --telegram: #30A3E6;
            --telegram-hover: #0C7EC1;
        }
    	.cursor{
    		cursor: pointer;
    	}
        .svg-icon.__menu_arrow{
            transition: 0.2s;
        }
        .menu-item-open .svg-icon.__menu_arrow{
            transform: rotate(90deg);
        }
        td{
            vertical-align: middle!important;
        }
        .alert-light-primary{
            background-color: #d8eafb;
            border-color: #3699FF;
            color: #3699FF;
            padding: 20px;
            font-size: 20px;
        }
        .alert-light-danger{
            background-color: #fccdd2;
            border-color: #ff98a3;
            color: #F64E60;
            padding: 20px;
            font-size: 20px;
        }
        .tab-1{
            padding-left: 30px;
        }
        .tab-2{
            padding-left: 60px;
        }
        .tab-3{
            padding-left: 90px;
        }
        .tab-4{
            padding-left: 120px;
        }
        .tab-5{
            padding-left: 150px;
        }
        .main_color{
            color: #696DA9;
        }
        .variable{
            color: orange;
        }
        .comment{
            color: gray;
        }
        .bg-black{
            background: #000000;
        }
        .code{
            letter-spacing: 1.2px;
            font-weight: bold;
            overflow-x: auto;
            background: linear-gradient(45deg, #242d5b, #637ba4);
            font-size: 18px;
            color: #ffffff;
            padding: 40px 20px 20px;
            margin: 20px 0 40px;
        }
        .w400{
            min-width: 400px;
        }

        .task{
            margin-bottom: 50px;
            font-size: 18px;
        }

        .container-with-adv{
            display: flex;
            justify-content: center;
        }
        .container-content{
            width: calc(100% - 200px);
        }
        .container-adv{
            width: 250px;
            margin-top: 25px;
        }
        .container-adv a:not(:last-child){
            display: inline-block;
            margin-bottom: 20px;
        }
        /* Instagram */

        .instagram{
            background: url("/img/instagram.jpg") no-repeat;
            background-size: cover;
        }
        .instagram_opacity{
            color: #ffffff;
            padding: 50px;
            background: rgba(0,0,0,0.8);
        }
        .button_facebook{
            background: var(--facebook);
            color: var(--white);
        }
        .button_facebook:hover{
            background: var(--facebook-hover);
        }

        .button_instagram{
            background: var(--instagram);
            color: var(--white);
        }
        .button_instagram:hover{
            background: var(--instagram-hover);
        }

        .button_telegram{
            background: var(--telegram);
            color: var(--white);
        }
        .button_telegram:hover{
            background: var(--telegram-hover);
        }

        .function{
            background: #323232;
            padding: 30px 20px;
            color: white;
            border-left: 5px solid green;
        }

        @media (max-width: 600px) {
            .instagram_opacity{
                padding: 20px;
            }
        }


        /* End Instagram */

        @user
            body{
                user-select: none;
            }
        @enduser

        @media (max-width: 1150px) {
            .container-content{
                width: 100%;
            }
            .container-adv{
               display: none;
            }
        }

        @media (max-width: 991px) {
            .container-content{
                width: calc(100% - 200px);
            }
            .container-adv{
                display: block;
            }
        }

        @media (max-width: 800px) {
            .container-content{
                width: 100%;
            }
            .container-adv{
                display: none;
            }
        }
    </style>

	@stack('_styles')
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable">


    @include("layouts._partials.admin.mobile_menu")

    <div class="d-flex flex-column flex-root">

        <div class="d-flex flex-row flex-column-fluid page">

            @include("layouts._partials.admin.aside")

            @include("layouts._partials.admin.header")

        </div>

    </div>

    {{-- @include("layouts._partials.dashboard.right_toolbar") --}}
    @include("layouts._partials.admin.user_interface")
































    <script>
        var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };
    </script>
	<script type="text/javascript" src="/js/plugins/sweetalert2.all.min.js"></script>
{{--	<script type="text/javascript" src="/js/plugins/jquery.min.js"></script>--}}

    <script src="/admin/js/plugins.bundle.js"></script>
    <script src="/admin/js/prismjs.bundle.js"></script>
    <script src="/admin/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="/admin/js/fullcalendar.bundle.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="/admin/js/widgets.js"></script>
        <!--end::Page Scripts-->
    <script>
        $("#coding").keyup(function () {
            const code = $(this).val()
            $(".live").html(code)
        })
    </script>




	@stack('_js')
</body>
</html>
