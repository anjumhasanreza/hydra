<div class="app-menu navbar-menu">
    <!-- LOGO -->
    @include('partials.brandLogo')

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                

                <!-- Start Dashboard Menu -->

                @include('sidebars.dashboard')
                
                <!-- End Dashboard Menu -->
                
                
                <!-- Start Products -->
                
                @include('sidebars.businesses')
                
                <!-- End Products -->
                
                
                <!-- Start Products -->
                
                @include('sidebars.products')
                
                <!-- End Products -->







            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>