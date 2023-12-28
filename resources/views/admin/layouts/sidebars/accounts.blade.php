<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarAccounts" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebaraccounts">
        <i class="ri-currency-fill"></i> <span data-key="t-accounts">Account</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarAccounts">
        <ul class="nav nav-sm flex-column">
            

            <li class="nav-item">
                <a href="#sidebarPaymentVouchers" class="nav-link" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarPaymentVouchers" data-key="t-payment-vouchers">
                    Payment Voucher
                </a>
                <div class="collapse menu-dropdown" id="sidebarPaymentVouchers">
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
                                Add Payment Voucher </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="#sidebarReceiveVouchers" class="nav-link" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarReceiveVouchers" data-key="t-receive-vouchers">
                    Receive Voucher
                </a>
                <div class="collapse menu-dropdown" id="sidebarReceiveVouchers">
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
                                Add Receive Voucher </a>
                        </li>
                    </ul>
                </div>
            </li>


            

            
        </ul>
    </div>
</li>
