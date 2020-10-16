<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head >
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1" >

    <title >Intro Laravel</title >

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" >

    <!-- Style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >

    <!-- Style -->
    <script src="{{ asset('js/app.js') }}" ></script >


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" >

    <script src="https://unpkg.com/swiper/swiper-bundle.js" ></script >

    <style >
        body {
            font-family: 'Nunito';
        }

        [x-cloak] {
            display: none;
        }

        .progress {
            animation: progress;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
            animation-timing-function: linear;
        }

        @keyframes progress {
            0% {
                width: 0%;
            }
            80% {
                opacity: 1;
            }
            100% {
                opacity: 0.5;
                width: 100%;
            }
        }

    </style >

</head >

<body class="antialiased bg-gray-800 dark:bg-gray-900" >

<main class="max-w-6xl mx-auto sm:px-6 lg:px-8 min-h-screen " >

    @if (Route::has('login'))
        @include('partials.login');
    @endif

    <div class="" >

        @include('partials.nav')

        @yield('system')

        @yield('content')

        @include('partials.footer')

    </div >

</main >

</body >

</html >
