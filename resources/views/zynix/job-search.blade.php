<!-- include mainhead.html"-->

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
                <div
                    class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Search Jobs</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Jobs</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Search Jobs</li>
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
                        <div class="card custom-card">
                            <div class="card-body p-3">
                                <div class="row align-items-center">
                                    <div class="col-sm-8">
                                        <div class="d-flex">
                                            <h5 class="fw-medium mb-0"><span class="fw-normal">Showing</span> 3456 Jobs
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                        <div class="btn-group">
                                            <button class="btn btn-outline-light border dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Featured</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Most
                                                        Relevant</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Best Rated</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-4">
                        <div class="card custom-card products-navigation-card">
                            <div class="card-body p-0">
                                <div class="p-4 border-bottom">
                                    <h6 class="fw-semibold mb-2">Categories</h6>
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
                                              Business Process
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
                                    <h6 class="fw-semibold mb-3">Qualification</h6>
                                    <select class="form-control" data-trigger name="choices-single-default"
                                        id="choices-single-default">
                                        <option value="">Select Qualification</option>
                                        <option value="Choice 1">All Education Levels</option>
                                        <option value="Choice 2">10th Pass and Above</option>
                                        <option value="Choice 3">12th Pass and Above</option>
                                        <option value="Choice 4">Diploma and Graduate</option>
                                    </select>
                                </div>
                                <div class="p-4 border-bottom">
                                    <h6 class="fw-semibold mb-3">Experience</h6>
                                    <select class="form-control" data-trigger name="choices-single-default1"
                                        id="choices-single-default1">
                                        <option value="">Select Experince</option>
                                        <option value="Choice 1">Fresher</option>
                                        <option value="Choice 2">Less than 1 year</option>
                                        <option value="Choice 3">Less than 2 year</option>
                                        <option value="Choice 4">Less than 3 year</option>
                                    </select>
                                </div>
                                <div class="p-4 border-bottom">
                                    <h6 class="fw-semibold mb-0">Company Size Range</h6>
                                    <div class="px-2 py-3 pb-0">
                                        <div id="nonlinear"></div>
                                        <div class="d-flex flex-wrap mt-4">
                                            <div class="fw-semibold px-3 mb-1 py-1 border rounded"><span id="lower-value"></span></div>
                                           <span class="fw-semibold px-2 mb-1 py-1">-</span>
                                            <div class="fw-semibold px-3 mb-1 py-1 border rounded"><span id="upper-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 border-bottom">
                                    <h6 class="fw-semibold mb-3">Job Type</h6>
                                    <select class="form-control" data-trigger name="choices-single-default3"
                                        id="choices-single-default3">
                                        <option value="">Select Type</option>
                                        <option value="Choice 1">Full Time</option>
                                        <option value="Choice 2">Part Time</option>
                                        <option value="Choice 3">Internship</option>
                                    </select>
                                </div>
                                <div class="p-4">
                                    <h6 class="fw-semibold mb-3">Skills</h6>
                                    <select class="form-control" data-trigger name="choices-single-default4"
                                        id="choices-single-default4">
                                        <option value="">Select Skill</option>
                                        <option value="choices">HTML5</option>
                                        <option value="Choice 1">Javascript</option>
                                        <option value="Choice 2">PHP</option>
                                        <option value="Choice 2">React JS</option>
                                    </select>
                                </div>
                                <div class="px-4 py-3 border-top text-center">
                                    <button class="btn btn-primary-light me-2 mb-1">Clear All</button>
                                    <button class="btn btn-primary mb-1">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-8">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card featured-jobs">
                                    <div class="card-body">
                                        <div class="bg-light border border-bottom-0 p-3">
                                            <div class="btn-list float-end">
                                                <a href="javascript:void(0);"
                                                    class="avatar avatar-rounded avatar-sm bg-primary-transparent text-primary"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Add to wishlist"
                                                    data-bs-original-title="Add to wishlist"><span><i
                                                            class="ri-heart-3-line fs-15"></i></span></a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <span
                                                    class="avatar avatar-lg bg-primary-transparent">
                                                    <i class="ri-html5-fill fs-30 text-primary"></i>
                                                </span>
                                                <div>
                                                    <h5 class="fw-medium mb-0 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> HTML Developer - Fresher</a></h5>
                                                    <a href="javascript:void(0);">Spotech Technical Solutions</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border p-3">
                                            <div class="popular-tags mb-3">
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-briefcase text-muted me-1"></i> 13 Openings</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-mortarboard text-muted me-1"></i> Graduate</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-clock text-muted me-1"></i> Min - 2Years</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="fw-medium mb-0">$25,000<span class="text-muted fw-normal">/</span><span class="text-muted fs-12">Month</span></h5>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-sm fw-medium fs-14 d-inline-flex">
                                                    Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card featured-jobs">
                                    <div class="card-body">
                                        <div class="bg-light p-3 border border-bottom-0">
                                            <div class="btn-list float-end">
                                                <a href="javascript:void(0);"
                                                class="avatar avatar-rounded avatar-sm bg-primary-transparent"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Add to wishlist"
                                                data-bs-original-title="Add to wishlist"><span><i
                                                        class="ri-heart-3-fill text-primary fs-15"></i></span></a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <span
                                                class="avatar avatar-lg bg-secondary-transparent">
                                                <i class="ri-reactjs-line fs-30 text-secondary"></i>
                                            </span>
                                                <div>
                                                    <h5 class="fw-medium mb-0 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> React Lead Developer</a></h5>
                                                    <a href="javascript:void(0);">Infratech PVT LTD</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border p-3">
                                          <div class="popular-tags mb-3">
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-briefcase text-muted me-1"></i> 13 Openings</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-mortarboard text-muted me-1"></i> Graduate</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-clock text-muted me-1"></i> Min - 2Years</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="fw-medium mb-0">$17,000<span class="text-muted fw-normal">/</span><span class="text-muted fs-12">Month</span></h5>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-sm fw-medium fs-14 d-inline-flex">
                                                    Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card featured-jobs">
                                    <div class="card-body">
                                        <div class="bg-light p-3 border border-bottom-0">
                                            <div class="btn-list float-end">
                                                <a href="javascript:void(0);"
                                                class="avatar avatar-rounded avatar-sm bg-primary-transparent text-primary"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Add to wishlist"
                                                data-bs-original-title="Add to wishlist"><span><i
                                                        class="ri-heart-3-line fs-15"></i></span></a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <span
                                                class="avatar avatar-lg bg-success-transparent">
                                                <i class="ri-vuejs-line fs-30 text-success"></i>
                                            </span>
                                                <div>
                                                    <h5 class="fw-medium mb-0 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> Vuejs Frontend Developer</a></h5>
                                                    <a href="javascript:void(0);">G Technical Solutions</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border p-3">
                                          <div class="popular-tags mb-3">
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-briefcase text-muted me-1"></i> 13 Openings</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-mortarboard text-muted me-1"></i> Graduate</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-clock text-muted me-1"></i> Min - 2Years</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="fw-medium mb-0">$16,000<span class="text-muted fw-normal">/</span><span class="text-muted fs-12">Month</span></h5>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-sm fw-medium fs-14 d-inline-flex">
                                                    Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card featured-jobs">
                                    <div class="card-body">
                                        <div class="bg-light p-3 border border-bottom-0">
                                            <div class="btn-list float-end">
                                                <a href="javascript:void(0);"
                                                class="avatar avatar-rounded avatar-sm bg-primary-transparent text-primary"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Add to wishlist"
                                                data-bs-original-title="Add to wishlist"><span><i
                                                        class="ri-heart-3-line fs-15"></i></span></a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <span
                                                class="avatar avatar-lg bg-info-transparent">
                                                <i class="ri-wordpress-line fs-30 text-info"></i>
                                            </span>
                                                <div>
                                                    <h5 class="fw-medium mb-0 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> Wordpress Developer - Remote</a>
                                                    </h5>
                                                    <a href="javascript:void(0);">Hardware Private Solutions</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border p-3">
                                          <div class="popular-tags mb-3">
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-briefcase text-muted me-1"></i> 13 Openings</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-mortarboard text-muted me-1"></i> Graduate</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-clock text-muted me-1"></i> Min - 2Years</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="fw-medium mb-0">$12,000<span class="text-muted fw-normal">/</span><span class="text-muted fs-12">Month</span></h5>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-sm fw-medium fs-14 d-inline-flex">
                                                    Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card featured-jobs">
                                    <div class="card-body">
                                        <div class="bg-light p-3 border border-bottom-0">
                                            <div class="btn-list float-end">
                                                <a href="javascript:void(0);"
                                                class="avatar avatar-rounded avatar-sm bg-primary-transparent"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Add to wishlist"
                                                data-bs-original-title="Add to wishlist"><span><i
                                                        class="ri-heart-3-fill text-primary fs-15"></i></span></a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <span class="avatar avatar-lg bg-warning-transparent">
                                                    <i class="ri-html5-fill fs-30 text-warning"></i>
                                                </span>
                                                <div>
                                                    <h5 class="fw-medium mb-0 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> HTML Developer - Fresher</a></h5>
                                                    <a href="javascript:void(0);">Spotech Technical Solutions</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 border">
                                          <div class="popular-tags mb-3">
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-briefcase text-muted me-1"></i> 13 Openings</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-mortarboard text-muted me-1"></i> Graduate</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-clock text-muted me-1"></i> Min - 2Years</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="fw-medium mb-0">$10,000<span class="text-muted fw-normal">/</span><span class="text-muted fs-12">Month</span></h5>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-sm fw-medium fs-14 d-inline-flex">
                                                    Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card featured-jobs">
                                    <div class="card-body">
                                        <div class="bg-light p-3 border border-bottom-0">
                                            <div class="btn-list float-end">
                                                <a href="javascript:void(0);"
                                                class="avatar avatar-rounded avatar-sm bg-primary-transparent text-primary"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Add to wishlist"
                                                data-bs-original-title="Add to wishlist"><span><i
                                                        class="ri-heart-3-fill text-primary fs-15"></i></span></a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <span class="avatar avatar-lg bg-primary-transparent">
                                                    <i class="ri-reactjs-line fs-30 text-primary"></i>
                                                </span>
                                                <div>
                                                    <h5 class="fw-medium mb-0 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> React Lead Developer</a></h5>
                                                    <a href="javascript:void(0);">Infratech PVT LTD</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border p-3">
                                          <div class="popular-tags mb-3">
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-briefcase text-muted me-1"></i> 13 Openings</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-mortarboard text-muted me-1"></i> Graduate</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-clock text-muted me-1"></i> Min - 2Years</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="fw-medium mb-0">$20,000<span class="text-muted fw-normal">/</span><span class="text-muted fs-12">Month</span></h5>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-sm fw-medium fs-14 d-inline-flex">
                                                    Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card featured-jobs">
                                    <div class="card-body">
                                        <div class="bg-light p-3 border border-bottom-0">
                                            <div class="btn-list float-end">
                                                <a href="javascript:void(0);"
                                                class="avatar avatar-rounded avatar-sm bg-primary-transparent text-primary"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Add to wishlist"
                                                data-bs-original-title="Add to wishlist"><span><i
                                                        class="ri-heart-3-line fs-15"></i></span></a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <span
                                                class="avatar avatar-lg bg-secondary-transparent">
                                                <i class="ri-vuejs-line fs-30 text-secondary"></i>
                                            </span>
                                                <div>
                                                    <h5 class="fw-medium mb-0 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> Vuejs Frontend Developer</a></h5>
                                                    <a href="javascript:void(0);">G Technical Solutions</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 border">
                                          <div class="popular-tags mb-3">
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-briefcase text-muted me-1"></i> 13 Openings</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-mortarboard text-muted me-1"></i> Graduate</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-clock text-muted me-1"></i> Min - 2Years</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="fw-medium mb-0">$55,000<span class="text-muted fw-normal">/</span><span class="text-muted fs-12">Month</span></h5>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-primary fw-medium fs-14 d-inline-flex">
                                                    Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card featured-jobs">
                                    <div class="card-body">
                                        <div class="bg-light p-3 border border-bottom-0">
                                            <div class="btn-list float-end">
                                                <a href="javascript:void(0);"
                                                class="avatar avatar-rounded avatar-sm bg-primary-transparent text-primary"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Add to wishlist"
                                                data-bs-original-title="Add to wishlist"><span><i
                                                        class="ri-heart-3-fill text-primary fs-15"></i></span></a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-2 align-items-center">
                                                <span class="avatar avatar-lg bg-danger-transparent">
                                                    <i class="ri-html5-fill fs-30 text-danger"></i>
                                                </span>
                                                <div>
                                                    <h5 class="fw-medium mb-0 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> HTML Developer - Fresher</a></h5>
                                                    <a href="javascript:void(0);">Spotech Technical Solutions</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 border">
                                          <div class="popular-tags mb-3">
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-briefcase text-muted me-1"></i> 13 Openings</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-mortarboard text-muted me-1"></i> Graduate</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-clock text-muted me-1"></i> Min - 2Years</span>
                                                <span
                                                    class="badge border bg-light text-default mb-1"><i
                                                        class="bi bi-moon-stars text-muted me-1"></i> flexible-shift</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h5 class="fw-medium mb-0">$30,000<span class="text-muted fw-normal">/</span><span class="text-muted fs-12">Month</span></h5>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-primary fw-medium fs-14 d-inline-flex">
                                                    Apply Now <i class="fe fe-arrow-right transform-arrow ms-2 lh-base"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card shadow-none bg-primary-transparent border border-primary border-opacity-10">
                                    <div class="card-body p-4">
                                        <div class="">
                                            <h5 class="fw-medium mb-3 text-primary"><i class="ri-notification-3-line me-2 p-2 bg-primary text-fixed-white fs-15 lh-1 align-middle rounded-circle"></i>Get Latest Job Alerts</h5>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Email Here"
                                                    aria-label="blog-email" aria-describedby="blog-subscribe">
                                                <button class="btn btn-primary" type="button"
                                                    id="blog-subscribe">Subscribe</button>
                                            </div>
                                            <label class="form-check-label">
                                                By Subscribing you accept to <a href="javascript:void(0);"
                                                    class="text-success"><u>privacy policy</u></a>
                                            </label>
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
                <!-- End::row-2 -->

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

    <!-- noUiSlider JS -->
    <script src="/storage/assets/libs/nouislider/nouislider.min.js"></script>
    <script src="/storage/assets/libs/wnumb/wNumb.min.js"></script>
    <script src="/storage/assets/js/job-search.js"></script>

   @include('zynix.partials.custom_switcherjs')

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>