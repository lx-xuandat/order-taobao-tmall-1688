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
                        <h1 class="page-title fw-medium fs-18 mb-2">Chartjs</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chartjs</li>
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
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Chartjs Line Chart</div>
                            </div>
                            <div class="card-body">
                                <canvas id="chartjs-line" class="chartjs-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Chartjs Bar Chart</div>
                            </div>
                            <div class="card-body">
                                <canvas id="chartjs-bar" class="chartjs-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Chartjs Pie Chart</div>
                            </div>
                            <div class="card-body">
                                <canvas id="chartjs-pie" class="chartjs-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Chartjs Doughnut Chart</div>
                            </div>
                            <div class="card-body">
                                <canvas id="chartjs-doughnut" class="chartjs-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Chartjs Mixed Chart</div>
                            </div>
                            <div class="card-body">
                                <canvas id="chartjs-mixed" class="chartjs-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Chartjs Polar Chart</div>
                            </div>
                            <div class="card-body">
                                <canvas id="chartjs-polar" class="chartjs-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Chartjs Radial Chart</div>
                            </div>
                            <div class="card-body">
                                <canvas id="chartjs-radar" class="chartjs-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Chartjs Scatter Chart</div>
                            </div>
                            <div class="card-body">
                                <canvas id="chartjs-scatter" class="chartjs-chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Chartjs Bubble Chart</div>
                            </div>
                            <div class="card-body">
                                <canvas id="chartjs-bubble" class="chartjs-chart"></canvas>
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

    <!-- Chartjs Chart JS -->
    <script src="/storage/assets/libs/chart.js/chart.umd.js"></script>

    <!-- Imternal Chartjs JS -->
    <script src="/storage/assets/js/chartjs-charts.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>