@include('zynix.partials.mainhead')

<link rel="stylesheet" href="/storage/assets/libs/sweetalert2/sweetalert2.min.css">

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
                        <h1 class="page-title fw-medium fs-18 mb-2">Cart</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
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
                    <div class="col-xxl-9">
                        <div class="card custom-card overflow-hidden" id="cart-container-delete">
                            <div class="card-header">
                                <div class="card-title">Cart Items</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabeljob1" value=""
                                                        aria-label="..."></th>
                                                <th>
                                                    Product Name
                                                </th>
                                                <th>
                                                    Price
                                                </th>
                                                <th>
                                                    Color
                                                </th>
                                                <th>
                                                    Quantity
                                                </th>
                                                <th>
                                                    Expected Delivery
                                                </th>
                                                <th>
                                                    Total
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="ps-4"><input class="form-check-input" type="checkbox"
                                                        id="checkboxNoLabeljob6" value="" aria-label="..."></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                            <span class="avatar avatar-xxl p-1 border">
                                                                <span
                                                                    class="avatar avatar-xl p-1 bg-primary-transparent">
                                                                    <img src="/storage/assets/images/ecommerce/png/1.png"
                                                                        alt="">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="mb-1 fs-14 fw-semibold">
                                                                <a href="javascript:void(0);">Loveseat Compact sofa</a>
                                                            </div>
                                                            <div class="mb-1">
                                                                <span class="me-1">23 Items Remianing</span>
                                                            </div>
                                                            <div class="mb-1">
                                                                <span class="badge bg-success-transparent">30% Shipping
                                                                    Discount</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fw-semibold fs-14">
                                                        $459
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-semibold">Color : </span>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="p-2 fs-14 text-muted"
                                                                data-bs-toggle="dropdown" aria-expanded="false"> Black
                                                                <i
                                                                    class="ri-arrow-down-s-line align-middle d-inline-block"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Brown</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Gray</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Green</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-quantity-container">
                                                    <div class="input-group border rounded flex-nowrap">
                                                        <div class="input-group p-1 rounded bg-light flex-nowrap">
                                                            <button
                                                                class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-minus"><i
                                                                    class="ri-subtract-line"></i></button>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 text-center bg-light w-100"
                                                                aria-label="quantity" id="product-quantity1"
                                                                value="2">
                                                            <button
                                                                class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-plus"><i
                                                                    class="ri-add-line"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center"><span
                                                        class="badge bg-primary-transparent rounded-pill">2
                                                        Days</span></td>
                                                <td>
                                                    <div class="fs-14 fw-semibold">
                                                        $918
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="wishlist.html"
                                                        class="btn btn-icon btn-primary-light rounded-pill me-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Add To Wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-icon btn-secondary-light rounded-pill btn-delete"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Remove From cart">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-4"><input class="form-check-input" type="checkbox"
                                                        id="checkboxNoLabeljob2" value="" aria-label="...">
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                            <span class="avatar avatar-xxl p-1 border">
                                                                <span
                                                                    class="avatar avatar-xl p-1 bg-secondary-transparent">
                                                                    <img src="/storage/assets/images/ecommerce/png/14.png"
                                                                        alt="">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="mb-1 fs-14 fw-semibold">
                                                                <a href="javascript:void(0);">Sony Alpha a7 Camera</a>
                                                            </div>
                                                            <div class="mb-1">
                                                                <span class="me-1">05 Items Remianing</span>
                                                            </div>
                                                            <div class="mb-1">
                                                                <span class="badge bg-primary-transparent">65% Merchant
                                                                    Discount</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fw-semibold fs-14">
                                                        $129
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-semibold">Color : </span>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="p-2 fs-14 text-muted"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                Orange
                                                                <i
                                                                    class="ri-arrow-down-s-line align-middle d-inline-block"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Brown</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Gray</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Green</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-quantity-container">
                                                    <div class="input-group border rounded flex-nowrap">
                                                        <div class="input-group p-1 rounded bg-light flex-nowrap">
                                                            <button
                                                                class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-minus"><i
                                                                    class="ri-subtract-line"></i></button>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 text-center bg-light w-100"
                                                                aria-label="quantity" id="product-quantity2"
                                                                value="2">
                                                            <button
                                                                class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-plus"><i
                                                                    class="ri-add-line"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center"><span
                                                        class="badge bg-secondary-transparent rounded-pill">5
                                                        Days</span></td>
                                                <td>
                                                    <div class="fs-14 fw-semibold">
                                                        $129
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="wishlist.html"
                                                        class="btn btn-icon btn-primary-light rounded-pill me-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Add To Wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-icon btn-secondary-light rounded-pill btn-delete"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Remove From cart">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-4"><input class="form-check-input" type="checkbox"
                                                        id="checkboxNoLabeljob3" value="" aria-label="...">
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                            <span class="avatar avatar-xxl p-1 border">
                                                                <span
                                                                    class="avatar avatar-xl p-1 bg-success-transparent">
                                                                    <img src="/storage/assets/images/ecommerce/png/33.png"
                                                                        alt="">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="mb-1 fs-14 fw-semibold">
                                                                <a href="javascript:void(0);">Classic oriental
                                                                    fragrance
                                                                    Perfume</a>
                                                            </div>
                                                            <div class="mb-1">
                                                                <span class="me-1">12 Items Remianing</span>
                                                            </div>
                                                            <div class="mb-1">
                                                                <span class="badge bg-primary-transparent">12% Merchant
                                                                    Discount</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fw-semibold fs-14">
                                                        $249
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-semibold">Color : </span>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="p-2 fs-14 text-muted"
                                                                data-bs-toggle="dropdown" aria-expanded="false"> Pink
                                                                <i
                                                                    class="ri-arrow-down-s-line align-middle d-inline-block"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Brown</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Gray</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Green</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-quantity-container">
                                                    <div class="input-group border rounded flex-nowrap">
                                                        <div class="input-group p-1 rounded bg-light flex-nowrap">
                                                            <button
                                                                class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-minus"><i
                                                                    class="ri-subtract-line"></i></button>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 text-center bg-light w-100"
                                                                aria-label="quantity" id="product-quantity3"
                                                                value="2">
                                                            <button
                                                                class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-plus"><i
                                                                    class="ri-add-line"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center"><span
                                                        class="badge bg-success-transparent rounded-pill">3
                                                        Days</span></td>
                                                <td>
                                                    <div class="fs-14 fw-semibold">
                                                        $498
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="wishlist.html"
                                                        class="btn btn-icon btn-primary-light rounded-pill me-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Add To Wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-icon btn-secondary-light rounded-pill btn-delete"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Remove From cart">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-4"><input class="form-check-input" type="checkbox"
                                                        id="checkboxNoLabeljob4" value="" aria-label="...">
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                            <span class="avatar avatar-xxl p-1 border">
                                                                <span class="avatar avatar-xl p-1 bg-pink-transparent">
                                                                    <img src="/storage/assets/images/ecommerce/png/31.png"
                                                                        alt="">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="mb-1 fs-14 fw-semibold">
                                                                <a href="javascript:void(0);">Babypink Ladies
                                                                    handbag</a>
                                                            </div>
                                                            <div class="mb-1">
                                                                <span class="me-1">09 Items Remianing</span>
                                                            </div>
                                                            <div class="mb-1">
                                                                <span class="badge bg-success-transparent">75% Shipping
                                                                    Discount</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fw-semibold fs-14">
                                                        $249
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-semibold">Color : </span>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="p-2 fs-14 text-muted"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false">Green<i
                                                                    class="ri-arrow-down-s-line align-middle d-inline-block"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Brown</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Gray</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Yellow</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-quantity-container">
                                                    <div class="input-group border rounded flex-nowrap">
                                                        <div class="input-group p-1 rounded bg-light flex-nowrap">
                                                            <button
                                                                class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-minus"><i
                                                                    class="ri-subtract-line"></i></button>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 text-center bg-light w-100"
                                                                aria-label="quantity" id="product-quantity4"
                                                                value="2">
                                                            <button
                                                                class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-plus"><i
                                                                    class="ri-add-line"></i></button>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-center"><span
                                                        class="badge bg-info-transparent rounded-pill">4 Days</span>
                                                </td>
                                                <td>
                                                    <div class="fs-14 fw-semibold">
                                                        $498
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="wishlist.html"
                                                        class="btn btn-icon btn-primary-light rounded-pill me-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Add To Wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-icon btn-secondary-light rounded-pill btn-delete"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Remove From cart">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-4"><input class="form-check-input" type="checkbox"
                                                        id="checkboxNoLabeljob5" value="" aria-label="...">
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                            <span class="avatar avatar-xxl p-1 border">
                                                                <span
                                                                    class="avatar avatar-xl p-1 bg-warning-transparent">
                                                                    <img src="/storage/assets/images/ecommerce/png/37.png"
                                                                        alt="">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <div class="mb-1 fs-14 fw-semibold">
                                                                <a href="javascript:void(0);">Yellow Gents Shoe</a>
                                                            </div>
                                                            <div class="mb-1">
                                                                <span class="me-1">52 Items Remianing</span>
                                                            </div>
                                                            <div class="mb-1">
                                                                <span class="badge bg-primary-transparent">15% Merchant
                                                                    Discount</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="fw-semibold fs-14">
                                                        $1,299
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-semibold">Color : </span>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="p-2 fs-14 text-muted"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false">Black<i
                                                                    class="ri-arrow-down-s-line align-middle d-inline-block"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Brown</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Gray</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="javascript:void(0);">Yellow</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-quantity-container">
                                                    <div class="input-group border rounded flex-nowrap">
                                                        <div class="input-group p-1 rounded bg-light flex-nowrap">
                                                            <button
                                                                class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-minus"><i
                                                                    class="ri-subtract-line"></i></button>
                                                            <input type="text"
                                                                class="form-control form-control-sm border-0 text-center bg-light w-100"
                                                                aria-label="quantity" id="product-quantity5"
                                                                value="2">
                                                            <button
                                                                class="btn btn-icon bg-white border input-group-text flex-fill product-quantity-plus"><i
                                                                    class="ri-add-line"></i></button>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-center"><span
                                                        class="badge bg-primary-transparent rounded-pill">2
                                                        Days</span></td>
                                                <td>
                                                    <div class="fs-14 fw-semibold">
                                                        $1,299
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="wishlist.html"
                                                        class="btn btn-icon btn-primary-light rounded-pill me-1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Add To Wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-icon btn-secondary-light rounded-pill btn-delete"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Remove From cart">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <div class="d-flex align-items-center">
                                    <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled"> <a class="page-link"
                                                        href="javascript:void(0);"> Prev </a> </li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0);">2</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0);">3</a></li>
                                                <li class="page-item"> <a class="page-link text-primary"
                                                        href="javascript:void(0);"> next </a> </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card shadow-none d-none" id="cart-empty-cart">
                            <div class="card-header">
                                <div class="card-title">
                                    Empty Cart
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="cart-empty text-center">
                                    <span class="svg-muted">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="24"
                                            height="24" viewbox="0 0 24 24">
                                            <path
                                                d="M18.6 16.5H8.9c-.9 0-1.6-.6-1.9-1.4L4.8 6.7c0-.1 0-.3.1-.4.1-.1.2-.1.4-.1h17.1c.1 0 .3.1.4.2.1.1.1.3.1.4L20.5 15c-.2.8-1 1.5-1.9 1.5zM5.9 7.1 8 14.8c.1.4.5.8 1 .8h9.7c.5 0 .9-.3 1-.8l2.1-7.7H5.9z" />
                                            <path
                                                d="M6 10.9 3.7 2.5H1.3v-.9H4c.2 0 .4.1.4.3l2.4 8.7-.8.3zM8.1 18.8 6 11l.9-.3L9 18.5z" />
                                            <path
                                                d="M20.8 20.4h-.9V20c0-.7-.6-1.3-1.3-1.3H8.9c-.7 0-1.3.6-1.3 1.3v.5h-.9V20c0-1.2 1-2.2 2.2-2.2h9.7c1.2 0 2.2 1 2.2 2.2v.4z" />
                                            <path
                                                d="M8.9 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-1 2.2-2.2 2.2zm0-3.5c-.7 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.8 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3zM18.6 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-.9 2.2-2.2 2.2zm0-3.5c-.8 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.7 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3z" />
                                        </svg>
                                    </span>
                                    <h3 class="fw-bold mb-1">Your Cart is Empty</h3>
                                    <h5 class="mb-3">Add some items to make me happy :)</h5>
                                    <a href="products.html" class="btn btn-primary btn-wave m-3"
                                        data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Summery</div>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-secondary text-center" role="alert">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold fs-14"><i
                                                class="ri-coupon-line fs-14 me-1"></i>HAPPY2024</span>
                                        <a href="javascript:void(0);"
                                            class="text-secondary fs-14 fw-semibold">Apply</a>
                                    </div>
                                </div>
                                <h6 class="font-semibold mb-3">Dispatch Options :</h6>
                                <ul class="nav nav-tabs cart-navs mb-3  justify-content-between disaptch-tabs gap-3 border-bottom-0"
                                    role="tablist">
                                    <li class="nav-item me-0" role="presentation">
                                        <a class="nav-link px-2 active text-break border" data-bs-toggle="tab"
                                            role="tab" aria-current="page" href="#employee-vertical"
                                            aria-selected="true">
                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="32"
                                                height="32" fill="#000000" viewBox="0 0 256 256">
                                                <path
                                                    d="M216,116.69V216H152V152H104v64H40V116.69l82.34-82.35a8,8,0,0,1,11.32,0Z"
                                                    opacity="0.2"></path>
                                                <path
                                                    d="M240,208H224V136l2.34,2.34A8,8,0,0,0,237.66,127L139.31,28.68a16,16,0,0,0-22.62,0L18.34,127a8,8,0,0,0,11.32,11.31L32,136v72H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM48,120l80-80,80,80v88H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48Zm96,88H112V160h32Z">
                                                </path>
                                            </svg>Home Delivery
                                            <span class="float-end text-primary fs-16"><i
                                                    class="ri-check-double-line active-check-icon d-none"></i></span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link px-2 text-break border" data-bs-toggle="tab"
                                            role="tab" aria-current="page" href="#customers-vertical"
                                            aria-selected="false" tabindex="-1">
                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="32"
                                                height="32" fill="#000000" viewBox="0 0 256 256">
                                                <path
                                                    d="M136,32V216H40V85.35a8,8,0,0,1,3.56-6.66l80-53.33A8,8,0,0,1,136,32Z"
                                                    opacity="0.2"></path>
                                                <path
                                                    d="M240,208H224V96a16,16,0,0,0-16-16H144V32a16,16,0,0,0-24.88-13.32L39.12,72A16,16,0,0,0,32,85.34V208H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM208,96V208H144V96ZM48,85.34,128,32V208H48ZM112,112v16a8,8,0,0,1-16,0V112a8,8,0,1,1,16,0Zm-32,0v16a8,8,0,0,1-16,0V112a8,8,0,1,1,16,0Zm0,56v16a8,8,0,0,1-16,0V168a8,8,0,0,1,16,0Zm32,0v16a8,8,0,0,1-16,0V168a8,8,0,0,1,16,0Z">
                                                </path>
                                            </svg>Local Pickup
                                            <span class="float-end text-primary fs-16"><i
                                                    class="ri-check-double-line active-check-icon d-none"></i></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active text-muted p-0 border-0" id="employee-vertical"
                                        role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap table-borderless border rounded mb-3">
                                                <tbody>
                                                    <tr class="">
                                                        <td class=""><span class="fs-14">Sub Total</span></td>
                                                        <td class="text-end"> <span class="fs-14 fw-semibold"> 3,458
                                                            </span> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class=""><span class="fs-14">Delivery <span
                                                                    class="fs-12 text-primary ms-1">(2
                                                                    Items)</span></span>
                                                        </td>
                                                        <td class="text-end"> <span class="fs-14 fw-semibold"> +32
                                                            </span> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class=""><span class="fs-14">Pickup Point <span
                                                                    class="fs-12 text-primary ms-1">(1
                                                                    Item)</span></span></td>
                                                        <td class="text-end"> <span
                                                                class="fs-14 text-danger fw-semibold"> Free
                                                            </span> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class=""><span class="fs-14">Over All
                                                                Discount</span>
                                                        </td>
                                                        <td class="text-end "> <span class="fs-14 fw-semibold">-
                                                                15%</span> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class=""><span class="fs-14">Shipping
                                                                Charges</span></td>
                                                        <td class="text-end fs-14"> <span class="fs-14 fw-semibold">0
                                                                (Free)</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class=""><span class="fs-14">Tex</span></td>
                                                        <td class="text-end fs-14 fw-semibold"> +25% </td>
                                                    </tr>
                                                    <tr class="border-top border-bottom">
                                                        <td class=""><span
                                                                class="fs-14 text-success">HAPPY2024</span>
                                                        </td>
                                                        <td class="text-end text-success"> <i
                                                                class="ri-checkbox-circle-line fs-18"></i> </td>
                                                    </tr>
                                                    <tr class="border-bottom">
                                                        <td class=""><span
                                                                class="fw-semibold fs-14">Total</span>
                                                        </td>
                                                        <td class="text-end "> <span
                                                                class="fw-semibold fs-14">$40,020</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane text-muted p-0 border-0" id="customers-vertical"
                                        role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap table-borderless border rounded mb-3">
                                                <tbody>
                                                    <tr class="">
                                                        <td class=""><span class="fs-14">Sub Total</span></td>
                                                        <td class="text-end"> <span class="fs-14 fw-semibold"> 3,458
                                                            </span> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class="">
                                                            <span class="fs-14">Delivery
                                                                <span class="fs-12 text-primary ms-1">(2
                                                                    Items)
                                                                </span>
                                                            </span>
                                                        </td>
                                                        <td class="text-end"> <span class="fs-14 fw-semibold"> 0
                                                                (Free)
                                                            </span> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class=""><span class="fs-14">Pickup Point <span
                                                                    class="fs-12 text-primary ms-1">(1
                                                                    Item)</span></span></td>
                                                        <td class="text-end"> <span
                                                                class="fs-14 text-danger fw-semibold"> Free
                                                            </span> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class=""><span class="fs-14">Over All
                                                                Discount</span>
                                                        </td>
                                                        <td class="text-end "> <span class="fs-14 fw-semibold">-
                                                                15%</span> </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class=""><span class="fs-14">Shipping
                                                                Charges</span></td>
                                                        <td class="text-end fs-14"> <span class="fs-14 fw-semibold">0
                                                                (Free)</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td class=""><span class="fs-14">Tex</span></td>
                                                        <td class="text-end fs-14 fw-semibold"> +25% </td>
                                                    </tr>
                                                    <tr class="border-top border-bottom">
                                                        <td class=""><span
                                                                class="fs-14 text-success">HAPPY2024</span>
                                                        </td>
                                                        <td class="text-end text-success"> <i
                                                                class="ri-checkbox-circle-line fs-18"></i> </td>
                                                    </tr>
                                                    <tr class="border-bottom">
                                                        <td class=""><span
                                                                class="fw-semibold fs-14">Total</span>
                                                        </td>
                                                        <td class="text-end "> <span
                                                                class="fw-semibold fs-14">$39,094</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-0 flex-wrap"> <a href="checkout.html"
                                        class="btn btn-secondary btn-w-lg m-1 flex-fill">Check
                                        Out <i class="ti ti-arrow-right me-2"></i></a> <a href="products.html"
                                        class="btn btn-primary flex-fill m-1">Continue Shopping <i
                                            class="ti ti-arrow-right me-2"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')

    </div>

    @include('zynix.partials.commonjs')

    @include('zynix.partials.custom_switcherjs')

    <!-- Sweetalerts JS -->
    <script src="/storage/assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Internal Cart JS -->
    <script src="/storage/assets/js/cart.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>