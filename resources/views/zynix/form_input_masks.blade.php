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
                        <h1 class="page-title fw-medium fs-18 mb-2">Input Masks</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Input Masks</li>
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
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Date Format-1
                                </div>
                            </div>
                            <div class="card-body">
                                <input class="form-control date-format" placeholder="DD-MM-YYYY">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Date Format-2
                                </div>
                            </div>
                            <div class="card-body">
                                <input class="form-control date-format-1" placeholder="MM-DD-YYYY">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Date Format-3
                                </div>
                            </div>
                            <div class="card-body">
                                <input class="form-control date-format-2" placeholder="MM-YY">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Number Formatting
                                </div>
                            </div>
                            <div class="card-body">
                                <input class="form-control number-format" placeholder="Number Here">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Time Format-1
                                </div>
                            </div>
                            <div class="card-body">
                                <input class="form-control time-format-1" placeholder="hh:mm:ss">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Time Format-2
                                </div>
                            </div>
                            <div class="card-body">
                                <input class="form-control time-format-2" placeholder="hh:mm">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Formatting Into Blocks
                                </div>
                            </div>
                            <div class="card-body">
                                <input class="form-control formatting-blocks" placeholder="ABCD EFG HIJ KLMN">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Delimiter
                                </div>
                            </div>
                            <div class="card-body">
                                <input class="form-control delimiter" placeholder="ABC.DEF.GHi">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Delimiters
                                </div>
                            </div>
                            <div class="card-body">
                                <input class="form-control delimiters" placeholder="ABC/DEF/GHi-JK">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Prefix
                                </div>
                            </div>
                            <div class="card-body">
                                <input class="form-control prefix-element" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Phone Number Formatting
                                </div>
                            </div>
                            <div class="card-body">
                                <input class="form-control phone-number"  placeholder="US(+1)">
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

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

    <!-- Cleave.js -->
    <script src="/storage/assets/libs/cleave.js/cleave.min.js"></script>

    <!-- Internal form-input-mask JS -->
    <script src="/storage/assets/js/form-input-mask.js"></script>

</body>

</html>