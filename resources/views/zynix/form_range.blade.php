<!-- include mainhead.html"-->

<!-- Prism CSS -->
<link rel="stylesheet" href="/storage/assets/libs/prismjs/themes/prism-coy.min.css">

<!-- noui Slider -->
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
                        <h1 class="page-title fw-medium fs-18 mb-2">Range Slider</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Range Slider</li>
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
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Default Range
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <input type="range" class="form-range" id="customRange1">
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;input type="range" class="form-range" id="customRange1"&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Disabled Range
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <input type="range" class="form-range" id="disabledRange" disabled>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;input type="range" class="form-range" id="disabledRange" disabled&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Range With Min and Max Values
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <input type="range" class="form-range" min="0" max="5" id="customRange2">
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;input type="range" class="form-range" min="0" max="5" id="customRange2"&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Range With Steps
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3"&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <h6 class="mb-3">noUiSlider:</h6>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Default-Styling
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Fit Handles
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="slider-fit"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Rounded Styling
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="slider-round"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Square Styling
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="slider-square"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Color Picker Slider</div>
                            </div>
                            <div class="card-body">
                                <div class="sliders" id="color1"></div>
                                <div class="sliders" id="color2"></div>
                                <div class="sliders" id="color3"></div>
                                <div id="result"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Locking Sliders</div>
                                </div>
                                <div class="card-body">
                                    <div id="slider1"></div>
                                    <div id="slider1-span" class="my-1"></div>
                                    <div id="slider2"></div>
                                    <div id="slider2-span" class="my-1"></div>
                                    <div id="slider3"></div>
                                    <div id="slider3-span" class="my-1"></div>
                                    <button id="lockbutton" class="btn btn-sm btn-primary float-end">Lock</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Merging tooltips slider</div>
                                </div>
                                <div class="card-body">
                                    <div id="merging-tooltips"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Non Linear Slider</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="nonlinear"></div>
                                        <div id="lower-value" class="mt-5"></div>
                                        <div id="upper-value" class="mt-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Sliding Handles Tooltips</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="slider-hide"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <div  class="row">
                    <div class="col-xl-10">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Colored Connect Elements</div>
                            </div>
                            <div class="card-body">
                                <div class="slider" id="color-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Slider Toggle</div>
                            </div>
                            <div class="card-body">
                                <div id="slider-toggle"></div>
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
                                <div class="card-title">Toggle Movement By Clicking Pips</div>
                            </div>
                            <div class="card-body pb-5">
                                <div id="slider-pips"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Soft Limits</div>
                            </div>
                            <div class="card-body pb-5">
                                <div id="soft"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-5 -->

                <!-- Start:: row-6 -->
                <h6 class="mb-3">noUiSlider Colors:</h6>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Primary
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="primary-colored-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Secondary
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="secondary-colored-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Warning
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="warning-colored-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Info
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="info-colored-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Success
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="success-colored-slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Danger
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="danger-colored-slider"></div>
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

    <!-- Prism JS -->
    <script src="/storage/assets/libs/prismjs/prism.js"></script>
    <script src="/storage/assets/js/prism-custom.js"></script>

    <!-- noUiSlider JS -->
    <script src="/storage/assets/libs/nouislider/nouislider.min.js"></script>
    <script src="/storage/assets/libs/wnumb/wNumb.min.js"></script>
    <script src="/storage/assets/js/nouislider.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>