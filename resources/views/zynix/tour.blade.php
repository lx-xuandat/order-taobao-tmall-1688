<!-- include mainhead.html"-->

<!-- Shepherd Css -->
<link rel="stylesheet" href="/storage/assets/libs/shepherd.js/css/shepherd.css">

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
                        <h1 class="page-title fw-medium fs-18 mb-2">Tour</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tour</li>
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
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    SHEPHERD JS
                                </div>
                            </div>
                            <div class="card-body p-5 text-center">
                                <div class="row justify-content-center">
                                    <div class="col-xl-7 mb-5">
                                        <span class="avatar avatar-xxl p-2 bg-light">
                                            <span class="avatar avatar-xl p-2 bg-white">
                                                <img src="/storage/assets/images/company-logos/7.png" alt="" id="step-1">
                                            </span>
                                        </span>
                                        <h5 class="fw-semibold mt-2">Welcome to Tour App</h5>
                                        <span class="text-muted">Embark on a journey of discovery with our exclusive tour experiences. Whether you're a solo adventurer, a couple seeking romance, or a group of friends ready for excitement, we've curated the perfect tours for you. Create memories that last a lifetime.</span>
                                    </div>
                                </div>
                                <div class="row justify-content-center gap-4">
                                    <div class="col-xl-3">
                                        <div class="p-3 border mb-4  rounded">
                                            <div class="card custom-card border shadow-none team-member primary mb-0">
                                                <div class="card-body p-4 bg-light text-center">
                                                    <div class="mb-3">
                                                        <span class="avatar avatar-xl bg-primary-transparent" id="step-2">
                                                            <span class="avatar avatar-lg bg-primary svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M188.92,40a59.29,59.29,0,0,0-43.08,18.75A65.47,65.47,0,0,0,128,104L232,58.75A59.28,59.28,0,0,0,188.92,40Z" opacity="0.2"/><path d="M176.56,98.18A64.2,64.2,0,0,0,128,104.52L221.81,176a63,63,0,0,0-6.39-48.22A63.73,63.73,0,0,0,176.56,98.18Z" opacity="0.2"/><path d="M110.16,58.75a58.87,58.87,0,0,0-86.16,0L128,104A65.47,65.47,0,0,0,110.16,58.75Z" opacity="0.2"/><path d="M79.44,98.18a63.73,63.73,0,0,0-38.86,29.6A63,63,0,0,0,34.19,176L128,104.52A64.2,64.2,0,0,0,79.44,98.18Z" opacity="0.2"/><path d="M128,104a65.47,65.47,0,0,1,17.84-45.25,58.87,58.87,0,0,1,86.16,0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,104.52a64.26,64.26,0,0,1,87.42,23.26A63,63,0,0,1,221.81,176Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,104a65.47,65.47,0,0,0-17.84-45.25,58.87,58.87,0,0,0-86.16,0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,104.52a64.26,64.26,0,0,0-87.42,23.26A63,63,0,0,0,34.19,176Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="104.52" x2="128" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                        </span>
                                                    </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-meidum mb-2">Explore Tour Options</h6>
                                                        <span class="fs-14 text-muted">Explore available tour packages , places and destinations.</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="p-3 border mb-4  rounded">
                                            <div class="card custom-card border p-0 mb-0 team-member secondary">
                                                <div class="card-body p-4 bg-light text-center">
                                                    <div class="mb-3">
                                                        <span class="avatar avatar-xl bg-secondary-transparent" id="step-3">
                                                            <span class="avatar avatar-lg bg-secondary svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M48,208H16a8,8,0,0,1-8-8V160a8,8,0,0,1,8-8H48Z" opacity="0.2"/><path d="M204,56a28,28,0,0,0-12,2.71h0A28,28,0,1,0,176,85.29h0A28,28,0,1,0,204,56Z" opacity="0.2"/><circle cx="204" cy="84" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M48,208H16a8,8,0,0,1-8-8V160a8,8,0,0,1,8-8H48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M112,160h32l67-15.41a16.61,16.61,0,0,1,21,16h0a16.59,16.59,0,0,1-9.18,14.85L184,192l-64,16H48V152l25-25a24,24,0,0,1,17-7H140a20,20,0,0,1,20,20h0a20,20,0,0,1-20,20Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176,85.29A28,28,0,1,1,192,58.71" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                        </span>
                                                    </span>
                                                    </div>
                                                    <div>
                                                    <h6 class="fw-meidum mb-2">Traveler Information</h6>
                                                    <span class="fs-14 text-muted">Enter personal information for all travelers, including names, and details.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="p-3 border mb-4  rounded">
                                            <div class="card custom-card border p-0 mb-0 team-member success">
                                                <div class="card-body p-4 bg-light text-center">
                                                    <div class="mb-3">
                                                        <span class="avatar avatar-xl  bg-success-transparent" id="step-4">
                                                            <span class="avatar avatar-lg  bg-success svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M88,224l24-24V176l24-24,48,72,24-24-32-88,33-31A24,24,0,0,0,175,47L144,80,56,48,32,72l72,48L80,144H56L32,168l40,16Z" opacity="0.2"/><path d="M88,224l24-24V176l24-24,48,72,24-24-32-88,33-31A24,24,0,0,0,175,47L144,80,56,48,32,72l72,48L80,144H56L32,168l40,16Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                        </span>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-meidum mb-2">Review and Confirm</h6>
                                                        <span class="fs-14 text-muted">Check all details of the tour package, including dates, and traveler information.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="p-3 border mb-4  rounded">
                                            <div class="card custom-card border p-0 mb-0 team-member warning">
                                                <div class="card-body p-4 bg-light text-center">
                                                    <div class="mb-3">
                                                        <span class="avatar avatar-xl  bg-warning-transparent" id="step-5">
                                                            <span class="avatar avatar-lg  bg-warning svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M60.06,195.91a96,96,0,0,1-.12-135.65h0a95.7,95.7,0,0,1,28,67.76,95.74,95.74,0,0,1-28,67.77Z" opacity="0.2"/><path d="M196.06,195.91a96,96,0,0,1-.12-135.65h0a96,96,0,0,1,0,135.53Z" opacity="0.2"/><circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M60,60.24A95.7,95.7,0,0,1,88,128a95.7,95.7,0,0,1-28,67.76" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M196,60.24a96,96,0,0,0,0,135.52" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="32" y1="128" x2="224" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="32" x2="128" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                        </span>
                                                    </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-meidum mb-2">Booking Confirmation</h6>
                                                        <span class="fs-14 text-muted"> Receive a booking confirmation , including tour details and reference number.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="p-3 border mb-4  rounded">
                                            <div class="card custom-card border p-0 mb-0 team-member info">
                                                <div class="card-body p-4 bg-light text-center">
                                                    <div class="mb-3">
                                                        <span class="avatar avatar-xl bg-info-transparent" id="step-6">
                                                            <span class="avatar avatar-lg bg-info svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M60.06,195.91a96,96,0,0,1-.12-135.65h0a95.7,95.7,0,0,1,28,67.76,95.74,95.74,0,0,1-28,67.77Z" opacity="0.2"/><path d="M196.06,195.91a96,96,0,0,1-.12-135.65h0a96,96,0,0,1,0,135.53Z" opacity="0.2"/><circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M60,60.24A95.7,95.7,0,0,1,88,128a95.7,95.7,0,0,1-28,67.76" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M196,60.24a96,96,0,0,0,0,135.52" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="32" y1="128" x2="224" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="32" x2="128" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                        </span>
                                                    </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-meidum mb-2">Enjoy Your Tour</h6>
                                                        <span class="fs-14 text-muted">Embark on your tour and enjoy the experience as planned.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-sm-flex justify-content-end">
                                    <button class="btn btn-primary-light m-1">Cancel Journey</button>
                                    <button class="btn btn-success-light m-1" id="step-7">Start Your Journey</button>
                                </div>
                            </div>
                        </div>
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

    <!-- Shepherd JS -->
    <script src="/storage/assets/libs/shepherd.js/js/shepherd.min.js"></script>

    <!-- Internal Tour JS -->
    <script src="/storage/assets/js/tour.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>