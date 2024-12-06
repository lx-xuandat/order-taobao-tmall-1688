<!-- include mainhead.html"-->
<!-- Jsvector Maps -->
<link rel="stylesheet" href="/storage/assets/libs/jsvectormap/css/jsvectormap.min.css">

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
                        <h1 class="page-title fw-medium fs-18 mb-2">Vector Maps</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Vector Maps</li>
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
                                <div class="card-title">Basic Vector Map</div>
                            </div>
                            <div class="card-body">
                                <div id="vector-map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Map With Markers</div>
                            </div>
                            <div class="card-body">
                                <div id="marker-map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Map With Image Markers</div>
                            </div>
                            <div class="card-body">
                                <div id="marker-image-map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Map With Lines</div>
                            </div>
                            <div class="card-body">
                                <div id="lines-map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">US Vector Map</div>
                            </div>
                            <div class="card-body">
                                <div id="us-map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Russia Vector Map</div>
                            </div>
                            <div class="card-body">
                                <div id="russia-map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Spain Vector Map</div>
                            </div>
                            <div class="card-body">
                                <div id="spain-map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Canada Vector Map</div>
                            </div>
                            <div class="card-body">
                                <div id="canada-map"></div>
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
 <!-- JSVector Maps JS -->
 <script src="/storage/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>

 <!-- JSVector Maps MapsJS -->
 <script src="/storage/assets/libs/jsvectormap/maps/world-merc.js"></script>
 <script src="/storage/assets/js/us-merc-en.js"></script>
 <script src="/storage/assets/js/russia.js"></script>
 <script src="/storage/assets/js/spain.js"></script>
 <script src="/storage/assets/js/canada.js"></script>
 <script src="/storage/assets/js/jsvectormap.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>
