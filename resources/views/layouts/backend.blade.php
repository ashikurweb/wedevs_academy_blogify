<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Myrathemes" name="author">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/preline@1.0.0/dist/preline.js"></script>
    <link rel="stylesheet" href="{{ asset('backend/styles/icons.min.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.9/dist/sweetalert2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backend/styles/app.min.css') }}" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title', 'My Personal Blog Project')</title>
    @stack('styles')
</head>

<body>

    <div class="wrapper">

        <!-- Start Sidebar -->
        @include('backend.partials.sidebar')
        <!-- End Sidebar -->

        <!-- Start Page Content here -->
        <div class="page-content">

            <!-- Topbar Start -->
            @include('backend.partials.header')
            <!-- Topbar End -->

            <main>
                @yield('content')
            </main>

            <!-- Footer Start -->
            @include('backend.partials.footer')
            <!-- Footer End -->

        </div>
        <!-- End Page content -->

    </div>
    <!-- Plugin Js (Mandatory in All Pages) -->
    <script src="{{ asset('backend/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/libs/preline/preline.js') }}"></script>
    <script src="{{ asset('backend/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/libs/iconify-icon/iconify-icon.min.js') }}"></script>
    <script src="{{ asset('backend/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/scripts/app.js') }}"></script>
    <script src="{{ asset('backend/libs/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('backend/libs/raphael/raphael.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.9/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @stack('scripts')

</body>

</html>
