<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">
    <head>

        <meta charset="utf-8" />
        <title>@yield('title', 'RAMK')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        
        @include('admin.layouts.styles')

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('admin.layouts.nav')
            
            <!-- ========== App Menu ========== -->
            @include('admin.layouts.sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                @yield('content')

            </div>

            @include('admin.layouts.footer')
            
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!--start back-to-top-->
        @include('admin.layouts.partials.goToTop')
        <!--end back-to-top-->

        
        @include('admin.layouts.partials.theamSetting')

        <!-- java Script  -->

        @include('admin.layouts.scripts')

    </body>
</html>