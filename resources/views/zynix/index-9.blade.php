<!-- include mainhead.html"-->

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
                        <h1 class="page-title fw-medium fs-18 mb-2">Courses</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">
                                    Dashboards
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
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

                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xxl-5">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card overflow-hidden course-main-card">
                                    <div class="card-body p-4">
                                        <div class="row justify-content-between">
                                            <div class="col-lg-8">
                                                <h4 class="fw-semibold text-fixed-white mb-2">Elevate Your Expertise Through Our Online Courses.</h4>
                                                <span class="fs-14 d-block mb-3 text-fixed-white op-7">Empower yourself with our comprehensive online courses designed to hone and refine your skills for success.</span>
                                                <button type="button" class="btn btn-light btn-w-md brn-wave mt-2">Let's Start</button>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="/storage/assets/images/media/media-67.png" class="img-fluid d-lg-block d-none" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <span class="d-block mb-1">Total Revenue</span>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h3 class="fw-semibold mb-0 lh-1">$12,973</h3>
                                                    <span class="fs-13 text-success">+ 11.35% <i class="ti ti-arrow-up"></i></span>
                                                </div>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="128" y1="24" x2="128" y2="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="208" x2="128" y2="232" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <span class="d-block mb-1">Total Students</span>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h3 class="fw-semibold mb-0 lh-1">14,532</h3>
                                                    <span class="fs-13  d-inline-flex align-items-center text-success">+ 15.35%<i class="ti ti-arrow-up"></i></span>
                                                </div>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="32" y1="64" x2="32" y2="144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M56,216c15.7-24.08,41.11-40,72-40s56.3,15.92,72,40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="224 64 128 96 32 64 128 32 224 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M169.34,82.22a56,56,0,1,1-82.68,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <span class="d-block mb-1">Total Instructors</span>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h3 class="fw-semibold mb-0 lh-1">8,453</h3>
                                                    <span class="fs-13  d-inline-flex align-items-center text-success">+ 9.15%<i class="ti ti-arrow-up"></i></span>
                                                </div>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="152" y1="112" x2="192" y2="112" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="152" y1="144" x2="192" y2="144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="32" y="48" width="192" height="160" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="96" cy="120" r="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M64,168c3.55-13.8,17.09-24,32-24s28.46,10.19,32,24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <span class="d-block mb-1">Total Courses</span>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h3 class="fw-semibold mb-0 lh-1">642</h3>
                                                    <span class="fs-13  d-inline-flex align-items-center text-danger">- 4.96%<i class="ti ti-arrow-down"></i></span>
                                                </div>
                                            </div>
                                            <div class="lh-1">
                                                <span class="avatar avatar-md bg-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="128" y1="129.09" x2="128" y2="231.97" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="32.7 76.92 128 129.08 223.3 76.92" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M219.84,182.84l-88,48.18a8,8,0,0,1-7.68,0l-88-48.18a8,8,0,0,1-4.16-7V80.18a8,8,0,0,1,4.16-7l88-48.18a8,8,0,0,1,7.68,0l88,48.18a8,8,0,0,1,4.16,7v95.64A8,8,0,0,1,219.84,182.84Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="81.56 48.31 176 100 176 152" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Revenue Statistics
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="revenue-statistics"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Latest Courses
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled latest-courses-list">
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap gap-3">
                                            <span class="avatar avatar-md bg-primary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="java-script"><path d="M14.478,14.8829a4.06111,4.06111,0,0,1-2.18725-.39825,1.4389,1.4389,0,0,1-.53547-1.01019.22184.22184,0,0,0-.22662-.21942c-.31659-.00385-.63312-.003-.94965-.00043a.2113.2113,0,0,0-.23138.18628,2.33854,2.33854,0,0,0,.75305,1.84454,3.99135,3.99135,0,0,0,2.22827.8382,8.06151,8.06151,0,0,0,2.53308-.10755,3.12591,3.12591,0,0,0,1.67823-.90442,2.33824,2.33824,0,0,0,.396-2.23077,1.869,1.869,0,0,0-1.2304-1.09454c-1.28077-.4494-2.66431-.41541-3.97-.7569-.22668-.07135-.50366-.1488-.60467-.38879a.85461.85461,0,0,1,.28418-.95478,2.5576,2.5576,0,0,1,1.34875-.33581,4.07051,4.07051,0,0,1,1.88416.26959,1.43564,1.43564,0,0,1,.68677.99219.243.243,0,0,0,.2276.23565c.31433.00641.62878.00171.94311.00214a.22791.22791,0,0,0,.24732-.16772,2.43369,2.43369,0,0,0-1.18665-2.106,5.8791,5.8791,0,0,0-3.2182-.49243V8.08341a3.50546,3.50546,0,0,0-2.17615.87438,2.1746,2.1746,0,0,0-.43438,2.26264,1.92964,1.92964,0,0,0,1.21838,1.06177c1.27649.46106,2.67554.31311,3.96442.72082.25116.08521.54364.21552.6206.49506a.9907.9907,0,0,1-.26965.94616A2.97065,2.97065,0,0,1,14.478,14.8829Zm5.81891-8.44537q-3.73837-2.114-7.47845-4.22418a1.67742,1.67742,0,0,0-1.63733,0Q7.4556,4.31715,3.72968,6.42075a1.54242,1.54242,0,0,0-.8042,1.34271V16.2377a1.55266,1.55266,0,0,0,.8352,1.355c.71351.38837,1.40674.81629,2.13318,1.17884a3.06373,3.06373,0,0,0,2.73822.07525,2.1275,2.1275,0,0,0,.99482-1.92114c.00555-2.79669.00085-5.59351.00213-8.39026a.21981.21981,0,0,0-.20727-.25415c-.31739-.00513-.63526-.003-.95264-.00085a.20935.20935,0,0,0-.228.21368c-.00427,2.77875.00086,5.55829-.00256,8.33746a.94053.94053,0,0,1-.609.88373,1.53242,1.53242,0,0,1-1.23993-.16595q-.99152-.56-1.983-1.11988a.23714.23714,0,0,1-.13464-.23529q0-4.19383,0-8.38726a.2589.2589,0,0,1,.157-.2602Q8.1423,5.4553,11.85419,3.35953a.258.258,0,0,1,.29163.00043Q15.859,5.452,19.57184,7.5455a.262.262,0,0,1,.15613.26142Q19.72733,12,19.72712,16.19376a.242.242,0,0,1-.13294.23828q-3.65643,2.06753-7.31677,4.12909c-.11658.06494-.25458.16943-.39093.09076-.6391-.36176-1.27039-.73755-1.90735-1.10273a.20589.20589,0,0,0-.22968-.01379,5.21834,5.21834,0,0,1-.88208.41162c-.13806.05591-.30792.07184-.40295.19989a1.31566,1.31566,0,0,0,.43127.31061q1.11741.647,2.236,1.29285a1.62967,1.62967,0,0,0,1.65539.046q3.7261-2.101,7.45185-4.20392a1.55627,1.55627,0,0,0,.83563-1.35474V7.76346A1.53956,1.53956,0,0,0,20.29694,6.43753Z"></path></svg>
                                            </span>
                                            <div class="">
                                                <span class="d-block fw-semibold mb-0">Coding Classes</span>
                                                <a href="javascript:void(0)" class="text-muted fs-13">Read More<i class="ti ti-arrow-right mx-1"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap gap-3">
                                            <span class="avatar avatar-md bg-secondary svg-white">
                                                <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" id="data-science"><ellipse cx="24" cy="24" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2" rx="11" ry="23"></ellipse><ellipse cx="24" cy="24" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2" rx="23" ry="11" transform="rotate(-150 24 24)"></ellipse><ellipse cx="24" cy="24" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2" rx="23" ry="11" transform="rotate(150 24 24)"></ellipse><ellipse cx="24" cy="19.7" fill="#D1DEE0" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" rx="4.8" ry="2.2"></ellipse><path fill="#D1DEE0" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M28.8 19.7V24c0 1.2-2.2 2.2-4.8 2.2s-4.8-1-4.8-2.2v-4.3c0 1.2 2.2 2.2 4.8 2.2s4.8-1 4.8-2.2z"></path><path fill="#D1DEE0" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M28.8 24v4.3c0 1.2-2.2 2.2-4.8 2.2s-4.8-1-4.8-2.2V24c0 1.2 2.2 2.2 4.8 2.2s4.8-1 4.8-2.2z"></path></svg>
                                            </span>
                                            <div class="">
                                                <span class="d-block fw-semibold mb-0">Data Science</span>
                                                <a href="javascript:void(0)" class="text-muted fs-13">Read More<i class="ti ti-arrow-right mx-1"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap gap-3">
                                            <span class="avatar avatar-md bg-success svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" id="marketplace"><path d="M45,5c-7.65,0-6.83.1-7-.24V2a2,2,0,0,0-2-2H12a2,2,0,0,0-2,2c0,3.17.05,2.67-.12,3H3A3,3,0,0,0,0,8V38a3,3,0,0,0,3,3H18.12l-.95,5H16a1,1,0,0,0,0,2H32a1,1,0,0,0,0-2H30.83l-.95-5H45a3,3,0,0,0,3-3V8A3,3,0,0,0,45,5Zm0,2a1,1,0,0,1,1,1V33H39V15c1.79-1.35,2.24-3.66,1.9-4.39-.11-.23.53,1-1.78-3.58ZM11.62,6h5l-1.33,4H9.62ZM29.28,6l1.33,4H25V6Zm9.1,4H32.72L31.39,6h5Zm-5.21,2h5.66A3,3,0,0,1,33.17,12Zm-2.34,0a3,3,0,0,1-5.66,0ZM23,10H17.39l1.33-4H23Zm-.17,2a3,3,0,0,1-5.66,0ZM9.17,12h5.66A3,3,0,0,1,9.17,12ZM11,15.9A5,5,0,0,0,16,14a5,5,0,0,0,8,0,5,5,0,0,0,8,0,5,5,0,0,0,5,1.93V33H11ZM12,2H36V4H12ZM2,8A1,1,0,0,1,3,7H8.88C7.07,10.63,7,10.64,7,11a4.91,4.91,0,0,0,2,4V33H2ZM28.79,46H19.21l.95-5h7.68ZM46,38a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V35H46Z"></path><path d="M27.58 18.19c-.56-.4-.34-.32-6.74 1.81H17a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3c.31 0 .1-.48 1 3.24A1 1 0 0 0 20 30.76L19.28 28c2.08 0 .6-.32 7.4 1.95a1 1 0 0 0 .9-.14c.6-.43.42-.18.42-10.81A1 1 0 0 0 27.58 18.19zM16 25V23a1 1 0 0 1 1-1h3v4H17A1 1 0 0 1 16 25zm10 2.61l-4-1.33V21.72l4-1.33zM33 23H31a1 1 0 0 0 0 2h2A1 1 0 0 0 33 23zM30.24 21.76c.6 0 .83-.42 2.12-1.71A1 1 0 1 0 31 18.64l-1.41 1.41A1 1 0 0 0 30.24 21.76zM31 26.54A1 1 0 0 0 29.54 28c1.56 1.57 1.59 1.71 2.12 1.71a1 1 0 0 0 .7-1.71z"></path></svg>
                                            </span>
                                            <div class="">
                                                <span class="d-block fw-semibold mb-0">Digital Marketing</span>
                                                <a href="javascript:void(0)" class="text-muted fs-13">Read More<i class="ti ti-arrow-right mx-1"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap gap-3">
                                            <span class="avatar avatar-md bg-warning svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="php"><path d="M12 19c-6.729 0-12-3.075-12-7s5.271-7 12-7 12 3.075 12 7-5.271 7-12 7zm0-13C5.935 6 1 8.691 1 12s4.935 6 11 6 11-2.691 11-6-4.935-6-11-6z"></path><path d="M5.501 16a.5.5 0 0 1-.494-.582l.33-1.98a.475.475 0 0 1 .007-.04l.663-3.979A.5.5 0 0 1 6.5 9h1.371c.552 0 1.071.244 1.424.669.354.425.498.98.396 1.524l-.194 1.036A2.171 2.171 0 0 1 7.364 14H6.257l-.264 1.582a.5.5 0 0 1-.492.418zm.923-3h.94c.562 0 1.046-.401 1.15-.955l.194-1.035A.853.853 0 0 0 7.871 10h-.947l-.5 3zm9.327 3a.5.5 0 0 1-.494-.582l.33-1.98a.475.475 0 0 1 .007-.04l.663-3.979A.5.5 0 0 1 16.75 9h1.371c.552 0 1.071.244 1.424.669.354.425.498.98.396 1.524l-.194 1.036A2.171 2.171 0 0 1 17.614 14h-1.107l-.264 1.582a.5.5 0 0 1-.492.418zm.923-3h.94c.562 0 1.046-.401 1.15-.955l.194-1.035a.853.853 0 0 0-.837-1.01h-.947l-.5 3zm-5.673 1a.5.5 0 0 1-.494-.582l1-6a.5.5 0 0 1 .986.164l-1 6a.5.5 0 0 1-.492.418z"></path><path d="M14.001 14a.5.5 0 0 1-.496-.57l.359-2.518a.36.36 0 0 0-.356-.412H11.75a.5.5 0 0 1 0-1h1.758a1.36 1.36 0 0 1 1.346 1.554l-.359 2.517a.5.5 0 0 1-.494.429z"></path></svg>
                                            </span>
                                            <div class="">
                                                <span class="d-block fw-semibold mb-0">Php</span>
                                                <a href="javascript:void(0)" class="text-muted fs-13">Read More<i class="ti ti-arrow-right mx-1"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap gap-3">
                                            <span class="avatar avatar-md bg-info svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" id="business"><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;isolation:auto;mix-blend-mode:normal" d="M4.5 2a.5.5 0 0 0-.5.5v27.002a.5.5 0 0 0 .5.5h19a.5.5 0 0 0 .5-.5V26.5a.5.5 0 1 0-1 0v2.502H5V3h14v3.502a.5.5 0 0 0 .5.5H23V9.59a.5.5 0 1 0 1 0V6.534a.5.5 0 0 0 0-.024.5.5 0 0 0-.146-.362l-4-4a.5.5 0 0 0-.362-.146.5.5 0 0 0-.064.004.5.5 0 0 0-.084-.006H4.5zM20 3.709l2.293 2.293H20V3.709zM7.45 5.002a.5.5 0 0 0 .05 1h1a.5.5 0 1 0 0-1h-1a.5.5 0 0 0-.05 0zm3.015 0a.5.5 0 1 0 .05 1h3.977a.5.5 0 1 0 0-1h-3.976a.5.5 0 0 0-.051 0zm-3.016 2a.5.5 0 0 0 .051 1h1a.5.5 0 1 0 0-1h-1a.5.5 0 0 0-.05 0zm3.016 0a.5.5 0 1 0 .05 1h3.977a.5.5 0 1 0 0-1h-3.976a.5.5 0 0 0-.051 0zM25.459 8.4a.5.5 0 0 0 .05 1h.27l-3.404 3.514-3.695-1.435a.5.5 0 0 0-.471.058l-4.998 3.557a.5.5 0 1 0 .578.814l4.78-3.398 3.753 1.457a.5.5 0 0 0 .541-.117l3.64-3.758v.303a.5.5 0 1 0 1 0V8.9a.5.5 0 0 0-.5-.5H25.51a.5.5 0 0 0-.051 0zm-13.967.594A.5.5 0 0 0 11 9.5v13a.5.5 0 0 0 .5.5h17a.5.5 0 1 0 0-1H28v-9.5a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 0-.5.5V22h-1v-6.5a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 0-.5.5V22h-1v-7.502a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 0-.5.5V22h-1v-4.5a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 0-.5.5V22h-1V9.5a.5.5 0 0 0-.508-.506zM26 13h1v8.986h-1V13zm-8 1.998h1v6.988h-1v-6.988zM22 16h1v5.986h-1V16zm-8 2h1v3.986h-1V18zm.451 6.002a.5.5 0 0 0 .049 1h10.996a.5.5 0 1 0 0-1H14.5a.5.5 0 0 0-.049 0z" color="#000" ></path></svg>
                                            </span>
                                            <div class="">
                                                <span class="d-block fw-semibold mb-0">Bussiness</span>
                                                <a href="javascript:void(0)" class="text-muted fs-13">Read More<i class="ti ti-arrow-right mx-1"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center flex-wrap gap-3">
                                            <span class="avatar avatar-md bg-danger svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" id="business1"><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;isolation:auto;mix-blend-mode:normal" d="M4.5 2a.5.5 0 0 0-.5.5v27.002a.5.5 0 0 0 .5.5h19a.5.5 0 0 0 .5-.5V26.5a.5.5 0 1 0-1 0v2.502H5V3h14v3.502a.5.5 0 0 0 .5.5H23V9.59a.5.5 0 1 0 1 0V6.534a.5.5 0 0 0 0-.024.5.5 0 0 0-.146-.362l-4-4a.5.5 0 0 0-.362-.146.5.5 0 0 0-.064.004.5.5 0 0 0-.084-.006H4.5zM20 3.709l2.293 2.293H20V3.709zM7.45 5.002a.5.5 0 0 0 .05 1h1a.5.5 0 1 0 0-1h-1a.5.5 0 0 0-.05 0zm3.015 0a.5.5 0 1 0 .05 1h3.977a.5.5 0 1 0 0-1h-3.976a.5.5 0 0 0-.051 0zm-3.016 2a.5.5 0 0 0 .051 1h1a.5.5 0 1 0 0-1h-1a.5.5 0 0 0-.05 0zm3.016 0a.5.5 0 1 0 .05 1h3.977a.5.5 0 1 0 0-1h-3.976a.5.5 0 0 0-.051 0zM25.459 8.4a.5.5 0 0 0 .05 1h.27l-3.404 3.514-3.695-1.435a.5.5 0 0 0-.471.058l-4.998 3.557a.5.5 0 1 0 .578.814l4.78-3.398 3.753 1.457a.5.5 0 0 0 .541-.117l3.64-3.758v.303a.5.5 0 1 0 1 0V8.9a.5.5 0 0 0-.5-.5H25.51a.5.5 0 0 0-.051 0zm-13.967.594A.5.5 0 0 0 11 9.5v13a.5.5 0 0 0 .5.5h17a.5.5 0 1 0 0-1H28v-9.5a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 0-.5.5V22h-1v-6.5a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 0-.5.5V22h-1v-7.502a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 0-.5.5V22h-1v-4.5a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 0-.5.5V22h-1V9.5a.5.5 0 0 0-.508-.506zM26 13h1v8.986h-1V13zm-8 1.998h1v6.988h-1v-6.988zM22 16h1v5.986h-1V16zm-8 2h1v3.986h-1V18zm.451 6.002a.5.5 0 0 0 .049 1h10.996a.5.5 0 1 0 0-1H14.5a.5.5 0 0 0-.049 0z" color="#000" ></path></svg>
                                            </span>
                                            <div class="">
                                                <span class="d-block fw-semibold mb-0">Bussiness</span>
                                                <a href="javascript:void(0)" class="text-muted fs-13">Read More<i class="ti ti-arrow-right mx-1"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Top Categories
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled courses-top-categories-list">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-md bg-primary-transparent"><i class="ri-dashboard-line fs-24 leading-none"></i></span>
                                            <div class="flex-auto ms-3">
                                                <span class="fw-semibold mb-0 d-block">UI / UX Design</span>
                                                <span class="fs-13 text-muted mb-0 d-block">10,000 + Courses</span>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="h6 mb-0 fw-semibold">$199.99</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-md bg-secondary-transparent"><i class="ri-advertisement-line fs-24 leading-none"></i></span>
                                            <div class="flex-auto ms-3">
                                                <span class="fw-semibold mb-0 d-block">Digital Marketing</span>
                                                <span class="fs-13 text-muted mb-0 d-block">90 + Courses</span>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="h6 mb-0 fw-semibold">$599.99</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-md bg-success-transparent"><i class="ri-code-box-line fs-24 leading-none"></i></span>
                                            <div class="flex-auto ms-3">
                                                <span class="fw-semibold mb-0 d-block">Web Development</span>
                                                <span class="fs-13 text-muted mb-0 d-block">250 + Courses</span>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="h6 mb-0 fw-semibold">$299.99</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-md bg-warning-transparent"><i class="ri-bar-chart-2-line fs-24 leading-none"></i></span>
                                            <div class="flex-auto ms-3">
                                                <span class="fw-semibold mb-0 d-block">Stocks &amp; Trading</span>
                                                <span class="fs-13 text-muted mb-0 d-block">100 + Courses</span>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="h6 mb-0 fw-semibold">$999.99</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-md bg-danger-transparent"><i class="ri-angularjs-line fs-24 leading-none"></i></span>
                                            <div class="flex-auto ms-3">
                                                <span class="fw-semibold mb-0 d-block">Angular Course</span>
                                                <span class="fs-13 text-muted mb-0 d-block">300 + Courses</span>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="h6 mb-0 fw-semibold">$399.99</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-md bg-info-transparent"><i class="ri-reactjs-line fs-24 leading-none"></i></span>
                                            <div class="flex-auto ms-3">
                                                <span class="fw-semibold mb-0 d-block">React Course</span>
                                                <span class="fs-13 text-muted mb-0 d-block">150 + Courses</span>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="h6 mb-0 fw-semibold">$599.99</span>
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
                                <div class="card-title flex-grow-1 me-3">Top Courses</div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-light border btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sort By<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Year</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Course Name</th>
                                                <th>Instructor</th>
                                                <th>Progress</th>
                                                <th>Completion Date</th>
                                                <th>Rating</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Data Science</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="/storage/assets/images/faces/1.jpg" alt="" title="applicant">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            Dr. Smith
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 75%"></div>
                                                        </div>
                                                        <div class="ms-2">75%</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>June 15, 2024</span>
                                                </td>
                                                <td>
                                                    <span>4.8<i class="ri ri-star-fill text-warning ms-2 align-top"></i></span>
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light btn-wave">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Web Development</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="/storage/assets/images/faces/10.jpg" alt="" title="applicant">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            Prof. Johnson
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 50%"></div>
                                                        </div>
                                                        <div class="ms-2">50%</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>July 20, 2024</span>
                                                </td>
                                                <td>
                                                    <span>4.5<i class="ri ri-star-fill text-warning ms-2 align-top"></i></span>
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light btn-wave">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>AI Basics</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="/storage/assets/images/faces/11.jpg" alt="" title="applicant">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            Dr. Lee
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 90%"></div>
                                                        </div>
                                                        <div class="ms-2">90%</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>May 30, 2024</span>
                                                </td>
                                                <td>
                                                    <span>4.9<i class="ri ri-star-fill text-warning ms-2 align-top"></i></span>
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light btn-wave">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cybersecurity</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="/storage/assets/images/faces/2.jpg" alt="" title="applicant">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            Dr. Taylor
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"></div>
                                                        </div>
                                                        <div class="ms-2">60%</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>August 10, 2024</span>
                                                </td>
                                                <td>
                                                    <span>4.7<i class="ri ri-star-fill text-warning ms-2 align-top"></i></span>
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light btn-wave">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cloud Computing</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="/storage/assets/images/faces/3.jpg" alt="" title="applicant">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            Prof. Adams
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 85%"></div>
                                                        </div>
                                                        <div class="ms-2">85%</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span>June 25, 2024</span>
                                                </td>
                                                <td>
                                                    <span>4.6<i class="ri ri-star-fill text-warning ms-2 align-top"></i></span>
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light btn-wave">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0">Machine Learning</td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                <img src="/storage/assets/images/faces/5.jpg" alt="" title="applicant">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            Dr. Rivera
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-animate progress-xs w-100" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 40%"></div>
                                                        </div>
                                                        <div class="ms-2">40%</div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span>September 15, 2024</span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <span>4.7<i class="ri ri-star-fill text-warning ms-2 align-top"></i></span>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="btn-list">
                                                        <button class="btn btn-sm btn-icon btn-primary-light btn-wave">
                                                            <i class="ri-eye-line"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon btn-success-light btn-wave">
                                                            <i class="ri-edit-line"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Course Statistics
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="course-statistics"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    On Going Courses
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <div>
                                        <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=" example">
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Course</th>
                                                <th scope="col" class="text-center">Classes</th>
                                                <th scope="col">Last Updated</th>
                                                <th scope="col">Instructor</th>
                                                <th scope="col">Students</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md">
                                                                <img src="/storage/assets/images/media/media-1.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fs-14 fw-medium mb-1">CSS Zero to Hero Master Class</p>
                                                            <p class="fs-12 text-muted mb-0">UI/UX Designing</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    51
                                                </td>
                                                <td>
                                                    22-06-2024
                                                </td>
                                                <td>
                                                    Burak Oin
                                                </td>
                                                <td>
                                                    252
                                                </td>
                                                <td>
                                                    <div class="btn-list mb-0">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm btn-primary-light mb-0"><i class="ri-eye-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm btn-success-light mb-0"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm btn-danger-light mb-0"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md">
                                                                <img src="/storage/assets/images/media/media-4.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fs-14 fw-medium mb-1">Digital Marketing Course From Scratch</p>
                                                            <p class="fs-12 text-muted mb-0">Marketing</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    115
                                                </td>
                                                <td>
                                                    21-06-2024
                                                </td>
                                                <td>
                                                    Stuart Little
                                                </td>
                                                <td>
                                                    1,189
                                                </td>
                                                <td>
                                                    <div class="btn-list mb-0">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm btn-primary-light mb-0"><i class="ri-eye-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm btn-success-light mb-0"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm  btn-danger-light mb-0"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md">
                                                                <img src="/storage/assets/images/media/media-10.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fs-14 fw-medium mb-1">Digital Marketing Course From Scratch</p>
                                                            <p class="fs-12 text-muted mb-0">Programming</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    30
                                                </td>
                                                <td>
                                                    15-06-2024
                                                </td>
                                                <td>
                                                    Boran Ray
                                                </td>
                                                <td>
                                                    3,365
                                                </td>
                                                <td>
                                                    <div class="btn-list mb-0">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm btn-primary-light mb-0"><i class="ri-eye-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm btn-success-light mb-0"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm  btn-danger-light mb-0"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md">
                                                                <img src="/storage/assets/images/media/media-15.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fs-14 fw-medium mb-1">Master Linear Algebra Medium Level</p>
                                                            <p class="fs-12 text-muted mb-0">Mathematics</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    90
                                                </td>
                                                <td>
                                                    11-06-2024
                                                </td>
                                                <td>
                                                    Arya Neo
                                                </td>
                                                <td>
                                                    773
                                                </td>
                                                <td>
                                                    <div class="btn-list mb-0">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm btn-primary-light mb-0"><i class="ri-eye-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm btn-success-light mb-0"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm  btn-danger-light mb-0"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0">
                                                    5
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md">
                                                                <img src="/storage/assets/images/media/media-23.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="fs-14 fw-medium mb-1">Learn How to Trade &amp; Invest</p>
                                                            <p class="fs-12 text-muted mb-0">Stocks &amp; Trading</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center border-bottom-0">
                                                    161
                                                </td>
                                                <td class="border-bottom-0">
                                                    10-06-2024
                                                </td>
                                                <td class="border-bottom-0">
                                                    Sia Niu
                                                </td>
                                                <td class="border-bottom-0">
                                                    51
                                                </td>
                                                <td class="border-bottom-0">
                                                    <div class="btn-list mb-0">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-icon btn-sm btn-primary-light mb-0"><i class="ri-eye-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-icon btn-sm btn-success-light mb-0"><i class="ri-edit-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-icon btn-sm btn-danger-light mb-0"><i class="ri-delete-bin-line"></i></a>
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
                                        Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
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
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Top Instructors
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled top-instructors mb-0">
                                    <li>
                                        <div class="d-flex">
                                            <div class="d-flex flex-fill align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="/storage/assets/images/faces/2.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold">John Henry</span>
                                                    <span class="text-muted fs-13">M.Tech</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fw-semibold">321 Classes</span>
                                                <span class="text-muted fs-13">Digital Marketing</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <div class="d-flex flex-fill align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="/storage/assets/images/faces/12.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold">Mortal Yun</span>
                                                    <span class="text-muted fs-13">P.H.D</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fw-semibold">25 Classes</span>
                                                <span class="text-muted fs-13">Stocks &amp; Trading</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <div class="d-flex flex-fill align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="/storage/assets/images/faces/13.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold">Trex Con</span>
                                                    <span class="text-muted fs-13">MBBS</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fw-semibold">39 Classes</span>
                                                <span class="text-muted fs-13">Science</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <div class="d-flex flex-fill align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="/storage/assets/images/faces/3.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold">Saiu Sarah</span>
                                                    <span class="text-muted fs-13">P.H.D</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fw-semibold">11 Classes</span>
                                                <span class="text-muted fs-13">Science</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <div class="d-flex flex-fill align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="/storage/assets/images/faces/4.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold">Ion Hau</span>
                                                    <span class="text-muted fs-13">M.Tech</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fw-semibold">124 Classes</span>
                                                <span class="text-muted fs-13">Web Development</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <div class="d-flex flex-fill align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="/storage/assets/images/faces/14.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold">Roman Killon</span>
                                                    <span class="text-muted fs-13">M.Tech</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fw-semibold">1263 Classes</span>
                                                <span class="text-muted fs-13">Ui / Ux Designing</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <div class="d-flex flex-fill align-items-center">
                                                <div class="me-2">
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                        <img src="/storage/assets/images/faces/5.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold">Suzika Stallone</span>
                                                    <span class="text-muted fs-13">Phd</span>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="d-block fw-semibold">110 Classes</span>
                                                <span class="text-muted fs-13">Machine Leadning</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-3 -->

            </div>
        </div>
        <!-- End::app-content -->


        @include('zynix.partials.footer')
         @include('zynix.partials.responsive-search-modal')

    </div>

   @include('zynix.partials.commonjs')

    <!-- Apex Charts JS -->
    <script src="/storage/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Courses Dashboard -->
    <script src="/storage/assets/js/courses-dashboard.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

   @include('zynix.partials.custom_switcherjs')

</body>

</html>