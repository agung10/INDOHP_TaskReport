<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.component.head')
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
            @include('layouts.component.topbar')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.component.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                @yield('content')
                <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
                @include('layouts.component.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    @include('layouts.component.script')

</body>

</html>