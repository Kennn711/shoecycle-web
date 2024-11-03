<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- Favivon --}}
    <link rel="shortcut icon" href="{{ asset('eCommerce_tailwind_template-master') }}/assets/images/logo/favicon.ico" type="image/x-icon" />
    {{-- Link Icon --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/uicons-bold-rounded/css/uicons-bold-rounded.css') }}">
    {{-- Template CSS --}}
    <link rel="stylesheet" href="{{ asset('eCommerce_tailwind_template-master') }}/assets/style.css" />
    <link rel="stylesheet" href="{{ asset('assets/sweetalert/sweetalert.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                    },
                },
            },
        };
    </script>
    <title>@yield('title-frontend')</title>
</head>

<body class="flex flex-col min-h-screen">
    @include('layouts-customer/partial/header')
    @yield('content-frontend')

    @include('layouts-customer/partial/footer')
    <!--! icons -->
    <script src="{{ asset('assets/sweetalert/sweetalert.min.js') }}"></script>
    <!--!javascript file  -->
    <script type="module" src="{{ asset('eCommerce_tailwind_template-master') }}/assets/index.js"></script>
</body>

</html>
