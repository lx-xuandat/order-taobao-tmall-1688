<!-- include mainhead.html"-->

</head>

<body>

    @include('zynix.partials.switcher')
     @include('zynix.partials.loader')

    <div class="page">
         @include('zynix.partials.header')
         @include('zynix.partials.sidebar')

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Buy & Sell</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crypto</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Buy & Sell</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="btn-list">
                        <button class="btn btn-primary-light btn-wave me-2">
                            <i class="bx bx-crown align-middle"></i> Plan Upgrade
                        </button>
                        <button class="btn btn-secondary-light btn-wave me-0">
                            <i class="ri-upload-cloud-line align-middle"></i> Export Report
                        </button>
                    </div>
                </div>
                <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="lh-1">
                                            <span class="avatar avatar-lg bg-primary-transparent">
                                                <span class="avatar avatar-md bg-primary">
                                                    <i class="ri-arrow-left-down-line fs-20"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <h4 class="fw-semibold mb-1">$19.56k</h4>
                                            <span class="">Total Buy</span>
                                        </div>
                                        <div class="text-end">
                                            <span class="d-block text-muted fs-13 mb-1">Increase</span>
                                            <span class="badge bg-success-transparent"><i class="ti ti-arrow-up me-1"></i>4.97%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="lh-1">
                                            <span class="avatar avatar-lg bg-secondary-transparent">
                                                <span class="avatar avatar-md bg-secondary">
                                                    <i class="ri-arrow-right-up-line fs-20"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <h4 class="fw-semibold mb-1">$12.76k</h4>
                                            <span class="">Total Sell</span>
                                        </div>
                                        <div class="text-end">
                                            <span class="d-block text-muted fs-13 mb-1">Decrease</span>
                                            <span class="badge bg-danger-transparent"><i class="ti ti-arrow-down me-1"></i>1.65%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="lh-1">
                                            <span class="avatar avatar-lg bg-success-transparent">
                                                <span class="avatar avatar-md bg-success">
                                                    <i class="ri-arrow-left-down-line fs-20"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <h4 class="fw-semibold mb-1">$2.56k</h4>
                                            <span class="">Today Buy</span>
                                        </div>
                                        <div class="text-end">
                                            <span class="d-block text-muted fs-13 mb-1">Increase</span>
                                            <span class="badge bg-success-transparent"><i class="ti ti-arrow-up me-1"></i>2.75%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="lh-1">
                                            <span class="avatar avatar-lg bg-info-transparent">
                                                <span class="avatar avatar-md bg-info">
                                                    <i class="ri-arrow-right-up-line fs-20"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <h4 class="fw-semibold mb-1">$9.53k</h4>
                                            <span class="">Today Sell</span>
                                        </div>
                                        <div class="text-end">
                                            <span class="d-block text-muted fs-13 mb-1">Decrease</span>
                                            <span class="badge bg-danger-transparent"><i class="ti ti-arrow-down me-1"></i>0.76%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Buy & Sell Statistics
                                    </div>
                                    <div class="btn-group flex-wrap" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary btn-sm btn-wave">1D</button>
                                        <button type="button" class="btn btn-primary-light btn-sm btn-wave">1W</button>
                                        <button type="button" class="btn btn-primary-light btn-sm btn-wave">1M</button>
                                        <button type="button" class="btn btn-primary-light btn-sm btn-wave">3M</button>
                                        <button type="button" class="btn btn-primary-light btn-sm btn-wave">6M</button>
                                        <button type="button" class="btn btn-primary-light btn-sm btn-wave">1Y</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-1 pb-3 gy-3">
                                        <div class="col">
                                            <div class="p-3 bg-light border rounded">
                                                <span class="d-block fs-12">Total Buy</span>
                                                <span class="d-block fw-medium fs-15 text-success">$324.25 USD</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="p-3 bg-light border rounded">
                                                <span class="d-block fs-12">Total Sell</span>
                                            <span class="d-block fw-medium fs-15 text-danger">$4,235.25 USD</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="p-3 bg-light border rounded">
                                                <span class="d-block fs-12">Available Balance</span>
                                                <span class="d-block fw-medium fs-15 text-primary">$22,803.92 USD</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="p-3 bg-light border rounded">
                                                <span class="d-block fs-12">Total Crypto Asset Value</span>
                                                <span class="d-block fw-medium fs-15 text-warning">$4,56,683.00 USD</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="p-3 bg-light border rounded">
                                                <span class="d-block fs-12">Total Amount</span>
                                                <span class="d-block fw-medium fs-15 text-info">$2,34,4543.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="buy_sell-statistics" class="px-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                           <div class="card custom-card">
                               <div class="card-header">
                                <ul class="nav nav-tabs tab-style-1 bg-white scaleX nav-justified mb-0 d-flex w-100 p-0 gap-2" id="myTab1" role="tablist">
                                    <li class="nav-item me-0" role="presentation">
                                        <button class="nav-link active p-2 bg-light border" id="buy-item" data-bs-toggle="tab" data-bs-target="#buy-item-pane" type="button" role="tab" aria-controls="buy-item-pane" aria-selected="true">Buy</button>
                                    </li>
                                    <li class="nav-item me-0" role="presentation">
                                        <button class="nav-link p-2 bg-light border" id="sell-item" data-bs-toggle="tab" data-bs-target="#sell-item-pane" type="button" role="tab" aria-controls="sell-item-pane" aria-selected="false" tabindex="-1">Sell</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link p-2 bg-light border" id="transfer-item" data-bs-toggle="tab" data-bs-target="#transfer-item-pane" type="button" role="tab" aria-controls="transfer-item-pane" aria-selected="false" tabindex="-1">Transfer</button>
                                    </li>
                                </ul>
                               </div>
                               <div class="card-body">
                                  <div class="tab-content">
                                    <div class="tab-pane show active border-0 chat-users-tab" id="buy-item-pane" role="tabpanel" aria-labelledby="buy-item" tabindex="0">
                                        <div>
                                            <div class="input-group mb-3 flex-nowrap">
                                                <input type="text" class="form-control" aria-label="crypto buy select" placeholder="Select Currency">
                                                <select class="form-control" data-trigger id="choices-single-default">
                                                    <option value="">BTC</option>
                                                    <option value="Choice 1">ETH</option>
                                                    <option value="Choice 2">XRP</option>
                                                    <option value="Choice 3">DASH</option>
                                                    <option value="Choice 4">NEO</option>
                                                    <option value="Choice 5">LTC</option>
                                                    <option value="Choice 6">BSD</option>
                                                </select>
                                            </div>
                                            <div class="input-group mb-3 flex-nowrap">
                                                <input type="text" class="form-control" aria-label="crypto buy select">
                                                <select class="form-control" data-trigger id="choices-single-default1">
                                                    <option value="">USD</option>
                                                    <option value="Choice 1">AED</option>
                                                    <option value="Choice 2">AUD</option>
                                                    <option value="Choice 3">ARS</option>
                                                    <option value="Choice 4">AZN</option>
                                                    <option value="Choice 5">BGN</option>
                                                    <option value="Choice 6">BRL</option>
                                                </select>
                                            </div>
                                            <div>
                                                <div class="fs-14 py-2"><span class="fw-medium text-dark">Price:</span><span class="text-muted ms-2 fs-14 d-inline-block">6.003435</span><span class="text-dark fw-medium float-end">BTC</span></div>
                                                <div class="fs-14 py-2"><span class="fw-medium text-dark">Amount:</span><span class="text-muted ms-2 fs-14 d-inline-block">2,34,4543.00</span><span class="text-dark fw-medium float-end">LTC</span></div>
                                                <div class="fw-medium fs-14 py-2">Total: <span class="fs-14 d-inline-block">22.00 BTC</span></div>
                                                <div class="fs-12 text-success">Additional Charges: 0.32%(0.0001231 BTC)</div>
                                                <label class="fw-medium fs-12 mt-4 mb-3">SELECT PAYMENT METHOD :</label>
                                                <div class="row g-2">
                                                    <div class="col-xl-6">
                                                        <div class="p-2 border rounded">
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                                <label class="form-check-label fs-12" for="flexRadioDefault1">
                                                                    Credit / Debit Cards
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="p-2 border rounded">
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                <label class="form-check-label fs-12" for="flexRadioDefault2">
                                                                    Paypal
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="p-2 border rounded">
                                                            <div class="form-check mb-0">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                                <label class="form-check-label fs-12" for="flexRadioDefault3">
                                                                    Wallet
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid mt-4 pt-1">
                                                <button type="button" class="btn btn-primary btn-wave btn-lg">BUY</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane border-0 chat-users-tab" id="sell-item-pane" role="tabpanel" aria-labelledby="sell-item" tabindex="0">
                                        <div class="input-group mb-3 flex-nowrap">
                                            <input type="text" class="form-control" aria-label="crypto buy select" placeholder="Select Currency">
                                            <select class="form-control" data-trigger id="choices-single-default2">
                                                <option value="">BTC</option>
                                                <option value="Choice 1">ETH</option>
                                                <option value="Choice 2">XRP</option>
                                                <option value="Choice 3">DASH</option>
                                                <option value="Choice 4">NEO</option>
                                                <option value="Choice 5">LTC</option>
                                                <option value="Choice 6">BSD</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3 flex-nowrap">
                                            <input type="text" class="form-control" aria-label="crypto buy select">
                                            <select class="form-control" data-trigger id="choices-single-default3">
                                                <option value="">USD</option>
                                                <option value="Choice 1">AED</option>
                                                <option value="Choice 2">AUD</option>
                                                <option value="Choice 3">ARS</option>
                                                <option value="Choice 4">AZN</option>
                                                <option value="Choice 5">BGN</option>
                                                <option value="Choice 6">BRL</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <span class="form-label">Crypto Value :</span>
                                            <div class="position-relative">
                                                <div class="p-2 border rounded d-flex align-items-center justify-content-between gap-3 mt-1">
                                                    <div class="gap-2 d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar bg-light p-2">
                                                                <img src="/storage/assets/images/crypto-currencies/regular/Bitcoin.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fw-medium">Bitcoin - BTC</div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fw-medium d-block">0.374638535 BTC</span>
                                                        <span class="text-muted">$5,364.65</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <span class="form-label">Deposit To :</span>
                                            <div class="position-relative">
                                                <div class="p-2 border rounded d-flex align-items-center gap-2 mt-1">
                                                    <div class="lh-1">
                                                        <span class="avatar bg-light p-2">
                                                            <i class="ri-bank-line text-info fs-20"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium d-block">Banking</span>
                                                        <span class="text-muted">Checking ...</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="fs-14 py-2">
                                                <div class="d-inline-flex">
                                                    <span class="fw-medium text-dark">Price:</span><span class="text-muted ms-2 fs-14">6.003435</span>
                                                </div>
                                                <span class="text-dark fw-medium float-end">BTC</span>
                                            </div>
                                            <div class="fs-14 py-2">
                                                <div class="d-inline-flex">
                                                    <span class="fw-medium text-dark">Amount:</span><span class="text-muted ms-2 fs-14">2,34,4543.00</span>
                                                </div>
                                                <span class="text-dark fw-medium float-end">LTC</span>
                                            </div>
                                        </div>
                                        <div class="d-grid mt-4">
                                            <button type="button" class="btn btn-danger btn-wave btn-lg">SELL</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane border-0 chat-users-tab" id="transfer-item-pane" role="tabpanel" aria-labelledby="transfer-item" tabindex="0">
                                        <div class="mb-3">
                                            <span class="form-label">Crypto Value :</span>
                                            <div class="position-relative">
                                                <a href="javascript:void(0);" class="stretched-link"></a>
                                                <div class="p-2 border rounded d-flex align-items-center justify-content-between gap-3 mt-1">
                                                    <div class="gap-2 d-flex align-items-center">
                                                        <div class="lh-1">
                                                            <span class="avatar bg-light p-2">
                                                                <img src="/storage/assets/images/crypto-currencies/regular/Bitcoin.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fw-medium">Bitcoin - BTC</div>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fw-medium d-block">0.374638535 BTC</span>
                                                        <span class="text-muted">$5,364.65</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <span class="form-label">Deposit To :</span>
                                            <div class="position-relative">
                                                <a href="javascript:void(0);" class="stretched-link"></a>
                                                <div class="p-2 border rounded d-flex align-items-center gap-2 mt-1">
                                                    <div class="lh-1">
                                                        <span class="avatar bg-light p-2">
                                                            <i class="ri-bank-line text-info fs-20"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-medium d-block">Banking</span>
                                                        <span class="text-muted">Checking ...</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <span class="d-block fw-medium">Amount :</span>
                                            <div class="d-flex align-items-center justify-content-between text-muted">
                                                <div>Weekly Bank Limit</div>
                                                <div>$10,000 remaining</div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3 flex-nowrap">
                                            <input type="text" class="form-control" aria-label="crypto buy select">
                                            <select class="form-control" data-trigger id="choices-single-default4">
                                                <option value="">USD</option>
                                                <option value="Choice 1">AED</option>
                                                <option value="Choice 2">AUD</option>
                                                <option value="Choice 3">ARS</option>
                                                <option value="Choice 4">AZN</option>
                                                <option value="Choice 5">BGN</option>
                                                <option value="Choice 6">BRL</option>
                                            </select>
                                        </div>
                                        <div>
                                            <div class="fs-14 py-2">
                                                <div class="d-inline-flex">
                                                    <span class="fw-medium text-dark">Price:</span><span class="text-muted ms-2 fs-14">6.003435</span>
                                                </div>
                                                <span class="text-dark fw-medium float-end">BTC</span>
                                            </div>
                                            <div class="fs-14 py-2">
                                                <div class="d-inline-flex">
                                                    <span class="fw-medium text-dark">Amount:</span><span class="text-muted ms-2 fs-14">2,34,4543.00</span>
                                                </div>
                                                <span class="text-dark fw-medium float-end">LTC</span>
                                            </div>
                                        </div>
                                        <div class="d-grid mt-4">
                                            <button type="button" class="btn btn-success btn-wave btn-lg">Transfer</button>
                                        </div>
                                    </div>
                                  </div>
                               </div>
                           </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

   @include('zynix.partials.custom_switcherjs')

    <!-- Apex Charts JS -->
    <script src="/storage/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Crypto Buy & Sell JS -->
    <script src="/storage/assets/js/crypto-buy_sell.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>