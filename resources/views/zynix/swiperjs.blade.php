<!-- include mainhead.html"-->

<link rel="stylesheet" href="/storage/assets/libs/swiper/swiper-bundle.min.css">

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
                        <h1 class="page-title fw-medium fs-18 mb-2">Swiper</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Swiper</li>
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
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Basic Swiper
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-basic">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-27.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-26.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-25.jpg" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Swiper With Navigation
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-navigation">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-29.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-28.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-30.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Swiper with Pagination
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper pagination">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-32.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-31.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-33.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Dynamic Pagination
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper pagination-dynamic">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-21.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-17.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-16.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Pagination With Progress
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper pagination-progress">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-12.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-8.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-5.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Pagination Fraction
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper pagination-fraction">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-16.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-30.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-31.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Custom Paginatioin
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper custom-pagination">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-25.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-5.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-33.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Scrollbar Swiper
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper scrollbar-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-30.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-28.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-29.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-scrollbar"></div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Vertical Swiper
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper vertical swiper-vertical">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-8.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-32.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-17.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Mouse Wheel Control
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper vertical vertical-mouse-control">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-28.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-30.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-32.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Keyboard Control
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper keyboard-control">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-31.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-12.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-8.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Nested Swiper</div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-horizontal1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/storage/assets/images/media/media-30.jpg" alt=""></div>
                                      <div class="swiper-slide">
                                        <div class="swiper vertical swiper-vertical1">
                                          <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="/storage/assets/images/media/media-25.jpg" alt=""></div>
                                            <div class="swiper-slide"><img src="/storage/assets/images/media/media-31.jpg" alt=""></div>
                                            <div class="swiper-slide"><img src="/storage/assets/images/media/media-32.jpg" alt=""></div>
                                          </div>
                                          <div class="swiper-pagination"></div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide"><img src="/storage/assets/images/media/media-28.jpg" alt=""></div>
                                      <div class="swiper-slide"><img src="/storage/assets/images/media/media-29.jpg" alt=""></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Effect Cube
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-effect-cube">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="/storage/assets/images/media/media-62.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/storage/assets/images/media/media-63.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/storage/assets/images/media/media-64.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Effect Fade
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-fade">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="/storage/assets/images/media/media-18.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/storage/assets/images/media/media-19.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/storage/assets/images/media/media-20.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Effect Flip
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-flip">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="/storage/assets/images/media/media-20.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/storage/assets/images/media/media-62.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="/storage/assets/images/media/media-63.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
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
                                    Effect Coverflow
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="swiper swiper-overflow">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-40.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-41.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-42.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-43.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-44.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-59.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-46.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-61.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
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
                                    Thumbs Gallery
                                </div>
                            </div>
                            <div class="card-body">
                                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiper-preview">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-fluid rounded" src="/storage/assets/images/media/media-1.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid rounded" src="/storage/assets/images/media/media-2.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid rounded" src="/storage/assets/images/media/media-11.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid rounded" src="/storage/assets/images/media/media-6.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid rounded" src="/storage/assets/images/media/media-7.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid rounded" src="/storage/assets/images/media/media-10.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid rounded" src="/storage/assets/images/media/media-11.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div class="swiper swiper-view">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-1.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-2.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-11.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-6.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-7.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-10.jpg" alt="img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="/storage/assets/images/media/media-11.jpg" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

   @include('zynix.partials.custom_switcherjs')

    <!-- Swiper JS -->
    <script src="/storage/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Internal Swiper JS -->
    <script src="/storage/assets/js/swiper.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>