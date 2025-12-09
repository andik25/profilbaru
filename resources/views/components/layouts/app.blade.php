<!DOCTYPE html>
<html style="font-size:0.875em" lang="en">

<head>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../../assets/img/favicon/pemkab.png" sizes="180x180">
    <link rel="icon" href="../../assets/img/favicon/pemkab.png" sizes="32x32" type="image/png">
    <link rel="icon" href="../../assets/img/favicon/pemkab.png" sizes="16x16" type="image/png">

    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="../../assets/img/favicon/pemprob.ico">
    <meta name="msapplication-config" content="../../assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <!-- Apex Charts -->
    <link type="text/css" href="/vendor/apexcharts/apexcharts.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker-bs4.min.css">

    <!-- Fontawesome -->
    <link type="text/css" href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link type="text/css" href="/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="/css/volt.css" rel="stylesheet">
    <link type="text/css" href="/css/uicons-regular-straight.css" rel="stylesheet">
    <style>
        .menu-card {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease-in-out;
            margin: auto;
        }

        .menu-card-pilih {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease-in-out;
            margin: auto;
        }

        .bg-custom {
            background-color: #e3f3f5;
        }

        .menu-card:hover {
            transform: scale(1.05);
        }

        .menu-icon {
            font-size: 40px;
        }

        .menu-icon-pilih {
            font-size: 20px;
        }

        .menu-title {
            font-weight: 600;
            font-size: 11px;
            margin-bottom: 10px;
        }

        .percentage {
            margin-top: 10px;
            font-weight: bold;
            font-size: 10px;
            text-align: center;
        }

        .table-responsive {
            overflow-y: auto;
            /* Pastikan tabel dapat digulir secara vertikal */
            max-height: 400px;
            /* Atur tinggi maksimum sesuai kebutuhan */
        }

        .table thead th {
            position: sticky;
            /* Mengatur posisi sticky */
            top: 0;
            /* Menentukan posisi dari atas */
            background-color: white;
            /* Warna latar belakang header */
            z-index: 10;
            /* Pastikan header berada di atas konten lainnya */
        }

        .sticky-col {
            position: sticky;
            /* Mengatur posisi sticky */
            left: 0;
            /* Menentukan posisi dari kiri */
            background-color: white;
            /* Warna latar belakang kolom */
            z-index: 5;
            /* Pastikan kolom berada di atas konten lainnya */
        }

        .sticky-col:nth-child(2) {
            left: 50px;
            /* Atur jarak dari kiri untuk kolom puskesmas */
        }
    </style>
    @livewireStyles
    @if (Route::is('halaman-awal'))
        <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css') }}/css/L.Control.Layers.Tree.css"> --}}
        <link rel="stylesheet" href="{{ asset('/css/qgis2web.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css') }}">
        <style>
            html,
            body,
            .map-ataslagi,
            .map-atas,
            .map,
            #map {
                width: 100%;
                height: 100%;
                padding: 0;
            }

            .download-btn {
                transition: all 0.3s ease;
            }
        </style>
    @endif
    @livewireScripts

    <!-- Core -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

    <!-- Vendor JS -->
    <script src="/assets/js/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="/assets/js/nouislider.min.js"></script>

    <!-- Smooth scroll -->
    <script src="/assets/js/smooth-scroll.polyfills.min.js"></script>

    <!-- Apex Charts -->
    <script src="/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Charts -->
    <script src="/assets/js/chartist.min.js"></script>
    <script src="/assets/js/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="/assets/js/sweetalert2.all.min.js"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Notyf -->
    <script src="/vendor/notyf/notyf.min.js"></script>

    <!-- Simplebar -->
    <script src="/assets/js/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="/assets/js/volt.js"></script>

    {{-- select2 --}}


</head>

<body>
    @if (in_array(request()->route()->getName(), [
            'kelahiran',
            'manajemen-user',
            'user-program',
            'kematian',
            'profil',
            'report',
            'laporan',
            'fasyankes',
            'kategori-indikator',
            'program-kesehatan',
            'komponen-program',
            'maskat',
            'datinkes-komponen',
            'datinkes-kategori',
            'tabel-setting',
            'tabel-data',
            'kolom-tabel',
            'kolom-detail',
            'indikator',
            'users',
            'bootstrap-tables',
            'transactions',
            'buttons',
            'forms',
            'modals',
            'notifications',
            'typography',
            'upgrade-to-pro',
        ]))
        {{-- Nav --}}
        <x-nav></x-nav>
        {{-- SideNav --}}
        <x-navbar></x-navbar>
        <main class="content">
            {{-- TopBar --}}
            <x-topbar></x-topbar>
            {{ $slot }}
            {{-- Footer --}}
            <x-footer></x-footer>
        </main>
    @elseif (in_array(request()->route()->getName(), ['dashboard']))
        <div class="container">
            <x-topbar></x-topbar>
            {{-- TopBar --}}
            {{ $slot }}
            {{-- Footer --}}
            <x-footer></x-footer>
        </div>
    @elseif(in_array(request()->route()->getName(), [
            'register',
            'register-example',
            'halaman-awal',
            'login',
            'login-example',
            'forgot-password',
            'forgot-password-example',
            'reset-password',
            'reset-password-example',
        ]))
        {{ $slot }}
        {{-- Footer --}}
        <x-peta></x-peta>
        <x-footer2></x-footer2>
    @elseif(in_array(request()->route()->getName(), ['404', '500', 'lock']))
        {{ $slot }}
    @endif


    {{-- <script>
        document.querySelectorAll(".menu-icon").forEach(icon => {
            let percent = parseInt(icon.getAttribute("data-percent"));
            let parent = icon.closest(".col-6");
            let title = parent.querySelector(".menu-title");
            let percentage = parent.querySelector(".percentage");
            let color = "green";

            if (percent < 30) {
                color = "red";
            } else if (percent >= 30 && percent <= 70) {
                color = "orange";
            } else {
                color = "green";
            }

            icon.style.color = color;
            title.style.color = color;
            percentage.style.color = color;
        });
    </script> --}}
</body>

</html>
