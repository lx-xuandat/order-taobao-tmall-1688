<!-- include mainhead.html"-->

  <!-- noioslider CSS -->
  <link rel="stylesheet" href="/storage/assets/libs/nouislider/nouislider.min.css">

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
                        <h1 class="page-title fw-medium fs-18 mb-2">Search Company</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Jobs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Search Company</li>
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
                <div class="row">
                    <div class="col-xxl-3 col-xl-5">
                        <div class="card custom-card products-navigation-card">
                            <div class="card-body p-0">
                                <div class="p-4 border-bottom">
                                    <h6 class="fw-semibold mb-2">Industry Type</h6>
                                    <div class="input-group mt-2">
                                        <input type="text" class="form-control" placeholder="Search"
                                            aria-label="Search">
                                    </div>
                                    <div class="px-2 py-3 pb-0">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="c-1">
                                            <label class="form-check-label" for="c-1">
                                                Research & Developement
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="c-2">
                                            <label class="form-check-label" for="c-2">
                                                Accounting
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="c-3">
                                            <label class="form-check-label" for="c-3">
                                                Accounting
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="c-4">
                                            <label class="form-check-label" for="c-4">
                                                Administrative Support
                                            </label>
                                        </div>
                                        <a href="javascript:void(0);" class="text-decoration-underline text-primary">View All</a>
                                    </div>
                                </div>
                                <div class="p-4 border-bottom">
                                    <h6 class="fw-semibold mb-3">Location</h6>
                                    <select class="form-control" data-trigger name="choices-single-default10"
                                        id="choices-single-default10">
                                        <option value="">Select Location</option>
                                        <option value="Choice 1">Hyderabad</option>
                                        <option value="Choice 2">Banglore</option>
                                        <option value="Choice 3">Chennai</option>
                                    </select>
                                </div>
                                <div class="p-4 border-bottom">
                                    <h6 class="fw-semibold mb-0">Company Size Range</h6>
                                    <div class="px-2 py-3 pb-0">
                                        <div id="nonlinear"></div>
                                        <div class="d-flex flex-wrap mt-4">
                                            <div class="fw-semibold mb-1 px-3 py-1 border rounded"><span id="lower-value"></span></div>
                                           <span class="fw-semibold mb-1 px-2 py-1">-</span>
                                            <div class="fw-semibold mb-1 px-3 py-1 border rounded"><span id="upper-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 border-bottom">
                                    <h6 class="fw-semibold mb-3">Type of Employement</h6>
                                    <select class="form-control" data-trigger name="choices-single-default1"
                                        id="choices-single-default1">
                                        <option value="">Select Type</option>
                                        <option value="Choice 1">Full Time</option>
                                        <option value="Choice 2">Part Time</option>
                                        <option value="Choice 3">Internship</option>
                                    </select>
                                </div>
                                <div class="p-4">
                                    <h6 class="fw-semibold mb-3">Recruiter Type</h6>
                                    <select class="form-control" data-trigger name="choices-single-default2"
                                        id="choices-single-default2">
                                        <option value="">Select Type</option>
                                        <option value="Choice 1">Direct Company</option>
                                        <option value="Choice 2">Agency</option>
                                    </select>
                                </div>
                                <div class="px-4 py-3 border-top text-center">
                                    <button class="btn btn-primary-light me-2">Clear All</button>
                                    <button class="btn btn-primary">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-7">
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-12">
                                <div class="input-group companies-search-input">
                                    <input type="text" class="form-control form-control-lg w-25" aria-label="Text input with segmented dropdown button" placeholder="Enter your keyword here">
                                    <select class="form-select form-select-lg rounded-0" name="choices-single-default" id="choices-single-default" data-trigger>
                                        <option value="">All Categories</option>
                                        <option value="Choice 1">Software Dveloper</option>
                                        <option value="Choice 2">Web Developer</option>
                                        <option value="Choice 3">Software Architect</option>
                                        <option value="Choice 4">IT Hardware</option>
                                        <option value="Choice 5">Network Engineer</option>
                                        <option value="Choice 6">Angular Developer</option>
                                        <option value="Choice 7">React Developer</option>
                                    </select>
                                    <input type="text" class="form-control form-control-lg w-25" aria-label="Text input with segmented dropdown button" placeholder="Search by location">
                                    <button type="button" class="btn btn-primary"><i class="ri-search-line"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <h5 class="fw-medium mb-0 flex-grow-1">1287 <span class="fw-normal fs-18">Companies match for your search</span> </h5>
                                            <div class="btn-group">
                                                <button class="btn btn-outline-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Sort By
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Premium</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Most Relevant</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Fresher</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Experienced</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Bond Agreement</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Flexible Shift</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day Shift</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="btn-list float-end">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded bg-light text-default avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-line fs-14"></i></span></a>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <span class="avatar avatar-xl bg-light avatar-rounded">
                                                <span class="avatar avatar-lg bg-white avatar-rounded">
                                                    <img src="/storage/assets/images/company-logos/1.png" alt="">
                                                </span>
                                            </span>
                                            <div class="ms-2">
                                                <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">Costco Wholesale Corporation <i class="bi bi-check-circle-fill text-success fs-16" data-bs-toggle="tooltip" title="Verified company"></i></a></h5>
                                                <div class="d-flex gap-2">
                                                    <a href="javascript:void(0);"><i class="bi bi-geo-alt fs-11"></i> Kondapur, Hyderabad, </a>
                                                    <p class="mb-0 text-muted">Establishment year - 2019</p>
                                                </div>
                                                <a href="javascript:void(0);" class="text-primary text-decoration-underline">Costcowholesalecorporation.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="flex-grow-1">
                                                <a href="javascript:void(0);" class="badge badge-md bg-primary-transparent" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 345</a>
                                                <a href="javascript:void(0);" class="badge badge-md bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 50</a>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-wave btn-sm btn-primary">
                                                View Profile <i class="ri-arrow-right-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="btn-list float-end">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded bg-light text-default avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-fill text-primary fs-14"></i></span></a>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <span class="avatar avatar-xl bg-light avatar-rounded">
                                                <span class="avatar avatar-lg bg-white avatar-rounded">
                                                    <img src="/storage/assets/images/company-logos/2.png" alt="">
                                                </span>
                                            </span>
                                            <div class="ms-2">
                                                <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">Bayerische Motoren Werke AG <i class="bi bi-check-circle-fill text-success fs-16" data-bs-toggle="tooltip" title="Verified company"></i></a></h5>
                                                <div class="d-flex gap-2">
                                                    <a href="javascript:void(0);"><i class="bi bi-geo-alt fs-11"></i> Gachibowli, Hyderabad, </a>
                                                    <p class="mb-0 text-muted">Establishment year - 2015</p>
                                                </div>
                                                <a href="javascript:void(0);" class="text-primary text-decoration-underline">bayerische.solutions.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="flex-grow-1">
                                                <a href="javascript:void(0);" class="badge badge-md bg-primary-transparent" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 146</a>
                                                <a href="javascript:void(0);" class="badge badge-md bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 40</a>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-wave btn-primary btn-sm">
                                                View Profile <i class="ri-arrow-right-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="btn-list float-end">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded bg-light text-default avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-fill text-primary fs-14"></i></span></a>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <span class="avatar avatar-xl bg-light avatar-rounded">
                                                <span class="avatar avatar-lg bg-white avatar-rounded">
                                                    <img src="/storage/assets/images/company-logos/3.png" alt="">
                                                </span>
                                            </span>
                                            <div class="ms-2">
                                                <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Verizon Communications Inc. <i class="bi bi-check-circle-fill text-success fs-16" data-bs-toggle="tooltip" title="Verified company"></i></a></h5>
                                                <div class="d-flex gap-2">
                                                    <a href="javascript:void(0);"><i class="bi bi-geo-alt fs-11"></i> Gachibowli, Chennai, </a>
                                                    <p class="mb-0 text-muted">Establishment year - 2013</p>
                                                </div>
                                                <a href="javascript:void(0);" class="text-primary text-decoration-underline">verizon.communications.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="flex-grow-1">
                                                <a href="javascript:void(0);" class="badge badge-md bg-primary-transparent" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 56</a>
                                                <a href="javascript:void(0);" class="badge badge-md bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 35</a>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-wave btn-primary btn-sm">
                                                View Profile <i class="ri-arrow-right-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="btn-list float-end">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded bg-light text-default avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-line fs-14"></i></span></a>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <span class="avatar avatar-xl bg-light avatar-rounded">
                                                <span class="avatar avatar-lg bg-white avatar-rounded">
                                                    <img src="/storage/assets/images/company-logos/7.png" alt="">
                                                </span>
                                            </span>
                                            <div class="ms-2">
                                                <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> The Walt Disney Pvt Ltd <i class="bi bi-check-circle-fill text-success fs-16" data-bs-toggle="tooltip" title="Verified company"></i></a></h5>
                                                <div class="d-flex gap-2">
                                                    <a href="javascript:void(0);"><i class="bi bi-geo-alt fs-11"></i> Gachibowli, Banglore, </a>
                                                    <p class="mb-0 text-muted">Establishment year - 2002</p>
                                                </div>
                                                <a href="javascript:void(0);" class="text-primary text-decoration-underline">waltdisney.pvt.ltd</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="flex-grow-1">
                                                <a href="javascript:void(0);" class="badge badge-md bg-primary-transparent" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 120</a>
                                                <a href="javascript:void(0);" class="badge badge-md bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 10</a>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-wave btn-primary btn-sm">
                                                View Profile <i class="ri-arrow-right-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="btn-list float-end">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded bg-light text-default avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-line fs-14"></i></span></a>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <span class="avatar avatar-xl bg-light avatar-rounded">
                                                <span class="avatar avatar-lg bg-white avatar-rounded">
                                                    <img src="/storage/assets/images/company-logos/5.png" alt="">
                                                </span>
                                            </span>
                                            <div class="ms-2">
                                                <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Northrop Grumman Corporation <i class="bi bi-check-circle-fill text-success fs-16" data-bs-toggle="tooltip" title="Verified company"></i></a></h5>
                                                <div class="d-flex gap-2">
                                                    <a href="javascript:void(0);"><i class="bi bi-geo-alt fs-11"></i> Gachibowli, Banglore, </a>
                                                    <p class="mb-0 text-muted">Establishment year - 2017</p>
                                                </div>
                                                <a href="javascript:void(0);" class="text-primary text-decoration-underline">northropgrumman.orporation.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="flex-grow-1">
                                                <a href="javascript:void(0);" class="badge badge-md bg-primary-transparent" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 120</a>
                                                <a href="javascript:void(0);" class="badge badge-md bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 10</a>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-wave btn-primary btn-sm">
                                                View Profile <i class="ri-arrow-right-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="btn-list float-end">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded bg-light text-default avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-fill text-primary fs-14"></i></span></a>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <span class="avatar avatar-xl bg-light avatar-rounded">
                                                <span class="avatar avatar-lg bg-white avatar-rounded">
                                                    <img src="/storage/assets/images/company-logos/6.png" alt="">
                                                </span>
                                            </span>
                                            <div class="ms-2">
                                                <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Starbucks Corporation <i class="bi bi-check-circle-fill text-success fs-16" data-bs-toggle="tooltip" title="Verified company"></i></a></h5>
                                                <div class="d-flex gap-2">
                                                    <a href="javascript:void(0);"><i class="bi bi-geo-alt fs-11"></i> Kukatpally, Hyderabad, </a>
                                                    <p class="mb-0 text-muted">Establishment year - 2000</p>
                                                </div>
                                                <a href="javascript:void(0);" class="text-primary text-decoration-underline">starbuckscorporation.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="flex-grow-1">
                                                <a href="javascript:void(0);" class="badge badge-md bg-primary-transparent" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 120</a>
                                                <a href="javascript:void(0);" class="badge badge-md bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 10</a>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-wave btn-primary btn-sm">
                                                View Profile <i class="ri-arrow-right-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="btn-list float-end">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded bg-light text-default avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-line fs-14"></i></span></a>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <span class="avatar avatar-xl bg-light avatar-rounded">
                                                <span class="avatar avatar-lg bg-white avatar-rounded">
                                                    <img src="/storage/assets/images/company-logos/10.png" alt="">
                                                </span>
                                            </span>
                                            <div class="ms-2">
                                                <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">Robinhood Markets, Inc <i class="bi bi-check-circle-fill text-success fs-16" data-bs-toggle="tooltip" title="Verified company"></i></a></h5>
                                                <div class="d-flex gap-2">
                                                    <a href="javascript:void(0);"><i class="bi bi-geo-alt fs-11"></i> Kondapur, Hyderabad, </a>
                                                    <p class="mb-0 text-muted">Establishment year - 2019</p>
                                                </div>
                                                <a href="javascript:void(0);" class="text-primary text-decoration-underline">robinhood.markets.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="flex-grow-1">
                                                <a href="javascript:void(0);" class="badge badge-md bg-primary-transparent" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 345</a>
                                                <a href="javascript:void(0);" class="badge badge-md bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 50</a>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-wave btn-primary btn-sm">
                                                View Profile <i class="ri-arrow-right-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="btn-list float-end">
                                            <a href="javascript:void(0);" class="avatar avatar-rounded bg-light text-default avatar-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add to Wishlist" title="Add to Wishlist"><span><i class="ri-heart-3-line fs-14"></i></span></a>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <span class="avatar avatar-xl bg-light avatar-rounded">
                                                <span class="avatar avatar-lg bg-white avatar-rounded">
                                                    <img src="/storage/assets/images/company-logos/9.png" alt="">
                                                </span>
                                            </span>
                                            <div class="ms-2">
                                                <h5 class="fw-medium mb-0 d-flex align-items-center"><a href="javascript:void(0);">International Data Group, Inc. <i class="bi bi-check-circle-fill text-success fs-16" data-bs-toggle="tooltip" title="Verified company"></i></a></h5>
                                                <div class="d-flex gap-2">
                                                    <a href="javascript:void(0);"><i class="bi bi-geo-alt fs-11"></i> Gachibowli, Hyderabad, </a>
                                                    <p class="mb-0 text-muted">Establishment year - 2015</p>
                                                </div>
                                                <a href="javascript:void(0);" class="text-primary text-decoration-underline">international.group.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div class="flex-grow-1">
                                                <a href="javascript:void(0);" class="badge badge-md bg-primary-transparent" data-bs-toggle="tooltip" title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 146</a>
                                                <a href="javascript:void(0);" class="badge badge-md bg-secondary-transparent"><i class="bi bi-briefcase me-1"></i>Vacancies : 40</a>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-wave btn-sm btn-primary">
                                                View Profile <i class="ri-arrow-right-line align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="pagination mb-4 justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0);">
                                    Prev
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item">
                                <a class="page-link text-primary" href="javascript:void(0);">
                                    next
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End:: row-1 -->

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

   @include('zynix.partials.custom_switcherjs')


    <!-- noUiSlider JS -->
   <script src="/storage/assets/libs/nouislider/nouislider.min.js"></script>
   <script src="/storage/assets/libs/wnumb/wNumb.min.js"></script>

    <script src="/storage/assets/js/jobcompanysearch.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>