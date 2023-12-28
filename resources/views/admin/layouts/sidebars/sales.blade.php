<li class="nav-item">
    <a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarRSales">
        <i class="ri-shopping-cart-fill"></i> <span data-key="t-sales">Sale</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarRSales">
        <ul class="nav nav-sm flex-column">
            

            <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarSales" data-key="t-suppliers">
                    Sales
                </a>
                <div class="collapse menu-dropdown" id="sidebarSales">
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
                                Add Sale </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarSaleReturns" data-key="t-saleReturns">
                    Sale Returns
                </a>
                <div class="collapse menu-dropdown" id="sidebarSaleReturns">
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
                                Add Sale Return </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</li>
