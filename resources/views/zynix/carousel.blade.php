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
                            <h1 class="page-title fw-medium fs-18 mb-2">Carousel</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced Ui</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Carousel</li>
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
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Slides Only</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="/storage/assets/images/media/media-26.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-27.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-33.jpg" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active"&gt;
            &lt;img src="/storage/assets/images/media/media-26.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-27.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-33.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">With controls</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="/storage/assets/images/media/media-28.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-31.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-32.jpg" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active"&gt;
            &lt;img src="/storage/assets/images/media/media-28.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-31.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-32.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="carousel-control-prev" type="button"
        data-bs-target="#carouselExampleControls" data-bs-slide="prev"&gt;
        &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class="carousel-control-next" type="button"
        data-bs-target="#carouselExampleControls" data-bs-slide="next"&gt;
        &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">With indicators</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="/storage/assets/images/media/media-25.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-29.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-30.jpg" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"&gt;
    &lt;div class="carousel-indicators"&gt;
        &lt;button type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"&gt;&lt;/button&gt;
        &lt;button type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1" aria-label="Slide 2"&gt;&lt;/button&gt;
        &lt;button type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2" aria-label="Slide 3"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active"&gt;
            &lt;img src="/storage/assets/images/media/media-25.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-29.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-30.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="carousel-control-prev" type="button"
        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"&gt;
        &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class="carousel-control-next" type="button"
        data-bs-target="#carouselExampleIndicators" data-bs-slide="next"&gt;
        &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">With captions</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                                class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                                aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                                aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="/storage/assets/images/media/media-59.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-fixed-white">First slide label</h5>
                                                    <p>Some representative placeholder content for the first slide.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-60.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-fixed-white">Second slide label</h5>
                                                    <p>Some representative placeholder content for the second slide.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-61.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-fixed-white">Third slide label</h5>
                                                    <p>Some representative placeholder content for the third slide.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"&gt;
    &lt;div class="carousel-indicators"&gt;
        &lt;button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
            class="active" aria-current="true" aria-label="Slide 1"&gt;&lt;/button&gt;
        &lt;button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"&gt;&lt;/button&gt;
        &lt;button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active"&gt;
            &lt;img src="/storage/assets/images/media/media-59.jpg" class="d-block w-100" alt="..."&gt;
            &lt;div class="carousel-caption d-none d-md-block"&gt;
                &lt;h5&gt;First slide label&lt;/h5&gt;
                &lt;p&gt;Some representative placeholder content for the first slide.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-60.jpg" class="d-block w-100" alt="..."&gt;
            &lt;div class="carousel-caption d-none d-md-block"&gt;
                &lt;h5&gt;Second slide label&lt;/h5&gt;
                &lt;p&gt;Some representative placeholder content for the second slide.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-61.jpg" class="d-block w-100" alt="..."&gt;
            &lt;div class="carousel-caption d-none d-md-block"&gt;
                &lt;h5&gt;Third slide label&lt;/h5&gt;
                &lt;p&gt;Some representative placeholder content for the third slide.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="carousel-control-prev" type="button"
        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"&gt;
        &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class="carousel-control-next" type="button"
        data-bs-target="#carouselExampleCaptions" data-bs-slide="next"&gt;
        &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Crossfade</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="/storage/assets/images/media/media-43.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-44.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-45.jpg" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active"&gt;
            &lt;img src="/storage/assets/images/media/media-43.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-44.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-45.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="carousel-control-prev" type="button"
        data-bs-target="#carouselExampleFade" data-bs-slide="prev"&gt;
        &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class="carousel-control-next" type="button"
        data-bs-target="#carouselExampleFade" data-bs-slide="next"&gt;
        &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Individual .carousel-item interval</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="10000">
                                                <img src="/storage/assets/images/media/media-40.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="/storage/assets/images/media/media-41.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-42.jpg" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active" data-bs-interval="10000"&gt;
            &lt;img src="/storage/assets/images/media/media-40.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item" data-bs-interval="2000"&gt;
            &lt;img src="/storage/assets/images/media/media-41.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-42.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="carousel-control-prev" type="button"
        data-bs-target="#carouselExampleInterval" data-bs-slide="prev"&gt;
        &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class="carousel-control-next" type="button"
        data-bs-target="#carouselExampleInterval" data-bs-slide="next"&gt;
        &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Disable touch swiping</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                                        data-bs-interval="false">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="/storage/assets/images/media/media-13.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-14.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-18.jpg" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
    data-bs-interval="false"&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active"&gt;
            &lt;img src="/storage/assets/images/media/media-13.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-14.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-18.jpg" class="d-block w-100" alt="..."&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="carousel-control-prev" type="button"
        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev"&gt;
        &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class="carousel-control-next" type="button"
        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next"&gt;
        &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Dark variant</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                                class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                                aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                                aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="10000">
                                                <img src="/storage/assets/images/media/media-63.jpg" class="d-block w-100"
                                                    alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-fixed-white">First slide label</h5>
                                                    <p class="op-7">Some representative placeholder content for the first slide.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="/storage/assets/images/media/media-64.jpg" class="d-block w-100"
                                                    alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-fixed-white">Second slide label</h5>
                                                    <p class="op-7">Some representative placeholder content for the second slide.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/storage/assets/images/media/media-62.jpg" class="d-block w-100"
                                                    alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="text-fixed-white">Third slide label</h5>
                                                    <p class="op-7">Some representative placeholder content for the third slide.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel"&gt;
    &lt;div class="carousel-indicators"&gt;
        &lt;button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
            class="active" aria-current="true" aria-label="Slide 1"&gt;&lt;/button&gt;
        &lt;button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
            aria-label="Slide 2"&gt;&lt;/button&gt;
        &lt;button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
            aria-label="Slide 3"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active" data-bs-interval="10000"&gt;
            &lt;img src="/storage/assets/images/media/media-63.jpg" class="d-block w-100"
                alt="..."&gt;
            &lt;div class="carousel-caption d-none d-md-block"&gt;
                &lt;h5&gt;First slide label&lt;/h5&gt;
                &lt;p class="op-7"&gt;Some representative placeholder content for the first slide.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item" data-bs-interval="2000"&gt;
            &lt;img src="/storage/assets/images/media/media-64.jpg" class="d-block w-100"
                alt="..."&gt;
            &lt;div class="carousel-caption d-none d-md-block"&gt;
                &lt;h5&gt;Second slide label&lt;/h5&gt;
                &lt;p class="op-7"&gt;Some representative placeholder content for the second slide.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img src="/storage/assets/images/media/media-62.jpg" class="d-block w-100"
                alt="..."&gt;
            &lt;div class="carousel-caption d-none d-md-block"&gt;
                &lt;h5&gt;Third slide label&lt;/h5&gt;
                &lt;p class="op-7"&gt;Some representative placeholder content for the third slide.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="carousel-control-prev" type="button"
        data-bs-target="#carouselExampleDark" data-bs-slide="prev"&gt;
        &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Previous&lt;/span&gt;
    &lt;/button&gt;
    &lt;button class="carousel-control-next" type="button"
        data-bs-target="#carouselExampleDark" data-bs-slide="next"&gt;
        &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="visually-hidden"&gt;Next&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

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