<!-- include mainhead.html"-->
<link rel="stylesheet" href="/storage/assets/libs/quill/quill.snow.css">
<link rel="stylesheet" href="/storage/assets/libs/quill/quill.bubble.css">

<!-- Filepond CSS -->
<link rel="stylesheet" href="/storage/assets/libs/filepond/filepond.min.css">
<link rel="stylesheet" href="/storage/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
<link rel="stylesheet" href="/storage/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">

<!-- Date & Time Picker CSS -->
<link rel="stylesheet" href="/storage/assets/libs/flatpickr/flatpickr.min.css">

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
                        <h1 class="page-title fw-medium fs-18 mb-2">Blog Create</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">
                                    Pages
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Create</li>
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
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">New Blog</div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-6">
                                        <label for="blog-title" class="form-label">Blog Title</label>
                                        <input type="text" class="form-control" id="blog-title" placeholder="Blog Title">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="blog-category" class="form-label">Blog Category</label>
                                        <select class="form-control" data-trigger name="blog-category" id="blog-category">
                                            <option value="">Select Category</option>
                                            <option value="Choice 1">Nature</option>
                                            <option value="Choice 2">Sports</option>
                                            <option value="Choice 3">Food</option>
                                            <option value="Choice 3">Travel</option>
                                            <option value="Choice 3">Fashion</option>
                                            <option value="Choice 3">Beauty</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="blog-author" class="form-label">Blog Author</label>
                                        <input type="text" class="form-control" id="blog-author" placeholder="Enter Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="blog-author-email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="blog-author-email" placeholder="Enter Email">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="publish-date" class="form-label">Publish Date</label>
                                        <input type="text" class="form-control" id="publish-date" placeholder="Choose date">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="publish-time" class="form-label">Publish Time</label>
                                        <input type="text" class="form-control" id="publish-time" placeholder="Choose time">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="product-status-add" class="form-label">Published Status</label>
                                        <select class="form-control" data-trigger name="product-status-add" id="product-status-add">
                                            <option value="">Select</option>
                                            <option value="Published">Published</option>
                                            <option value="Scheduled">Hold</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="blog-tags" class="form-label">Blog Tags</label>
                                        <select class="form-control" name="blog-tags" id="blog-tags" multiple>
                                            <option value="Top Blog" selected>Top Blog</option>
                                            <option value="Blogger">Blogger</option>
                                            <option value="Adventure">Adventure</option>
                                            <option value="Landscape" selected>Landscape</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <label class="form-label">Blog Content</label>
                                        <div id="blog-content"></div>
                                    </div>
                                    <div class="col-xl-12 blog-images-container">
                                        <label for="blog-author-email" class="form-label">Blog Images</label>
                                        <input type="file" class="blog-images" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                    </div>
                                    <div class="col-xl-12">
                                        <label class="form-label">Blog Type</label>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="blog-type" id="blog-free1" checked>
                                                <label class="form-check-label" for="blog-free1">
                                                    Free
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="blog-type" id="blog-paid1">
                                                <label class="form-check-label" for="blog-paid1">
                                                    Paid
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="btn-list text-end">
                                    <button type="button" class="btn btn-sm btn-light">Save As Draft</button>
                                    <button type="button" class="btn btn-sm btn-primary">Post Blog</button>
                                </div>
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

    <!-- Date & Time Picker JS -->
    <script src="/storage/assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- Quill Editor JS -->
    <script src="/storage/assets/libs/quill/quill.js"></script>

    <!-- Filepond JS -->
    <script src="/storage/assets/libs/filepond/filepond.min.js"></script>
    <script src="/storage/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="/storage/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="/storage/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="/storage/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
    <script src="/storage/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js"></script>
    <script src="/storage/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="/storage/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="/storage/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
    <script src="/storage/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
    <script src="/storage/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js"></script>

    <!-- Internal Create Blog JS -->
    <script src="/storage/assets/js/blog-create.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>