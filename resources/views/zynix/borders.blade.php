<!-- include mainhead.html"-->

<!-- Prism CSS -->
<link rel="stylesheet" href="/storage/assets/libs/prismjs/themes/prism-coy.min.css">

</head>

<body>

    @include('zynix.partials.switcher')
     @include('zynix.partials.loader')

    <div class="page">

         @include('zynix.partials.header')
         @include('zynix.partials.sidebar')

        <!--APP-CONTENT START-->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Borders</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Borders</li>
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
                                    Borders
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="border border-container"></span>
                                <span class="border-top border-container"></span>
                                <span class="border-end border-container"></span>
                                <span class="border-bottom border-container"></span>
                                <span class="border-start border-container"></span>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="border border-container"&gt;&lt;/span&gt;
    &lt;span class="border-top border-container"&gt;&lt;/span&gt;
    &lt;span class="border-end border-container"&gt;&lt;/span&gt;
    &lt;span class="border-bottom border-container"&gt;&lt;/span&gt;
    &lt;span class="border-start border-container"&gt;&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Remove borders
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="border-0 border-container"></span>
                                <span class="border border-top-0 border-container"></span>
                                <span class="border border-end-0 border-container"></span>
                                <span class="border border-bottom-0 border-container"></span>
                                <span class="border border-start-0 border-container"></span>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="border-0 border-container"&gt;&lt;/span&gt;
    &lt;span class="border border-top-0 border-container"&gt;&lt;/span&gt;
    &lt;span class="border border-end-0 border-container"&gt;&lt;/span&gt;
    &lt;span class="border border-bottom-0 border-container"&gt;&lt;/span&gt;
    &lt;span class="border border-start-0 border-container"&gt;&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-5">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Border Widths
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="border border-container border-1"></span>
                                <span class="border border-container border-2"></span>
                                <span class="border border-container border-3"></span>
                                <span class="border border-container border-4"></span>
                                <span class="border border border-container border-5"></span>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="border border border-container border-1"&gt;&lt;/span&gt;
    &lt;span class="border border-container border-2"&gt;&lt;/span&gt;
    &lt;span class="border border-container border-3"&gt;&lt;/span&gt;
    &lt;span class="border border-container border-4"&gt;&lt;/span&gt;
    &lt;span class="border border-container border-5"&gt;&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Border colors
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="border border-container border-primary"></span>
                                <span class="border border-container border-secondary"></span>
                                <span class="border border-container border-success"></span>
                                <span class="border border-container border-danger"></span>
                                <span class="border border-container border-warning"></span>
                                <span class="border border-container border-info"></span>
                                <span class="border border-container border-light"></span>
                                <span class="border border-container border-dark"></span>
                                <span class="border border-container border-white"></span>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;span class="border border-container border-primary"&gt;&lt;/span&gt;
    &lt;span class="border border-container border-secondary"&gt;&lt;/span&gt;
    &lt;span class="border border-container border-success"&gt;&lt;/span&gt;
    &lt;span class="border border-container border-danger"&gt;&lt;/span&gt;
    &lt;span class="border border-container border-warning"&gt;&lt;/span&gt;
    &lt;span class="border border-container border-info"&gt;&lt;/span&gt;
    &lt;span class="border border-container border-light"&gt;&lt;/span&gt;
    &lt;span class="border border-container border-dark"&gt;&lt;/span&gt;
    &lt;span class="border border-container border-white"&gt;&lt;/span&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Border color Styling
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label">Email
                                        address</label>
                                    <input type="email" class="form-control border-success"
                                        id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="h4 pb-3 mb-4 text-danger border-bottom border-danger">
                                    Below Shows Danger Border
                                </div>
                                <div
                                    class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end mb-1">
                                    Customizing borders with background colors
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="mb-4"&gt;
    &lt;label for="exampleFormControlInput1" class="form-label"&gt;Email
        address&lt;/label&gt;
    &lt;input type="email" class="form-control border-success"
        id="exampleFormControlInput1" placeholder="name@example.com"&gt;
&lt;/div&gt;
&lt;div class="h4 pb-3 mb-4 text-danger border-bottom border-danger"&gt;
    Below Shows Danger Border
&lt;/div&gt;
&lt;div
    class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end mb-1"&gt;
    Customizing borders with background colors
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Border with opacity
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="border border-success p-2 mb-2">This is default success border</div>
                                <div class="border border-success p-2 mb-2 border-opacity-75">This is 75%
                                    opacity
                                    success border
                                </div>
                                <div class="border border-success p-2 mb-2 border-opacity-50">This is 50%
                                    opacity
                                    success border
                                </div>
                                <div class="border border-success p-2 mb-2 border-opacity-25">This is 25%
                                    opacity
                                    success border
                                </div>
                                <div class="border border-success p-2 border-opacity-10">This is 10% opacity
                                    success
                                    border
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="border border-success p-2 mb-2"&gt;This is default success border&lt;/div&gt;
    &lt;div class="border border-success p-2 mb-2 border-opacity-75"&gt;This is 75%
        opacity
        success border
    &lt;/div&gt;
    &lt;div class="border border-success p-2 mb-2 border-opacity-50"&gt;This is 50%
        opacity
        success border
    &lt;/div&gt;
    &lt;div class="border border-success p-2 mb-2 border-opacity-25"&gt;This is 25%
        opacity
        success border
    &lt;/div&gt;
    &lt;div class="border border-success p-2 border-opacity-10"&gt;This is 10% opacity
        success
        border
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Border Radius
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img rounded" alt="...">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img rounded-top" alt="...">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img rounded-end" alt="...">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img rounded-bottom" alt="...">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img rounded-start" alt="...">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img rounded-circle" alt="...">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img  rounded-pill" alt="...">
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img rounded" alt="..."&gt;
    &lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img rounded-top" alt="..."&gt;
    &lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img rounded-end" alt="..."&gt;
    &lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img rounded-bottom" alt="..."&gt;
    &lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img rounded-start" alt="..."&gt;
    &lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img rounded-circle" alt="..."&gt;
    &lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img  rounded-pill" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Sizes
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img bd-placeholder-img rounded-0" alt="...">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img bd-placeholder-img rounded-1" alt="...">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img bd-placeholder-img rounded-2" alt="...">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img bd-placeholder-img rounded-3" alt="...">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img bd-placeholder-img rounded-4" alt="...">
                                <img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img bd-placeholder-img rounded-5" alt="...">
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img bd-placeholder-img rounded-0" alt="..."&gt;
    &lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img bd-placeholder-img rounded-1" alt="..."&gt;
    &lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img bd-placeholder-img rounded-2" alt="..."&gt;
    &lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img bd-placeholder-img rounded-3" alt="..."&gt;
    &lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img bd-placeholder-img rounded-4" alt="..."&gt;
    &lt;img src="/storage/assets/images/media/media-58.jpg" class="bd-placeholder-img bd-placeholder-img rounded-5" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

            </div>
        </div>
        <!--APP-CONTENT CLOSE-->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

   @include('zynix.partials.custom_switcherjs')

    <!-- Prism JS -->
    <script src="/storage/assets/libs/prismjs/prism.js"></script>
    <script src="/storage/assets/js/prism-custom.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>