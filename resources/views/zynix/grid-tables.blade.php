<!-- include mainhead.html"-->

<link rel="stylesheet" href="/storage/assets/libs/gridjs/theme/mermaid.min.css">

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
                        <h1 class="page-title fw-medium fs-18 mb-2">Grid Js</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Grid Js</li>
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

                <!--Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Basic Table
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="grid-example1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!--Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Table With Pagination
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="grid-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!--Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Table With Search
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="grid-search"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End:: row-3 -->

                <!--Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Table Sorting
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="grid-sorting"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End:: row-4 -->

                <!--Start:: row-5 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Table Loading
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="grid-loading"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End:: row-5 -->

                <!--Start:: row-6 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Wide Table
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="grid-wide"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End:: row-6 -->

                <!--Start:: row-7 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Fixed Header
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="grid-header-fixed"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End:: row-7 -->

                <!--    Start:: row-8 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Hidden Columns
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="grid-hidden-column"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-8 -->

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

   @include('zynix.partials.custom_switcherjs')

    <!-- Grid JS -->
    <script src="/storage/assets/libs/gridjs/gridjs.umd.js"></script>

    <!-- Internal Grid JS -->
    <script src="/storage/assets/js/grid.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>