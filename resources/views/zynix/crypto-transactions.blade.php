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
                        <h1 class="page-title fw-medium fs-18 mb-2">Transactions</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crypto</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Transactions</li>
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
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                                    <div class="col">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="avatar avatar-md bg-primary svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                                        </span>
                                                        <div id="newtaskschart"></div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="d-block mb-1 mt-2">New</span>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h3 class="fw-medium mb-0"><span class="count-up" data-count="43">43</span> </h3>
                                                            <span class="badge bg-success-transparent">12,345</span>
                                                        </div>
                                                        </div>
                                                        <div>
                                                            <span class="fw-semibold mb-1 text-muted">This Year</span>
                                                            <span class="d-block text-success fs-13"><i class="ti ti-arrow-up"></i>18.21%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="avatar avatar-md bg-secondary svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                                        </span>
                                                        <div id="completetaskschart"></div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="d-block mb-1 mt-2">Completed</span>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h3 class="fw-medium mb-0"><span class="count-up" data-count="120">120</span> </h3>
                                                            <span class="badge bg-danger-transparent">12,345</span>
                                                        </div>
                                                        </div>
                                                        <div>
                                                            <span class="fw-semibold mb-1 text-muted">This Year</span>
                                                            <span class="d-block text-danger fs-13"><i class="ti ti-arrow-down"></i>12.61%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="avatar avatar-md bg-success svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                                        </span>
                                                        <div id="ongoingtaskschart"></div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="d-block mb-1 mt-2">OnGoing</span>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h3 class="fw-medium mb-0"><span class="count-up" data-count="270">270</span> </h3>
                                                            <span class="badge bg-success-transparent">12,345</span>
                                                        </div>
                                                        </div>
                                                        <div>
                                                            <span class="fw-semibold mb-1 text-muted">This Year</span>
                                                            <span class="d-block text-success fs-13"><i class="ti ti-arrow-up"></i>11.81%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="avatar avatar-md bg-info svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                                        </span>
                                                        <div id="pendingtaskschart"></div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="d-block mb-1 mt-2">Pending</span>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h3 class="fw-medium mb-0"><span class="count-up" data-count="98">98</span> </h3>
                                                            <span class="badge bg-danger-transparent">12,345</span>
                                                        </div>
                                                        </div>
                                                        <div>
                                                            <span class="fw-semibold mb-1 text-muted">This Year</span>
                                                            <span class="d-block text-danger fs-13"><i class="ti ti-arrow-up"></i>13.65%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div class="">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="avatar avatar-md bg-warning svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                                        </span>
                                                        <div id="reviewtaskschart"></div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="d-block mb-1 mt-2">Rejected</span>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h3 class="fw-medium mb-0"><span class="count-up" data-count="120">120</span> </h3>
                                                            <span class="badge bg-success-transparent">12,345</span>
                                                        </div>
                                                        </div>
                                                        <div>
                                                            <span class="fw-semibold mb-1 text-muted">This Year</span>
                                                            <span class="d-block text-success fs-13"><i class="ti ti-arrow-up"></i>4.21%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Transaction History
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <div>
                                        <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Year</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <button class="btn btn-secondary btn-sm btn-wave">View All</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th scope="col">Sender</th>
                                                <th scope="col">Transaction Hash</th>
                                                <th scope="col">Coin</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Receiver</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="avatar avatar-sm avatar-rounded bg-light">
                                                        <i class="ti ti-arrow-narrow-up text-success fw-medium fs-16"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/10.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Jack Miller</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>#1242232401</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/crypto-currencies/regular/Bitcoin.svg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Bitcoin</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>24,Jul 2024 - 4:23PM</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">+0.041</span>
                                                </td>
                                                <td>
                                                    <span>Texas Steel</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Success</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="download"><i class="ri-download-2-line"></i></button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="avatar avatar-sm avatar-rounded bg-light">
                                                        <i class="ti ti-arrow-narrow-down text-danger fw-medium fs-16"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/5.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Samantha Taylor</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>#1242232402</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/crypto-currencies/regular/Dash.svg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Dashcoin</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>20,Jul 2024 - 12:47PM</span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">-0.284</span>
                                                </td>
                                                <td>
                                                    <span>Stuart Little</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-transparent">Pending</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="download"><i class="ri-download-2-line"></i></button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="avatar avatar-sm avatar-rounded bg-light">
                                                        <i class="ti ti-arrow-narrow-up text-success fw-medium fs-16"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/12.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Brian Jhonson</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>#1242232403</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/crypto-currencies/regular/Euro.svg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Euro</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>14,Aug 2024 - 10:25AM</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">+0.943</span>
                                                </td>
                                                <td>
                                                    <span>Melissa Smith</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Success</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="download"><i class="ri-download-2-line"></i></button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="avatar avatar-sm avatar-rounded bg-light">
                                                        <i class="ti ti-arrow-narrow-up text-success fw-medium fs-16"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/15.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Liam Anderson</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>#1242232404</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/crypto-currencies/regular/Ethereum.svg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Etherium</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>10,Jul 2024 - 4:14PM</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">+0.582</span>
                                                </td>
                                                <td>
                                                    <span>Alexander Clark</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger-transparent">Failed</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="download"><i class="ri-download-2-line"></i></button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="avatar avatar-sm avatar-rounded bg-light">
                                                        <i class="ti ti-arrow-narrow-up text-success fw-medium fs-16"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/4.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Isabella Brown</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>#1242232405</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/crypto-currencies/regular/Golem.svg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Golem</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>19,Aug 2024 - 11:35AM</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">+0.290</span>
                                                </td>
                                                <td>
                                                    <span>Elijah Davis</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Success</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="download"><i class="ri-download-2-line"></i></button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="avatar avatar-sm avatar-rounded bg-light">
                                                        <i class="ti ti-arrow-narrow-down text-danger fw-medium fs-16"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/7.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Sophia Lee</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>#1242232406</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/crypto-currencies/regular/litecoin.svg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Litecoin</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>12,Jun 2024 - 2:45PM</span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">-0.147</span>
                                                </td>
                                                <td>
                                                    <span>Harper Taylor</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Success</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="download"><i class="ri-download-2-line"></i></button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="avatar avatar-sm avatar-rounded bg-light">
                                                        <i class="ti ti-arrow-narrow-up text-success fw-medium fs-16"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/6.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Evelyn Clark</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>#1242232407</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/crypto-currencies/regular/Ripple.svg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Ripple</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>27,Jul 2024 - 10:18AM</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">+1.05</span>
                                                </td>
                                                <td>
                                                    <span>William Brown</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Success</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="download"><i class="ri-download-2-line"></i></button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="avatar avatar-sm avatar-rounded bg-light">
                                                        <i class="ti ti-arrow-narrow-up text-success fw-medium fs-16"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/11.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Liam Anderson</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>#1242232408</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/crypto-currencies/regular/monero.svg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Monero</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>16,Aug 2024 - 9:25PM</span>
                                                </td>
                                                <td>
                                                    <span class="text-success">+0.625</span>
                                                </td>
                                                <td>
                                                    <span>Amelia Davis</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-info-transparent">Inprogress</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="download"><i class="ri-download-2-line"></i></button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="avatar avatar-sm avatar-rounded bg-light">
                                                        <i class="ti ti-arrow-narrow-down text-danger fw-medium fs-16"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/2.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Harper Taylor</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>#1242232409</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/crypto-currencies/regular/Zcash.svg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Zcash</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>24,Jul 2024 - 12:47PM</span>
                                                </td>
                                                <td>
                                                    <span class="text-danger">-0.293</span>
                                                </td>
                                                <td>
                                                    <span>Benjamin Martinez</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-info-transparent">Inprogress</span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="download"><i class="ri-download-2-line"></i></button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <span class="avatar avatar-sm avatar-rounded bg-light">
                                                        <i class="ti ti-arrow-narrow-up text-success fw-medium fs-16"></i>
                                                    </span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/16.jpg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Lucas Taylor</div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span>#1242232410</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/crypto-currencies/regular/Decred.svg" alt="">
                                                        </span>
                                                        <div class="fw-medium">Decred</div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span>24,Jul 2024 - 12:47PM</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span class="text-success">+0.893</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span>Mia Wilson</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span class="badge bg-success-transparent">Success</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <button class="btn btn-primary-light btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="download"><i class="ri-download-2-line"></i></button>
                                                    <button class="btn btn-danger-light btn-icon ms-1 btn-sm task-delete-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="ri-delete-bin-5-line"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination mb-0 float-end">
                                        <li class="page-item disabled">
                                            <a class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

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

    <!-- Internal Invoice List JS -->
    <script src="/storage/assets/js/crypto-transactions-list.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>