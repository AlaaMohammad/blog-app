<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <?php header("Access-Control-Allow-Origin: *"); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>


    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- React JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        * {
            font-family: Spartan, sans-serif

        }

        .navbar-brand-centered {
            font-family: 'Sacramento', cursive;
            font-weight: 900;
            font-size: 4em !important;
            padding-bottom: 100px !important;
            position: absolute;
            left: 40%;
            top: 25px;
            width: 160px;
            text-align: center;
        }

        .navbar > .container .navbar-brand-centered,
        .navbar > .container-fluid .navbar-brand-centered {
            margin-left: -80px;
        }

        .navbar {
            margin-bottom: 100px !important;
            padding: 3.5rem 1rem !important;
        }

        .custom-elements-wrap {
            margin-top: 8vh;
            margin-bottom: 8vh;
            justify-content: center;
        }

        .custom-element {
            box-sizing: border-box;
            max-width: 400px;
            padding: 0 30px 5vh;
            text-align: center;
            flex: 1 0 33.333%;
        }

        .custom-element img, .custom-element .no-image {
            border-radius: 100%;
        }

        .custom-element img, .custom-element .no-image {
            width: 200px;
            height: 200px;
            margin-bottom: 2vh;
            padding: 10px;
            border: 1px dashed #9ea1a4;
        }

        .custom-element.bottom {
            max-width: 210px;
            padding-bottom: 4vh;
            flex-basis: 20%;
        }

        .custom-element.bottom img, .custom-element.bottom .no-image {
            width: 130px;
            height: 130px;
        }

        .custom-element.bottom h2 {
            font-size: 20px;
            font-weight: 700;
        }

        .custom-element h2 {
            font-weight: 700;
        }

        .global-image img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .global-underline:hover {
            background-size: 97% 40%;
        }

        .global-underline {
            padding-bottom: .2%;
            transition: background-size .6s ease-out;
            background: linear-gradient(#00e6cb, #00e6cb) no-repeat left 123%/0 40%;
        }

        .item-image::before {
            background-color: #00e6cb
        }

        .content-item h2 {
            font-weight: 700;

        }

        .content-item p {
            font-weight: 700;

        }

        .custom-image {
            width: 450px;
            height: 750Px
        }

        .global-bg-image {
            background: no-repeat center center/cover;
        }

        .custom-content form {
            position: relative;
            width: 100%;
            margin-bottom: 5vh;
        }


        .custom-logo, .custom-content, .custom-content input, .custom-content textarea {
            box-sizing: border-box;
        }

        .custom-content form {
            position: relative;
            width: 100%;
            margin-bottom: 5vh;
        }

        .custom-content h1, .custom-content h2 {
            font-size: 30px;
            margin: 0 0 4vh -2px;
            padding: 0;
        }

        .custom-content input {
            padding-left: 15px;
            transition: background-color .15s ease;
            word-break: break-all;
            background-color: rgb(241, 241, 241);
        }

        .custom-content h1, .custom-content h2 {
            font-size: 30px;
            margin: 0 0 4vh -2px;
            padding: 0;
        }

        .custom-content input, .custom-content textarea {
            font-size: 16px;
            display: block;
            width: 100%;
            margin: 10px 0 3vh;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
        }

        .custom-container {
            padding: 10% 10% 0 10%;
            width: 60%;
        }

        .item {
            max-width: 50%;
            margin-top: 12vh;
            padding-top: 0;
            padding-bottom: 0;
            flex: 1 0 50%;
        }

        .item-container {
            position: relative;
            max-width: 100%;
        }

        .story-item-container {
            position: relative;
            max-width: 100%;
            margin-bottom: 70px;
        }


        .item-content {
            width: 100%;
            padding: 10px 0 10px 5%;
        }

        .item-title {
            font-size: 30px;
            width: 100%;
            margin: 0 0 2vh -2px;
        }

        .item-excerpt {
            font-size: 13px;
            font-weight: 300;
            line-height: 1.6;
            width: 95%;
            max-width: 400px;
            margin-top: 0;
            margin-bottom: 0;
            padding: 5px 0 10px;
        }

        .is-hero {
            margin-bottom: 70px;
            font-weight: 900;
            font-size: 75px;
            max-width: 1000px;
            margin-left: -4px;
        }

        .post-content {
            max-width: 700px;
            margin: 0 auto 15vh;
        }

        .post-content p {
            line-height: 1.75;
            position: relative;
        }

        .post-header.is-hero {
            margin-bottom: 8vh;
            -webkit-animation: slideTopLoop .8s ease;
            animation: slideTopLoop .8s ease;
        }

        item.is-hero {
            max-width: 100%;
            margin-top: 10vh;
            padding: 50px 0;
            flex-basis: 100%;
        }

        .item {
            max-width: 50%;
            margin-top: 12vh;
            padding-top: 0;
            padding-bottom: 0;
            flex: 1 0 50%;
        }

        .item-container {
            position: relative;
            max-width: 100%;
        }

        .item, .item-container {
            box-sizing: border-box;
        }

        .loop-wrap, .item-container {
            display: flex;
        }

        .story-item-container::before {
            content: '';
            position: absolute;
            width: 100%;
            max-width: 491px;
            z-index: -2;
            top: -6vh;
            right: -160px;
            bottom: -4vh;
            max-width: 59.7%;
            opacity: 0.5;
            background-image: radial-gradient(#141c3a 6%, transparent 0);
            background-size: 28px 28px;
        }

        .item-image {
            top: 0;
            right: -90px;
            width: 37% !important;
            height: 315px !important;
            margin: 0;
            -webkit-animation: slideTopImage 1s ease;
            animation: slideTopImage 1s ease;
            order: 2;
            flex: 0 0 350px;
            line-height: 0;
            position: relative;
            z-index: 1;
            float: right;
            margin-bottom: 15px;
            margin-left: 7%;
        }

        .global-image img {
            box-shadow: -73px -14px 35px #888889;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        a {
            text-decoration: none;
            color: #000000 !important;
        }

        a:hover {
            text-decoration: none !important;
        }

        .item-container {
            border-left: 1px dashed #9ea1a4;
        }


    </style>
</head>
<body id="app">

</body>
</html>
