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

                <!-- Start::page-header -->
                <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-semibold fs-18 mb-2">Podcast</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">
                                     Dashboards
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Podcast</li>
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

                <!-- Start Row-1 -->
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="card custom-card overflow-hidden podcast-banner">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-xl-9 my-auto">
                                        <h3 class="fw-semibold text-fixed-white">
                                            Exploring Music Distribution Options
                                        </h3>
                                        <span class="d-block text-fixed-white op-8 fw-meidum fs-15 mb-4">Dive into an array of music distribution platforms tailored to amplify your podcast's unique sound. Explore innovative avenues.</span>
                                        <div class="d-flex align-items-center gap-4 mb-5">
                                            <a href="javascript:void(0);" class="fs-13 op-8 fw-semibold d-flex align-items-center gap-2 text-fixed-white"><i class="ri-play-circle-fill text-primary fs-5 align-middle lh-1"></i>18,000 Plays</a>
                                            <a href="javascript:void(0);" class="fs-13 op-8 fw-semibold d-flex align-items-center gap-2 text-fixed-white"><i class="ri-customer-service-fill text-primary fs-5 align-middle lh-1"></i>265 Currently Listening</a>
                                        </div>
                                        <div class="btn-list">
                                            <button type="button" class="btn btn-primary"><i class="ri-headphone-line me-2"></i> Listen Now</button>
                                            <button type="button" class="btn btn-outline-primary"><i class="ri-heart-3-line me-2"></i>Add To Favourites</button>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 my-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Top Podcasters</div>
                                <button class="btn btn-light btn-sm" type="button">View All</button>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled podcasters">
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="me-2 lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="/storage/assets/images/faces/10.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fs-14 d-block mb-0 fw-semibold">Amanda Nanes</span>
                                                <span class="text-muted fs-12">2,52,525 Followers</span>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-sm btn-primary-light">Follow</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="me-2 lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="/storage/assets/images/faces/1.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fs-14 d-block mb-0 fw-semibold">Charles Achilles</span>
                                                <span class="text-muted fs-12">12,563 Followers</span>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-sm btn-primary-light">Follow</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="me-2 lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="/storage/assets/images/faces/2.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fs-14 d-block mb-0 fw-semibold">Julia Camo</span>
                                                <span class="text-muted fs-12">2,52,525 Followers</span>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-sm btn-primary-light">Follow</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap">
                                            <div class="me-2 lh-1">
                                                <span class="avatar avatar-sm avatar-rounded">
                                                    <img src="/storage/assets/images/faces/3.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fs-14 d-block mb-0 fw-semibold">Json Taylor</span>
                                                <span class="text-muted fs-12">2,52,525 Followers</span>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-sm btn-primary-light">Follow</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                     Recently Played
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled podcast-recently-played-list">
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="/storage/assets/images/media/media-61.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Tech Talk</a>
                                                <span class="d-block fs-13 text-muted">John Smith</span>
                                            </div>
                                            <div class="text-end">
                                                <a href="javascript:void(0);" class="fw-medium text-gray-3"><i class="ri-heart-fill fs-18 lh-1 text-gray-3"></i></a>
                                                <span class="d-block fs-13 text-muted">45 Mins</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="/storage/assets/images/media/media-59.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Science Explorers</a>
                                                <span class="d-block fs-13 text-muted">Emily Johnson</span>
                                            </div>
                                            <div class="text-end">
                                                <a href="javascript:void(0);" class="fw-medium text-danger"><i class="ri-heart-fill fs-18 lh-1"></i></a>
                                                <span class="d-block fs-13 text-muted">30 Mins</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="/storage/assets/images/media/media-62.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Business Insights</a>
                                                <span class="d-block fs-13 text-muted">David Williams</span>
                                            </div>
                                            <div class="text-end">
                                                <a href="javascript:void(0);" class="fw-medium text-gray-3"><i class="ri-heart-fill fs-18 lh-1 text-gray-3"></i></a>
                                                <span class="d-block fs-13 text-muted">60 Mins</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md">
                                                    <img src="/storage/assets/images/media/media-71.jpg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript:void(0);" class="fw-semibold">Health and Wellness</a>
                                                <span class="d-block fs-13 text-muted">Michael Brown</span>
                                            </div>
                                            <div class="text-end">
                                                <a href="javascript:void(0);" class="fw-medium text-gray-3"><i class="ri-heart-fill fs-18 lh-1 text-gray-3"></i></a>
                                                <span class="d-block fs-13 text-muted">50 Mins</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- End::Row-1 -->

				<!-- Start::Row-2 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Categories
                                </div>
                                <div class="dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3 personal-favourite-contacts mb-0">
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                            <div class="me-2">
                                                <span class="avatar avatar-lg bg-light p-2">
                                                    <img alt="" src="/storage/assets/images/podcast/1.png" class="rounded-0">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-0">Comedy</span>
                                                <span class="text-muted d-block fs-12 mb-0">250</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                            <div class="me-2">
                                                <span class="avatar avatar-lg bg-light p-2">
                                                    <img alt="" src="/storage/assets/images/podcast/2.png" class="rounded-0">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-0">News</span>
                                                <span class="text-muted d-block fs-12 mb-0">236</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                            <div class="me-2">
                                                <span class="avatar avatar-lg bg-light p-2">
                                                    <img alt="" src="/storage/assets/images/podcast/3.png" class="rounded-0">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-0">True Crime</span>
                                                <span class="text-muted d-block fs-12 mb-0">236</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                            <div class="me-2">
                                                <span class="avatar avatar-lg bg-light p-2">
                                                    <img alt="" src="/storage/assets/images/podcast/4.png" class="rounded-0">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-0">Technology</span>
                                                <span class="text-muted d-block fs-12 mb-0">236</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                            <div class="me-2">
                                                <span class="avatar avatar-lg bg-light p-2">
                                                    <img alt="" src="/storage/assets/images/podcast/5.png" class="rounded-0">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-0">Science</span>
                                                <span class="text-muted d-block fs-12 mb-0">236</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                            <div class="me-2">
                                                <span class="avatar avatar-lg bg-light p-2">
                                                    <img alt="" src="/storage/assets/images/podcast/6.png" class="rounded-0">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-0">Education</span>
                                                <span class="text-muted d-block fs-12 mb-0">236</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                            <div class="me-2">
                                                <span class="avatar avatar-lg bg-light p-2">
                                                    <img alt="" src="/storage/assets/images/podcast/7.png" class="rounded-0">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-0">Sports</span>
                                                <span class="text-muted d-block fs-12 mb-0">236</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-1 p-2">
                                            <div class="me-2">
                                                <span class="avatar avatar-lg bg-light p-2">
                                                    <img alt="" src="/storage/assets/images/podcast/8.png" class="rounded-0">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-0">Music</span>
                                                <span class="text-muted d-block fs-12 mb-0">236</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- End::Row-2 -->

				<!-- Start::Row-3 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="mb-4 d-flex align-items-center justify-content-between">
                            <h6 class="mb-0 fw-semibold">Most Popular </h6>
                            <div>
                                <button type="button" class="btn btn-sm btn-primary-light ">View All</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="/storage/assets/images/podcast/11.jpg" alt="img" class="avatar avatar-xxl me-3">
                                            <div class="w-100">
                                                <div class="d-flex align-items-start justify-content-between mb-4">
                                                    <div>
                                                        <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Midnight Serenade</h6></a>
                                                        <span class="text-muted fs-12">By Alice Mumbleton</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-light btn-sm btn-icon">
                                                            <i class="ri-more-2-fill text-muted"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between flex-wrap gap-2">
                                                    <button aria-label="button" type="button" class="btn btn-primary-transparent btn-sm py-0 px-2">
                                                        <i class="ri-play-fill me-1"></i> Listen Now
                                                    </button>
                                                    <div class="d-flex align-items-center gap-3 lh-1">
                                                        <span class="d-block d-flex align-items-center gap-2 text-muted fs-12 lh-1"><i class="ri-time-line lh-1 align-middle fs-14"></i>2h 32m</span>
                                                        <span class="d-block d-flex align-items-center gap-2 fs-14 fw-semibold lh-1"><i class="ri-volume-up-line lh-1 align-middle fs-14"></i>67,862</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="/storage/assets/images/podcast/12.jpg" alt="img" class="avatar avatar-xxl me-3">
                                            <div class="w-100">
                                                <div class="d-flex align-items-start justify-content-between mb-4">
                                                    <div>
                                                        <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Electric Dreamscape</h6></a>
                                                        <span class="text-muted fs-12">By Alice Mumbleton</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-light btn-sm btn-icon">
                                                            <i class="ri-more-2-fill text-muted"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between flex-wrap gap-2">
                                                    <button aria-label="button" type="button" class="btn btn-primary-transparent btn-sm py-0 px-2">
                                                        <i class="ri-play-fill me-1"></i> Listen Now
                                                    </button>
                                                    <div class="d-flex align-items-center gap-3 lh-1">
                                                        <span class="d-block d-flex align-items-center gap-2 text-muted fs-12 lh-1"><i class="ri-time-line lh-1 align-middle fs-14"></i>2h 32m</span>
                                                        <span class="d-block d-flex align-items-center gap-2 fs-14 fw-semibold lh-1"><i class="ri-volume-up-line lh-1 align-middle fs-14"></i>67,862</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="/storage/assets/images/podcast/14.jpg" alt="img" class="avatar avatar-xxl me-3">
                                            <div class="w-100">
                                                <div class="d-flex align-items-start justify-content-between mb-4">
                                                    <div>
                                                        <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Whispers in the Wind</h6></a>
                                                        <span class="text-muted fs-12">By Alice Mumbleton</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-light btn-sm btn-icon">
                                                            <i class="ri-more-2-fill text-muted"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between flex-wrap gap-2">
                                                    <button aria-label="button" type="button" class="btn btn-primary-transparent btn-sm py-0 px-2">
                                                        <i class="ri-play-fill me-1"></i> Listen Now
                                                    </button>
                                                    <div class="d-flex align-items-center gap-3 lh-1">
                                                        <span class="d-block d-flex align-items-center gap-2 text-muted fs-12 lh-1"><i class="ri-time-line lh-1 align-middle fs-14"></i>2h 32m</span>
                                                        <span class="d-block d-flex align-items-center gap-2 fs-14 fw-semibold lh-1"><i class="ri-volume-up-line lh-1 align-middle fs-14"></i>67,862</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="/storage/assets/images/podcast/13.jpg" alt="img" class="avatar avatar-xxl me-3">
                                            <div class="w-100">
                                                <div class="d-flex align-items-start justify-content-between mb-4">
                                                    <div>
                                                        <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Serendipity Symphony</h6></a>
                                                        <span class="text-muted fs-12">By Alice Mumbleton</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-light btn-sm btn-icon">
                                                            <i class="ri-more-2-fill text-muted"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between flex-wrap gap-2">
                                                    <button aria-label="button" type="button" class="btn btn-primary-transparent btn-sm py-0 px-2">
                                                        <i class="ri-play-fill me-1"></i> Listen Now
                                                    </button>
                                                    <div class="d-flex align-items-center gap-3 lh-1">
                                                        <span class="d-block d-flex align-items-center gap-2 text-muted fs-12 lh-1"><i class="ri-time-line lh-1 align-middle fs-14"></i>2h 32m</span>
                                                        <span class="d-block d-flex align-items-center gap-2 fs-14 fw-semibold lh-1"><i class="ri-volume-up-line lh-1 align-middle fs-14"></i>67,862</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="/storage/assets/images/podcast/11.jpg" alt="img" class="avatar avatar-xxl me-3">
                                            <div class="w-100">
                                                <div class="d-flex align-items-start justify-content-between mb-4">
                                                    <div>
                                                        <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Midnight Serenade</h6></a>
                                                        <span class="text-muted fs-12">By Alice Mumbleton</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-light btn-sm btn-icon">
                                                            <i class="ri-more-2-fill text-muted"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between flex-wrap gap-2">
                                                    <button aria-label="button" type="button" class="btn btn-primary-transparent btn-sm py-0 px-2">
                                                        <i class="ri-play-fill me-1"></i> Listen Now
                                                    </button>
                                                    <div class="d-flex align-items-center gap-3 lh-1">
                                                        <span class="d-block d-flex align-items-center gap-2 text-muted fs-12 lh-1"><i class="ri-time-line lh-1 align-middle fs-14"></i>2h 32m</span>
                                                        <span class="d-block d-flex align-items-center gap-2 fs-14 fw-semibold lh-1"><i class="ri-volume-up-line lh-1 align-middle fs-14"></i>67,862</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="/storage/assets/images/podcast/12.jpg" alt="img" class="avatar avatar-xxl me-3">
                                            <div class="w-100">
                                                <div class="d-flex align-items-start justify-content-between mb-4">
                                                    <div>
                                                        <a href="javascript:void(0);"><h6 class="fw-semibold mb-0">Electric Dreamscape</h6></a>
                                                        <span class="text-muted fs-12">By Alice Mumbleton</span>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" class="btn btn-light btn-sm btn-icon">
                                                            <i class="ri-more-2-fill text-muted"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between flex-wrap gap-2">
                                                    <button aria-label="button" type="button" class="btn btn-primary-transparent btn-sm py-0 px-2">
                                                        <i class="ri-play-fill me-1"></i> Listen Now
                                                    </button>
                                                    <div class="d-flex align-items-center gap-3 lh-1">
                                                        <span class="d-block d-flex align-items-center gap-2 text-muted fs-12 lh-1"><i class="ri-time-line lh-1 align-middle fs-14"></i>2h 32m</span>
                                                        <span class="d-block d-flex align-items-center gap-2 fs-14 fw-semibold lh-1"><i class="ri-volume-up-line lh-1 align-middle fs-14"></i>67,862</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card border-0 shadow-none">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start gap-3 mb-4">
                                    <div class="flex-fill">
                                        <span class="fw-semibold d-block">PLAYING NOW</span>
                                    </div>
                                    <div>
                                        <a aria-label="anchor" href="javascript:void(0);">
                                            <i class="ri-heart-fill fs-4 lh-1 text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <span class="mb-3 podcast-playing-now">
                                        <img src="/storage/assets/images/podcast/15.jpg" alt="" class="w-100">
                                    </span>
                                    <a href="javascript:void(0);"><h6 class="fw-semibold mb-1">Echoes of Eternity</h6></a>
                                    <span class="text-muted op-8 fs-12">By Alice Mumbleton</span>
                                </div>
                                <div class="d-flex gap-3 align-items-center mb-4 pt-1">
                                    <div class="fs-12">12.25</div>
                                    <div class="progress progress-xs progress-custom progress-animate podcast-playing-progress" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary" style="width: 50%">
                                        </div>
                                    </div>
                                    <div class="fs-12">23.45</div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 lh-1">
                                    <a aria-label="anchor" href="javascript:void(0);">
                                        <i class="ri-repeat-2-fill fs-5"></i>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);">
                                        <i class="ri-skip-back-fill fs-5"></i>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);">
                                        <i class="ri-play-fill fs-2"></i>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);">
                                        <i class="ri-skip-forward-fill fs-5"></i>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);">
                                        <i class="ri-shuffle-fill fs-5"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- End::Row-3 -->

				<!-- Start::Row-4 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Recently Played
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <div>
                                        <input class="form-control" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Podcast Name</th>
                                                <th scope="col">duration</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Latest Episode</th>
                                                <th scope="col">Average Duration</th>
                                                <th scope="col">Favourites</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-md"><img src="/storage/assets/images/podcast/11.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">Random Ramblings</a>
                                                            <span class="fs-12 d-block text-muted">Alice Mumbleton</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    150s
                                                </td>
                                                <td>
                                                    <span class="badge bg-secondary-transparent">Comedy</span>
                                                </td>
                                                <td>
                                                    #156: Silly Stories
                                                </td>
                                                <td>
                                                    45 mins
                                                </td>
                                                <td>
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <i class="ri-heart-fill fs-4 lh-1 text-danger"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-md"><img src="/storage/assets/images/podcast/12.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">Mindless Musings</a>
                                                            <span class="fs-12 d-block text-muted">Bob Jibberish</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    1 min
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Culture</span>
                                                </td>
                                                <td>
                                                    #82: Deep Nonsense
                                                </td>
                                                <td>
                                                    30 mins
                                                </td>
                                                <td>
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <i class="ri-heart-fill fs-4 op-2 lh-1 text-muted"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-md"><img src="/storage/assets/images/podcast/13.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">Chatterbox Chronicles</a>
                                                            <span class="fs-12 d-block text-muted">Charlie Babbleworth</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    2 min
                                                </td>
                                                <td>
                                                    <span class="badge bg-info-transparent">Personal Journal</span>
                                                </td>
                                                <td>
                                                    #30: Life's Random Moments
                                                </td>
                                                <td>
                                                    60 mins
                                                </td>
                                                <td>
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <i class="ri-heart-fill fs-4 lh-1 text-danger"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-md"><img src="/storage/assets/images/podcast/14.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">Ramble Roundup</a>
                                                            <span class="fs-12 d-block text-muted">Gary Gibberish</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    3 min
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-transparent">News and Politics</span>
                                                </td>
                                                <td>
                                                    #300: Current Affairs
                                                </td>
                                                <td>
                                                    20 mins
                                                </td>
                                                <td>
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <i class="ri-heart-fill fs-4 op-2 lh-1 text-muted"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <span class="avatar avatar-md"><img src="/storage/assets/images/media/media-60.jpg" class="" alt="..."></span>
                                                        <div>
                                                            <a href="javascript:void(0);" class="fw-semibold mb-0 d-flex align-items-center">Babble Bites</a>
                                                            <span class="fs-12 d-block text-muted">Eddie Gibberoni</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    4 min
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary-transparent">Food and Drink</span>
                                                </td>
                                                <td>
                                                    #45: Culinary Capers
                                                </td>
                                                <td>
                                                    50 mins
                                                </td>
                                                <td>
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <i class="ri-heart-fill fs-4 lh-1 text-danger"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Download</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <div class="d-flex align-items-center">
                                    <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                                    <div class="ms-auto">
                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<!-- End::Row-4 -->

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

    <!-- Apex Charts JS -->
    <script src="/storage/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Podcast dashboard -->
    <script src="/storage/assets/js/podcast-dashboard.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

   @include('zynix.partials.custom_switcherjs')

</body>

</html>