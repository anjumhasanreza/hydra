{{-- <li class="nav-item">
    <a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarDashboards">
        <i class="ri-dashboard-2-line"></i>
        <span data-key="t-dashboards">Dashboard</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarDashboards">
        <ul class="nav nav-sm flex-column">

            <li class="nav-item">
                <a href="{{ asset('/dashboard') }}" class="nav-link" data-key="t-dashboards"> Dashboard </a>
            </li>

        </ul>
    </div>
</li> --}}


<li class="nav-item">
    <a class="nav-link menu-link" href="{{ asset('/dashboard') }}">
        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboard</span>
    </a>
</li>