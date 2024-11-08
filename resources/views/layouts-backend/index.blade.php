<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('backend-title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/uicons-bold-rounded/css/uicons-bold-rounded.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/sweetalert/sweetalert.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class = "body bg-gray-200 dark:bg-[#0F172A]">
    @include('layouts-backend/partial/navbar')
    @include('layouts-backend/partial/sidebar')

    <!-- CONTENT -->
    <div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
        @include('layouts-backend/partial/breadcumb')

        @yield('backend-content')
    </div>

    @stack('modal')
    <!-- CONTENT END-->

    @include('layouts-backend/partial/script')

    <script src="{{ asset('assets/sweetalert/sweetalert.min.js') }}"></script>

    @if ($errors->any())
        <script>
            Swal.fire({
                position: "top",
                icon: "error",
                title: "Ooppss, Ada yang Salah",
                showConfirmButton: false,
                toast: true,
                timer: 2500,
                timerProgressBar: true,
            });
        </script>
    @endif

    @if (session('message'))
        <script>
            Swal.fire({
                position: "top",
                icon: "{{ session('type-message') }}",
                title: "{!! session('message') !!}",
                showConfirmButton: false,
                toast: true,
                timer: 2500,
                timerProgressBar: true,
            });
        </script>
    @endif

    <script>
        function confirmDeleteShoes(id, name) {
            Swal.fire({
                title: 'Apakah Anda Yakin ?',
                text: "Anda Akan Menghapus Sepatu : " + name,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#FFCC00',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-shoes-' + id).submit();
                }
            });
        }
    </script>

    <script>
        function confirmDeleteDriver(id, name) {
            Swal.fire({
                title: 'Apakah Anda Yakin ?',
                text: "Anda Akan Menghapus Akun : " + name,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#FFCC00',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-driver-' + id).submit();
                }
            });
        }
    </script>


    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
</body>

</html>
