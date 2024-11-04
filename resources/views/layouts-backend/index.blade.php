<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('backend-title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/uicons-bold-rounded/css/uicons-bold-rounded.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class = "body bg-white dark:bg-[#0F172A]">
    @include('layouts-backend/partial/navbar')
    @include('layouts-backend/partial/sidebar')
    <!-- CONTENT -->
    <div class = "content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
        @include('layouts-backend/partial/breadcumb')

        @yield('backend-content')
    </div>
    @include('layouts-backend/partial/script')
</body>

</html>
