<div class="dropdown d-md-none topbar-head-dropdown header-item">
    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bx bx-search fs-22"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
        <form class="p-3">
            <div class="form-group m-0">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    <button class="btn btn-primary" type="submit">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    
                </div>
            </div>
            
        </form>
    </div>
</div>


<div class="dropdown ms-1 topbar-head-dropdown header-item">
    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img id="header-lang-img" src="{{ asset('/assets/images/flags/us.svg') }}" alt="Header Language" height="20" class="rounded">    
    </button>
    <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
            <img src="{{ asset('/assets/images/flags/us.svg') }}" alt="user-image" class="me-2 rounded" height="18">
            <span class="align-middle">English</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp"
            title="Spanish">
            <img src="{{ asset('/assets/images/flags/spain.svg') }}" alt="user-image" class="me-2 rounded" height="18">
            <span class="align-middle">Española</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr"
            title="German">
            <img src="{{ asset('/assets/images/flags/germany.svg') }}" alt="user-image" class="me-2 rounded"
                height="18"> <span class="align-middle">Deutsche</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it"
            title="Italian">
            <img src="{{ asset('/assets/images/flags/italy.svg') }}" alt="user-image" class="me-2 rounded" height="18">
            <span class="align-middle">Italiana</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru"
            title="Russian">
            <img src="{{ asset('/assets/images/flags/russia.svg') }}" alt="user-image" class="me-2 rounded" height="18">
            <span class="align-middle">русский</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch"
            title="Chinese">
            <img src="{{ asset('/assets/images/flags/china.svg') }}" alt="user-image" class="me-2 rounded" height="18">
            <span class="align-middle">中国人</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr"
            title="French">
            <img src="{{ asset('/assets/images/flags/french.svg') }}" alt="user-image" class="me-2 rounded" height="18">
            <span class="align-middle">français</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar"
            title="Arabic">
            <img src="{{ asset('assets/images/flags/ae.svg') }}" alt="user-image" class="me-2 rounded" height="18">
            <span class="align-middle">Arabic</span>
        </a>
    </div>
</div>