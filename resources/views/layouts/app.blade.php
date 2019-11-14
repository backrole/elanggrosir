<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Elang Grosir') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/fh-3.1.6/kt-2.5.1/r-2.2.3/datatables.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
    <style>
        *{
            text-decoration: none;
        }

        .modal {
            transition: opacity 0.25s ease;
            }
        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }

    </style>
</head>
<body class="tw-bg-gray-100 tw-h-screen tw-antialiased tw-no-underline hover:tw-no-underline tw-relative tw-leading-none">
    <div id="app">
        @include('layouts.nav')

        <div class="tw-flex tw-flex-row ">
            {{-- sidebar --}}
            @include('layouts.sidebar')
            {{-- endsidebar --}}

            @yield('content')
        </div>
        @include('layouts._modal')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill9/dist/polyfill.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-polyfills/0.1.42/polyfill.js"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    {{-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> --}}


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/fh-3.1.6/kt-2.5.1/r-2.2.3/datatables.min.js"></script>


    @stack('script')
</body>
</html>
