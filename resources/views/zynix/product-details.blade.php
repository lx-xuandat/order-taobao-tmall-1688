<!-- include mainhead.html"-->

<!-- Swiper Css -->
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
                <div
                    class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Product Details</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-white btn-wave border-0 me-0 fw-normal waves-effect waves-light">
                            <i class="ri-filter-3-fill me-2"></i>Filter
                        </button>
                        <button type="button" class="btn btn-primary btn-wave waves-effect waves-light">
                            <i class="ri-upload-2-line me-2"></i> Export report
                        </button>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xxl-5">
                        <div class="row">
                            <div class="col-sm-2 col-12">
                                <div class="swiper swiper-view-details">
                                    <div class="swiper-wrapper d-sm-block d-flex">
                                        <div class="swiper-slide w-sm-100 mb-4 p-2">
                                            <img class="img-fluid bg-primary-transparent p-1"
                                                src="/storage/assets/images/ecommerce/png/5.png" alt="img">
                                        </div>
                                        <div class="swiper-slide w-sm-100 mb-4 p-2">
                                            <img class="img-fluid bg-secondary-transparent p-1"
                                                src="/storage/assets/images/ecommerce/png/4.png" alt="img">
                                        </div>
                                        <div class="swiper-slide w-sm-100 mb-4 p-2">
                                            <img class="img-fluid bg-success-transparent p-1"
                                                src="/storage/assets/images/ecommerce/png/3.png" alt="img">
                                        </div>
                                        <div class="swiper-slide w-sm-100 mb-4 p-2">
                                            <img class="img-fluid bg-info-transparent p-1"
                                                src="/storage/assets/images/ecommerce/png/2.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 col-12">
                                <div class="swiper swiper-preview-details bg-white p-3 product-details-page">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" id="img-container">
                                            <img class="img-fluid bg-light" src="/storage/assets/images/ecommerce/png/38.png"
                                                alt="img">
                                        </div>
                                        <div class="swiper-slide image-container">
                                            <img class="img-fluid bg-light" src="/storage/assets/images/ecommerce/png/39.png"
                                                alt="img">
                                        </div>
                                        <div class="swiper-slide image-container">
                                            <img class="img-fluid bg-light" src="/storage/assets/images/ecommerce/png/40.png"
                                                alt="img">
                                        </div>
                                        <div class="swiper-slide image-container">
                                            <img class="img-fluid bg-light" src="/storage/assets/images/ecommerce/png/41.png"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div>
                                    <p class="fs-22 fw-semibold mb-0">The PB Comfort Upholstered Sofa from Pottery Barn
                                        is known for its classic design and luxurious comfort.</p>
                                    <p class="fs-14 mb-3">
                                        <i class="ri-star-s-fill text-warning align-middle"></i>
                                        <i class="ri-star-s-fill text-warning align-middle"></i>
                                        <i class="ri-star-s-fill text-warning align-middle"></i>
                                        <i class="ri-star-s-fill text-warning align-middle"></i>
                                        <i class="ri-star-half-s-fill text-warning align-middle"></i>
                                        <span class="fw-semibold ms-1">4.2<a class="text-primary ms-2"
                                                href="javascript:void(0);">(4.4k Reviews)</a></span>
                                    </p>
                                    <div class="row mb-3 justify-content-between">
                                        <div class="col-xxl-8 col-xl-12 d-flex align-items-center gap-3">
                                            <p class="mb-1"><span class="h3 fw-semibold"><sup
                                                        class="fs-14">$</sup>22,499<sup class="fs-14">.00</sup></span>
                                            </p>
                                            <div>
                                                <p class="mb-0 text-muted fs-12">M.R.P-<s>$23,299.00</s></p>
                                                <span class="text-info fs-14">Don't Miss Out Save Upto 45% Off.</span>
                                            </div>
                                        </div>
                                        <div class="col-xxl-2">
                                            <a href="javascript:void(0);"
                                                class="mb-0 text-success fw-medium text-decoration-underline"><i
                                                    class="ri-coupon-2-line me-1 align-middle d-inline-block"></i>Get a
                                                Coupon</a>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <p class="fs-15 fw-semibold mb-1">Description :</p>
                                        <p class="text-muted mb-0 fs-13">
                                            This sofa features a traditional yet timeless design with clean lines and a
                                            plush, inviting appearance.It typically includes details such as rolled arms
                                            and a slightly curved back, adding to its classic charm.Designed with deep,
                                            cushioned seats and generous padding, the PB Comfort Upholstered Sofa offers
                                            exceptional comfort. <a href="javascript:void(0);"
                                                class="text-decoration-underline text-primary">Read More ?</a>
                                        </p>
                                    </div>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fs-15 fw-semibold mb-2">Select Color :</p>
                                                <p class="mb-0 d-flex">
                                                    <button
                                                        class="btn bg-primary-transparent border border-primary color-btn me-2 mb-1 d-flex align-items-center justify-content-center"><i
                                                            class="ri-circle-fill fs-14"></i>
                                                    </button>
                                                    <button class="btn bg-info-transparent color-btn me-2 mb-1"><i
                                                            class="ri-circle-fill fs-14"></i>
                                                    </button>
                                                    <button class="btn bg-danger-transparent color-btn me-2 mb-1"><i
                                                            class="ri-circle-fill fs-14"></i>
                                                    </button>
                                                    <button class="btn bg-warning-transparent color-btn me-2 mb-1"><i
                                                            class="ri-circle-fill fs-14"></i>
                                                    </button>
                                                    <button class="btn bg-success-transparent color-btn me-2 mb-1"><i
                                                            class="ri-circle-fill fs-14"></i>
                                                    </button>
                                                </p>

                                            </div>
                                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <p class="fs-15 fw-semibold mb-2">Select Weight :</p>
                                                <p class="mb-0 d-flex">
                                                <p class="mb-0 d-flex">
                                                    <a class="color-3 product-sizes" href="javascript:void(0)"> 20KG
                                                    </a>
                                                    <a class="color-1 product-sizes selected" href="javascript:void(0)">
                                                        35KG
                                                    </a>
                                                    <a class="color-2 product-sizes" href="javascript:void(0)"> 100KG
                                                    </a>
                                                    <a class="color-3 product-sizes" href="javascript:void(0)">
                                                        150KG
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-md-0 mt-3">
                                                <p class="fs-15 fw-semibold mb-2">Select Pattren :</p>
                                                <p class="mb-0 d-flex">
                                                    <a class="avatar avatar-sm me-2 avatar-rounded p-1 border border-primary border-opacity-50"
                                                        href="javascript:void(0)">
                                                        <img src="/storage/assets/images/ecommerce/jpg/19.jpg" alt="img">
                                                    </a>
                                                    <a class="avatar avatar-sm me-2 avatar-rounded p-1 border"
                                                        href="javascript:void(0)">
                                                        <img src="/storage/assets/images/ecommerce/jpg/20.jpg" alt="img">
                                                    </a>
                                                    <a class="avatar avatar-sm me-2 avatar-rounded p-1 border"
                                                        href="javascript:void(0)">
                                                        <img src="/storage/assets/images/ecommerce/jpg/21.jpg" alt="img">
                                                    </a>
                                                    <a class="avatar avatar-sm me-2 avatar-rounded p-1 border"
                                                        href="javascript:void(0)">
                                                        <img src="/storage/assets/images/ecommerce/jpg/22.jpg" alt="img">
                                                    </a>
                                                    <a class="avatar avatar-sm me-2 avatar-rounded p-1 border"
                                                        href="javascript:void(0)">
                                                        <img src="/storage/assets/images/ecommerce/jpg/23.jpg" alt="img">
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="row align-items-center gy-3">
                                            <div class="col-lg-4">
                                                <div class="input-group border product-count rounded flex-nowrap">
                                                    <div class="input-group p-1 rounded bg-light flex-nowrap">
                                                        <button
                                                            class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-minus"><i
                                                                class="ri-subtract-line"></i></button>
                                                        <input type="text"
                                                            class="form-control form-control-sm border-0 text-center bg-light w-100"
                                                            aria-label="quantity" id="product-quantity5" value="2">
                                                        <button
                                                            class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-plus"><i
                                                                class="ri-add-line"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="d-flex">
                                                    <a href="cart.html" class="btn btn-primary border-0"><i
                                                            class="ri-heart-2-line me-2"></i>Add To cart</a>
                                                    <div class="ms-3 fs-14"> <a href="products.html"
                                                            class="btn btn-secondary border-0"><i
                                                                class="ri-share-forward-line me-2"></i>Buy Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center flex-wrap gap-2 sm:mt-0 mt-3">
                                            <p class="fs-15 mb-0 me-4 fw-semibold">Share :</p>
                                            <div class="btn-list mb-0">
                                                <button
                                                    class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-md-0">
                                                    <i class="ri-whatsapp-line"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-md-0">
                                                    <i class="ri-instagram-line"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-md-0">
                                                    <i class="ri-twitter-x-line"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-md-0">
                                                    <i class="ri-youtube-line"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light mb-md-0">
                                                    <i class="ri-facebook-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-7">
                        <div class="card custom-card">
                            <div class="card-header p-0">
                                <ul class="nav nav-tabs tab-style-8 scaleX mb-0 d-flex" id="myTab1" role="tablist">
                                    <li class="nav-item me-0" role="presentation">
                                        <button class="nav-link px-4 py-3 active" id="allorders" data-bs-toggle="tab"
                                            data-bs-target="#allorders-pane" type="button" role="tab"
                                            aria-controls="allorders-pane" aria-selected="true">About Item</button>
                                    </li>
                                    <li class="nav-item me-0" role="presentation">
                                        <button class="nav-link px-4 py-3" id="pending" data-bs-toggle="tab"
                                            data-bs-target="#pending-pane" type="button" role="tab"
                                            aria-controls="pending-pane" aria-selected="false"
                                            tabindex="-1">Reviews</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content p-0" id="myTabContent">
                                    <div class="tab-pane p-0 border-0 active show" id="allorders-pane" role="tabpanel"
                                        aria-labelledby="allorders" tabindex="0">
                                        <p class="mb-3">
                                            ComfyChic sweaters are expertly crafted using premium materials such as
                                            cashmere, merino wool, and organic cotton blends. </p>
                                        <p class="mb-3">
                                            These fabrics are selected for their exceptional softness, durability, and
                                            ability to keep you warm without compromising on style. </p>
                                        <div class="table-responsive">
                                            <table class="table text-nowrap table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="fw-semibold"> Brand </th>
                                                        <td>Belgian Linen Sectional</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="fw-semibold"> Weight </th>
                                                        <td> 150 KG </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="fw-semibold"> Quantity </th>
                                                        <td> 1 Set </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="fw-semibold"> Cloth </th>
                                                        <td> Cotton </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="fw-semibold"> Additional Features </th>
                                                        <td> pillows, slipcovers for easy maintenance</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-0 border-0" id="pending-pane" role="tabpanel"
                                        aria-labelledby="pending" tabindex="0">
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 border-end">
                                                <h6 class="mb-3">User Reviews</h6>
                                                <p class="bg-success badge mb-3">Very Good</p>
                                                <h3 class="fw-semibold">4.76<sub class="fs-12 text-muted ms-2">Out of
                                                        5</sub></h3>
                                                <p class="mb-0 text-muted fs-12"><i
                                                        class="ri-star-line me-1 fs-13"></i>Based on (23,435) ratings
                                                </p>
                                            </div>
                                            <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12 px-3">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="fs-12 me-2 fw-semibold">5 <i
                                                            class="ri-star-fill fs-10"></i>
                                                    </div>
                                                    <div class="progress progress-xs flex-fill">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="text-muted ms-2 fs-12">Design</div>
                                                </div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="fs-12 me-2 fw-semibold">4 <i
                                                            class="ri-star-fill fs-10"></i>
                                                    </div>
                                                    <div class="progress progress-xs flex-fill">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 22%" aria-valuenow="22" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="text-muted ms-2 fs-12">Material</div>
                                                </div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="fs-12 me-2 fw-semibold">3 <i
                                                            class="ri-star-fill fs-10"></i>
                                                    </div>
                                                    <div class="progress progress-xs flex-fill">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 8%" aria-valuenow="8" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="text-muted ms-2 fs-12">Confort</div>
                                                </div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="fs-12 me-2 fw-semibold">2 <i
                                                            class="ri-star-fill fs-10"></i>
                                                    </div>
                                                    <div class="progress progress-xs flex-fill">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 9%" aria-valuenow="9" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="text-muted ms-2 fs-12">Quality</div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-12 me-2 fw-semibold">1 <i
                                                            class="ri-star-fill fs-10"></i>
                                                    </div>
                                                    <div class="progress progress-xs flex-fill">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 6%" aria-valuenow="6" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="text-muted ms-2 fs-12">Color</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-5">
                        <h6 class="fw-semibold mb-3">Similar Products :</h6>
                        <div class="swiper vertical swiper-vertical">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-2 col-sm-3 col-4">
                                                    <div class="bg-light rounded-2 p-2">
                                                        <a href="javascript:void(0);">
                                                            <img src="/storage/assets/images/ecommerce/png/1.png" alt="img"
                                                                class="img-fluid w-100 bg-primary-transparent">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-md-10 col-sm-9 col-8">
                                                    <div class="d-flex align-items-start justify-content-between mb-3">
                                                        <div class="flex-grow-1">
                                                            <a href="javascript:void(0);"
                                                                class="mb-1 d-inline-block text-primary fs-12 fw-500">Aliquyam</a>
                                                            <h6 class="fs-16 mb-1 fw-semibold"><a
                                                                    href="ecommerce-details.html">Wooden Sofa</a>
                                                            </h6>
                                                            <div class="d-flex align-items-baseline fs-11">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content">
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span>
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span>
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span>
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star"></i></span>
                                                                    </div>
                                                                    <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                                        <span>(23)</span>
                                                                        <span>Ratings</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-danger-transparent">30% Off</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-baseline">
                                                            <h6 class="fs-20 text-primary mb-0">$12,420</h6>
                                                            <span
                                                                class="fs-13 ms-2 text-muted text-decoration-line-through">$13,465</span>
                                                        </div>
                                                        <a href="cart.html"
                                                            class="btn btn-primary"><i
                                                                class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-2 col-sm-3 col-4">
                                                    <div class="bg-light rounded-2 p-2">
                                                        <a href="javascript:void(0);">
                                                            <img src="/storage/assets/images/ecommerce/png/14.png" alt="img"
                                                                class="img-fluid w-100 p-2 bg-secondary-transparent">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-md-10 col-sm-9 col-8">
                                                    <div class="d-flex align-items-start justify-content-between mb-3">
                                                        <div class="flex-grow-1">
                                                            <a href="javascript:void(0);"
                                                                class="mb-1 d-inline-block text-primary fs-12 fw-500">Aliquyam</a>
                                                            <h6 class="fs-16 mb-1 fw-semibold"><a
                                                                    href="ecommerce-details.html">CapturePro Camera</a>
                                                            </h6>
                                                            <div class="d-flex align-items-baseline fs-11">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content">
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span>
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span>
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span>
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star"></i></span>
                                                                    </div>
                                                                    <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                                        <span>(56)</span>
                                                                        <span>Ratings</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-info-transparent">45% Off</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-baseline">
                                                            <h6 class="fs-20 mb-0">$586</h6>
                                                            <span
                                                                class="fs-13 ms-2 text-muted text-decoration-line-through">$673</span>
                                                        </div>
                                                        <a href="cart.html"
                                                            class="btn btn-primary"><i
                                                                class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-2 col-sm-3 col-4">
                                                    <div class="bg-light rounded-2 p-2">
                                                        <a href="javascript:void(0);">
                                                            <img src="/storage/assets/images/ecommerce/png/33.png" alt="img"
                                                                class="img-fluid w-100 p-2 bg-success-transparent">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-md-10 col-sm-9 col-8">
                                                    <div class="d-flex align-items-start justify-content-between mb-3">
                                                        <div class="flex-grow-1">
                                                            <a href="javascript:void(0);"
                                                                class="mb-1 d-inline-block text-primary fs-12 fw-500">Aliquyam</a>
                                                            <h6 class="fs-16 mb-1 fw-semibold"><a
                                                                    href="ecommerce-details.html">Jasmin Perfume</a>
                                                            </h6>
                                                            <div class="d-flex align-items-baseline fs-11">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content">
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span>
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span>
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span>
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star"></i></span>
                                                                    </div>
                                                                    <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                                        <span>(85)</span>
                                                                        <span>Ratings</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-primary-transparent">76% Off</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-baseline">
                                                            <h6 class="fs-20 mb-0">$4,653</h6>
                                                            <span
                                                                class="fs-13 ms-2 text-muted text-decoration-line-through">$5,585</span>
                                                        </div>
                                                        <a href="cart.html"
                                                            class="btn btn-primary"><i
                                                                class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-2 col-sm-3 col-4">
                                                    <div class="bg-light rounded-2 p-2">
                                                        <a href="javascript:void(0);">
                                                            <img src="/storage/assets/images/ecommerce/png/34.png" alt="img"
                                                                class="img-fluid w-100 p-2 bg-warning-transparent">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-md-10 col-sm-9 col-8">
                                                    <div class="d-flex align-items-start justify-content-between mb-3">
                                                        <div class="flex-grow-1">
                                                            <a href="javascript:void(0);"
                                                                class="mb-1 d-inline-block text-primary fs-12 fw-500">Aliquyam</a>
                                                            <h6 class="fs-16 mb-1 fw-semibold"><a
                                                                    href="ecommerce-details.html">Collage Bag</a>
                                                            </h6>
                                                            <div class="d-flex align-items-baseline fs-11">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content">
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span>
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span>
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span>
                                                                        <span class="text-warning"><i
                                                                                class="bi bi-star"></i></span>
                                                                    </div>
                                                                    <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                                        <span>(103)</span>
                                                                        <span>Ratings</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-secondary-transparent">75% Off</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-baseline">
                                                            <h6 class="fs-20mb-0">$599</h6>
                                                            <span
                                                                class="fs-13 ms-2 text-muted text-decoration-line-through">$999</span>
                                                        </div>
                                                        <a href="cart.html"
                                                            class="btn btn-primary"><i
                                                                class="ti ti-shopping-cart-plus me-1"></i> Add Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card card-style-3 custom-card mt-xl-0 mt-3">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="min-w-fit-content">
                                            <span class="avatar avatar-md bg-primary shipping-icon me-2">
                                                <i class="ti ti-truck-delivery fs-25"></i></span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-semibold fs-16 text-primary">Free Delivery</p>
                                        <p class="mb-0 fs-13 text-muted">Consetetur eirmod dolor stet justo
                                            gubergren ea et lorem sadipscing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card card-style-3 custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="min-w-fit-content">
                                        <span class="avatar avatar-md bg-secondary shipping-icon-1 me-2">
                                            <i class="ti ti-tags fs-25"></i></span>
                                </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-semibold fs-16 text-secondary">Secure Payment</p>
                                        <p class="mb-0 fs-13 text-muted">Consetetur eirmod dolor stet justo
                                            gubergren ea et lorem sadipscing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card card-style-3 custom-card ">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="min-w-fit-content">
                                        <span class="avatar avatar-md  bg-success shipping-icon-2 me-2">
                                            <i class="ti ti-arrow-back-up fs-25"></i></span>
                                 </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-semibold fs-16 text-success">Return Policy</p>
                                        <p class="mb-0 fs-13 text-muted">Consetetur eirmod dolor stet justo
                                            gubergren ea et lorem sadipscing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6">
                        <div class="card card-style-3 custom-card ">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="min-w-fit-content">
                                        <span class="avatar avatar-md bg-info shipping-icon-4 me-2">
                                            <i class="ti ti-cell fs-25"></i></span>
                                 </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-semibold fs-16 text-info">Certified Original Celler</p>
                                        <p class="mb-0 fs-13 text-muted">Consetetur eirmod dolor stet justo
                                            gubergren ea et lorem sadipscing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="">
                    <div class="h6 fw-medium mb-3">Related Products :</div>
                    <div class="">
                        <div class="swiper swiper-related-products">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-lg-3 row-cols-1">
                                        <div class="col">
                                            <div class="card custom-card card-style-2">
                                                <div class="card-body p-0">
                                                     <span class="badge bg-primary rounded py-1 top-left-badge">24% Off</span>
                                                    <div class="card-img-top p-2 border-bottom border-block-end-dashed">
                                                        <div class="btns-container-1 align-items-center gap-1"> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-primary "
                                                                data-bs-toggle="tooltip" aria-label="Quick View"
                                                                data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                            <a href="wishlist.html" class="btn btn-icon btn-secondary"
                                                                data-bs-toggle="tooltip" aria-label="Add to Wishlist"
                                                                data-bs-original-title="Add to Wishlist"><i
                                                                    class="bx bx-heart align-center"></i></a> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-success "
                                                                data-bs-toggle="tooltip" aria-label="Compare"
                                                                data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                        </div>
                                                        <div class="img-box-2 bg-primary-transparent"> <img src="/storage/assets/images/ecommerce/png/1.png"
                                                                alt="img"
                                                                class="scale-img img-fluid w-100 rounded">
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <h6 class="mb-1 fw-semibold fs-16"><a
                                                                href="product-details.html">Lightweight Sofa</a></h6>
                                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content"> <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-half"></i></span> </div>
                                                                    <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                                        <span>(563)</span> <span>Ratings</span> </p>
                                                                </div> <a href="javascript:void(0);"
                                                                    class="text-primary1 fs-13 fw-semibold">Patagonia</a>
                                                            </div>
                                                            <div class="min-w-fit-content">
                                                                <h5 class="fw-semibold mb-0">$11846</h5> <span
                                                                    class="fs-13 ms-2 text-muted text-decoration-line-through">$12957</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pt-0 d-grid">
                                                        <a href="cart.html" class="btn btn-light">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card custom-card card-style-2">
                                                <div class="card-body p-0">
                                                    <span class="badge bg-secondary rounded py-1 top-left-badge">75% Off</span>
                                                    <div class="card-img-top border-bottom p-2 border-block-end-dashed">
                                                        <div class="btns-container-1 align-items-center gap-1"> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-primary "
                                                                data-bs-toggle="tooltip" aria-label="Quick View"
                                                                data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                            <a href="wishlist.html" class="btn btn-icon btn-secondary"
                                                                data-bs-toggle="tooltip" aria-label="Add to Wishlist"
                                                                data-bs-original-title="Add to Wishlist"><i
                                                                    class="bx bx-heart align-center"></i></a> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-success "
                                                                data-bs-toggle="tooltip" aria-label="Compare"
                                                                data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                        </div>
                                                        <div class="img-box-2  bg-secondary-transparent"> <img src="/storage/assets/images/ecommerce/png/14.png"
                                                                alt="img"
                                                                class="scale-img img-fluid w-100  rounded">
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <h6 class="mb-1 fw-semibold fs-16"><a
                                                                href="product-details.html">Altra Pro Max Camera</a></h6>
                                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content"> <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-half"></i></span> </div>
                                                                    <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                                        <span>(235)</span> <span>Ratings</span> </p>
                                                                </div> <a href="javascript:void(0);"
                                                                    class="text-primary1 fs-13 fw-semibold">Stella McCartney</a>
                                                            </div>
                                                            <div class="min-w-fit-content">
                                                                <h5 class="fw-semibold mb-0">$2965</h5> <span
                                                                    class="fs-13 ms-2 text-muted text-decoration-line-through">$3675</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pt-0 d-grid">
                                                        <a href="cart.html" class="btn btn-light">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card custom-card card-style-2">
                                                <div class="card-body p-0">
                                                    <span class="badge bg-success rounded py-1 top-left-badge">92% Off</span>
                                                    <div class="card-img-top border-bottom p-2 border-block-end-dashed">
                                                        <div class="btns-container-1 align-items-center gap-1"> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-primary "
                                                                data-bs-toggle="tooltip" aria-label="Quick View"
                                                                data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                            <a href="wishlist.html" class="btn btn-icon btn-secondary"
                                                                data-bs-toggle="tooltip" aria-label="Add to Wishlist"
                                                                data-bs-original-title="Add to Wishlist"><i
                                                                    class="bx bx-heart align-center"></i></a> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-success "
                                                                data-bs-toggle="tooltip" aria-label="Compare"
                                                                data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                        </div>
                                                        <div class="img-box-2 bg-success-transparent"> <img src="/storage/assets/images/ecommerce/png/33.png"
                                                                alt="img"
                                                                class="scale-img img-fluid w-100  rounded">
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <h6 class="mb-1 fw-semibold fs-16"><a
                                                                href="product-details.html">Perfume</a></h6>
                                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content"> <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-half"></i></span> </div>
                                                                    <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                                        <span>(1025)</span> <span>Ratings</span> </p>
                                                                </div> <a href="javascript:void(0);"
                                                                    class="text-primary1 fs-13 fw-semibold">Reformation</a>
                                                            </div>
                                                            <div class="min-w-fit-content">
                                                                <h5 class="fw-semibold mb-0">$256</h5> <span
                                                                    class="fs-13 ms-2 text-muted text-decoration-line-through">$345</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pt-0 d-grid">
                                                        <a href="cart.html" class="btn btn-light">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card custom-card card-style-2">
                                                <div class="card-body p-0">
                                                    <span class="badge bg-info rounded py-1 top-left-badge">35% Off</span>
                                                    <div class="card-img-top p-2 border-bottom border-block-end-dashed">
                                                        <div class="btns-container-1 align-items-center gap-1"> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-primary "
                                                                data-bs-toggle="tooltip" aria-label="Quick View"
                                                                data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                            <a href="wishlist.html" class="btn btn-icon btn-secondary"
                                                                data-bs-toggle="tooltip" aria-label="Add to Wishlist"
                                                                data-bs-original-title="Add to Wishlist"><i
                                                                    class="bx bx-heart align-center"></i></a> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-success "
                                                                data-bs-toggle="tooltip" aria-label="Compare"
                                                                data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                        </div>
                                                        <div class="img-box-2 bg-info-transparent"> <img src="/storage/assets/images/ecommerce/png/10.png"
                                                                alt="img"
                                                                class="scale-img img-fluid w-100  rounded">
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <h6 class="mb-1 fw-semibold fs-16"><a
                                                                href="product-details.html">Alaram Clock</a></h6>
                                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content"> <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-half"></i></span> </div>
                                                                    <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                                        <span>(674)</span> <span>Ratings</span> </p>
                                                                </div> <a href="javascript:void(0);"
                                                                    class="text-primary1 fs-13 fw-semibold">Supreme</a>
                                                            </div>
                                                            <div class="min-w-fit-content">
                                                                <h5 class="fw-semibold mb-0">$974</h5> <span
                                                                    class="fs-13 ms-2 text-muted text-decoration-line-through">$1200</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pt-0 d-grid">
                                                        <a href="cart.html" class="btn btn-light">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card custom-card card-style-2">
                                                <div class="card-body p-0">
                                                    <span class="badge bg-pink rounded py-1 top-left-badge">43% Off</span>
                                                    <div class="card-img-top p-2 border-bottom border-block-end-dashed">
                                                        <div class="btns-container-1 align-items-center gap-1"> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-primary "
                                                                data-bs-toggle="tooltip" aria-label="Quick View"
                                                                data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                            <a href="wishlist.html" class="btn btn-icon btn-secondary"
                                                                data-bs-toggle="tooltip" aria-label="Add to Wishlist"
                                                                data-bs-original-title="Add to Wishlist"><i
                                                                    class="bx bx-heart align-center"></i></a> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-success "
                                                                data-bs-toggle="tooltip" aria-label="Compare"
                                                                data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                        </div>
                                                        <div class="img-box-2 bg-pink-transparent"> <img src="/storage/assets/images/ecommerce/png/31.png"
                                                                alt="img"
                                                                class="scale-img img-fluid w-100  rounded">
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <h6 class="mb-1 fw-semibold fs-16"><a
                                                                href="product-details.html">Ladies Stylish Hand bag</a></h6>
                                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content"> <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-half"></i></span> </div>
                                                                    <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                                        <span>(453)</span> <span>Ratings</span> </p>
                                                                </div> <a href="javascript:void(0);"
                                                                    class="text-primary1 fs-13 fw-semibold">Balenciaga</a>
                                                            </div>
                                                            <div class="min-w-fit-content">
                                                                <h5 class="fw-semibold mb-0">$640</h5> <span
                                                                    class="fs-13 ms-2 text-muted text-decoration-line-through">$999</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pt-0 d-grid">
                                                        <a href="cart.html" class="btn btn-light">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-lg-3 row-cols-1">
                                        <div class="col">
                                            <div class="card custom-card card-style-2">
                                                <div class="card-body p-0">
                                                    <span class="badge bg-warning rounded py-1 top-left-badge">25% Off</span>
                                                    <div class="card-img-top p-2 border-bottom border-block-end-dashed">
                                                        <div class="btns-container-1 align-items-center gap-1"> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-primary "
                                                                data-bs-toggle="tooltip" aria-label="Quick View"
                                                                data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                            <a href="wishlist.html" class="btn btn-icon btn-secondary"
                                                                data-bs-toggle="tooltip" aria-label="Add to Wishlist"
                                                                data-bs-original-title="Add to Wishlist"><i
                                                                    class="bx bx-heart align-center"></i></a> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-success "
                                                                data-bs-toggle="tooltip" aria-label="Compare"
                                                                data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                        </div>
                                                        <div class="img-box-2 bg-warning-transparent"> <img src="/storage/assets/images/ecommerce/png/37.png"
                                                                alt="img"
                                                                class="scale-img img-fluid w-100  rounded">
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <h6 class="mb-1 fw-semibold fs-16"><a
                                                                href="product-details.html">Lightweight Sneakers</a></h6>
                                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content"> <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-half"></i></span> </div>
                                                                    <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                                        <span>(874)</span> <span>Ratings</span> </p>
                                                                </div> <a href="javascript:void(0);"
                                                                    class="text-primary1 fs-13 fw-semibold">Stealth Series</a>
                                                            </div>
                                                            <div class="min-w-fit-content">
                                                                <h5 class="fw-semibold mb-0">$771</h5> <span
                                                                    class="fs-13 ms-2 text-muted text-decoration-line-through">$880</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pt-0 d-grid">
                                                        <a href="cart.html" class="btn btn-light">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card custom-card card-style-2">
                                                <div class="card-body p-0">
                                                    <span class="badge bg-teal rounded py-1 top-left-badge">54% Off</span>
                                                    <div class="card-img-top p-2 border-bottom border-block-end-dashed">
                                                        <div class="btns-container-1 align-items-center gap-1"> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-primary "
                                                                data-bs-toggle="tooltip" aria-label="Quick View"
                                                                data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                            <a href="wishlist.html" class="btn btn-icon btn-secondary"
                                                                data-bs-toggle="tooltip" aria-label="Add to Wishlist"
                                                                data-bs-original-title="Add to Wishlist"><i
                                                                    class="bx bx-heart align-center"></i></a> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-success "
                                                                data-bs-toggle="tooltip" aria-label="Compare"
                                                                data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                        </div>
                                                        <div class="img-box-2 bg-teal-transparent"> <img src="/storage/assets/images/ecommerce/png/35.png"
                                                                alt="img"
                                                                class="scale-img img-fluid w-100  rounded">
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <h6 class="mb-1 fw-semibold fs-16"><a
                                                                href="product-details.html">Samsung Headset</a></h6>
                                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content"> <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-half"></i></span> </div>
                                                                    <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                                        <span>(874)</span> <span>Ratings</span> </p>
                                                                </div> <a href="javascript:void(0);"
                                                                    class="text-primary1 fs-13 fw-semibold">Givenchy</a>
                                                            </div>
                                                            <div class="min-w-fit-content">
                                                                <h5 class="fw-semibold mb-0">$11,856</h5> <span
                                                                    class="fs-13 ms-2 text-muted text-decoration-line-through">$12,764</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pt-0 d-grid">
                                                        <a href="cart.html" class="btn btn-light">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card custom-card card-style-2">
                                                <div class="card-body p-0">
                                                    <span class="badge bg-pink rounded py-1 top-left-badge">43% Off</span>
                                                    <div class="card-img-top p-2 border-bottom border-block-end-dashed">
                                                        <div class="btns-container-1 align-items-center gap-1"> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-primary "
                                                                data-bs-toggle="tooltip" aria-label="Quick View"
                                                                data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                            <a href="wishlist.html" class="btn btn-icon btn-secondary"
                                                                data-bs-toggle="tooltip" aria-label="Add to Wishlist"
                                                                data-bs-original-title="Add to Wishlist"><i
                                                                    class="bx bx-heart align-center"></i></a> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-success "
                                                                data-bs-toggle="tooltip" aria-label="Compare"
                                                                data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                        </div>
                                                        <div class="img-box-2 bg-pink-transparent"> <img src="/storage/assets/images/ecommerce/png/31.png"
                                                                alt="img"
                                                                class="scale-img img-fluid w-100  rounded">
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <h6 class="mb-1 fw-semibold fs-16"><a
                                                                href="product-details.html">Ladies Stylish Hand bag</a></h6>
                                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content"> <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-half"></i></span> </div>
                                                                    <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                                        <span>(453)</span> <span>Ratings</span> </p>
                                                                </div> <a href="javascript:void(0);"
                                                                    class="text-primary1 fs-13 fw-semibold">Balenciaga</a>
                                                            </div>
                                                            <div class="min-w-fit-content">
                                                                <h5 class="fw-semibold mb-0">$640</h5> <span
                                                                    class="fs-13 ms-2 text-muted text-decoration-line-through">$999</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pt-0 d-grid">
                                                        <a href="cart.html" class="btn btn-light">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card custom-card card-style-2">
                                                <div class="card-body p-0">
                                                    <span class="badge bg-danger rounded py-1 top-left-badge">37% Off</span>
                                                    <div class="card-img-top border-bottom p-2 border-block-end-dashed">
                                                        <div class="btns-container-1 align-items-center gap-1"> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-primary "
                                                                data-bs-toggle="tooltip" aria-label="Quick View"
                                                                data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                            <a href="wishlist.html" class="btn btn-icon btn-secondary"
                                                                data-bs-toggle="tooltip" aria-label="Add to Wishlist"
                                                                data-bs-original-title="Add to Wishlist"><i
                                                                    class="bx bx-heart align-center"></i></a> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-success "
                                                                data-bs-toggle="tooltip" aria-label="Compare"
                                                                data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                        </div>
                                                        <div class="img-box-2 bg-danger-transparent"> <img src="/storage/assets/images/ecommerce/png/36.png"
                                                                alt="img"
                                                                class="scale-img img-fluid w-100  rounded">
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <h6 class="mb-1 fw-semibold fs-16"><a
                                                                href="product-details.html">Flower Pot</a></h6>
                                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content"> <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-half"></i></span> </div>
                                                                    <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                                        <span>(12)</span> <span>Ratings</span> </p>
                                                                </div> <a href="javascript:void(0);"
                                                                    class="text-primary1 fs-13 fw-semibold">Louis Vuitton</a>
                                                            </div>
                                                            <div class="min-w-fit-content">
                                                                <h5 class="fw-semibold mb-0">$499</h5> <span
                                                                    class="fs-13 ms-2 text-muted text-decoration-line-through">$540</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pt-0 d-grid">
                                                        <a href="cart.html" class="btn btn-light">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card custom-card card-style-2">
                                                <div class="card-body p-0">
                                                    <span class="badge bg-secondary rounded py-1 top-left-badge">75% Off</span>
                                                    <div class="card-img-top border-bottom p-2 border-block-end-dashed">
                                                        <div class="btns-container-1 align-items-center gap-1"> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-primary "
                                                                data-bs-toggle="tooltip" aria-label="Quick View"
                                                                data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                            <a href="wishlist.html" class="btn btn-icon btn-secondary"
                                                                data-bs-toggle="tooltip" aria-label="Add to Wishlist"
                                                                data-bs-original-title="Add to Wishlist"><i
                                                                    class="bx bx-heart align-center"></i></a> <a
                                                                href="javascript:void(0);"
                                                                class="btn btn-icon btn-success "
                                                                data-bs-toggle="tooltip" aria-label="Compare"
                                                                data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                        </div>
                                                        <div class="img-box-2  bg-secondary-transparent"> <img src="/storage/assets/images/ecommerce/png/14.png"
                                                                alt="img"
                                                                class="scale-img img-fluid w-100  rounded">
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <h6 class="mb-1 fw-semibold fs-16"><a
                                                                href="product-details.html">Altra Pro Max Camera</a></h6>
                                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex align-items-baseline fs-11">
                                                                    <div class="min-w-fit-content"> <span class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-fill"></i></span> <span
                                                                            class="text-warning"><i
                                                                                class="bi bi-star-half"></i></span> </div>
                                                                    <p class="mb-1 ms-1 min-w-fit-content text-muted">
                                                                        <span>(235)</span> <span>Ratings</span> </p>
                                                                </div> <a href="javascript:void(0);"
                                                                    class="text-primary1 fs-13 fw-semibold">Stella McCartney</a>
                                                            </div>
                                                            <div class="min-w-fit-content">
                                                                <h5 class="fw-semibold mb-0">$2965</h5> <span
                                                                    class="fs-13 ms-2 text-muted text-decoration-line-through">$3675</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 pt-0 d-grid">
                                                        <a href="cart.html" class="btn btn-light">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
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

    </div>

   @include('zynix.partials.commonjs')

   @include('zynix.partials.custom_switcherjs')

    <!-- Swiper JS -->
    <script src="/storage/assets/libs/swiper/swiper-bundle.min.js"></script>


    <!-- Internal Product-Details JS -->
    <script src="/storage/assets/js/product-details.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>