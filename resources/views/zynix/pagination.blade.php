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
                            <h1 class="page-title fw-medium fs-18 mb-2">Pagination</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Pagination</li>
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
                        <div class="col-xxl-6 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Basic Pagination
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation"&gt;
    &lt;ul class="pagination mb-0"&gt;
        &lt;li class="page-item disabled"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;Previous&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Pagination With Icons
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                                                    <span aria-hidden="true"><i class="bx bx-chevron-left"></i></span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);" aria-label="Next">
                                                    <span aria-hidden="true"><i class="bx bx-chevron-right"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation"&gt;
    &lt;ul class="pagination mb-0"&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);" aria-label="Previous"&gt;
                &lt;span aria-hidden="true"&gt;&lt;i class="bx bx-chevron-left"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);" aria-label="Next"&gt;
                &lt;span aria-hidden="true"&gt;&lt;i class="bx bx-chevron-right"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Pagination Sizing
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap justify-content-between gap-2">
                                    <nav aria-label="...">
                                        <ul class="pagination pagination-sm mb-0">
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">1</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        </ul>
                                    </nav>
                                    <nav aria-label="...">
                                        <ul class="pagination mb-0">
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">1</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        </ul>
                                    </nav>
                                    <nav aria-label="...">
                                        <ul class="pagination pagination-lg mb-0">
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">1</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="..."&gt;
    &lt;ul class="pagination pagination-sm mb-0"&gt;
        &lt;li class="page-item active" aria-current="page"&gt;
            &lt;span class="page-link"&gt;1&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label="..."&gt;
    &lt;ul class="pagination mb-0"&gt;
        &lt;li class="page-item active" aria-current="page"&gt;
            &lt;span class="page-link"&gt;1&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label="..."&gt;
    &lt;ul class="pagination pagination-lg mb-0"&gt;
        &lt;li class="page-item active" aria-current="page"&gt;
            &lt;span class="page-link"&gt;1&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Active and disabled states
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-wrap">
                                    <nav aria-label="..." class="me-3">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <span class="page-link">Previous</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">2</span>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="..." class="me-3"&gt;
    &lt;ul class="pagination"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link"&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item active" aria-current="page"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label="..."&gt;
    &lt;ul class="pagination"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;span class="page-link"&gt;Previous&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item active" aria-current="page"&gt;
            &lt;span class="page-link"&gt;2&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2  -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Center & Right Aligned Pagination
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-end mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation"&gt;
    &lt;ul class="pagination justify-content-center"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link"&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;nav aria-label="Page navigation"&gt;
    &lt;ul class="pagination justify-content-end mb-0"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link"&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2  -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Pagination Style-1
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav aria-label="Page navigation" class="pagination-style-1">
                                        <ul class="pagination mb-0 flex-wrap">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0);">
                                                    <i class="ri-arrow-left-s-line align-middle"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">21</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">
                                                    <i class="ri-arrow-right-s-line align-middle"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation" class="pagination-style-1"&gt;
    &lt;ul class="pagination mb-0"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                &lt;i class="ri-arrow-left-s-line align-middle"&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;21&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                &lt;i class="ri-arrow-right-s-line align-middle"&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Pagination Style-2
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav aria-label="Page navigation" class="pagination-style-2">
                                        <ul class="pagination mb-0 flex-wrap">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0);">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">17</a></li>
                                            <li class="page-item">
                                                <a class="page-link text-primary" href="javascript:void(0);">
                                                    next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation" class="pagination-style-2"&gt;
    &lt;ul class="pagination mb-0 flex-wrap"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                Prev
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;17&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link text-primary" href="javascript:void(0);"&gt;
                next
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Pagination Style-3
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav aria-label="Page navigation" class="pagination-style-3">
                                        <ul class="pagination mb-0 flex-wrap">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0);">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">16</a></li>
                                            <li class="page-item">
                                                <a class="page-link text-primary" href="javascript:void(0);">
                                                    next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation" class="pagination-style-3"&gt;
    &lt;ul class="pagination mb-0 flex-wrap"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                Prev
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;16&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link text-primary" href="javascript:void(0);"&gt;
                next
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Pagination Style-4
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <nav aria-label="Page navigation" class="pagination-style-4">
                                        <ul class="pagination mb-0 flex-wrap">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0);">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">16</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">17</a></li>
                                            <li class="page-item">
                                                <a class="page-link text-primary" href="javascript:void(0);">
                                                    next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;nav aria-label="Page navigation" class="pagination-style-4"&gt;
    &lt;ul class="pagination mb-0 flex-wrap"&gt;
        &lt;li class="page-item disabled"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                Prev
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item active"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link" href="javascript:void(0);"&gt;
                &lt;i class="bi bi-three-dots"&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;16&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;&lt;a class="page-link" href="javascript:void(0);"&gt;17&lt;/a&gt;&lt;/li&gt;
        &lt;li class="page-item"&gt;
            &lt;a class="page-link text-primary" href="javascript:void(0);"&gt;
                next
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

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