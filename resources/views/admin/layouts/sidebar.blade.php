<div class="app-menu navbar-menu">
    <!-- LOGO -->
    @include('admin.layouts.partials.brandLogo')

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                

                <!-- Start Dashboard Menu -->

                @include('admin.layouts.sidebars.dashboard')
                
                <!-- End Dashboard Menu -->
                
                
                <!-- Start Products -->
                
                @include('admin.layouts.sidebars.businesses')
                
                <!-- End Products -->
                
                
                <!-- Start Contacts -->
                
                @include('admin.layouts.sidebars.contacts')
                
                <!-- End Contacts -->
                
                
                <!-- Start Products -->
                
                @include('admin.layouts.sidebars.products')
                
                <!-- End Products -->
                
                
                <!-- Start Contacts -->
                
                {{-- @include('sidebars.Purchases') --}}
                
                <!-- End Contacts -->
                
                
                <!-- Start Contacts -->
                
                {{-- @include('sidebars.sales') --}}
                
                <!-- End Contacts -->
                
                
                <!-- Start Contacts -->
                
                @include('admin.layouts.sidebars.transactions')
                
                <!-- End Contacts -->
                
                
                <!-- Start Contacts -->
                
                @include('admin.layouts.sidebars.expenses')
                
                <!-- End Contacts -->
                
                
                <!-- Start Contacts -->
                
                @include('admin.layouts.sidebars.accounts')
                
                <!-- End Contacts -->
                
                
                <!-- Start Contacts -->
                
                @include('admin.layouts.sidebars.reports')
                
                <!-- End Contacts -->
                
                
                <!-- Start Contacts -->
                
                @include('admin.layouts.sidebars.userRole')
                
                <!-- End Contacts -->
                
                
                <!-- Start Contacts -->
                
                @include('admin.layouts.sidebars.settings')
                
                <!-- End Contacts -->







            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>