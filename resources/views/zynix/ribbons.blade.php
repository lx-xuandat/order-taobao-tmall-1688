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
                        <h1 class="page-title fw-medium fs-18 mb-2">Ribbons</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ribbons</li>
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
                            <div class="card-header">
                                <div class="card-title">
                                    RIBBON STYLE 1
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-6">
                                        <div class="card custom-card bg-light shadow-none mb-0 ribbon-card">
                                            <div class="card-body p-4">
                                                <div class="ribbon ribbon-primary ribbon-top-left"><span>ribbon</span></div>
                                                <div class="card-subtitle fw-semibold mb-2 text-end">Top Left Ribbon</div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card bg-light shadow-none mb-0 ribbon-card">
                                            <div class="card-body p-4">
                                                <div class="ribbon ribbon-secondary ribbon-top-right"><span>ribbon</span></div>
                                                <div class="card-subtitle fw-semibold mb-2 text-start">Top Right Ribbon</div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card bg-light shadow-none mb-0 ribbon-card">
                                            <div class="card-body p-4">
                                                <div class="ribbon ribbon-success ribbon-bottom-left"><span>ribbon</span></div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                                <div class="card-subtitle fw-semibold mt-2 text-end">Bottom Left Ribbon</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card bg-light shadow-none mb-0 ribbon-card">
                                            <div class="card-body p-4">
                                                <div class="ribbon ribbon-orange ribbon-bottom-right"><span>ribbon</span></div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                                <div class="card-subtitle fw-semibold mt-2 text-start">Bottom Right Ribbon</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    RIBBON STYLE 2
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="row gy-3">
                                    <div class="col-xl-6">
                                        <div class="card custom-card bg-light shadow-none mb-0">
                                            <div class="card-body p-4">
                                                <div class="ribbon-2 ribbon-primary ribbon-left">Congratulations</div>
                                                <span class="d-block pt-4">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                                <div class="card-subtitle fw-semibold mt-2 text-end">Left Ribbon</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card bg-light shadow-none mb-0">
                                            <div class="card-body p-4">
                                                <div class="ribbon-2 ribbon-success ribbon-right">Congratulations</div>
                                                <span class="d-block pt-4">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                                <div class="card-subtitle fw-semibold mt-2 text-start">Right Ribbon</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    RIBBON STYLE 3
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="row gy-3">
                                    <div class="col-xl-3">
                                        <div class="card custom-card bg-light mb-0">
                                            <div class="card-body p-4">
                                                <span class="ribbon-3 top-left ribbon-success">
                                                    <span><i class="fe fe-zap"></i></span>
                                                </span>
                                                <div class="card-subtitle fw-semibold mb-2 text-end">Top Left Ribbon</div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card custom-card bg-light mb-0">
                                            <div class="card-body p-4">
                                                <span class="ribbon-3 top-right ribbon-secondary">
                                                    <span><i class="fe fe-zap"></i></span>
                                                </span>
                                                <div class="card-subtitle fw-semibold mb-2 text-start">Top Right Ribbon</div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card custom-card bg-light mb-0">
                                            <div class="card-body p-4">
                                                <span class="ribbon-3 top-left ribbon-info">
                                                    <span><i class="fe fe-zap"></i></span>
                                                </span>
                                                <div class="card-subtitle fw-semibold mb-2 text-end">Top Left Ribbon</div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card custom-card bg-light mb-0">
                                            <div class="card-body p-4">
                                                <span class="ribbon-3 top-right ribbon-warning">
                                                    <span><i class="fe fe-zap"></i></span>
                                                </span>
                                                <div class="card-subtitle fw-semibold mb-2 text-start">Top Right Ribbon</div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">RIBBON STYLE 4</div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-6">
                                        <div class="card custom-card bg-light mb-0">
                                            <div class="card-body p-4">
                                                <span class="ribbon-4 ribbon-primary top-left">
                                                    <span>May</span>
                                                </span>
                                                <div class="card-subtitle fw-semibold mb-2 text-end">Top Left  Ribbon</div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card bg-light mb-0">
                                            <div class="card-body p-4">
                                                <span class="ribbon-4 ribbon-secondary top-right">
                                                    <span>Jun</span>
                                                </span>
                                                <div class="card-subtitle fw-semibold mb-2 text-start">Top Right  Ribbon</div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                <!-- Start:: row-5 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    RIBBON STYLE 5
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-3">
                                        <div class="card custom-card bg-light mb-0 overflow-hidden">
                                            <div class="card-body p-4">
                                                <div class="ribbon-5 ribbon-primary top-left">OFFER</div>
                                                <div class="card-subtitle fw-semibold mb-2 text-end">Top Left Ribbon</div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card custom-card bg-light mb-0 overflow-hidden">
                                            <div class="card-body p-4">
                                                <div class="ribbon-5 ribbon-secondary top-right">OPEN</div>
                                                <div class="card-subtitle fw-semibold mb-2 text-start">Top Right Ribbon</div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card custom-card bg-light mb-0 overflow-hidden">
                                            <div class="card-body p-4">
                                                <div class="ribbon-5 ribbon-success bottom-left">CLOSE</div>
                                                <span class="d-block mb-2">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                                <div class="card-subtitle fw-semibold text-end">Bottom Left Ribbon</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card custom-card bg-light mb-0 overflow-hidden">
                                            <div class="card-body p-4">
                                                <div class="ribbon-5 ribbon-orange bottom-right">SALE</div>
                                                <span class="d-block mb-2">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                                <div class="card-subtitle fw-semibold text-start">Bottom Right Ribbon</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-5 -->

                <!-- Start:: row-6 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">RIBBON STYLE 6</div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-6">
                                        <div class="card custom-card bg-light mb-0">
                                            <div class="card-body p-4">
                                                <div class="ribbon-6 ribbon-left ribbon-primary">Service</div>
                                                <div class="card-subtitle fw-semibold mb-2 text-end">Top Left  Ribbon</div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card bg-light mb-0">
                                            <div class="card-body p-4">
                                                <div class="ribbon-6 ribbon-right ribbon-secondary">Offer</div>
                                                <div class="card-subtitle fw-semibold mb-2 text-start">Top Right  Ribbon</div>
                                                <span class="d-block">Join us in congratulating [Employee Name] for their outstanding contributions and dedication. Their hard work and commitment have truly set a standard for excellence. Let's celebrate their achievements together!</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-6 -->

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

   @include('zynix.partials.custom_switcherjs')

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>