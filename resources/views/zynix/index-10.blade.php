<!-- include mainhead.html"-->

<link rel="stylesheet" href="/storage/assets/libs/swiper/swiper-bundle.min.css">

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

                <!-- Start::page-header -->
                <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Stocks</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">
                                     Dashboards
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Stocks</li>
                        </ol>
                    </div>
                    <div>
                        <button class="btn btn-primary-light btn-wave me-2 waves-effect waves-light">
                            <i class="bx bx-crown align-middle"></i> Plan Upgrade
                        </button>
                        <button class="btn btn-secondary-light btn-wave me-0 waves-effect waves-light">
                            <i class="ri-upload-cloud-line align-middle"></i> Export Report
                        </button>
                    </div>
                </div>
                <!-- End::page-header -->

                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xxl-2">
                        <div class="swiper swiper-basic swiper-vertical w-100">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 align-items-center flex-wrap">
                                                <div>
                                                    <span class="avatar avatar-rounded bg-dark p-2">
                                                        <i class="bi bi-apple text-white fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block text-default fw-semibold">Apple</span>
                                                    <span class="d-block text-muted fs-13">$12,289.44</span>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block text-success d-inline-flex align-items-center">0.14%<i class="ti ti-arrow-up"></i></span>
                                                    <span class="d-block fw-semibold">+$1,780.80</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 align-items-center flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-rounded bg-primary p-2">
                                                        <i class="bi bi-currency-bitcoin text-fixed-white fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block text-default fw-semibold">Bitcoin</span>
                                                    <span class="d-block text-muted fs-13">$58,151.02</span>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block text-success d-inline-flex align-items-center">2.14%<i class="ti ti-arrow-up"></i></span>
                                                    <span class="d-block fw-semibold">+$5,745.62</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 align-items-center flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-rounded bg-secondary p-2">
                                                        <i class="bi bi-card-list text-fixed-white fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block text-default fw-semibold">Tesla</span>
                                                    <span class="d-block text-muted fs-13">$14,452.36</span>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block text-danger d-inline-flex align-items-center">4.02%<i class="ti ti-arrow-down"></i></span>
                                                    <span class="d-block fw-semibold">+$4,125.63</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 align-items-center flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-rounded bg-success p-2">
                                                        <i class="bi bi-gift text-fixed-white fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block text-default fw-semibold">Amazon</span>
                                                    <span class="d-block text-muted fs-13">$63,251.11</span>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block text-success d-inline-flex align-items-center">5.14%<i class="ti ti-arrow-up"></i></span>
                                                    <span class="d-block fw-semibold">+$936.30</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 align-items-center flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-rounded bg-warning p-2">
                                                        <i class="bi bi-truck text-fixed-white fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block text-default fw-semibold">Aliexpress</span>
                                                    <span class="d-block text-muted fs-13">$5,401.50</span>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block text-success d-inline-flex align-items-center">3.32%<i class="ti ti-arrow-up"></i></span>
                                                    <span class="d-block fw-semibold">+$4,360.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 align-items-center flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-rounded bg-info p-2">
                                                        <i class="bi bi-phone text-fixed-white fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block text-default fw-semibold">Samsung</span>
                                                    <span class="d-block text-muted fs-13">$10,732.12</span>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block text-danger d-inline-flex align-items-center">1.24%<i class="ti ti-arrow-down"></i></span>
                                                    <span class="d-block fw-semibold">+$3,221.29</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-2 align-items-center flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-rounded bg-danger p-2">
                                                        <i class="bi bi-nvidia text-fixed-white fs-18"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="d-block text-default fw-semibold">Nvidia</span>
                                                    <span class="d-block text-muted fs-13">$23,235.25</span>
                                                </div>
                                                <div class="text-end">
                                                    <span class="d-block text-success d-inline-flex align-items-center">1.14%<i class="ti ti-arrow-up"></i></span>
                                                    <span class="d-block fw-semibold">+$5,745.62</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <h6 class="card-title">Total Investments</h6>
                                <div class="d-flex gap-2">
                                    <div class="btn btn-outline-primary border btn-full btn-sm">Today</div>
                                    <div class="btn btn-outline-primary border btn-full btn-sm">Weakly</div>
                                    <div class="btn btn-primary border btn-full btn-sm">Yearly</div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-sm-flex align-items-center justify-content-between p-3 bg-light">
                                    <div class="min-w-fit-content">
                                        <p class="mb-1">
                                            <span class="h3 mb-0 text-primary fw-semibold">$12,390.02</span>
                                            <span class="text-danger ms-2 fs-13 d-inline-flex align-items-center"><i class="ti ti-trending-down me-1"></i>0.14%</span>
                                        </p>
                                        <div class="d-flex align-items-center gap-2">
                                            <p class="mb-0 fs-13 text-muted ">
                                                <span class="text-danger">-89.75</span>
                                                <i class="mdi mdi-circle-small"></i>
                                                <span>Today,</span>
                                            </p>
                                            <p class="mb-0 fs-13 text-muted">
                                                <span>Jun 17, 2024</span>
                                                <i class="mdi mdi-circle-small"></i>
                                                <span>11:25 AM</span>
                                                <i class="mdi mdi-circle-small"></i>
                                                <span>UTC +5:30</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-fill text-sm-end mt-2 mt-sm-0">
                                        <p class="mb-1 fs-16">GITUHB</p>
                                        <p class="mb-0 fs-13 text-muted">
                                            <span>GTHB</span>
                                            <i class="mdi mdi-circle-small"></i>
                                            <span>INDEXNSE</span>
                                        </p>
                                    </div>
                                </div>
                                <div id="total-investments" class=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center gap-3 mb-3 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar bg-primary-transparent">
                                                    <i class="bi bi-apple fs-18"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">Apple</span>
                                                <span class="d-block text-muted fs-13">Apple Inc</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="fs-13 text-muted">Apple</span>
                                                <span class="text-success fs-13 d-block">+0.28%</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                            <div>
                                                <span class="fs-13 text-muted d-block mb-1">CURRENT VALUE</span>
                                                <h3 class="fw-semibold mb-0 lh-1">$170.77</h3>
                                            </div>
                                            <div id="apple-stock"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center gap-3 mb-3 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar bg-secondary-transparent">
                                                    <i class="bi bi-nvidia fs-18"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">Nvidia</span>
                                                <span class="d-block text-muted fs-13">NVIDIA Corp</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="fs-13 text-muted">Nvidia</span>
                                                <span class="text-danger fs-13 d-block">-0.93%</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                            <div>
                                                <span class="fs-13 text-muted d-block mb-1">CURRENT VALUE</span>
                                                <h3 class="fw-semibold mb-0 lh-1">$124.65</h3>
                                            </div>
                                            <div id="nvidia-stock"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-center gap-3 mb-3 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar bg-success-transparent">
                                                    <i class="bi bi-amazon fs-18"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">Amazon</span>
                                                <span class="d-block text-muted fs-13">Amazon.com, Inc.</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="fs-13 text-muted">Amazon</span>
                                                <span class="text-success fs-13 d-block">+0.29%</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                            <div>
                                                <span class="fs-13 text-muted d-block mb-1">CURRENT VALUE</span>
                                                <h3 class="fw-semibold mb-0 lh-1">133.09</h3>
                                            </div>
                                            <div id="amazon-stock"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <h6 class="card-title">Statistics</h6>
                                <div class="d-flex gap-2">
                                    <div class="btn btn-outline-primary border btn-full btn-sm">Today</div>
                                    <div class="btn btn-outline-primary border btn-full btn-sm">Weakly</div>
                                    <div class="btn btn-primary border btn-full btn-sm">Yearly</div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="statistics" class=""></div>
                            </div>
                            <div class="card-footer p-3 my-2">
                                <div class="row row-cols-12">
                                    <div class="col">
                                        <div class="text-center"> <span
                                                class="text-muted fs-13 mb-1 rounded-dot dot-primary d-inline-block ms-2"><i class="bx bxs-circle text-primary fs-9 me-1"></i>Stocks
                                            </span>
                                            <div><span class="h6 mb-0 fw-semibold">1,624</span> </div>
                                        </div>
                                    </div>
                                    <div class="vr p-0"></div>
                                    <div class="col">
                                        <div class="text-center"> <span
                                                class="text-muted fs-13 mb-1 rounded-dot dot-secondary d-inline-block ms-2"><i class="bx bxs-circle text-secondary fs-9 me-1"></i>Funds
                                            </span>
                                            <div><span class="h6 mb-0 fw-semibold">1,267</span></div>
                                        </div>
                                    </div>
                                    <div class="vr p-0"></div>
                                    <div class="col">
                                        <div class="text-center"> <span
                                                class="text-muted fs-13 mb-1 rounded-dot dot-success d-inline-block ms-2"><i class="bx bxs-circle text-success fs-9 me-1"></i>Bond
                                            </span>
                                            <div><span class="h6 mb-0 fw-semibold">1,153</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Watchlist
                                </div>
                                <button type="button" class="btn btn-sm btn-light border"> View All<i class="ti ti-arrow-narrow-right ms-1"></i></button>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled watchlist-list">
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xs">
                                                    <img src="/storage/assets/images/media/apps/apple.png" alt="" class="invert-1">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Apple</a>
                                                <span class="d-block text-muted">AAPL</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block mb-0 fw-semibold h6"> $150.20</span>
                                                <span class="text-success mb-0">+1.50%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xs">
                                                    <img src="/storage/assets/images/media/apps/google.png" alt="" class="invert-1">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Google</a>
                                                <span class="d-block text-muted">GOOG</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block mb-0 fw-semibold h6"> $2,500.5</span>
                                                <span class="text-danger mb-0">-5.25%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xs">
                                                    <img src="/storage/assets/images/media/apps/microsoft.png" alt="" class="invert-1">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Microsoft</a>
                                                <span class="d-block text-muted">MSFT</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block mb-0 fw-semibold h6">$300.75</span>
                                                <span class="text-success mb-0">+2.30%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xs">
                                                    <img src="/storage/assets/images/media/apps/amazon.png" alt="" class="invert-1">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Amazon</a>
                                                <span class="d-block text-muted">AMZN</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block mb-0 fw-semibold h6">$3,000.00</span>
                                                <span class="text-danger mb-0">-10.50%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xs">
                                                    <img src="/storage/assets/images/media/apps/tesla.png" alt="" class="invert-1">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Tesla</a>
                                                <span class="d-block text-muted">TSLA</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block mb-0 fw-semibold h6">$700.80</span>
                                                <span class="text-success mb-0">+8.00%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xs">
                                                    <img src="/storage/assets/images/media/apps/facebook.png" alt="" class="invert-1">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Facebook</a>
                                                <span class="d-block text-muted">FB</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block mb-0 fw-semibold h6">$350.40</span>
                                                <span class="text-danger mb-0">-3.20%</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header  justify-content-between">
                                <div class="card-title">My Stocks</div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm border" data-bs-toggle="dropdown" aria-expanded="false">
                                        All Stocks<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);"> All Stocks</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Wishlist</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Stocks</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Crypto</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">ETFs</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Bonds</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="accordion accordion-style2 my-stocks-container" id="accordionStyle2">
                                    <div class="accordion-item stock-item border-0 border-bottom p-3 border-top-0 rounded-0">
                                        <div class="accordion-header d-flex align-items-center w-100" id="stockHeading_1">
                                            <a href="javascript:void(0);" class="p-0 flex-fill w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#stockItem1" aria-expanded="false" aria-controls="stockItem1">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar rounded-circle avatar-md bg-primary-transparent svg-primary">
                                                            <i class="ri-github-line  fs-20"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill w-100">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="fw-semibold">GTHB (Gituhb, Demo Inc.)</span>
                                                            <span class="text-end">$12,390.02</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="text-muted">12 shares</span>
                                                            <span class="text-success d-inline-flex align-items-center"><i class="ti ti-arrow-up me-1"></i>0.14%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="stockItem1" class="accordion-collapse border-top-0 collapse" aria-labelledby="stockHeading_1" data-bs-parent="#accordionStyle2">
                                            <div class="accordion-body px-0 pb-0">
                                                <div class="justify-content-between d-block d-sm-flex">
                                                    <div class="flex-fill d-flex align-items-center mb-sm-0 mb-2">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary ht-25 wd-25 me-2" data-bs-toggle="tooltip" data-bs-original-title="Buy">B</a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary ht-25 wd-25 me-2" data-bs-toggle="tooltip" data-bs-original-title="Sell">S</a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light ht-25 wd-25" data-bs-toggle="tooltip" data-bs-original-title="Market Cap"><i class="ti ti-chart-candle"></i></a>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <p class="mb-0 me-3">
                                                            <span class="text-muted me-1">High:</span>
                                                            <span class="text-success">$20,399,08</span>
                                                        </p>
                                                        <p class="mb-0">
                                                            <span class="text-muted me-1">Low:</span>
                                                            <span class="text-danger">$11,021,36</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item stock-item border-0 border-bottom p-3">
                                        <div class="accordion-header d-flex align-items-center w-100" id="stockHeading_2">
                                            <a href="javascript:void(0);" class="p-0 flex-fill w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#stockItem2" aria-expanded="false" aria-controls="stockItem2">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar rounded-circle avatar-md bg-secondary-transparent text-secondary"><i class="ri ri-twitter-x-line fs-20"></i></span>
                                                    </div>
                                                    <div class="flex-fill w-100">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="fw-semibold">TTR (Twiter.com, Inc.)</span>
                                                            <span class="text-end">$15,526.01</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="text-muted">1,290 shares</span>
                                                            <span class="text-success d-inline-flex align-items-center"><i class="ti ti-arrow-up me-1"></i>2.14%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="stockItem2" class="accordion-collapse border-top-0 collapse" aria-labelledby="stockHeading_2" data-bs-parent="#accordionStyle2">
                                            <div class="accordion-body px-0 pb-0">
                                                <div class="justify-content-between d-block d-sm-flex">
                                                    <div class="flex-fill d-flex align-items-center mb-sm-0 mb-2">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary ht-25 wd-25 me-2" data-bs-toggle="tooltip" data-bs-original-title="Buy">B</a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary ht-25 wd-25 me-2" data-bs-toggle="tooltip" data-bs-original-title="Sell">S</a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light ht-25 wd-25" data-bs-toggle="tooltip" data-bs-original-title="Market Cap"><i class="ti ti-chart-candle"></i></a>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <p class="mb-0 me-3">
                                                            <span class="text-muted me-1">High:</span>
                                                            <span class="text-success">$20,399,08</span>
                                                        </p>
                                                        <p class="mb-0">
                                                            <span class="text-muted me-1">Low:</span>
                                                            <span class="text-danger">$11,021,36</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item stock-item border-0 border-bottom p-3">
                                        <div class="accordion-header d-flex align-items-center w-100" id="stockHeading_3">
                                            <a href="javascript:void(0);" class="p-0 flex-fill w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#stockItem3" aria-expanded="false" aria-controls="stockItem3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar rounded-circle avatar-md bg-warning-transparent border text-warning"><i class="ri-netflix-line fs-20"></i></span>
                                                    </div>
                                                    <div class="flex-fill w-100">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="fw-semibold">NTFX (Netfllx.com, Inc.)</span>
                                                            <span class="text-end">$41,250.50</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="text-muted">230 shares</span>
                                                            <span class="text-danger d-inline-flex align-items-center"><i class="ti ti-arrow-down me-1"></i>4.02%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="stockItem3" class="accordion-collapse border-top-0 collapse" aria-labelledby="stockHeading_3" data-bs-parent="#accordionStyle2">
                                            <div class="accordion-body px-0 pb-0">
                                                <div class="justify-content-between d-block d-sm-flex">
                                                    <div class="flex-fill d-flex align-items-center mb-sm-0 mb-2">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary ht-25 wd-25 me-2" data-bs-toggle="tooltip" data-bs-original-title="Buy">B</a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary ht-25 wd-25 me-2" data-bs-toggle="tooltip" data-bs-original-title="Sell">S</a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light ht-25 wd-25" data-bs-toggle="tooltip" data-bs-original-title="Market Cap"><i class="ti ti-chart-candle"></i></a>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <p class="mb-0 me-3">
                                                            <span class="text-muted me-1">High:</span>
                                                            <span class="text-success">$20,399,08</span>
                                                        </p>
                                                        <p class="mb-0">
                                                            <span class="text-muted me-1">Low:</span>
                                                            <span class="text-danger">$11,021,36</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item stock-item border-0 border-bottom p-3">
                                        <div class="accordion-header d-flex align-items-center w-100" id="stockHeading_4">
                                            <a href="javascript:void(0);" class="collapsed p-0 flex-fill w-100" data-bs-toggle="collapse" data-bs-target="#stockItem4" aria-expanded="false" aria-controls="stockItem4">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar rounded-circle avatar-md bg-info-transparent border text-info"><i class="ri-angularjs-line fs-20"></i></span>
                                                    </div>
                                                    <div class="flex-fill w-100">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="fw-semibold">BS (Boostrap, Inc.)</span>
                                                            <span class="text-end">$30,500.15</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="text-muted">325 shares</span>
                                                            <span class="text-danger d-inline-flex align-items-center"><i class="ti ti-arrow-down me-1"></i>2.73%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="stockItem4" class="accordion-collapse border-top-0 collapse" aria-labelledby="stockHeading_4" data-bs-parent="#accordionStyle2">
                                            <div class="accordion-body px-0 pb-0">
                                                <div class="justify-content-between d-block d-sm-flex">
                                                    <div class="flex-fill d-flex align-items-center mb-sm-0 mb-2">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary ht-25 wd-25 me-2" data-bs-toggle="tooltip" data-bs-original-title="Buy">B</a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary ht-25 wd-25 me-2" data-bs-toggle="tooltip" data-bs-original-title="Sell">S</a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light ht-25 wd-25" data-bs-toggle="tooltip" data-bs-original-title="Market Cap"><i class="ti ti-chart-candle"></i></a>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <p class="mb-0 me-3">
                                                            <span class="text-muted me-1">High:</span>
                                                            <span class="text-success">$20,399,08</span>
                                                        </p>
                                                        <p class="mb-0">
                                                            <span class="text-muted me-1">Low:</span>
                                                            <span class="text-danger">$11,021,36</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item stock-item border-0 p-3">
                                        <div class="accordion-header d-flex align-items-center w-100" id="stockHeading_6">
                                            <a href="javascript:void(0);" class="collapsed p-0 flex-fill w-100" data-bs-toggle="collapse" data-bs-target="#stockItem6" aria-expanded="false" aria-controls="stockItem6">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <span class="avatar rounded-circle avatar-md bg-danger-transparent border text-danger"><i class="ri-apple-line fs-20"></i></span>
                                                    </div>
                                                    <div class="flex-fill w-100">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="fw-semibold">AAPL (Appil, Inc.)</span>
                                                            <span class="text-end">$21,093.20</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="text-muted">30 shares</span>
                                                            <span class="text-danger d-inline-flex align-items-center"><i class="ti ti-arrow-down me-1"></i>4.10%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="stockItem6" class="accordion-collapse border-top-0 collapse" aria-labelledby="stockHeading_6" data-bs-parent="#accordionStyle2">
                                            <div class="accordion-body px-0 pb-0">
                                                <div class="justify-content-between d-block d-sm-flex">
                                                    <div class="flex-fill d-flex align-items-center mb-sm-0 mb-2">
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-primary ht-25 wd-25 me-2" data-bs-toggle="tooltip" data-bs-original-title="Buy">B</a>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary ht-25 wd-25 me-2" data-bs-toggle="tooltip" data-bs-original-title="Sell">S</a>
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light ht-25 wd-25" data-bs-toggle="tooltip" data-bs-original-title="Market Cap"><i class="ti ti-chart-candle"></i></a>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <p class="mb-0 me-3">
                                                            <span class="text-muted me-1">High:</span>
                                                            <span class="text-success">$20,399,08</span>
                                                        </p>
                                                        <p class="mb-0">
                                                            <span class="text-muted me-1">Low:</span>
                                                            <span class="text-danger">$11,021,36</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Portfolio Value
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-start gap-3">
                                    <div>
                                        <span class="avatar avatar-md bg-primary-transparent">
                                            <i class="ti ti-currency-dollar fs-4"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <div class="text-muted fs-13">Total Value <span class="p-2 br-5 text-success"><i class="fe fe-arrow-up-right"></i></span> </div> <h3 class="fw-semibold">$6,31,262.25</h3> <div class="fs-12"><span class="text-success fs-13 me-1">45%</span>Increase Since last Year</div>
                                    </div>
                                </div>
                                <div id="portfolio-value"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-5">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Transaction History
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                        All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Buy</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Sell</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Symbol</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Shares</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    EPA:THI
                                                </th>
                                                <td>
                                                    12-06-2024
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Buy</span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">-$1,290</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">+20</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    EPA:SCB
                                                </th>
                                                <td>
                                                    11-06-2024
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Buy</span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">-$2,150</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">+15</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    EPA:CGIO
                                                </th>
                                                <td>
                                                    11-06-2024
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-transparent">Sell</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">+$22,625</span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">-12</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    EPA:NTIX
                                                </th>
                                                <td>
                                                    05-06-2024
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Buy</span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">-$3,680</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">+36</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    EPA:MOD
                                                </th>
                                                <td>
                                                    20-05-2024
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-transparent">Sell</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">+$30,750</span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">-25</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="border-bottom-0">
                                                    EPA:MOD
                                                </th>
                                                <td class="border-bottom-0">
                                                    25-05-2024
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span class="badge bg-danger-transparent">Sell</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span class="text-success">+$13,550</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span class="text-danger">-15</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Market Movers
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                        All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Buy</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Sell</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap ">
                                        <thead>
                                            <tr>
                                                <th scope="col">Symbol</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">1D Change</th>
                                                <th scope="col">1D Return %</th>
                                                <th scope="col">Volume</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    APPL
                                                </th>
                                                <td>
                                                    App1e Inc.<span class="fw-normal text-primary fs-10 ms-"> NASDAQ</span>
                                                </td>
                                                <td>
                                                    <span>$1,116.90</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">$28.9<i class="ti ti-arrow-narrow-up"></i></span>
                                                </td>
                                                <td>
                                                    <span class="text-success">6.8%</span>
                                                </td>
                                                <td>
                                                    12,389.30
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    TTR
                                                </th>
                                                <td>
                                                    Twiter.com Inc.<span class="fw-normal text-primary fs-10 ms-1"> NYSE</span>
                                                </td>
                                                <td>
                                                    <span>$993.21</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">$11.6<i class="ti ti-arrow-narrow-up"></i></span>
                                                </td>
                                                <td>
                                                    <span class="text-success">10.25%</span>
                                                </td>
                                                <td>
                                                    32,125.03
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    BS
                                                </th>
                                                <td>
                                                    Boostrap.com.<span class="fw-normal text-primary fs-10 ms-1"> NSE</span>
                                                </td>
                                                <td>
                                                    <span>$11.00</span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">$16.0<i class="ti ti-arrow-narrow-down"></i></span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">9.0%</span>
                                                </td>
                                                <td>
                                                    27,911.16
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    NFLX
                                                </th>
                                                <td>
                                                    Netfilx.com Inc.<span class="fw-normal text-primary fs-10 ms-1"> LSE</span>
                                                </td>
                                                <td>
                                                    <span>$161.72</span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">$9.8<i class="ti ti-arrow-narrow-down"></i></span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">17.8%</span>
                                                </td>
                                                <td>
                                                    27,161.89
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    ION
                                                </th>
                                                <td>
                                                    Ion.com Corp.<span class="fw-normal text-primary fs-10 ms-1"> FSX</span>
                                                </td>
                                                <td>
                                                    <span>$52.65</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">$14.2<i class="ti ti-arrow-narrow-up"></i></span>
                                                </td>
                                                <td>
                                                    <span class="text-success">30.2%</span>
                                                </td>
                                                <td>
                                                    65,785.01
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"  class="border-bottom-0">
                                                    BS
                                                </th>
                                                <td  class="border-bottom-0">
                                                    Boostrap.com.<span class="fw-normal text-primary fs-10 ms-1"> NSE</span>
                                                </td>
                                                <td  class="border-bottom-0">
                                                    <span>$11.00</span>
                                                </td>
                                                <td  class="border-bottom-0" >
                                                    <span class="text-danger">$16.0<i class="ti ti-arrow-narrow-down"></i></span>
                                                </td>
                                                <td  class="border-bottom-0">
                                                    <span class="text-danger">9.0%</span>
                                                </td>
                                                <td  class="border-bottom-0">
                                                    27,911.16
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

    <!-- Apex Charts JS -->
    <script src="/storage/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Swiper JS -->
    <script src="/storage/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Stocks Dashboard -->
    <script src="/storage/assets/js/stocks-dashboard.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

   @include('zynix.partials.custom_switcherjs')

</body>

</html>