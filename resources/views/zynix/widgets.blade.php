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
                <div
                    class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Widgets</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Widgets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Widgets</li>
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


                <!-- Start:: row-1 -->
                <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-1">
                    <div class="col">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between mb-2 p-3 pb-0">
                                    <div class="avatar avatar-lg bg-primary-transparent">
                                        <div class="avatar avatar-md bg-primary">
                                            <i class="ri-briefcase-4-fill fs-20"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex-fill fs-13 text-muted">Number Of Sales</div>
                                        <div class="fs-24 fw-semibold">12,432</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between py-2 px-3 bg-light border flex-wrap">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="badge rounded-pill bg-success-transparent me-2"><i
                                                class="ri-arrow-left-up-line fs-11"></i></span>
                                        <span class="fs-14">9%</span>
                                        <p class="fs-11 text-muted mb-0">This Month</p>
                                    </div>
                                    <a href="javascript:void(0);" class="text-primary text-decoration-underline">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between mb-2 p-3 pb-0">
                                    <div class="avatar avatar-lg bg-secondary-transparent">
                                        <div class="avatar avatar-md bg-secondary">
                                            <i class="ri-money-rupee-circle-fill fs-20"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex-fill fs-13 text-muted">Profit By Sale</div>
                                        <div class="fs-24 fw-semibold">$5,472</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between py-2 px-3 bg-light border flex-wrap">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="badge rounded-pill bg-danger-transparent me-2"><i
                                                class="ri-arrow-left-down-line fs-11"></i></span>
                                        <span class="fs-14">12%</span>
                                        <p class="fs-11 text-muted mb-0">This Month</p>
                                    </div>
                                    <a href="javascript:void(0);" class="text-primary text-decoration-underline">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between mb-2 p-3 pb-0">
                                    <div class="avatar avatar-lg bg-success-transparent">
                                        <div class="avatar avatar-md bg-success">
                                            <i class="ri-discount-percent-fill fs-20"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex-fill fs-13 text-muted">Total Revenue</div>
                                        <div class="fs-24 fw-semibold">$1,24,624</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between py-2 px-3 bg-light border flex-wrap">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="badge rounded-pill bg-success-transparent me-2"><i
                                                class="ri-arrow-left-up-line fs-11"></i></span>
                                        <span class="fs-14">6%</span>
                                        <p class="fs-11 text-muted mb-0">This Month</p>
                                    </div>
                                    <a href="javascript:void(0);" class="text-primary text-decoration-underline">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between mb-2 p-3 pb-0">
                                    <div class="avatar avatar-lg bg-info-transparent">
                                        <div class="avatar avatar-md bg-info">
                                            <i class="ri-group-fill fs-20"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex-fill fs-13 text-muted">Total Customers</div>
                                        <div class="fs-24 fw-semibold">1,032</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between py-2 px-3 bg-light border flex-wrap">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="badge rounded-pill bg-success-transparent me-2"><i
                                                class="ri-arrow-left-up-line fs-11"></i></span>
                                        <span class="fs-14">8%</span>
                                        <p class="fs-11 text-muted mb-0">This Month</p>
                                    </div>
                                    <a href="javascript:void(0);" class="text-primary text-decoration-underline">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between mb-2 p-3 pb-0">
                                    <div class="avatar avatar-lg bg-warning-transparent">
                                        <div class="avatar avatar-md bg-warning">
                                            <i class="ri-eye-fill fs-20"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex-fill fs-13 text-muted">Page Views</div>
                                        <div class="fs-24 fw-semibold">5,484</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between py-2 px-3 bg-light border flex-wrap">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="badge rounded-pill bg-danger-transparent me-2"><i
                                                class="ri-arrow-left-down-line fs-11"></i></span>
                                        <span class="fs-14">11%</span>
                                        <p class="fs-11 text-muted mb-0">This Month</p>
                                    </div>
                                    <a href="javascript:void(0);" class="text-primary text-decoration-underline">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xxl-7">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Profit Report
                                </div>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <button type="button"
                                            class="btn btn-primary btn-wave waves-effect waves-light">Day</button>
                                        <button type="button"
                                            class="btn btn-primary-light btn-wave waves-effect waves-light">Week</button>
                                        <button type="button"
                                            class="btn btn-primary-light btn-wave waves-effect waves-light">Month</button>
                                        <button type="button"
                                            class="btn btn-primary-light btn-wave waves-effect waves-light">Year</button>
                                    </div>
                                    <div>
                                        <button class="btn btn-light border btn-sm">Export<i
                                                class="ri-share-forward-line ms-1"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="revenue-overview"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                            <div>
                                                <span class="avatar avatar-sm bg-primary-transparent">
                                                    <i class="ri-bar-chart-box-line fs-18"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill text-muted fs-14">Total Sales</div>
                                            <div class="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    data-bs-toggle="dropdown" aria-expanded="false" class="">
                                                    <i class="ri-more-2-fill fs-5 text-muted"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="h4 fw-semibold mb-1 d-flex align-items-center flex-wrap gap-2">
                                                42,312 <span class="badge bg-success-transparent fs-10"><i
                                                        class="ri-arrow-left-up-line"></i>+1.64%</span></div>
                                        </div>
                                        <div id="totalsales"></div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                            <div>
                                                <span class="avatar avatar-sm bg-secondary-transparent">
                                                    <i class="ri-wallet-3-line fs-18"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill text-muted fs-14">Revenue</div>
                                            <div class="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    data-bs-toggle="dropdown" aria-expanded="false" class="">
                                                    <i class="ri-more-2-fill fs-5 text-muted"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="h4 fw-semibold mb-1 d-flex align-items-center flex-wrap gap-2">
                                                12,754 <span class="badge bg-success-transparent fs-10"><i
                                                        class="ri-arrow-left-up-line"></i>+1.64%</span></div>
                                        </div>
                                        <div id="totalrevenue"></div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                            <div>
                                                <span class="avatar avatar-sm bg-success-transparent">
                                                    <i class="ri-group-line fs-16"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill text-muted fs-14">Customers</div>
                                            <div class="dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    data-bs-toggle="dropdown" aria-expanded="false" class="">
                                                    <i class="ri-more-2-fill fs-5 text-muted"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="h4 fw-semibold mb-1 d-flex align-items-center flex-wrap gap-2">
                                                32,474 <span class="badge bg-danger-transparent fs-10"><i
                                                        class="ri-arrow-left-down-line"></i>-0.64%</span></div>
                                        </div>
                                        <div id="totalcustomers"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Visitors By Country
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="mb-2 fw-semibold">12,245,355<span
                                                class="text-success ms-3 badge bg-success-transparent"><i
                                                    class="ti ti-arrow-narrow-up text-success"></i>0.78%</span></h6>
                                        <p class="text-muted mb-3">Total Sales from top countries</p>
                                        <ul class="mb-0 list-unstyled visitcountry">
                                            <li>
                                                <div class="d-flex gap-2 align-items-center justify-content-between">
                                                    <div class="canada">
                                                        <div
                                                            class="d-flex align-items-center gap-2  flex-wrap country-item1">
                                                            <span class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="/storage/assets/images/flags/canada_flag.jpg"
                                                                    alt="">
                                                            </span>
                                                            <span class="top-country-name">Canada</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="fw-semibold lh-1 text-nowrap">6,192</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex gap-2 align-items-center justify-content-between">
                                                    <div class="french">
                                                        <div
                                                            class="d-flex align-items-center gap-2  flex-wrap country-item2">
                                                            <span class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="/storage/assets/images/flags/french_flag.jpg"
                                                                    alt="">
                                                            </span>
                                                            <span class="top-country-name">French</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="fw-semibold lh-1">12,675</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex gap-2 align-items-center justify-content-between">
                                                    <div class="argentina">
                                                        <div
                                                            class="d-flex align-items-center gap-2  flex-wrap country-item3">
                                                            <span class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="/storage/assets/images/flags/argentina_flag.jpg"
                                                                    alt="">
                                                            </span>
                                                            <span class="top-country-name">Argentina</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="fw-semibold lh-1">14,673</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex gap-2 align-items-center justify-content-between">
                                                    <div class="spain">
                                                        <div
                                                            class="d-flex align-items-center gap-2  flex-wrap country-item4">
                                                            <span class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="/storage/assets/images/flags/spain_flag.jpg" alt="">
                                                            </span>
                                                            <span class="top-country-name">Spain</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="fw-semibold lh-1">14,673</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex gap-2 align-items-center justify-content-between">
                                                    <div class="germany">
                                                        <div
                                                            class="d-flex align-items-center  gap-2 flex-wrap  country-item5">
                                                            <span class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="/storage/assets/images/flags/germany_flag.jpg"
                                                                    alt="">
                                                            </span>
                                                            <span class="top-country-name">Germany</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="fw-semibold lh-1">14,673</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-0">
                                                <div class="d-flex gap-2 align-items-center justify-content-between">
                                                    <div class="china">
                                                        <div
                                                            class="d-flex align-items-center  gap-2 flex-wrap  country-item6">
                                                            <span class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="/storage/assets/images/flags/china_flag.jpg" alt="">
                                                            </span>
                                                            <span class="top-country-name">China</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <div class="fw-semibold lh-1">14,673</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3-->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Total Revenue</div>
                                <a href="javascript:void(0);" class="fs-13 text-muted"> View All<i
                                        class="ti ti-arrow-narrow-right ms-1"></i> </a>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center mb-1 float-end">
                                        <span class="fs-14 text-success">+0.125%</span>
                                        <p class="fs-11 text-muted mb-0 ms-1">This Month</p>
                                    </div>
                                    <div>
                                        <h5>12,145,876<i class="ti ti-trending-up-2 mx-2 text-success"></i></h5>
                                    </div>
                                </div>
                                <div class="progress-stacked progress-animate progress-xs mt-3 mb-4">
                                    <div class="progress-bar" role="progressbar" style="width: 21%" aria-valuenow="21"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 26%"
                                        aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 35%"
                                        aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 18%"
                                        aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 18%"
                                        aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <ul class="mb-0 list-unstyled top-countries border p-3 rounded">
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                            <div class="d-flex align-items-center lh-1">
                                                <span
                                                    class="avatar avatar-sm avatar-rounded border border-primary border-opacity-25 me-2"><i
                                                        class="ti ti-chef-hat text-primary fs-16"></i>
                                                </span>
                                                <span class="top-country-name">Food and restaurents</span>
                                            </div>
                                            <div class="fs-15 lh-1 fw-semibold"><span
                                                    class="text-success me-3 badge bg-success-transparent"><i
                                                        class="ti ti-arrow-narrow-up text-success ms-1"></i>0.78%</span>6,192
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                            <div class="d-flex align-items-center lh-1">
                                                <span
                                                    class="avatar avatar-sm  avatar-rounded border border-secondary border-opacity-25 me-2"><i
                                                        class="ti ti-book text-secondary fs-16"></i>
                                                </span>
                                                <span class="top-country-name">Books and shopping</span>
                                            </div>
                                            <div class="fs-15 lh-1 fw-semibold"><span
                                                    class="text-danger me-3 badge bg-danger-transparent"><i
                                                        class="ti ti-arrow-narrow-up text-danger ms-1"></i>0.12%</span>5,932
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                            <div class="d-flex align-items-center lh-1">
                                                <span
                                                    class="avatar avatar-sm  avatar-rounded border border-success border-opacity-25 me-2"><i
                                                        class="ti ti-car text-success fs-16"></i>
                                                </span>
                                                <span class="top-country-name">Booking car</span>
                                            </div>
                                            <div class="fs-15 lh-1 fw-semibold"><span
                                                    class="text-success me-3 badge bg-success-transparent"><i
                                                        class="ti ti-arrow-narrow-up text-success ms-1"></i>0.12%</span>5,932
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                            <div class="d-flex align-items-center lh-1">
                                                <span
                                                    class="avatar avatar-sm  avatar-rounded border border-info border-opacity-25 me-2"><i
                                                        class="ti ti-sofa text-info fs-16"></i>
                                                </span>
                                                <span class="top-country-name">Home Furnitures</span>
                                            </div>
                                            <div class="fs-15 lh-1 fw-semibold"><span
                                                    class="text-danger me-3 badge bg-danger-transparent"><i
                                                        class="ti ti-arrow-narrow-up text-danger ms-1"></i>0.54%</span>5,383
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-0">
                                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                            <div class="d-flex align-items-center lh-1">
                                                <span
                                                    class="avatar avatar-sm  avatar-rounded border border-warning border-opacity-25 me-2"><i
                                                        class="ti ti-shirt text-warning fs-16"></i>
                                                </span>
                                                <span class="top-country-name">Beauty Products</span>
                                            </div>
                                            <div class="fs-15 lh-1 fw-semibold"><span
                                                    class="text-success me-3 badge bg-success-transparent"><i
                                                        class="ti ti-arrow-narrow-up text-success ms-1"></i>0.25%</span>4,825
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card card-bg-primary border-0 shadow-none card-pattern-1">
                            <div class="card-body p-0">
                                <div class="p-3">
                                    <div class="d-flex align-items-center mb-0 position-relative">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <div class="lh-1 me-2">
                                            <span class="avatar avatar-rounded bg-light-transparent text-fixed-white">
                                                <i class="ri-group-line fs-5"></i>
                                            </span>
                                        </div>
                                        <p class="mb-0 flex-grow-1 overflow-hidden text-truncate">Total Users</p>
                                        <span class="fs-4">1630</span>
                                        <span class="fs-12 text-green ms-1 d-inline-flex align-items-center"><i
                                                class="ti ti-trending-up me-1"></i>2.1%</span>
                                    </div>
                                </div>
                                <hr class="border-white op-2 my-0">
                                <div class="p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="fs-5">1120</span>
                                            <p class="mb-0 text-fixed-white op-8">Pro Subscription</p>
                                        </div>
                                        <div class="ms-2 min-w-fit-content">
                                            <span class="avatar avatar-rounded bg-dark-transparent">
                                                <i class="bi bi-patch-check text-fixed-white fs-5"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-white op-2 my-0">
                                <div class="p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="fs-5">786</span>
                                            <p class="mb-0 text-fixed-white op-8">Premium Subscription</p>
                                        </div>
                                        <div class="ms-2 min-w-fit-content">
                                            <span class="avatar avatar-rounded bg-dark-transparent">
                                                <i class="bi bi-gem fs-5 text-fixed-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card icon-overlay">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                                    viewBox="0 0 24 24" width="24px" fill="var(--primary-color)">
                                    <g>
                                        <rect fill="none" height="24" width="24" />
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M20,3H4C2.9,3,2,3.9,2,5v14c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V5 C22,3.9,21.1,3,20,3z M20,19H4V5h16V19z"
                                                fill-rule="evenodd" />
                                            <polygon fill-rule="evenodd"
                                                points="19.41,10.42 17.99,9 14.82,12.17 13.41,10.75 12,12.16 14.82,15" />
                                            <rect fill-rule="evenodd" height="2" width="5" x="5" y="7" />
                                            <rect fill-rule="evenodd" height="2" width="5" x="5" y="11" />
                                            <rect fill-rule="evenodd" height="2" width="5" x="5" y="15" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3">
                                        <span class="avatar avatar-rounded p-2 bg-primary-transparent svg-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                                width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path
                                                    d="M18 9l-1.41-1.42L10 14.17l-2.59-2.58L6 13l4 4zm1-6h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04-.39.08-.74.28-1.01.55-.18.18-.33.4-.43.64-.1.23-.16.49-.16.77v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75-.75-.34-.75-.75.34-.75.75-.75zM19 19H5V5h14v14z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <h4 class="mb-1 fw-semibold">1,116</h4>
                                        <div class="d-flex align-items-top">
                                            <p class="mb-0 me-2">Active Jobs</p>
                                            <div class="text-success"><i
                                                    class="ri-arrow-up-s-fill align-middle"></i>+0.21%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card icon-overlay">
                            <span class="icon svg-pink">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                    width="24px" fill="#000000">
                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                    <path
                                        d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 8c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H9zm-3-3v-3h3v-2H6V7H4v3H1v2h3v3z">
                                    </path>
                                </svg>
                            </span>
                            <div class="card-body">
                                <div class="d-flex align-items-top">
                                    <div class="me-3">
                                        <span class="avatar avatar-rounded p-2 bg-secondary-transparent svg-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                                width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path
                                                    d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <h4 class="mb-1 fw-semibold">1,468</h4>
                                        <div class="d-flex align-items-top">
                                            <p class="mb-0 me-2">Sheduled Interviews</p>
                                            <div class="text-danger"><i
                                                    class="ri-arrow-down-s-fill align-middle"></i>-0.153%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Revenue Summary</div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                                        aria-expanded="false"> Sort By <i
                                            class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pb-1">
                                <div id="orders-summary"></div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-group segmentation-list">
                                    <li class="list-group-item male">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div>
                                                <span class="d-block fw-semibold">Today<span
                                                        class="text-success fw-medium ms-1"><i
                                                            class="ti ti-arrow-narrow-up"></i>0.78%</span></span>
                                            </div>
                                            <div class="h6 mb-0 fw-semibold">
                                                18,235
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item female">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div>
                                                <span class="d-block fw-semibold">This week<span
                                                        class="text-danger fw-medium ms-1"><i
                                                            class="ti ti-arrow-narrow-down"></i>1.57%</span></span>
                                            </div>
                                            <div class="h6 mb-0 fw-semibold">
                                                12,743
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item others">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div>
                                                <span class="d-block fw-semibold">This Month<span
                                                        class="text-success fw-medium ms-1"><i
                                                            class="ti ti-arrow-narrow-up"></i>0.32%</span></span>
                                            </div>
                                            <div class="h6 mb-0 fw-semibold">
                                                5,369
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item not-mentioned">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div>
                                                <span class="d-block fw-semibold">This Year<span
                                                        class="text-success fw-medium ms-1"><i
                                                            class="ti ti-arrow-narrow-up"></i>19.45%</span></span>
                                            </div>
                                            <div class="h6 mb-0 fw-semibold">
                                                16,458
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-body p-0">
                                <div class="p-4 m-2 rounded-2 bg-light border overflow-hidden position-relative">
                                    <div class="d-flex align-items-center gap-2 justify-content-between">
                                        <div>
                                            <div class="mb-1 op-9">Total Balance</div>
                                            <h4 class=" mb-1 fw-semibold me-2">$262,933.05 USD</h4> <span
                                                class="op-7 fs-12">Increased by </span><span
                                                class="badge bg-success mt-2  p-1 text-end ms-1 d-inline-flex align-items-center"><i
                                                    class="ti ti-trending-up me-2"></i>12.2%</span>
                                        </div>
                                        <i class="ri-bank-line fs-4 lh-1 bank-icon"></i>
                                    </div>
                                </div>
                                <div class="row border-top border-block-start-dashed g-0">
                                    <div class="col border-end border-inline-end-dashed">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center justify-content-center gap-3"> <span
                                                    class="avatar avatar-md bg-primary"> <i
                                                        class="ri-arrow-left-down-fill fs-20"></i> </span>
                                                <div>
                                                    <div class="fw-medium text-muted">Deposit</div>
                                                    <h6 class="mb-0 fw-semibold">$1,654 USD</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center justify-content-center gap-3"> <span
                                                    class="avatar avatar-md bg-secondary"> <i
                                                        class="ri-arrow-right-up-fill fs-20"></i> </span>
                                                <div>
                                                    <div class="fw-medium text-muted">Withdraw</div>
                                                    <h6 class="mb-0 fw-semibold">$654 USD</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between mb-3">
                                    <div class="flex-fill d-flex align-items-top">
                                        <div class="me-2"> <span
                                                class="avatar avatar-md text-primary border bg-primary-transparent"><i
                                                    class="ti ti-user-circle fs-18"></i></span> </div>
                                        <div class="flex-fill">
                                            <p class="fw-semibold fs-14 mb-0">Recruiters</p>
                                            <p class="mb-0 text-muted fs-12 op-7">Elitr at gubergren sit sed.</p>
                                        </div>
                                    </div>
                                    <div> <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                            class="btn btn-icon btn-sm btn-light"><i class="ti ti-dots"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Another Action</a>
                                            </li>
                                            <li><a href="javascript:void(0);" class="dropdown-item">Something Else
                                                    Here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-0">
                                    <p class="mb-0 fs-20 fw-medium">7,539</p><span class="text-muted ms-2"><i
                                            class="ti ti-trending-up align-middle text-success me-1 d-inline-block"></i>3.1%</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-fill">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%"
                                                aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="ms-3"> <span class="fs-12 text-muted">55% Target</span> </div>
                                </div>
                                <div>
                                    <p class="mb-2 text-muted">Premium Recruiters</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked"> <a href="javascript:void(0);"
                                                class="avatar avatar-sm rounded-circle border-white overflow-hidden"
                                                data-bs-toggle="tooltip" aria-label="Mis x matched"><img
                                                    src="/storage/assets/images/faces/2.jpg" alt="img" class="w-100"></a> <a
                                                href="javascript:void(0);"
                                                class="avatar avatar-sm rounded-circle border-white overflow-hidden"
                                                data-bs-toggle="tooltip" aria-label="Barbel Bob"><img
                                                    src="/storage/assets/images/faces/12.jpg" alt="img" class="w-100"></a> <a
                                                href="javascript:void(0);"
                                                class="avatar avatar-sm rounded-circle border-white overflow-hidden"
                                                data-bs-toggle="tooltip" aria-label="Phan Rel"><img
                                                    src="/storage/assets/images/faces/20.jpg" alt="img" class="w-100"></a> <a
                                                href="javascript:void(0);"
                                                class="avatar avatar-sm rounded-circle border-white overflow-hidden bg-primary text-fixed-white"
                                                data-bs-toggle="tooltip">+4</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4-->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card p-2">
                            <div class="card-body bg-light border">
                                <div class="d-flex align-items-start justify-content-between">
                                    <div>
                                        <p class="mb-0 fs-15 fw-medium">Total Employees </p>
                                        <h4 class="mb-3 fw-semibold">24,152</h4>
                                    </div>
                                    <div> <span class="avatar avatar-md bg-primary svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none"></rect>
                                                <circle cx="84" cy="108" r="52" opacity="0.2"></circle>
                                                <path d="M10.23,200a88,88,0,0,1,147.54,0" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16"></path>
                                                <path d="M172,160a87.93,87.93,0,0,1,73.77,40" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16"></path>
                                                <circle cx="84" cy="108" r="52" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                                                </circle>
                                                <path d="M152.69,59.7A52,52,0,1,1,172,160" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16"></path>
                                            </svg> </span> </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mb-0 fs-12 text-muted"> <span
                                            class="text-success fw-semibold me-1 d-inline-block"><i
                                                class="fe fe-arrow-up"></i>+0.5%</span> vs Last Month </div> <a
                                        href="javascript:void(0)"> <span
                                            class="float-end fw-medium text-primary text-decoration-underline">View All
                                            <i class="ti ti-arrow-narrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card p-2">
                            <div class="card-body bg-light border">
                                <div class="d-flex align-items-start justify-content-between">
                                    <div>
                                        <p class="mb-0 fs-15 fw-medium">Total Revenue </p>
                                        <h4 class="mb-3 fw-semibold">$55,786</h4>
                                    </div>
                                    <div> <span class="avatar avatar-md bg-secondary svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none"></rect>
                                                <path
                                                    d="M40,192a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V88a8,8,0,0,0-8-8H56A16,16,0,0,1,40,64Z"
                                                    opacity="0.2"></path>
                                                <path
                                                    d="M40,64V192a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V88a8,8,0,0,0-8-8H56A16,16,0,0,1,40,64h0A16,16,0,0,1,56,48H192"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="16"></path>
                                                <circle cx="180" cy="140" r="12"></circle>
                                            </svg> </span> </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mb-0 fs-12 text-muted"> <span
                                            class="text-danger fw-semibold me-1 d-inline-block"><i
                                                class="fe fe-arrow-down"></i>-1.2%</span> vs Last Month </div> <a
                                        href="javascript:void(0)"> <span
                                            class="float-end text-decoration-underline fw-medium text-secondary">View
                                            All <i class="ti ti-arrow-narrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card p-2">
                            <div class="card-body bg-light border">
                                <div class="d-flex align-items-start justify-content-between">
                                    <div>
                                        <p class="mb-0 fs-15 fw-medium">Total Profit </p>
                                        <h4 class="mb-3  fw-semibold">$41,633</h4>
                                    </div>
                                    <div> <span class="avatar avatar-md bg-success svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none"></rect>
                                                <path
                                                    d="M88,216a24,24,0,0,0,24-24c0-10-8-16-8-16H216s8,6,8,16a24,24,0,0,1-24,24Z"
                                                    opacity="0.2"></path>
                                                <path d="M200,176V64a24,24,0,0,0-24-24H40" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16"></path>
                                                <line x1="104" y1="104" x2="168" y2="104" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16"></line>
                                                <line x1="104" y1="136" x2="168" y2="136" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16"></line>
                                                <path
                                                    d="M24,80s-8-6-8-16a24,24,0,0,1,48,0V192a24,24,0,0,0,48,0c0-10-8-16-8-16H216s8,6,8,16a24,24,0,0,1-24,24H88"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="16"></path>
                                            </svg> </span> </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mb-0 fs-12 text-muted"> <span
                                            class="text-success fw-semibold me-1 d-inline-block"><i
                                                class="fe fe-arrow-up"></i>+1.3%</span> vs Last Month </div> <a
                                        href="javascript:void(0)"> <span
                                            class="float-end text-decoration-underline fw-medium text-success">View All
                                            <i class="ti ti-arrow-narrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card p-2">
                            <div class="card-body bg-light border">
                                <div class="d-flex align-items-start justify-content-between">
                                    <div>
                                        <p class="mb-0 fs-15 fw-medium">Total Balance </p>
                                        <h4 class="mb-3  fw-semibold">$67,556</h4>
                                    </div>
                                    <div> <span class="avatar avatar-md bg-info svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none"></rect>
                                                <path d="M128,128h24a40,40,0,0,1,0,80H128Z" opacity="0.2"></path>
                                                <path d="M128,48H112a40,40,0,0,0,0,80h16Z" opacity="0.2"></path>
                                                <line x1="128" y1="24" x2="128" y2="48" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16"></line>
                                                <line x1="128" y1="208" x2="128" y2="232" fill="none"
                                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="16"></line>
                                                <path
                                                    d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="16"></path>
                                            </svg> </span> </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mb-0 fs-12 text-muted"> <span
                                            class="text-danger fw-semibold me-1 d-inline-block"><i
                                                class="fe fe-arrow-down"></i>-0.1%</span> vs Last Month </div> <a
                                        href="javascript:void(0)"> <span
                                            class="float-end text-decoration-underline fw-medium text-info">View All <i
                                                class="ti ti-arrow-narrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                <!-- Start:: row-5-->
                <div class="row">
                    <div class="col-xxl-5 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Sales Revenue</div>
                                <div class="dropdown"> <a href="javascript:void(0)"
                                        class="text-muted fs-12 tag-link">View All<i
                                            class="ti ti-arrow-narrow-right ms-1"></i></a> </div>
                            </div>
                            <div class="card-body p-2 pb-3">
                                <div class="p-2 pb-0 d-flex align-items-center justify-content-between">
                                    <div class=" d-flex flex-column"> <span class="h5 fw-medium">$12,542<span
                                                class="ms-2 mb-2 fs-11 badge bg-success-transparent text-success">+12.5%</span></span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2"> <button
                                            class="btn btn-outline-light border btn-sm mb-1"><i
                                                class="ti ti-plus mx-1"></i>Add Product</button>
                                        <div class="dropdown"> <a href="javascript:void(0);"
                                                class="btn btn-outline-light border btn-sm mb-1"
                                                data-bs-toggle="dropdown"> Weakly<i class="ti ti-chevron-down mx-1"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Weakly</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Monthly</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Yearly</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="crm-revenue-analytics"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Product By Sale
                                </div>
                                <div>
                                    <button class="btn btn-outline-light border btn-sm"><i
                                            class="ti ti-plus mx-1"></i>Add Product</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush mb-0">
                                    <li class="list-group-item">
                                        <div class="">
                                            <div class="d-flex align-items-center">
                                                <a href="profile.html"><span
                                                        class="avatar avatar-rounded avatar-md br-5 bg-primary-transparent svg-primary border border-primary border-opacity-25 me-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-primary"
                                                            width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                            <path
                                                                d="M216,115.54V208a8,8,0,0,1-8,8H160a8,8,0,0,1-8-8V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54A8,8,0,0,1,216,115.54Z"
                                                                opacity="0.2"></path>
                                                            <path
                                                                d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z">
                                                            </path>
                                                        </svg>
                                                    </span></a>
                                                <div class="w-100">
                                                    <a href="profile.html">
                                                        <h6 class="mb-2 fs-14 mt-1 fw-600 text-default">Home
                                                            Furniture</h6>
                                                    </a>
                                                    <p class="text-muted fs-12 mb-0">Increased by +12%</p>
                                                    <div class="progress progress-xs mt-2">
                                                        <div class="progress-bar progress-bar-animated bg-primary"
                                                            style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                                <div class="ms-auto my-auto">
                                                    <p class="mb-3 fs-14 fw-semibold">
                                                        $12,230
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="">
                                            <div class="d-flex align-items-center">
                                                <a href="profile.html"><span
                                                        class="avatar avatar-rounded avatar-md br-5 bg-secondary-transparent svg-secondary  border border-secondary border-opacity-25 me-3"><svg
                                                            xmlns="http://www.w3.org/2000/svg" class="svg-secondary"
                                                            width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                            <path
                                                                d="M128,129.09V232a8,8,0,0,1-3.84-1l-88-48.18a8,8,0,0,1-4.16-7V80.18a8,8,0,0,1,.7-3.25Z"
                                                                opacity="0.2"></path>
                                                            <path
                                                                d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z">
                                                            </path>
                                                        </svg></span></a>
                                                <div class="w-100">
                                                    <a href="profile.html">
                                                        <h6 class="mb-2 fs-14 mt-1 fw-600 text-default">Fashion</h6>
                                                    </a>
                                                    <p class="text-muted fs-12 mb-0">Increased by +11.2%</p>
                                                    <div class="progress progress-xs mt-2">
                                                        <div class="progress-bar progress-bar-animated bg-secondary"
                                                            style="width: 70%;"></div>
                                                    </div>
                                                </div>
                                                <div class="ms-auto my-auto">
                                                    <p class="mb-3 fs-14 fw-semibold">
                                                        $15,270
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="mb-0">
                                            <div class="d-flex align-items-center">
                                                <a href="profile.html"><span
                                                        class="avatar avatar-rounded avatar-md br-5 bg-success-transparent svg-success  border border-success border-opacity-25 me-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-success"
                                                            width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                            <path
                                                                d="M224,64V176a16,16,0,0,1-16,16H155.43L128,160l-27.43,32H48a16,16,0,0,1-16-16V64A16,16,0,0,1,48,48H208A16,16,0,0,1,224,64Z"
                                                                opacity="0.2"></path>
                                                            <path
                                                                d="M134.08,154.79a8,8,0,0,0-12.15,0l-48,56A8,8,0,0,0,80,224h96a8,8,0,0,0,6.07-13.21ZM97.39,208,128,172.29,158.61,208ZM232,64V176a24,24,0,0,1-24,24H192a8,8,0,0,1,0-16h16a8,8,0,0,0,8-8V64a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8V176a8,8,0,0,0,8,8H64a8,8,0,0,1,0,16H48a24,24,0,0,1-24-24V64A24,24,0,0,1,48,40H208A24,24,0,0,1,232,64Z">
                                                            </path>
                                                        </svg>
                                                    </span></a>
                                                <div class="w-100">
                                                    <a href="profile.html">
                                                        <h6 class="mb-2 fs-14 mt-1 fw-600 text-default">Electronics
                                                        </h6>
                                                    </a>
                                                    <p class="text-muted fs-12 mb-0">Increased by +15%</p>
                                                    <div class="progress progress-xs mt-2">
                                                        <div class="progress-bar  progress-bar-animated bg-success"
                                                            style="width: 50%;"></div>
                                                    </div>
                                                </div>
                                                <div class="ms-auto my-auto">
                                                    <p class="mb-3 fs-14 fw-semibold">
                                                        $11,230
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item mb-0">
                                        <div class="">
                                            <div class="d-flex align-items-center">
                                                <a href="profile.html"><span
                                                        class="avatar avatar-rounded avatar-md br-5 bg-info-transparent svg-info  border border-info border-opacity-25 me-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-info"
                                                            width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                            <path
                                                                d="M231.93,97.06l-13.87,104a8,8,0,0,1-7.93,6.94H45.87a8,8,0,0,1-7.93-6.94l-13.87-104A8,8,0,0,1,32,88H224A8,8,0,0,1,231.93,97.06Z"
                                                                opacity="0.2"></path>
                                                            <path
                                                                d="M136,120v56a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0ZM239.86,98.11,226,202.12A16,16,0,0,1,210.13,216H45.87A16,16,0,0,1,30,202.12l-13.87-104A16,16,0,0,1,32,80H68.37L122,18.73a8,8,0,0,1,12,0L187.63,80H224a16,16,0,0,1,15.85,18.11ZM89.63,80h76.74L128,36.15ZM224,96H32L45.87,200H210.13Zm-51.16,23.2-5.6,56A8,8,0,0,0,174.4,184a7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.95-7.2l5.6-56a8,8,0,0,0-15.92-1.6Zm-89.68,0a8,8,0,0,0-15.92,1.6l5.6,56a8,8,0,0,0,8,7.2,7.44,7.44,0,0,0,.81,0,8,8,0,0,0,7.16-8.76Z">
                                                            </path>
                                                        </svg>
                                                    </span></a>
                                                <div class="w-100">
                                                    <a href="profile.html">
                                                        <h6 class="mb-2 fs-14 mt-1 fw-600 text-default">Groceries
                                                        </h6>
                                                    </a>
                                                    <p class="text-muted fs-12 mb-0">Increased by +9%</p>
                                                    <div class="progress progress-xs mt-2">
                                                        <div class="progress-bar progress-bar-animated bg-info"
                                                            style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                                <div class="ms-auto my-auto">
                                                    <p class="mb-3 fs-14 fw-semibold">
                                                        $22,130
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Top Products</div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm btn-outline-light btn-wave border waves-effect waves-light"
                                        data-bs-toggle="dropdown" aria-expanded="false">View All
                                        <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">2023</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">2022</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">2021</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span
                                                                class="avatar avatar-rounded avatar-md p-1 bg-primary-transparent">
                                                                <img src="/storage/assets/images/ecommerce/png/1.png" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14 d-flex flex-column"><span
                                                                class="fs-14 fw-semibold">Sofa Chair</span><span
                                                                class="text-muted fs-12">Telicon</span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge  bg-primary-transparent">+2.3%</span>
                                                </td>
                                                <td class="fw-semibold">$12,256</td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Today</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">This
                                                                    Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                                    Month</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                                    Year</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span
                                                                class="avatar  avatar-rounded avatar-md p-1 bg-secondary-transparent">
                                                                <img src="/storage/assets/images/ecommerce/png/14.png" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14 d-flex flex-column"><span
                                                                class="fs-14 fw-semibold">Altra Pro Camera</span><span
                                                                class="text-muted fs-12">Mindmling Cam</span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-secondary-transparent">+15.3%</span>
                                                </td>
                                                <td class="fw-semibold">$13,567</td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Today</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">This
                                                                    Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                                    Month</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                                    Year</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span
                                                                class="avatar  avatar-rounded avatar-md p-1 bg-success-transparent m-1">
                                                                <img src="/storage/assets/images/ecommerce/png/33.png" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14 d-flex flex-column"><span
                                                                class="fs-14 fw-semibold">Cobra Perfume</span><span
                                                                class="text-muted fs-12">Cobra</span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">+11.6%</span>
                                                </td>
                                                <td class="fw-semibold">$12,250</td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Today</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">This
                                                                    Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                                    Month</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                                    Year</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span
                                                                class="avatar avatar-rounded avatar-md p-1 bg-info-transparent m-1">
                                                                <img src="/storage/assets/images/ecommerce/png/10.png" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14 d-flex flex-column"><span
                                                                class="fs-14 fw-semibold">Alarm Clock</span><span
                                                                class="text-muted fs-12">Samsong</span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-transparent">+15.4%</span>
                                                </td>
                                                <td class="fw-semibold">$17,650</td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Today</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">This
                                                                    Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                                    Month</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                                    Year</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0 rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1">
                                                            <span
                                                                class="avatar avatar-rounded avatar-md bg-warning-transparent p-1 m-1">
                                                                <img src="/storage/assets/images/ecommerce/png/37.png" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14 d-flex flex-column"><span
                                                                class="fs-14 fw-semibold">Men stylish shoe</span><span
                                                                class="text-muted fs-12">Adidas</span></div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0 rounded">
                                                    <span class="badge bg-danger-transparent">+16.7%</span>
                                                </td>
                                                <td class="fw-semibold border-bottom-0 rounded">$16,756</td>
                                                <td class="text-center border-bottom-0 rounded">
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-sm btn-light" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Today</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">This
                                                                    Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                                    Month</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                                    Year</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-5 -->

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

    <!-- Apex Charts JS -->
    <script src="/storage/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Index JS -->
    <script src="/storage/assets/js/widgets.js"></script>

   @include('zynix.partials.custom_switcherjs')

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>