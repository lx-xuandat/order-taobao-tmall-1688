<!-- include mainhead.html"-->

<!-- GLightbox CSS -->
<link rel="stylesheet" href="/storage/assets/libs/glightbox/css/glightbox.min.css">

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

                <!-- Start::page-header -->
                <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Blog Details</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">
                                    Pages
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </div>
                    <div>
                        <button class="btn btn-primary-light btn-wave me-2 waves-effect waves-light">
                            <i class="bx bx-crown align-middle"></i> Plan Upgrade
                        </button>
                        <button class="btn btn-secondary-light btn-wave me-0 waves-effect waves-light">
                            <i class="ri-upload-cloud-line align-middle"></i> Export Report
                        </button>
                    </div>
                </div>
                <!-- End::page-header -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-8">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-body pb-0">
                                        <a href="javascript:void(0);">
                                            <img src="/storage/assets/images/media/blog/19.jpg" class="card-img rounded blog-details-img" alt="...">
                                        </a>
                                        <div class="d-flex align-items-center justify-content-between mb-3 mt-3 flex-wrap gap-2">
                                            <p class="h5 fw-semibold mb-0">Virtual Reality and Art: Creating Immersive Experiences</p>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm avatar-rounded me-2 p-1 bg-gray-300">
                                                    <img src="/storage/assets/images/faces/12.jpg" alt="">
                                                </span>
                                                <div>
                                                    <p class="mb-0 fw-medium">Christopher - <span class="fs-12 text-muted fw-normal">Tue,25 Dec 2024 - 11:45</span></p>
                                                    <p class="mb-0 text-muted"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-sm-flex align-items-cneter">
                                            <div class="btn-list mt-sm-0 mt-2 blog-icons">
                                                <button class="btn rounded-pill btn-sm btn-primary btn-wave" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Like"><i class="ri-thumb-up-line me-1"></i>Like</button>
                                                <button class="btn rounded-pill btn-sm btn-secondary btn-wave" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share"><i class="ri-share-line me-1"></i>Share</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-4 pt-0">
                                        <h6 class="fw-semibold">
                                            The Evolution of Art in the Digital Age
                                        </h6>
                                        <p class="mb-4">
                                            With the advent of digital tools, artists have been able to push the limits of their creativity. VR represents the next step in this evolution, allowing for the creation of art that is not only seen but also experienced.
                                        </p>
                                        <p class="mb-4">
                                            <span class="h6 fw-semibold">Creating Immersive Art -</span> VR offers artists a vast array of tools and techniques to create immersive experiences. From 3D modeling software to real-time rendering engines, this section delves into the technologies that are enabling artists to craft virtual worlds.
                                        </p>
                                        <p class="mb-2">
                                            <span class="h6 fw-semibold">The Future of Art -</span> What does the future hold for art in the age of VR? This section speculates on how virtual reality might continue to evolve and influence the art world. We’ll discuss potential trends, such as the integration of AI.
                                        </p>
                                        <p class="mb-4">Virtual Reality (VR) is transforming the art world, offering artists and audiences new ways to create, experience, and interact with art. By merging technology with creativity, VR has opened up possibilities for immersive experiences that go beyond traditional boundaries.</p>
                                        <blockquote class="blockquote custom-blockquote blog-blockquote primary mb-4 text-center">
                                            <h6 class="lh-base">While VR offers exciting possibilities, it also presents unique challenges for artists. This section addresses the technical, creative, and logistical obstacles that come with working in virtual reality...</h6>
                                            <footer class="blockquote-footer mt-3 fs-14 text-muted mb-0">Someone famous as <cite title="Source Title">- Maxwell Quasar</cite></footer>
                                            <span class="quote-icon"><i class="ri-chat-quote-fill"></i></span>
                                        </blockquote>
                                        <p class="mb-0">
                                            From enchanting nature's beauty quotes that evoke visions of lush meadows full of brilliantly-colored flowers or dense forests with sky-high trees to famous quotes about nature's ever-present—and absolutely fundamental—role in our lives, these 101 quotes about nature will have you itching to get off your couch and get outside. For famous <b>quotes about nature</b>, we have them here!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Comments
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush" id="blog-details-comment-list">
                                            <li class="list-group-item border-0 border-bottom">
                                                <div class="d-flex align-items-start gap-3 flex-wrap">
                                                    <div>
                                                        <span class="avatar avatar-lg avatar-rounded  p-1 bg-light borde">
                                                            <img src="/storage/assets/images/faces/3.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill w-50">
                                                        <div class="p-3 bg-light border rounded">
                                                            <span class="fw-medium d-block mb-1">TechEnthusiast21</span>
                                                            <span class="d-block mb-3 text-muted">Wow, these 3D images are mind-blowing! The depth and realism are incredible. It's like stepping into another dimension.</span>
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-primary-light btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                                <button class="btn btn-sm btn-secondary-light btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-item border-0 pe-0 pb-0">
                                                            <div class="d-flex align-items-start gap-3 flex-wrap">
                                                                <div>
                                                                    <span class="avatar avatar-lg avatar-rounded p-1 bg-light border">
                                                                        <img src="/storage/assets/images/faces/4.jpg" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="flex-fill w-50">
                                                                    <div class="p-3 bg-light border rounded">
                                                                        <span class="fw-medium d-block mb-1">Karnakaran463</span>
                                                                        <span class="d-block mb-3 text-muted">Great job on showcasing the power of 3D technology!</span>
                                                                        <div class="btn-list">
                                                                            <button class="btn btn-sm btn-primary-light btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                                            <button class="btn btn-sm btn-secondary-light btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0 border-bottom">
                                                <div class="d-flex align-items-start gap-3 flex-wrap">
                                                    <div>
                                                        <span class="avatar avatar-lg avatar-rounded  p-1 bg-light borde">
                                                            <img src="/storage/assets/images/faces/13.jpg" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill w-50">
                                                        <div class="p-3 bg-light border rounded">
                                                            <span class="fw-medium d-block mb-1">ArtsyExplorer</span>
                                                            <span class="d-block mb-3 text-muted">The 3D images on your blog are a visual feast! I love how they bring a new level of engagement and interactivity. It's like art coming to life. Can't wait to see more creative uses of 3D in the future!</span>
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-primary-light btn-wave">Reply<i class="ri-reply-line ms-1"></i></button>
                                                                <button class="btn btn-sm btn-secondary-light btn-wave">Report<i class="ri-error-warning-line ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Recent Posts
                                        </div>
                                        <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="d-flex gap-3 flex-wrap align-items-center">
                                                    <span class="avatar avatar-xl">
                                                        <img src="/storage/assets/images/media/blog/14.jpg" class="img-fluid" alt="...">
                                                    </span>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);" class="mb-0 badge bg-primary-transparent">Technology</a>
                                                        <p class="mb-1 popular-blog-content text-truncate fw-medium">
                                                            Introduction to AI in Web Development
                                                        </p>
                                                        <span class="text-muted fs-12">2024-02-19 10:30 AM</span>
                                                    </div>
                                                    <div>
                                                <a href="javascript:void(0);" class="text-primary text-decoration-underline">View
                                                                All</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex gap-3 flex-wrap align-items-center">
                                                    <span class="avatar avatar-xl">
                                                        <img src="/storage/assets/images/media/blog/15.jpg" class="img-fluid" alt="...">
                                                    </span>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);" class="mb-0 badge bg-secondary-transparent">Travel</a>
                                                        <p class="mb-1 popular-blog-content text-truncate fw-medium">
                                                            Exploring Beautiful Landscapes in New Zealand
                                                        </p>
                                                        <span class="text-muted fs-12">2024-02-18 03:45 PM</span>
                                                    </div>
                                                    <div>
                                                <a href="javascript:void(0);" class="text-primary text-decoration-underline">View
                                                                All</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex gap-3 flex-wrap align-items-center">
                                                    <span class="avatar avatar-xl">
                                                        <img src="/storage/assets/images/media/blog/16.jpg" class="img-fluid" alt="...">
                                                    </span>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);" class="mb-0 badge bg-success-transparent">Health & Wellness</a>
                                                        <p class="mb-1 popular-blog-content text-truncate fw-medium">
                                                            10 Tips for a Healthy Lifestyle
                                                        </p>
                                                        <span class="text-muted fs-12">2024-02-17 08:15 AM</span>
                                                    </div>
                                                    <div>
                                                <a href="javascript:void(0);" class="text-primary text-decoration-underline">View
                                                                All</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex gap-3 flex-wrap align-items-center">
                                                    <span class="avatar avatar-xl">
                                                        <img src="/storage/assets/images/media/blog/17.jpg" class="img-fluid" alt="...">
                                                    </span>
                                                    <div class="flex-fill">
                                                        <a href="javascript:void(0);" class="mb-0 badge bg-info-transparent">Food & Cooking</a>
                                                        <p class="mb-1 popular-blog-content text-truncate fw-medium">
                                                            Delicious Recipes for a Summer BBQ
                                                        </p>
                                                        <span class="text-muted fs-12">2024-02-16 01:00 PM</span>
                                                    </div>
                                                    <div>
                                                <a href="javascript:void(0);" class="text-primary text-decoration-underline">View
                                                                All</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                          Explore Topics
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <span>
                                                                    <i class="ri-leaf-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-primary-transparent text-primary"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium ms-2">Nature</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-primary-transparent rounded-pill">21 Items</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <span>
                                                                    <i class="ri-discord-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-secondary-transparent text-secondary"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium ms-2">Sports</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-primary-transparent rounded-pill">16 Items</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <span>
                                                                    <i class="ri-bowl-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-success-transparent text-success"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium ms-2">Food</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-primary-transparent rounded-pill">06 Items</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <span>
                                                                    <i class="ri-suitcase-2-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-info-transparent text-info"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium ms-2">Travel</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-primary-transparent rounded-pill">18 Items</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <span>
                                                                    <i class="ri-handbag-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-warning-transparent text-warning"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium ms-2">Fashion</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-primary-transparent rounded-pill">09 Items</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <span>
                                                                    <i class="ri-handbag-fill fs-14 p-1 rounded-2 me-2 d-inline-block align-middle lh-1 bg-danger-transparent text-danger"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="fw-medium ms-2">Beauty</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-primary-transparent rounded-pill">11 Items</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                         Popular Tags
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="blog-popular-tags">
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#blogger</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#styleblogger</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#livecolorfully</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#amwriting</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#analytics</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#designblogger</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#picoftheday</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#adventure</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#landscape</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#fitnessgoals</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#foodblogger</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#vegan</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#portrait</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#canonphotography</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#fineart</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#trending</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#lifestyle</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#Montainviewpoint</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#Beauty</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#Nature</span>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-light text-default border">#Art</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Gallery
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gy-3">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                <a href="/storage/assets/images/media/media-48.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="/storage/assets/images/media/media-48.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                <a href="/storage/assets/images/media/media-49.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="/storage/assets/images/media/media-49.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                <a href="/storage/assets/images/media/media-50.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="/storage/assets/images/media/media-50.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                <a href="/storage/assets/images/media/media-51.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="/storage/assets/images/media/media-51.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                <a href="/storage/assets/images/media/media-52.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="/storage/assets/images/media/media-52.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                <a href="/storage/assets/images/media/media-53.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="/storage/assets/images/media/media-53.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                <a href="/storage/assets/images/media/media-54.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="/storage/assets/images/media/media-54.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                <a href="/storage/assets/images/media/media-55.jpg" class="glightbox card mb-0" data-gallery="gallery1">
                                                    <img src="/storage/assets/images/media/media-55.jpg" alt="image" >
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card p-3">
                                    <div class="card-body p-4 bg-light border">
                                        <div class="text-center">
                                            <label class="form-check-label mb-3">
                                                Subscribe to get updates about latest News & Posts
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control shadow-none" placeholder="Email Here" aria-label="blog-email" aria-describedby="blog-subscribe">
                                                <button class="btn btn-primary btn-wave" type="button" id="blog-subscribe">Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Leave a comment
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-6">
                                        <label for="blog-first-name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="blog-first-name" placeholder="Enter Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="blog-last-name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="blog-last-name" placeholder="Enter Name">
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="blog-email" class="form-label">Email ID</label>
                                        <input type="text" class="form-control" id="blog-email" placeholder="Enter Email">
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="blog-comment" class="form-label">Write Comment</label>
                                        <textarea class="form-control" id="blog-comment" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-end">
                                    <button class="btn btn-primary-light">Post Comment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

   @include('zynix.partials.custom_switcherjs')

    <!-- Gallery JS -->
    <script src="/storage/assets/libs/glightbox/js/glightbox.min.js"></script>

    <!-- Blog Details JS -->
    <script src="/storage/assets/js/blog-details.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>