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

                <!-- Start::page-header -->
                <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Crypto</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">
                                     Dashboards
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Crypto</li>
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
                    <div class="col-xl-12">
                        <div class="swiper crypto-swiper swiper-basic">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div>
                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg" class="crypto-main-card-icon" alt="">
                                            </div>
                                            <div class="d-flex align-items-center mb-3 gap-2 justify-content-between">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1 avatar avatar-lg bg-light p-2 avatar-rounded">
                                                        <img src="/storage/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg" alt="" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <div class="text-muted fs-13 fw-medium">BTC</div>
                                                        <span class="d-block fw-semibold">Bitcoin</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h3 class="fw-semibold mb-0 lh-1">3.4563 BTC</h3>
                                                    <div class="text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-trending-up me-1 align-middle"></i>+0.57%</div>
                                                </div>
                                                <div id="btc-marketcap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div>
                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg" class="crypto-main-card-icon" alt="">
                                            </div>
                                            <div class="d-flex align-items-center mb-3 gap-2 justify-content-between">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1 avatar avatar-lg bg-light p-2 avatar-rounded">
                                                        <img src="/storage/assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg" alt="" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <div class="text-muted fs-13 fw-medium">BNB</div>
                                                        <span class="d-block fw-semibold">Binance</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h3 class="fw-semibold mb-0 lh-1">1,533 BNB</h3>
                                                    <div class="text-danger fs-13 d-inline-flex align-items-center"><i class="ti ti-trending-down me-1 align-center"></i>-0.12%</div>
                                                </div>
                                                <div id="bnb-marketcap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div>
                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg" class="crypto-main-card-icon" alt="">
                                            </div>
                                            <div class="d-flex align-items-center mb-3 gap-2 justify-content-between">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1 avatar avatar-lg bg-light p-2 avatar-rounded">
                                                        <img src="/storage/assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg" alt="" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <div class="text-muted fs-13 fw-medium">Cardano</div>
                                                        <span class="d-block fw-semibold">ADA</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h3 class="fw-semibold mb-0 lh-1">4,125 ADA</h3>
                                                    <div class="text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-trending-up me-1 align-middle"></i>+0.23%</div>
                                                </div>
                                                <div id="ada-marketcap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div>
                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg" class="crypto-main-card-icon" alt="">
                                            </div>
                                            <div class="d-flex align-items-center mb-3 gap-2 justify-content-between">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1 avatar avatar-lg bg-light p-2 avatar-rounded">
                                                        <img src="/storage/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg" alt="" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <div class="text-muted fs-13 fw-medium">Etherium</div>
                                                        <span class="d-block fw-semibold">ETH</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h3 class="fw-semibold mb-0 lh-1">5.327 ETH</h3>
                                                    <div class="text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-trending-up me-1 align-middle"></i>+0.23%</div>
                                                </div>
                                                <div id="eth-marketcap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div>
                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg" class="crypto-main-card-icon" alt="">
                                            </div>
                                            <div class="d-flex align-items-center mb-3 gap-2 justify-content-between">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1 avatar avatar-lg bg-light p-2 avatar-rounded">
                                                        <img src="/storage/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg" alt="" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <div class="text-muted fs-13 fw-medium">Tether</div>
                                                        <span class="d-block fw-semibold">USDT</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h3 class="fw-semibold mb-0 lh-1">5.327 USDT</h3>
                                                    <div class="text-danger fs-13 d-inline-flex align-items-center"><i class="ti ti-trending-down me-1 align-center"></i>-0.27%</div>
                                                </div>
                                                <div id="usdt-marketcap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div>
                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/xrp-xrp-logo.svg" class="crypto-main-card-icon" alt="">
                                            </div>
                                            <div class="d-flex align-items-center mb-3 gap-2 justify-content-between">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1 avatar avatar-lg bg-light p-2 avatar-rounded">
                                                        <img src="/storage/assets/images/crypto-currencies/crypto-icons/xrp-xrp-logo.svg" alt="" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <div class="text-muted fs-13 fw-medium">Ripple</div>
                                                        <span class="d-block fw-semibold">XRP</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h3 class="fw-semibold mb-0 lh-1">833 XRP</h3>
                                                    <div class="text-success fs-13 d-inline-flex align-items-center"><i class="ti ti-trending-up me-1 align-middle"></i>+0.34%</div>
                                                </div>
                                                <div id="xrp-marketcap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div>
                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg" class="crypto-main-card-icon" alt="">
                                            </div>
                                            <div class="d-flex align-items-center mb-3 gap-2 justify-content-between">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1 avatar avatar-lg bg-light p-2 avatar-rounded">
                                                        <img src="/storage/assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg" alt="" class="w-auto">
                                                    </div>
                                                    <div>
                                                        <div class="text-muted fs-13 fw-medium">Solana</div>
                                                        <span class="d-block fw-semibold">SOL</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h3 class="fw-semibold mb-0 lh-1">1.244 SOL</h3>
                                                    <div class="text-danger fs-13 d-inline-flex align-items-center"><i class="ti ti-trending-down me-1 align-center"></i>-0.045%</div>
                                                </div>
                                                <div id="sol-marketcap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Market Cap
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled market-cap-list">
                                    <li>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div>
                                                <span class="avatar bg-primary-transparent avatar-rounded svg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M94.3 71.4c-.5-3.6-2.3-6.4-5.4-8.2-1.4-.8-3.1-1.4-4.7-2.1.2-.1.3-.3.4-.3 7.9-4.1 7.2-16.3 1.5-20.5-2.3-1.7-4.9-2.8-7.7-3.4-2-.4-3.9-.7-6-1.1 0-3.5.1-8.5.1-12.4H65c0 3.8-.1 8.7-.1 12.1H59c0-3.5 0-8.3.1-12.1h-7.4c0 4-.1 8.8-.1 12.3-5.1 0-10-.1-15-.1 0 2.7 0 5.3-.1 7.9h3c.9 0 1.9 0 2.8.1 2.6.2 3.9 1.6 3.9 4.2l-.3 31.9c0 2.3-1 3.3-3.3 3.3h-5c-.5 3-1 5.9-1.6 8.9 5 .1 10 .1 15 .2 0 3.8 0 8.7-.1 12.7h7.4c0-4 .1-8.7.1-12.5 2.1.1 4 .1 5.9.2 0 3.8-.1 8.4-.1 12.3h7.4c0-4 .1-8.7.1-12.4.3 0 .5-.1.6-.1 3.5-.6 7.2-.9 10.6-1.7 4.5-1.1 8.1-3.7 9.9-8.2 1.7-3.6 2-7.2 1.5-11zM59 44.3c4.6 0 9.1-.4 13.4 1.5 2.8 1.2 4.2 3.5 4 6.3-.2 2.9-1.9 5-4.8 6-4.1 1.3-8.3 1.3-12.7 1.1 0-5 .1-9.8.1-14.9zm16.2 37.1c-4.1 1.8-8.5 1.8-12.8 1.9-1.2 0-2.4-.1-3.8-.1.1-5.5.1-10.9.2-16.4 5.6 0 11.2-.4 16.5 1.9 2.7 1.2 4.3 3.3 4.3 6.4 0 3.1-1.6 5.1-4.4 6.3z"></path></svg>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-1">Bitcoin</span>
                                                <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                                    <span class="d-block">BTC</span>
                                                    <div class="vr"></div>
                                                    <span>$15 Billion</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block h6 mb-1 fw-semibold">$18,907.01</span>
                                                <div class="d-flex align-items-center text-success gap-2 lh-1 fs-13">
                                                    <span class="d-block">+1,308.90</span>
                                                    <div class="vr"></div>
                                                    <span><i class="ti ti-arrow-narrow-up"></i>2.98%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div>
                                                <div class="avatar bg-secondary-transparent svg-secondary avatar-rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M65.2 87.2v22.7l28.1-39.5zM92.3 63.1l-27.1-45v32.7zM65.2 53.3v28l26.9-15.7zM35.8 63.1l27-45v32.7zM62.8 53.3v28L35.9 65.6zM62.8 87.2v22.7L34.7 70.4z"></path></svg>
                                                </div>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-1">Ethereum</span>
                                                <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                                    <span class="d-block">ETH</span>
                                                    <div class="vr"></div>
                                                    <span>$11 Billion</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block h6 mb-1 fw-semibold">$15,135.25</span>
                                                <div class="d-flex align-items-center text-success gap-2 lh-1 fs-13">
                                                    <span class="d-block">+1,076.09</span>
                                                    <div class="vr"></div>
                                                    <span><i class="ti ti-arrow-narrow-up"></i>3.07%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div>
                                                <span class="avatar bg-success-transparent svg-success avatar-rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M20.8 89.3c1.4-4.1 2.7-7.9 4.1-11.8.1-.4.9-.7 1.3-.7 2.3-.1 4.7 0 7 0H79c1.2 0 1.8-.4 2.1-1.5 2.5-7.5 5.2-15 7.8-22.5.1-.4.2-.8.4-1.4H33.8c1.4-4.2 2.8-8.1 4.1-12 .1-.3.7-.6 1.1-.6 1.4-.1 2.8 0 4.2 0 18.8 0 37.6.1 56.3-.1 5.6-.1 11.6 4.3 9.2 12.5-1.8 6.1-4.1 12.1-6.2 18.2-.7 2.1-1.4 4.1-2.1 6.2-2.6 7.2-7.9 11.6-15.2 13.6-.7.2-1.4.2-2.1.2H22.3c-.4-.1-.8-.1-1.5-.1z"></path><path fill="#fff" d="M55.9 58.1c-1.4 4-2.8 7.7-4.2 11.4-.1.3-.7.5-1 .5H19.2c-.1 0-.3-.1-.6-.2 1.3-3.7 2.6-7.3 4-10.9.1-.3.7-.7 1-.7 10.7-.1 21.4-.1 32.3-.1z"></path></svg>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-1">Dash</span>
                                                <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                                    <span class="d-block">DASH</span>
                                                    <div class="vr"></div>
                                                    <span>$23 Billion</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block h6 mb-1 fw-semibold">$15,176.46</span>
                                                <div class="d-flex align-items-center text-danger gap-2 lh-1 fs-13">
                                                    <span class="d-block">-1,088.01</span>
                                                    <div class="vr"></div>
                                                    <span><i class="ti ti-arrow-narrow-down"></i>0.15%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div>
                                                <div class="avatar bg-warning-transparent svg-warning avatar-rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M63.8 22.6c3.7-.1 7.2.6 10.2 2.7 1.4.9 2.4.8 3.6-.5 2.4-2.6 5-5 7.5-7.6.9-.9 1.8-1.5 2.9-.2 1.1 1.1.8 2-.2 2.9-2.6 2.6-5 5.2-7.6 7.8-1.1 1.1-1.3 1.9-.5 3.3 5.8 10.4 2.9 22.5-8.6 28.1-1.1.5-2.3.8-3.5 1-1.4.3-1.9 1-1.9 2.5.1 3 .1 6 0 8.9 0 1.6.5 2.3 2.1 2.7 6.2 1.5 10.6 5.2 13.3 10.9 2.6 5.5 1.9 15.4-3.8 21.3-4.8 4.9-13.2 6.9-19.5 4.4-7.5-3-12.1-9.6-12.2-17.5-.1-9.6 5.1-16.4 14.3-19 1.4-.4 2.2-1 2.1-2.5-.1-3.4 0-6.8-.2-10.2 0-.6-1.1-1.4-1.8-1.6-6-1.6-10.4-5.2-12.9-10.8-5.6-13 4.3-27.4 16.7-26.6zM79 92.8c0-7.9-6.9-15.1-14.5-15.1-8-.1-15.3 7-15.4 15-.1 7.9 7.3 15.6 14.9 15.5 8.1-.1 15-7.2 15-15.4zM49.3 41.1c0 8.6 6.6 15.6 14.9 15.6 7.7 0 14.8-7.1 14.8-15.1 0-7.4-5.5-15.2-14.7-15-8.4.1-14.9 6.3-15 14.5z"></path></svg>
                                                </div>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-1">Golem</span>
                                                <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                                    <span class="d-block">GLM</span>
                                                    <div class="vr"></div>
                                                    <span>$14 Billion</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block h6 mb-1 fw-semibold">$11,576.21</span>
                                                <div class="d-flex align-items-center text-success gap-2 lh-1 fs-13">
                                                    <span class="d-block">+1,0267.08</span>
                                                    <div class="vr"></div>
                                                    <span><i class="ti ti-arrow-narrow-up"></i>0.03%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div>
                                                <div class="avatar bg-info-transparent svg-info avatar-rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M59.5 87.6l5-19 11.9-4.4 3-11.2-.1-.2-11.7 4.3L76 25.2H52L40.9 66.8l-9.2 3.4-3.1 11.5 9.3-3.4-6.6 24.5h64l4.1-15.2z"></path></svg>
                                                </div>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-1">Litecoin</span>
                                                <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                                    <span class="d-block">LTC</span>
                                                    <div class="vr"></div>
                                                    <span>$13 Billion</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block h6 mb-1 fw-semibold">$16,581.81</span>
                                                <div class="d-flex align-items-center text-danger gap-2 lh-1 fs-13">
                                                    <span class="d-block">-1,018.05</span>
                                                    <div class="vr"></div>
                                                    <span><i class="ti ti-arrow-narrow-down"></i>3.80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div>
                                                <div class="avatar bg-danger-transparent svg-danger avatar-rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M63.9 111.8c-.9-.4-1.7-.7-2.4-1.1-11.8-7-23.7-14.1-35.5-21.2-2.7-1.6-3.2-3.2-1.6-6.1 12-21.5 24-43 35.9-64.5.8-1.5 1.8-2.6 3.6-2.6s2.8 1.2 3.6 2.7c11.9 21.4 23.9 42.9 35.8 64.3 1.6 2.9 1.2 4.5-1.6 6.2l-35.1 21c-.8.5-1.8.9-2.7 1.3zm-4.2-22.2c-2.8-1.7-5.5-3.3-8.2-4.9-2-1.2-3.9-2.6-5.9-3.8-.8-.5-2-.9-2.9-.6-4.9 1.4-9.4 3.9-14 6.8 11.3 6.7 22.2 13.3 33.4 20 0-4.5.1-8.6 0-12.7-.1-2.5.9-4.5 2.6-6.1 1.2-1.1 2.6-2.1 4-2.8 4-1.9 7.2-4.5 9-8.9.8 1.3 1.5 2.3 2.2 3.4-1.9 3.5-4.7 6-8.1 7.8-1.6.8-3.1 1.8-4.5 2.9-.7.6-1.6 1.6-1.6 2.4-.2 4.5-.1 9.1-.1 14 11.2-6.7 22-13.2 33.3-19.9-4.4-2.2-8.4-4.3-12.4-6.2-2.9-1.4-4.9-3.4-6.1-6.3-.8-2-1.5-4.1-2.1-6.3-1.5-5.8-5-9.6-10.8-11.3-.6-.2-1.3-.3-2-.5 2.4-3.4 2.4-3.4 5.9-1.8 5.3 2.5 8.9 6.6 10.1 12.3 1.2 6 3.8 10.5 9.9 12.5 1.6.5 3.1 1.5 4.6 2.3.9.4 1.7.8 2.6 1.2.1-.1.2-.2.3-.4-10.8-19.6-21.8-39.2-32.7-58.8-.2 0-.4.1-.6.1v2.2c0 7-.2 14 .1 21 .1 4.1-1.5 6.8-4.8 8.9-1.2.8-2.4 1.5-3.7 2.1-4 2-6.7 5.2-7.6 9.5-.5 2.4-.4 4.9-.5 7.3-3.7-1.1-3.7-1.1-3.4-5.1.6-6.8 4.1-11.7 10-15 1.6-.9 3.3-1.7 4.6-3 .9-.9 1.7-2.4 1.7-3.7.2-7.7.1-15.4.1-23.2 0-.4-.1-.9-.3-1.7-11 20-21.8 39.4-32.9 59.2 3.8-1.8 7.2-3.3 10.6-4.9 2.8-1.3 5.6-1.1 8.2.3 1.7.9 3.4 1.8 4.9 3.1 2.8 2.5 5.8 4.5 9.8 5-.9 1.2-1.6 2.1-2.7 3.6z"></path></svg>
                                                </div>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="fw-semibold d-block mb-1">Augur</span>
                                                <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                                    <span class="d-block">REP</span>
                                                    <div class="vr"></div>
                                                    <span>$10 Billion</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block h6 mb-1 fw-semibold">$10,107.51</span>
                                                <div class="d-flex align-items-center text-success gap-2 lh-1 fs-13">
                                                    <span class="d-block">+1,108.30</span>
                                                    <div class="vr"></div>
                                                    <span><i class="ti ti-arrow-narrow-up"></i>1.89%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title flex-fill">
                                    Crypto Analysis
                                </div>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary btn-sm">1D</button>
                                    <button type="button" class="btn btn-primary-light btn-sm">1W</button>
                                    <button type="button" class="btn btn-primary-light btn-sm">1M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm">1Y</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap">
                                    <div class="me-3">
                                        <div class="btn-group ms-2">
                                            <button type="button" class="btn btn-outline-light border btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="avatar avatar-xs avatar-rounded me-2 align-middle"><img src="/storage/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg" alt=""></span>Bitcoin
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><span class="avatar avatar-xs avatar-rounded me-2 align-middle"><img src="/storage/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg" alt=""></span>Etherium</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><span class="avatar avatar-xs avatar-rounded me-2 align-middle"><img src="/storage/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg" alt=""></span>Tether</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><span class="avatar avatar-xs avatar-rounded me-2 align-middle"><img src="/storage/assets/images/crypto-currencies/crypto-icons/xrp-xrp-logo.svg" alt=""></span>XRP</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><span class="avatar avatar-xs avatar-rounded me-2 align-middle"><img src="/storage/assets/images/crypto-currencies/crypto-icons/tron-trx-logo.svg" alt=""></span>TRON</a></li>
                                            </ul>
                                        </div>
                                     </div>
                                     <div class="d-flex flex-wrap justify-content-sm-evenly flex-fill">
                                        <div class="m-sm-0 m-2">
                                            <span>Symbol</span>
                                            <span class="d-block fw-semibold">BTC</span>
                                        </div>
                                        <div class="m-sm-0 m-2">
                                            <span>Price Benchmark</span>
                                            <span class="d-block fw-semibold">128.00%</span>
                                        </div>
                                        <div class="m-sm-0 m-2">
                                            <span>Price (USD)</span>
                                            <span class="d-block text-success fw-semibold">$34,254.80</span>
                                        </div>
                                        <div class="m-sm-0 m-2">
                                            <span>Change (24H)</span>
                                            <span  class="d-block text-danger fw-semibold">-0.24%</span>
                                        </div>
                                        <div class="m-sm-0 m-2">
                                            <span>Market Cap</span>
                                            <span class="d-block fw-semibold">$1.32T</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="crypto-analysis"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Trending Assets
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled crypto-trensing-assets-list">
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md p-2 bg-light avatar-rounded">
                                                    <img src="/storage/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">Bitcoin</span>
                                                <span class="fs-13 text-muted">BTC</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fs-13 text-muted fw-semibold">2.5 BTC</span>
                                                <div class="fw-semibold h6 mb-0"><span class="text-danger me-2 fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-down"></i>-0.78% (1hr)</span>$96,250</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md p-2 bg-light avatar-rounded">
                                                    <img src="/storage/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">Ethereum</span>
                                                <span class="fs-13 text-muted">ETH</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fs-13 text-muted fw-semibold">10 ETH</span>
                                                <div class="fw-semibold h6 mb-0"><span class="text-danger me-2 fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-down"></i>-0.74% (1hr)</span>$27,000</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md p-2 bg-light avatar-rounded">
                                                    <img src="/storage/assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">Binance Coin</span>
                                                <span class="fs-13 text-muted">BNB</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fs-13 text-muted fw-semibold">50 BNB</span>
                                                <div class="fw-semibold h6 mb-0"><span class="text-danger me-2 fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-down"></i>-0.53% (1hr)</span>$19,000</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md p-2 bg-light avatar-rounded">
                                                    <img src="/storage/assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">Cardano</span>
                                                <span class="fs-13 text-muted">ADA</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fs-13 text-muted fw-semibold">500 ADA</span>
                                                <div class="fw-semibold h6 mb-0"><span class="text-danger me-2 fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-down"></i>-1.11% (1hr)</span>$900</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md p-2 bg-light avatar-rounded">
                                                    <img src="/storage/assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">Solana</span>
                                                <span class="fs-13 text-muted">SOL</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fs-13 text-muted fw-semibold">20 SOL</span>
                                                <div class="fw-semibold h6 mb-0"><span class="text-danger me-2 fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-down"></i>-1.11% (1hr)</span>$900</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-md p-2 bg-light avatar-rounded">
                                                    <img src="/storage/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-semibold">Tether</span>
                                                <span class="fs-13 text-muted">USDT</span>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fs-13 text-muted fw-semibold">1000 USDT</span>
                                                <div class="fw-semibold h6 mb-0"><span class="text-success me-2 fs-13 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-down"></i>0.00% (1hr)</span>$1000</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Transaction History</div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-light border d-flex align-items-center text-muted" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                        View All <i class="bx bx-caret-down ms-1 fs-15"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Yearly</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Monthly</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Weakly</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled crypto-transactions-list">
                                    <li>
                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded p-2 bg-light">
                                                    <img src="/storage/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block">Bitcoin (BTC)</span>
                                                <span class="d-block fs-13 text-success">Deposit</span>
                                            </div>
                                            <div class="text-end">
                                                 <span class="d-flex align-items-center h6 mb-0 fw-semibold"><i class="ri-arrow-up-line fs-16 text-success me-1 fw-normal"></i>+ 25,00 BTC</span>
                                                 <small class="text-muted mb-0 fs-13">01 Mar, 2024</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded p-2 bg-light">
                                                    <img src="/storage/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block">Etherium (ETH)</span>
                                                <span class="d-block fs-13 text-danger">Withdraw</span>
                                            </div>
                                            <div class="text-end">
                                                 <span class="d-flex align-items-center h6 mb-0 fw-semibold"><i class="ri-arrow-down-line fs-16 text-danger me-1 fw-normal"></i>- 25,00 ETH</span>
                                                 <small class="text-muted mb-0 fs-13">02 Mar, 2024</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded p-2 bg-light">
                                                    <img src="/storage/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block">Bitcoin (BTC)</span>
                                                <span class="d-block fs-13 text-success">Deposit</span>
                                            </div>
                                            <div class="text-end">
                                                 <span class="d-flex align-items-center h6 mb-0 fw-semibold"><i class="ri-arrow-up-line fs-16 text-success me-1 fw-normal"></i>+ 25,00 BTC</span>
                                                 <small class="text-muted mb-0 fs-13">01 Mar, 2024</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded p-2 bg-light">
                                                    <img src="/storage/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block">Tether (USDT)</span>
                                                <span class="d-block fs-13 text-info">Convert</span>
                                            </div>
                                            <div class="text-end">
                                                 <span class="d-flex align-items-center h6 mb-0 fw-semibold"><i class="ri-arrow-up-line fs-16 text-success me-1 fw-normal"></i>+ $84,610,539 USDT</span>
                                                 <small class="text-muted mb-0 fs-13">01 Mar, 2024</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded p-2 bg-light">
                                                    <img src="/storage/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block">Etherium (ETH)</span>
                                                <span class="d-block fa-13 text-danger">Withdraw</span>
                                            </div>
                                            <div class="text-end">
                                                 <span class="d-flex align-items-center h6 mb-0 fw-semibold"><i class="ri-arrow-down-line fs-16 text-danger me-1 fw-normal"></i>- 25,00 ETH</span>
                                                 <small class="text-muted mb-0 fs-13">02 Mar, 2024</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">ASSETS ALLOCATION</div>
                                <div class="dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Today </a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-5 border-end">
                                        <div class="crypto-wallet py-4">
                                            <div  id="crypto-donut"></div>
                                            <div class="chart-circle-value circle-style">
                                                <div class="donut-value">75%</div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="table-responsive py-4">
                                            <table class="table table-borderless text-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <td class="d-flex">
                                                            <span class="avatar avatar-sm bg-primary-transparent svg-primary crypto-investments"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M14.075,24v-3.188c3.779-0.207,6.305-1.167,6.642-4.756c0.264-2.88-1.084-4.165-3.223-4.682l0.001-0.002c1.289-0.665,2.109-1.846,1.919-3.811c-0.249-2.688-2.438-3.589-5.339-3.84V0h-2.256v3.619c-0.586,0-1.186,0.015-1.787,0.03V0.001H7.776v3.722c-0.829,0.025-1.795,0.013-4.526,0v2.422c1.781-0.032,2.715-0.147,2.929,1.004V17.34c-0.136,0.914-0.861,0.782-2.475,0.753L3.25,20.796c4.113,0,4.526,0.015,4.526,0.015v3.188h2.256v-3.143c0.615,0.015,1.216,0.015,1.787,0.015V24H14.075z M10.077,6.306c1.274,0,5.259-0.399,5.259,2.275c0,2.555-3.985,2.26-5.259,2.26V6.306z M10.077,18.106v-4.992c1.523,0,6.188-0.428,6.188,2.496C16.265,18.431,11.6,18.106,10.077,18.106z"></path></svg></span>
                                                            <div class="media-body ms-3">
                                                                <p class="mb-1 text-muted fw-normal">Bitcoin BTC</p>
                                                                <span class="h6 mb-0 fw-semibold">$10,245.00</span>
                                                            </div>
                                                        </td>
                                                        <td class="">0.0215637249</td>
                                                        <td>+12.85% <i class="fa fa-arrow-up text-success ms-1"> </i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="d-flex">
                                                            <span class="avatar avatar-sm bg-secondary-transparent svg-secondary crypto-investments"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path d="M65.7 96.4V128l39.2-55.1zM103.4 62.7L65.7 0v45.6zM65.7 49.2v38.9l37.4-21.9zM24.7 62.7L62.4 0v45.6zM62.4 49.2v38.9L24.9 66.2zM62.3 96.4V128L23.1 72.9z"></path></svg> </span>
                                                            <div class="media-body ms-3">
                                                                <p class="mb-1 text-muted fw-normal">Ethereum ETH</p>
                                                                <span class="h6 mb-0 fw-semibold">$10,245.00</span>
                                                            </div>
                                                        </td>
                                                        <td class="">0.0253737689</td>
                                                        <td>-02.25% <i class="fa fa-arrow-down text-danger ms-1"> </i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="d-flex">
                                                            <span class="avatar avatar-sm bg-success-transparent svg-success crypto-investments"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path d="M3 99.8C5 94 6.8 88.6 8.8 83.1c.2-.5 1.2-1 1.8-1 3.3-.1 6.6 0 9.9 0h64.6c1.7 0 2.5-.5 3-2.2 3.6-10.6 7.3-21.2 11-31.8.2-.6.3-1.1.6-2H21.4c2-5.9 3.9-11.4 5.9-16.9.2-.4 1-.8 1.5-.8 2-.1 3.9 0 5.9 0 26.5 0 53 .2 79.6-.1 7.9-.1 16.3 6 12.9 17.6-2.5 8.7-5.8 17.1-8.7 25.6-1 2.9-2 5.9-3 8.7-3.7 10.2-11.2 16.3-21.5 19.2-.9.3-1.9.3-2.9.3H5.2c-.6.1-1.3.1-2.2.1z"></path><path d="M52.6 55.6c-2 5.6-3.9 10.9-5.9 16-.1.4-.9.7-1.4.7H.8c-.2 0-.4-.1-.8-.3 1.9-5.2 3.7-10.3 5.7-15.4.2-.5 1-1 1.5-1h45.4z"></path></svg> </span>
                                                            <div class="media-body ms-3">
                                                                <p class="mb-1 text-muted fw-normal">DASH - DASH</p>
                                                                <span class="h6 mb-0 fw-semibold">$10,245.00</span>
                                                            </div>
                                                        </td>
                                                        <td>0.0253546426</td>
                                                        <td>-11.85% <i class="fa fa-arrow-down text-danger ms-1"> </i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="d-flex">
                                                            <span class="avatar avatar-sm bg-info-transparent svg-info crypto-investments"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path d="M18.629 74.359c.934 3.61 4.17 6.009 7.707 6.009.654 0 1.318-.082 1.98-.254L36 78.124V120a8 8 0 0 0 8 8h53.652c4.418 0 8.831-3.484 9.856-7.782l2.289-8.436c1.024-4.298-1.727-7.782-6.145-7.782H65V70.054l12.374-3.204a8 8 0 0 0 5.74-9.75l-1.036-8.995c-.937-3.622-4.144-6.037-7.633-6.037-.63 0-1.27.08-1.908.244L65 44.264V8c0-4.418-4.582-8-9-8H44a8 8 0 0 0-8 8v44.334l-12.667 3.28a8 8 0 0 0-5.74 9.75l1.036 8.995zm5.707-14.873L40 55.431V8c0-2.206 1.794-4 4-4h12c2.43 0 5 2.056 5 4V49.431l12.54-3.246c.298-.078.603-.117.905-.117 1.677 0 3.166 1.147 3.697 2.816l1.1 9.218a4.005 4.005 0 0 1-2.87 4.876L61 66.958V108h42.652c.887 0 1.588.269 1.974.758.379.48.481 1.204.292 2.046l-2.27 8.367-.017.06-.014.06c-.598 2.508-3.386 4.709-5.965 4.709H44c-2.206 0-4-1.794-4-4V72.956l-12.687 3.286c-.32.083-.65.126-.977.126-1.723 0-3.241-1.136-3.77-2.79l-1.1-9.216a4.005 4.005 0 0 1 2.87-4.876z"></path><circle cx="48" cy="46" r="2"></circle><circle cx="74" cy="116.083" r="2"></circle><path d="M48 118h17a2 2 0 000-4H50V84.5a2 2 0 00-4 0V116a2 2 0 002 2zM48 40a2 2 0 002-2V14h3a2 2 0 000-4h-5a2 2 0 00-2 2v26a2 2 0 002 2z"></path></svg> </span>
                                                            <div class="media-body ms-3">
                                                                <p class="mb-1 text-muted fw-normal">Litecoin - LTC</p>
                                                                <span class="h6 mb-0 fw-semibold">$10,245.00</span>
                                                            </div>
                                                        </td>
                                                        <td>0.0253546426</td>
                                                        <td>-11.85% <i class="fa fa-arrow-down text-danger ms-1"> </i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Currency Converter</div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-light border d-flex align-items-center text-muted show" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true">
                                        View All <i class="bx bx-caret-down ms-1 fs-15"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Yearly</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Monthly</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Weakly</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="" id="buy-crypto">
                                    <div class="input-group d-flex flex-nowrap">
                                        <button type="button" class="btn btn-light border">Pay</button>
                                        <input type="text" class="form-control crypto-buy-sell-input" aria-label="crypto buy select" placeholder="Enter Amount">
                                        <select class="form-control" data-trigger id="choices-single-default">
                                            <option value="Choice 1">BTC</option>
                                            <option value="Choice 2">ETH</option>
                                            <option value="Choice 3">XRP</option>
                                            <option value="Choice 4">DASH</option>
                                            <option value="Choice 5">NEO</option>
                                            <option value="Choice 6">LTC</option>
                                            <option value="Choice 7">BSD</option>
                                        </select>
                                    </div>
                                    <div class="text-center">
                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-secondary btn-icon btn-sm my-2"><i class="ti ti-arrows-down-up"></i></a>
                                    </div>
                                    <div class="input-group mb-3 d-flex flex-nowrap">
                                        <button type="button" class="btn btn-light border">Buy</button>
                                        <input type="text" class="form-control crypto-buy-sell-input" aria-label="crypto buy select" placeholder="36,335.00">
                                        <select class="form-control" data-trigger id="choices-single-default1">
                                            <option value="Choice 1">USD</option>
                                            <option value="Choice 2">AED</option>
                                            <option value="Choice 3">AUD</option>
                                            <option value="Choice 4">ARS</option>
                                            <option value="Choice 5">AZN</option>
                                            <option value="Choice 6">BGN</option>
                                            <option value="Choice 7">BRL</option>
                                        </select>
                                    </div>
                                    <div class="bg-light p-3 rounded">
                                        <div class="pb-1"><span class="text-default">Transaction Fee</span><span class="text-muted ms-2 fs-14 d-inline-block float-end">$2.05</span></div>
                                        <div class="fs-14 py-1"><span class="text-default">Other Charges</span><span class="text-muted ms-2 fs-14 d-inline-block float-end">$7.73</span></div>
                                        <div class="fw-semibold fs-14 pt-1">Total: <span class="fs-14 d-inline-block float-end">$34,798.00</span></div>
                                    </div>
                                    <div class="d-grid mt-2 pt-1">
                                        <button type="button" class="btn btn-primary">Convert<i class="ms-2 ti ti-arrow-narrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">My Portfolio</div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary btn-sm">1D</button>
                                    <button type="button" class="btn btn-primary-light btn-sm">1W</button>
                                    <button type="button" class="btn btn-primary-light btn-sm">1M</button>
                                    <button type="button" class="btn btn-primary-light btn-sm">1Y</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap crypto-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Coin</th>
                                                <th>Last Price</th>
                                                <th>Price Graph</th>
                                                <th>24h %</th>
                                                <th>Market Cap</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-xs">
                                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Bitcoin - BTC</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $34,283.53
                                                </td>
                                                <td>
                                                    <div id="bitcoin-change"></div>
                                                </td>
                                                <td>
                                                    <span class="text-success">39.23%</span>
                                                </td>
                                                <td>
                                                    $669,649,033,571
                                                </td>
                                                <td>
                                                    <div class="btn-grp">
                                                        <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                                        <button type="button" class="btn btn-sm btn-secondary-light">Trade</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-xs">
                                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Etherium - ETH</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $1,800.81
                                                </td>
                                                <td>
                                                    <div id="etherium-change"></div>
                                                </td>
                                                <td>
                                                    <span class="text-success">58.63%</span>
                                                </td>
                                                <td>
                                                    $216,466,869,907
                                                </td>
                                                <td>
                                                    <div class="btn-grp">
                                                        <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                                        <button type="button" class="btn btn-sm btn-secondary-light">Trade</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-xs">
                                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Tether - USDT</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $1.00
                                                </td>
                                                <td>
                                                    <div id="tether-change"></div>
                                                </td>
                                                <td>
                                                    <span class="text-success">49.30%</span>
                                                </td>
                                                <td>
                                                    $84,641,938,780
                                                </td>
                                                <td>
                                                    <div class="btn-grp">
                                                        <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                                        <button type="button" class="btn btn-sm btn-secondary-light">Trade</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-xs">
                                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Solana - SOL</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $35.97
                                                </td>
                                                <td>
                                                    <div id="solana-change"></div>
                                                </td>
                                                <td>
                                                    <span class="text-success">144.58%</span>
                                                </td>
                                                <td>
                                                    $15,083,616,607
                                                </td>
                                                <td>
                                                    <div class="btn-grp">
                                                        <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                                        <button type="button" class="btn btn-sm btn-secondary-light">Trade</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-xs">
                                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Cardano - ADA</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    $0.3008
                                                </td>
                                                <td>
                                                    <div id="cardano-change"></div>
                                                </td>
                                                <td>
                                                    <span class="text-success">51.15%</span>
                                                </td>
                                                <td>
                                                    $10,600,249,889
                                                </td>
                                                <td>
                                                    <div class="btn-grp">
                                                        <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                                        <button type="button" class="btn btn-sm btn-secondary-light">Trade</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    6
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="lh-1">
                                                            <span class="avatar avatar-xs">
                                                                <img src="/storage/assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="fs-14">Binance - BNB</div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    $227.36
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div id="binance-change"></div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span class="text-success">25.85%</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    $34,488,924,548
                                                </td>
                                                <td>
                                                    <div class="btn-grp">
                                                        <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                                        <button type="button" class="btn btn-sm btn-secondary-light">Trade</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <div>
                                        Showing 5 Entries <i class="bi bi-arrow-right ms-2"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0);">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link text-primary" href="javascript:void(0);">
                                                        next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

    <!-- Swiper JS -->
    <script src="/storage/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Apex Charts JS -->
    <script src="/storage/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Crypto Dashboard -->
    <script src="/storage/assets/js/crypto-dashboard.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

   @include('zynix.partials.custom_switcherjs')

</body>

</html>