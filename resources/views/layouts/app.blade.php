<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head >
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1" >

    <title >Intro Laravel</title >

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" >

    <!-- Tailwindcss -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" >

    <!-- Styles -->
    <style >


    </style >

    <style >
        body {
            font-family: 'Nunito';
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

        @yield('content')

        @include('partials.footer')

    </div >

</main >

</body >

</html >
