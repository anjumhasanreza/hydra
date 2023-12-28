<li class="nav-item">
    <a class="nav-link menu-link" href="#" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarRPurchases">
        <i class="ri-shopping-cart-fill"></i> <span data-key="t-purchases">Purchase</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarRPurchases">
        <ul class="nav nav-sm flex-column">
            

            <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="collapse" role="button"
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

                                <a href="#" class="nav-link" data-key="t-add">
                                Add Purchase </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarPurchaseReturns" data-key="t-purchaseReturns">
                    Purchase Returns
                </a>
                <div class="collapse menu-dropdown" id="sidebarPurchaseReturns">
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
                                Add Purchase Return </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</li>
