{{-- <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Product</span></li> --}}

<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarReports" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarReports">
        <i class="ri-file-text-fill"></i> <span data-key="t-report">Report</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarReports">
        <ul class="nav nav-sm flex-column">

            {{-- <li class="nav-item">
                <a href="#sidebarProfiteLosses" class="nav-link" data-bs-toggle="" role="button"
                    aria-expanded="false" aria-controls="sidebarProfiteLosses" data-key="t-profite-losses">
                    Profite & Loss
                </a>
                
            </li> --}}


            <li class="nav-item">
                <a class="nav-link menu-link" href="{{ asset('/dashboard')}}">
                    <span data-key="t-profite-losses">Profite & Loss</span>
                </a>
            </li>




            <li class="nav-item">
                <a href="#sidebarPurchases" class="nav-link" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarPurchases" data-key="t-purchases">
                    Purchases
                </a>
                <div class="collapse menu-dropdown" id="sidebarPurchases">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            {{-- <a href="{{ route('product.index') }}" class="nav-link" data-key="t-list">
                                List
                            </a> --}}
                            <a href="#" class="nav-link" data-key="t-list">
                                List
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a href="{{ route('product.create') }}" class="nav-link" data-key="t-add">
                                Add Product </a> --}}
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="#sidebarSales" class="nav-link" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarSales" data-key="t-sales">
                    Sales
                </a>
                <div class="collapse menu-dropdown" id="sidebarSales">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            {{-- <a href="{{ route('group.index') }}" class="nav-link" data-key="t-list">
                                List
                            </a> --}}
                            <a href="#" class="nav-link" data-key="t-list">
                                List
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a href="{{ route('group.create') }}" class="nav-link" data-key="t-add"> Add
                                Group </a> --}}
                        </li>
                    </ul>
                </div>
            </li>



            <li class="nav-item">
                <a href="#sidebarSuppliers" class="nav-link" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarSuppliers" data-key="t-suppliers">
                    Suppliers
                </a>
                <div class="collapse menu-dropdown" id="sidebarSuppliers">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            {{-- <a href="{{ route('category.index') }}" class="nav-link" data-key="t-list">
                                List
                            </a> --}}
                            <a href="#" class="nav-link" data-key="t-list">
                                List
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a href="{{ route('category.create') }}" class="nav-link" data-key="t-add">
                                Add Category </a> --}}
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a href="#sidebarCustomers" class="nav-link" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarCustomers" data-key="t-customers">
                    Customers
                </a>
                <div class="collapse menu-dropdown" id="sidebarCustomers">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            {{-- <a href="{{ route('brand.index') }}" class="nav-link" data-key="t-list">
                                List
                            </a> --}}
                            <a href="#" class="nav-link" data-key="t-list">
                                List
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a href="{{ route('brand.create') }}" class="nav-link" data-key="t-add"> Add
                                Brand </a> --}}
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="#sidebarExpensess" class="nav-link" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarExpensess" data-key="t-expensess">
                    Expenses
                </a>
                <div class="collapse menu-dropdown" id="sidebarExpensess">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            {{-- <a href="{{ route('style.index') }}" class="nav-link" data-key="t-list">
                                List
                            </a> --}}
                            <a href="#" class="nav-link" data-key="t-list">
                                List
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a href="{{ route('style.create') }}" class="nav-link" data-key="t-add"> Add
                                Style </a> --}}
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="#sidebarEmployeess" class="nav-link" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarEmployeess" data-key="t-employeess">
                    Employees
                </a>
                <div class="collapse menu-dropdown" id="sidebarEmployeess">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            {{-- <a href="{{ route('size.index') }}" class="nav-link" data-key="t-list">
                                List
                            </a> --}}
                            <a href="#" class="nav-link" data-key="t-list">
                                List
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a href="{{ route('size.create') }}" class="nav-link" data-key="t-add"> Add
                                Size </a> --}}
                        </li>
                    </ul>
                </div>
            </li>

            

            
        </ul>
    </div>
</li>