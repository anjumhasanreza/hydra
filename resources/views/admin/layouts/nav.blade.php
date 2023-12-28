<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                @include('admin.layouts.partials.navLogo')
                
                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                id="topnav-hamburger-icon">
                <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                
                <!--Start App Search-->

                @include('admin.layouts.partials.navAppSearch')
                
                <!--End App Search-->
            </div>
            
            <div class="d-flex align-items-center">

                
                    
                {{-- Start Language  --}}

                @include('admin.layouts.partials.navLanguage')
                
                {{-- End Language  --}}
                



                {{-- Start Web App  --}}

                {{-- @include('partials.navWebApp') --}}
                
                {{-- End Web App  --}}



                
                {{-- Start My Cart  --}}
                
                {{-- @include('partials.navMyCart') --}}
                
                {{-- End My Cart  --}}
                
                
                

                {{-- Start Full Screan Button  --}}
                
                @include('admin.layouts.partials.navFullScreanButton')
                
                {{-- End Full Screan Button  --}}
                
                

                
                {{-- Start Dark Mode Button  --}}

                @include('admin.layouts.partials.navDarkModeButton')
                
                {{-- Start Dark Mode Button  --}}
                
                
                
                
                {{-- Start Notification  --}}
                
                @include('admin.layouts.partials.navNotificationButton')
                
                {{-- End Notification  --}}



                
                {{-- Start Profile Button  --}}
                
                @include('admin.layouts.partials.navProfileButton')
                
                {{-- End Profile Button  --}}
            </div>
        </div>
    </div>
</header>

<!-- removeNotificationModal -->

@include('admin.layouts.partials.navRemoveNotificationModel')