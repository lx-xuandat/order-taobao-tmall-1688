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

        <!--APP-CONTENT-->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Breadcrumb</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Breadcrumb</li>
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

                <!--ROW-START-->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Example
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                                    </ol>
                                </nav>

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb"&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;Home&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;

&lt;nav aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;

&lt;nav aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb mb-0"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Example1
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-example1">
                                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                                    </ol>
                                </nav>

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-example1">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-example1 mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb breadcrumb-example1"&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;Home&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;

&lt;nav aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb breadcrumb-example1"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;

&lt;nav aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb breadcrumb-example1 mb-0"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Library&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Dividers
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <nav style="--bs-breadcrumb-divider: '~';" aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav style="--bs-breadcrumb-divider: '~';" aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb mb-0"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Embedded SVG icon
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                    aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item active embedded-breadcrumb" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb mb-0"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active embedded-breadcrumb" aria-current="page"&gt;Library&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Breadcrumb Style-1
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-style1 mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="breadcrumb"&gt;
&lt;ol class="breadcrumb breadcrumb-style1 mb-0"&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Library&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Breadcrumb Style-2
                                </div>
                                <div class="prism-toggle">
                                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="ti ti-home-2 me-1 fs-15 d-inline-block"></i>Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="ti ti-apps me-1 fs-15 d-inline-block"></i>About</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="breadcrumb"&gt;
&lt;ol class="breadcrumb breadcrumb-style2 mb-0"&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;&lt;i class="ti ti-home-2 me-1 fs-15"&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;&lt;i class="ti ti-apps me-1 fs-15"&gt;&lt;/i&gt;About&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Services&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--ROW-END-->

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