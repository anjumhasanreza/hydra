<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarContacts" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarcontacts">
        <i class="ri-contacts-book-2-fill"></i> <span data-key="t-contact">Contact</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarContacts">
        <ul class="nav nav-sm flex-column">
            

            <li class="nav-item">
                <a href="#sidebarSuppliers" class="nav-link" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarSuppliers" data-key="t-suppliers">
                    Suppliers
                </a>
                <div class="collapse menu-dropdown" id="sidebarSuppliers">
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

                                <a href="#" class="nav-link" data-key="t-add">
                                Add Supplier </a>
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
                            <a href="#" class="nav-link" data-key="t-add">
                                Add Customer </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</li>
