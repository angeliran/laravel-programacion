<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    @include('layouts.head')
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.navbar')
        <!-- ========== App Menu ========== -->
        @include('layouts.sidebar')
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    @include('layouts.bread')
                    <!-- end page title -->

                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('layouts.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    @include('layouts.scripts')
</body>

</html>