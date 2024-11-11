<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="images/logos.png">
    <title>@yield('title-customer2')</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

</head>

<body class="bg-white dark:bg-white">
    {{-- Navbar --}}
    @include('layouts-customer2/partial/navbar')
    {{-- Navbar End --}}

    @yield('customer-content-v2')
</body>

</html>
