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
                <div
                    class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Mail Settings</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">
                                    Pages
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Email</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mail Settings</li>
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
                <div class="row mb-5">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <ul class="nav nav-tabs nav-tabs-header mb-0 mailsettings-nav d-flex gap-2" role="tablist">
                                    <li class="nav-item m-1">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#personal-info" aria-selected="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                                <rect width="256" height="256" fill="none"></rect>
                                                <circle cx="128" cy="96" r="64" opacity="0.2"></circle>
                                                <circle cx="128" cy="96" r="64" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                                                </circle>
                                                <path d="M32,216c19.37-33.47,54.55-56,96-56s76.63,22.53,96,56"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="16"></path>
                                            </svg>
                                            Personal Information
                                        </a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#account-settings" aria-selected="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path
                                                    d="M230.1,108.76,198.25,90.62c-.64-1.16-1.31-2.29-2-3.41l-.12-36A104.61,104.61,0,0,0,162,32L130,49.89c-1.34,0-2.69,0-4,0L94,32A104.58,104.58,0,0,0,59.89,51.25l-.16,36c-.7,1.12-1.37,2.26-2,3.41l-31.84,18.1a99.15,99.15,0,0,0,0,38.46l31.85,18.14c.64,1.16,1.31,2.29,2,3.41l.12,36A104.61,104.61,0,0,0,94,224l32-17.87c1.34,0,2.69,0,4,0L162,224a104.58,104.58,0,0,0,34.08-19.25l.16-36c.7-1.12,1.37-2.26,2-3.41l31.84-18.1A99.15,99.15,0,0,0,230.1,108.76ZM128,168a40,40,0,1,1,40-40A40,40,0,0,1,128,168Z"
                                                    opacity="0.2"></path>
                                                <path
                                                    d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm109.94-52.79a8,8,0,0,0-3.89-5.4l-29.83-17-.12-33.62a8,8,0,0,0-2.83-6.08,111.91,111.91,0,0,0-36.72-20.67,8,8,0,0,0-6.46.59L128,41.85,97.88,25a8,8,0,0,0-6.47-.6A111.92,111.92,0,0,0,54.73,45.15a8,8,0,0,0-2.83,6.07l-.15,33.65-29.83,17a8,8,0,0,0-3.89,5.4,106.47,106.47,0,0,0,0,41.56,8,8,0,0,0,3.89,5.4l29.83,17,.12,33.63a8,8,0,0,0,2.83,6.08,111.91,111.91,0,0,0,36.72,20.67,8,8,0,0,0,6.46-.59L128,214.15,158.12,231a7.91,7.91,0,0,0,3.9,1,8.09,8.09,0,0,0,2.57-.42,112.1,112.1,0,0,0,36.68-20.73,8,8,0,0,0,2.83-6.07l.15-33.65,29.83-17a8,8,0,0,0,3.89-5.4A106.47,106.47,0,0,0,237.94,107.21Zm-15,34.91-28.57,16.25a8,8,0,0,0-3,3c-.58,1-1.19,2.06-1.81,3.06a7.94,7.94,0,0,0-1.22,4.21l-.15,32.25a95.89,95.89,0,0,1-25.37,14.3L134,199.13a8,8,0,0,0-3.91-1h-.19c-1.21,0-2.43,0-3.64,0a8.1,8.1,0,0,0-4.1,1l-28.84,16.1A96,96,0,0,1,67.88,201l-.11-32.2a8,8,0,0,0-1.22-4.22c-.62-1-1.23-2-1.8-3.06a8.09,8.09,0,0,0-3-3.06l-28.6-16.29a90.49,90.49,0,0,1,0-28.26L61.67,97.63a8,8,0,0,0,3-3c.58-1,1.19-2.06,1.81-3.06a7.94,7.94,0,0,0,1.22-4.21l.15-32.25a95.89,95.89,0,0,1,25.37-14.3L122,56.87a8,8,0,0,0,4.1,1c1.21,0,2.43,0,3.64,0a8,8,0,0,0,4.1-1l28.84-16.1A96,96,0,0,1,188.12,55l.11,32.2a8,8,0,0,0,1.22,4.22c.62,1,1.23,2,1.8,3.06a8.09,8.09,0,0,0,3,3.06l28.6,16.29A90.49,90.49,0,0,1,222.9,142.12Z">
                                                </path>
                                            </svg>
                                            Account Settings
                                        </a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#email-settings" aria-selected="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path d="M224,56l-96,88L32,56Z" opacity="0.2"></path>
                                                <path
                                                    d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48ZM203.43,64,128,133.15,52.57,64ZM216,192H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z">
                                                </path>
                                            </svg>
                                            Email</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#labels" aria-selected="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path d="M216,136c-8,24-56,72-80,80V184a48,48,0,0,1,48-48Z"
                                                    opacity="0.2"></path>
                                                <path
                                                    d="M168,32H88A56.06,56.06,0,0,0,32,88v80a56.06,56.06,0,0,0,56,56h48a8.07,8.07,0,0,0,2.53-.41c26.23-8.75,76.31-58.83,85.06-85.06A8.07,8.07,0,0,0,224,136V88A56.06,56.06,0,0,0,168,32ZM48,168V88A40,40,0,0,1,88,48h80a40,40,0,0,1,40,40v40H184a56.06,56.06,0,0,0-56,56v24H88A40,40,0,0,1,48,168Zm96,35.14V184a40,40,0,0,1,40-40h19.14C191,163.5,163.5,191,144,203.14Z">
                                                </path>
                                            </svg>
                                            Labels</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#notification-settings" aria-selected="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path
                                                    d="M208,192H48a8,8,0,0,1-6.88-12C47.71,168.6,56,147.81,56,112a72,72,0,0,1,144,0c0,35.82,8.3,56.6,14.9,68A8,8,0,0,1,208,192Z"
                                                    opacity="0.2"></path>
                                                <path
                                                    d="M224,71.1a8,8,0,0,1-10.78-3.42,94.13,94.13,0,0,0-33.46-36.91,8,8,0,1,1,8.54-13.54,111.46,111.46,0,0,1,39.12,43.09A8,8,0,0,1,224,71.1ZM35.71,72a8,8,0,0,0,7.1-4.32A94.13,94.13,0,0,1,76.27,30.77a8,8,0,1,0-8.54-13.54A111.46,111.46,0,0,0,28.61,60.32,8,8,0,0,0,35.71,72Zm186.1,103.94A16,16,0,0,1,208,200H167.2a40,40,0,0,1-78.4,0H48a16,16,0,0,1-13.79-24.06C43.22,160.39,48,138.28,48,112a80,80,0,0,1,160,0C208,138.27,212.78,160.38,221.81,175.94ZM150.62,200H105.38a24,24,0,0,0,45.24,0ZM208,184c-10.64-18.27-16-42.49-16-72a64,64,0,0,0-128,0c0,29.52-5.38,53.74-16,72Z">
                                                </path>
                                            </svg>
                                            Notifications</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                            href="#security" aria-selected="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="#000000" viewBox="0 0 256 256">
                                                <path
                                                    d="M208,88H48a8,8,0,0,0-8,8V208a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8V96A8,8,0,0,0,208,88Zm-80,72a20,20,0,1,1,20-20A20,20,0,0,1,128,160Z"
                                                    opacity="0.2"></path>
                                                <path
                                                    d="M208,80H176V56a48,48,0,0,0-96,0V80H48A16,16,0,0,0,32,96V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V96A16,16,0,0,0,208,80ZM96,56a32,32,0,0,1,64,0V80H96ZM208,208H48V96H208V208Zm-80-96a28,28,0,0,0-8,54.83V184a8,8,0,0,0,16,0V166.83A28,28,0,0,0,128,112Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,128,152Z">
                                                </path>
                                            </svg>
                                            Security</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="personal-info" role="tabpanel">
                                        <div class="p-sm-3 p-0">
                                            <h6 class="fw-medium mb-3">
                                                Photo :
                                            </h6>
                                            <div class="mb-4 d-sm-flex align-items-center">
                                                <div class="mb-0 me-5">
                                                    <span class="avatar avatar-xxl p-1 bg-light border avatar-rounded">
                                                        <img src="/storage/assets/images/faces/9.jpg" alt="" id="profile-img">
                                                        <span class="badge rounded-pill bg-primary avatar-badge">
                                                            <input type="file" name="photo"
                                                                class="position-absolute w-100 h-100 op-0"
                                                                id="profile-change">
                                                            <i class="fe fe-camera"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary">Change</button>
                                                    <button class="btn btn-light">Remove</button>
                                                </div>
                                            </div>
                                            <h6 class="fw-medium mb-3">
                                                Profile :
                                            </h6>
                                            <div class="row gy-4 mb-4">
                                                <div class="col-xl-6">
                                                    <label for="first-name" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="first-name"
                                                        placeholder="First Name">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="last-name" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="last-name"
                                                        placeholder="Last Name">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label class="form-label">User Name</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"
                                                            id="basic-addon3">user2413@gmail.com</span>
                                                        <input type="text" class="form-control" id="basic-url"
                                                            aria-describedby="basic-addon3">
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="fw-medium mb-3">
                                                Personal information :
                                            </h6>
                                            <div class="row gy-4 mb-4">
                                                <div class="col-xl-6">
                                                    <label for="email-address" class="form-label">Email Address
                                                        :</label>
                                                    <input type="text" class="form-control" id="email-address"
                                                        placeholder="xyz@gmail.com">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="Contact-Details" class="form-label">Contact Details
                                                        :</label>
                                                    <input type="text" class="form-control" id="Contact-Details"
                                                        placeholder="contact details">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="language" class="form-label">Language :</label>
                                                    <select class="form-control" name="language" id="language" multiple>
                                                        <option value="Choice 1" selected>English</option>
                                                        <option value="Choice 2">French</option>
                                                        <option value="Choice 3">Arabic</option>
                                                        <option value="Choice 4">Hindi</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">Country :</label>
                                                    <select class="form-control" data-trigger name="country-select"
                                                        id="country-select">
                                                        <option value="Choice 1">Usa</option>
                                                        <option value="Choice 2">Australia</option>
                                                        <option value="Choice 3">Dubai</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="bio" class="form-label">Bio :</label>
                                                    <textarea class="form-control" id="bio"
                                                        rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. At sit impedit, officiis non minima saepe voluptates a magnam enim sequi porro veniam ea suscipit dolorum vel mollitia voluptate iste nemo!</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account-settings" role="tabpanel">
                                        <div class="row gy-3">
                                            <div class="col-xxl-7">
                                                <div class="card custom-card shadow-none mb-0 border">
                                                    <div class="card-body">
                                                        <div
                                                            class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                            <div class="w-75">
                                                                <p class="fs-14 mb-1 fw-medium">Two Step Verification
                                                                </p>
                                                                <p class="fs-13 text-muted mb-0">Two step verificatoin
                                                                    is very secured and restricts in happening faulty
                                                                    practices.</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg1" checked="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                            <div class="mb-sm-0 mb-2 w-75">
                                                                <p class="fs-14 mb-2 fw-medium">Authentication</p>
                                                                <div class="row gy-3">
                                                                    <div class="col-md-3">
                                                                        <div class="card custom-card mb-0 border card-style-6">
                                                                            <div class="card-body px-3 py-2">
                                                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                                                    <div class="flex-grow-1">
                                                                                        <i
                                                                                        class="ri-lock-unlock-line me-1 align-middle d-inline-block"></i>Pin
                                                                                    </div>
                                                                                    <div class="min-w-fit-content">
                                                                                        <div class="d-flex gap-2">
                                                                                            <input class="form-check-input m-0" type="radio" id="address1" name="default-address" checked="">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="card custom-card border mb-0 card-style-6">
                                                                            <div class="card-body px-3 py-2">
                                                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                                                    <div class="flex-grow-1">
                                                                                        <i
                                                                                        class="ri-lock-password-line me-1 align-middle d-inline-block"></i>Password
                                                                                    </div>
                                                                                    <div class="min-w-fit-content">
                                                                                        <div class="d-flex gap-2">
                                                                                            <input class="form-check-input m-0" type="radio" id="address2" name="default-address">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="card custom-card border mb-0 card-style-6">
                                                                            <div class="card-body px-3 py-2">
                                                                                <div class="d-flex align-items-center justify-content-between mb-0">
                                                                                    <div class="flex-grow-1">
                                                                                        <i
                                                                                        class="ri-fingerprint-line me-1 align-middle d-inline-block"></i>Finger
                                                                                    </div>
                                                                                    <div class="min-w-fit-content">
                                                                                        <div class="d-flex gap-2">
                                                                                            <input class="form-check-input m-0" type="radio" id="address3" name="default-address">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg2" checked="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                            <div class="w-75">
                                                                <p class="fs-14 mb-1 fw-medium">Recovery Mail</p>
                                                                <p class="fs-13 text-muted mb-0">Incase of forgetting
                                                                    password mails are sent to heifo@gmail.com</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg4" checked="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-sm-flex d-block align-items-top mb-4 justify-content-between">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">SMS Recovery</p>
                                                                <p class="fs-13 text-muted mb-0">SMS are sent to
                                                                    9102312xx in case of recovery</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg3" checked="">
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-top justify-content-between">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Reset Password</p>
                                                                <p class="fs-13 text-muted mb-2">Please Enter a Current password to change your password.</p>
                                                                <div class="mb-2">
                                                                    <label for="current-password"
                                                                        class="form-label">Current Password</label>
                                                                    <input type="text" class="form-control"
                                                                        id="current-password"
                                                                        placeholder="Current Password">
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="new-password" class="form-label">New
                                                                        Password</label>
                                                                    <input type="text" class="form-control"
                                                                        id="new-password" placeholder="New Password">
                                                                     <p class="fs-13 mt-1 text-muted">Password should be min of <b
                                                                            class="text-success">8
                                                                            digits<sup>*</sup></b>,atleast <b
                                                                            class="text-success">One Capital
                                                                            letter<sup>*</sup></b> and <b
                                                                            class="text-success">One Special
                                                                            Character<sup>*</sup></b> included.</p>
                                                                </div>
                                                                <div class="mb-0">
                                                                    <label for="confirm-password"
                                                                        class="form-label">Confirm Password</label>
                                                                    <input type="text" class="form-control"
                                                                        id="confirm-password"
                                                                        placeholder="Confirm Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-5">
                                                <div class="card custom-card shadow-none border">
                                                    <div class="card-header justify-content-between d-sm-flex d-block">
                                                        <div class="card-title">Registered Devices</div>
                                                        <div class="mt-sm-0 mt-2">
                                                            <button class="btn btn-sm btn-primary">Signout from all
                                                                devices</button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="lh-1 mb-sm-0 mb-2"><i
                                                                            class="bi bi-phone me-2 fs-16 align-middle text-muted"></i>
                                                                    </div>
                                                                    <div class="lh-1 flex-fill">
                                                                        <p class="mb-1">
                                                                            <span
                                                                                class="fw-medium">Mobile-LG-1023</span>
                                                                        </p>
                                                                        <p class="mb-0">
                                                                            <span class="text-muted fs-13">Manchester,
                                                                                UK-Nov 30, 04:45PM</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="dropdown mt-sm-0 mt-2">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-light"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="fe fe-more-vertical"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Action</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Another
                                                                                    action</a></li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Something
                                                                                    else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="lh-1 mb-sm-0 mb-2"><i
                                                                            class="bi bi-laptop me-2 fs-16 align-middle text-muted"></i>
                                                                    </div>
                                                                    <div class="lh-1 flex-fill">
                                                                        <p class="mb-1">
                                                                            <span
                                                                                class="fw-medium">Lenovo-1291203</span>
                                                                        </p>
                                                                        <p class="mb-0">
                                                                            <span class="text-muted fs-13">England,
                                                                                UK-Aug 12, 12:25PM</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="dropdown mt-sm-0 mt-2">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-light"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="fe fe-more-vertical"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Action</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Another
                                                                                    action</a></li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Something
                                                                                    else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="lh-1 mb-sm-0 mb-2"><i
                                                                            class="bi bi-laptop me-2 fs-16 align-middle text-muted"></i>
                                                                    </div>
                                                                    <div class="lh-1 flex-fill">
                                                                        <p class="mb-1">
                                                                            <span
                                                                                class="fw-medium">Macbook-Suzika</span>
                                                                        </p>
                                                                        <p class="mb-0">
                                                                            <span class="text-muted fs-13">Brightoon,
                                                                                UK-Jul 18, 8:34AM</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="dropdown mt-sm-0 mt-2">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-light"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="fe fe-more-vertical"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Action</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Another
                                                                                    action</a></li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Something
                                                                                    else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="lh-1 mb-sm-0 mb-2"><i
                                                                            class="bi bi-pc-display-horizontal me-2 fs-16 align-middle text-muted"></i>
                                                                    </div>
                                                                    <div class="lh-1 flex-fill">
                                                                        <p class="mb-1">
                                                                            <span class="fw-medium">Apple-Desktop</span>
                                                                        </p>
                                                                        <p class="mb-0">
                                                                            <span class="text-muted fs-13">Darlington,
                                                                                UK-Jan 14, 11:14AM</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="dropdown mt-sm-0 mt-2">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-light"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="fe fe-more-vertical"></i>
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Action</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Another
                                                                                    action</a></li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Something
                                                                                    else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card custom-card shadow-none mb-0 border">
                                                    <div class="card-header justify-content-between d-sm-flex d-block">
                                                        <div class="card-title">Optional Settings</div>
                                                    </div>
                                                    <div class="card-body p-0">
                                                        <ul class="list-group border-0">
                                                            <li class="list-group-item border-0 border-bottom">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="lh-1 mb-sm-0 mb-2"><i
                                                                            class="bi bi-envelope me-2 fs-16 align-middle text-muted"></i>
                                                                    </div>
                                                                    <div class="lh-1 flex-fill">
                                                                        <p class="mb-1"> <span class="fw-medium">Daily
                                                                                Sending Limit</span> </p>
                                                                        <p class="mb-0"> <span
                                                                                class="text-muted fs-13">Specify the
                                                                                maximum number of emails you can
                                                                                sent.</span> </p>
                                                                    </div>
                                                                    <div class="dropdown mt-sm-0 mt-2"> <a
                                                                            href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-light"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"> <i
                                                                                class="fe fe-more-vertical"></i> </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Action</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Another
                                                                                    action</a></li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Something
                                                                                    else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item border-0 border-bottom">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="lh-1 mb-sm-0 mb-2"><i
                                                                            class="bi bi-journal-medical me-2 fs-16 align-middle text-muted"></i>
                                                                    </div>
                                                                    <div class="lh-1 flex-fill">
                                                                        <p class="mb-1"> <span
                                                                                class="fw-medium">Signature</span> </p>
                                                                        <p class="mb-0"> <span
                                                                                class="text-muted fs-13">Add an email
                                                                                signature that will shown end of every
                                                                                mail.</span> </p>
                                                                    </div>
                                                                    <div class="dropdown mt-sm-0 mt-2"> <a
                                                                            href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-light"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"> <i
                                                                                class="fe fe-more-vertical"></i> </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Action</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Another
                                                                                    action</a></li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Something
                                                                                    else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item border-0 border-bottom">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="lh-1 mb-sm-0 mb-2"><i
                                                                            class="bi bi-send me-2 fs-16 align-middle text-muted"></i>
                                                                    </div>
                                                                    <div class="lh-1 flex-fill">
                                                                        <p class="mb-1"> <span class="fw-medium">Cutom
                                                                                Tracking domain</span> </p>
                                                                        <p class="mb-0"> <span
                                                                                class="text-muted fs-13">See upto 20%
                                                                                improvement in deliverability.</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="dropdown mt-sm-0 mt-2"> <a
                                                                            href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-light"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"> <i
                                                                                class="fe fe-more-vertical"></i> </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Action</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Another
                                                                                    action</a></li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Something
                                                                                    else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item border-0">
                                                                <div class="d-sm-flex d-block align-items-top">
                                                                    <div class="lh-1 mb-sm-0 mb-2"><i
                                                                            class="bi bi-fire me-2 fs-16 align-middle text-muted"></i>
                                                                    </div>
                                                                    <div class="lh-1 flex-fill">
                                                                        <p class="mb-1"> <span class="fw-medium">Email
                                                                                warm up</span> </p>
                                                                        <p class="mb-0"> <span
                                                                                class="text-muted fs-13">Launch a
                                                                                warm-up campign to improve inbox
                                                                                placement and sender reputation</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="dropdown mt-sm-0 mt-2"> <a
                                                                            href="javascript:void(0);"
                                                                            class="btn btn-icon btn-sm btn-light"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"> <i
                                                                                class="fe fe-more-vertical"></i> </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Action</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Another
                                                                                    action</a></li>
                                                                            <li><a class="dropdown-item"
                                                                                    href="javascript:void(0);">Something
                                                                                    else here</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-0" id="email-settings" role="tabpanel">
                                        <ul class="list-group list-group-flush rounded">
                                            <li class="list-group-item">
                                                <div
                                                    class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                                        <span class="fs-14 fw-medium mb-0">Menu View :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Default View
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault2"
                                                                checked="">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Advanced View
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="form-check form-check-lg form-switch float-sm-end">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="switch-lg5" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div
                                                    class="row gy-3 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Language :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <label for="mail-language" class="form-label">Languages
                                                            :</label>
                                                        <select class="form-control" name="mail-language"
                                                            id="mail-language" multiple>
                                                            <option value="Choice 1" selected>English</option>
                                                            <option value="Choice 2" selected>French</option>
                                                            <option value="Choice 3">Arabic</option>
                                                            <option value="Choice 4">Hindi</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="form-check form-check-lg form-switch float-sm-end">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="switch-lg6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div
                                                    class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Images :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="images-open" id="images-open1">
                                                            <label class="form-check-label" for="images-open1">
                                                                Always Open Images
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="images-open" id="images-hide2" checked="">
                                                            <label class="form-check-label" for="images-hide2">
                                                                Ask For Permission
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="form-check form-check-lg form-switch float-sm-end">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="switch-lg7">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div
                                                    class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Keyboard Shortcuts :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="keyboard-enable" id="keyboard-enable1">
                                                            <label class="form-check-label" for="keyboard-enable1">
                                                                Keyboard Shortcuts Enable
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="keyboard-enable" id="keyboard-disable2"
                                                                checked="">
                                                            <label class="form-check-label" for="keyboard-disable2">
                                                                Keyboard Shortcuts Disable
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="form-check form-check-lg form-switch float-sm-end">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="switch-lg8">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div
                                                    class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Notifications :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="desktop-notifications" checked="">
                                                            <label class="form-check-label" for="desktop-notifications">
                                                                Desktop Notifications
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="mobile-notifications">
                                                            <label class="form-check-label" for="mobile-notifications">
                                                                Mobile Notifications
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="float-sm-end">
                                                            <a href="javascript:void(0)"
                                                                class="btn btn-success-ghost btn-sm">Learn-more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div
                                                    class="row gy-3 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Maximum Mails Per Page
                                                            :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <select class="form-control" data-trigger name="mail-per-page"
                                                            id="mail-per-page">
                                                            <option value="Choice 1" selected>10</option>
                                                            <option value="Choice 2">50</option>
                                                            <option value="Choice 3">100</option>
                                                            <option value="Choice 3">120</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="form-check form-check-lg form-switch float-sm-end">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="switch-lg9">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div
                                                    class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Mail Composer :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="mail-composer" id="mail-composeron1">
                                                            <label class="form-check-label" for="mail-composeron1">
                                                                Mail Composer On
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="mail-composer" id="mail-composeroff2" checked="">
                                                            <label class="form-check-label" for="mail-composeroff2">
                                                                Mail Composer Off
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="form-check form-check-lg form-switch float-sm-end">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="switch-lg10">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div
                                                    class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Auto Correct :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="auto-correct" id="auto-correcton1">
                                                            <label class="form-check-label" for="auto-correcton1">
                                                                Auto Correct On
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="auto-correct" id="auto-correctoff2" checked="">
                                                            <label class="form-check-label" for="auto-correctoff2">
                                                                Auto Correct Off
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="form-check form-check-lg form-switch float-sm-end">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="switch-lg11">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div
                                                    class="row gy-2 d-sm-flex align-items-center justify-content-between">
                                                    <div class="col-xl-3">
                                                        <span class="fs-14 fw-medium mb-0">Mail Send Action :</span>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="on-keyboard" checked="">
                                                            <label class="form-check-label" for="on-keyboard">
                                                                On Keyboard Action
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="on-buttonclick">
                                                            <label class="form-check-label" for="on-buttonclick">
                                                                On Button Click
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="float-sm-end">
                                                            <a href="javascript:void(0)"
                                                                class="btn btn-success-ghost btn-sm">Learn-more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="labels" role="tabpanel">
                                        <p class="fs-14 fw-medium mb-3">Mail Labels :</p>
                                        <div class="row gy-2">
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-mail-opened fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">All Mails</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-all-mails" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-inbox fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Inbox</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-sent" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-send fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Sent</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-sent2" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-notes fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Drafts</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-drafts" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-mail-x fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Spam</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-spam" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-mail-star fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Important</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-important" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-trash fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Trash</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-trash" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-archive fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Archive</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-archive" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-folder-star fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Starred</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-starred" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="fs-14 fw-medium mb-3">Settings :</p>
                                        <div class="row gy-2">
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-mail-cog fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Settings</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-settings" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="fs-14 fw-medium mb-3">Custom Labels :</p>
                                        <div class="row gy-2">
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-mail fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Mail</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-mail" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-home fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Home</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-home" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-briefcase fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Work</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-work" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-6 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="card custom-card border shadow-none">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-sm bg-light text-default border me-2"><i class="ti ti-users fs-16"></i></span>
                                                            <span class="fs-14 fw-semibold">Friends</span>
                                                        </div>
                                                        <div class="form-check form-check-md form-switch mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="label-friends" checked="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-0" id="notification-settings" role="tabpanel">
                                        <ul class="list-group list-group-flush list-unstyled rounded">
                                            <li class="list-group-item">
                                                <div class="row gx-5 gy-3">
                                                    <div class="col-xl-5">
                                                        <p class="fs-16 mb-1 fw-medium">Email Notifications</p>
                                                        <p class="fs-13 mb-0 text-muted">Email notifications are the
                                                            notifications you will receeive when you are offline, you
                                                            can customize them by enabling or disabling them.</p>
                                                    </div>
                                                    <div class="col-xl-7">
                                                        <div
                                                            class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Updates & Features</p>
                                                                <p class="fs-13 mb-0 text-muted">Notifications about new
                                                                    updates and their features.</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch float-sm-end">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg12" checked="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-top justify-content-between mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Early Access</p>
                                                                <p class="fs-13 mb-0 text-muted">Users are selected for
                                                                    beta testing of new update,notifications relating or
                                                                    participate in any of paid product promotion.</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch float-sm-end">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg19" checked="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-top justify-content-between mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Email Shortcuts</p>
                                                                <p class="fs-13 mb-0 text-muted">Shortcut notifications
                                                                    for email.</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch float-sm-end">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg13">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-top justify-content-between mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">New Mails</p>
                                                                <p class="fs-13 mb-0 text-muted">Notifications related
                                                                    to new mails received.</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch float-sm-end">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg14" checked="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-top justify-content-between mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Mail Chat Messages</p>
                                                                <p class="fs-13 mb-0 text-muted">Any of new messages are
                                                                    received will be updated through notifications.</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch float-sm-end">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg15" checked="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gx-5 gy-3">
                                                    <div class="col-xl-5">
                                                        <p class="fs-16 mb-1 fw-medium">Push Notifications</p>
                                                        <p class="fs-13 mb-0 text-muted">Push notifications are recieved
                                                            when you are online, you can customize them by enabling or
                                                            disabling them.</p>
                                                    </div>
                                                    <div class="col-xl-7">
                                                        <div
                                                            class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">New Mails</p>
                                                                <p class="fs-13 mb-0 text-muted">Notifications related
                                                                    to new mails received.</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch float-sm-end">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg16" checked="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-top justify-content-between mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Mail Chat Messages</p>
                                                                <p class="fs-13 mb-0 text-muted">Any of new messages are
                                                                    received will be updated through notifications.</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch float-sm-end">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg17" checked="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-top justify-content-between mt-3">
                                                            <div class="mail-notification-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Mail Extensions</p>
                                                                <p class="fs-13 mb-0 text-muted">Notifications related
                                                                    to the extensions received by new emails and thier
                                                                    propertied also been displayed.</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch float-sm-end">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg18" checked="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane p-0" id="security" role="tabpanel">
                                        <ul class="list-group list-group-flush list-unstyled rounded">
                                            <li class="list-group-item">
                                                <div class="row gx-5 gy-3">
                                                    <div class="col-xl-4">
                                                        <p class="fs-16 mb-1 fw-medium">Logging In</p>
                                                        <p class="fs-13 mb-0 text-muted">Security settings related to
                                                            logging into our email account and taking down account if
                                                            any mischevious action happended.</p>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div
                                                            class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3">
                                                            <div class="mail-security-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Max Limit for login
                                                                    attempts</p>
                                                                <p class="fs-13 mb-0 text-muted mb-sm-0 mb-2">Account
                                                                    will freeze for 24hrs while attempt to login with
                                                                    wrong credentials for selected number of times</p>
                                                            </div>
                                                            <div>
                                                                <select class="form-control" data-trigger
                                                                    name="max-login-attempts" id="max-login-attempts">
                                                                    <option value="Choice 1" selected>3 Attempts
                                                                    </option>
                                                                    <option value="Choice 2">5 Attempts</option>
                                                                    <option value="Choice 3">10 Attempts</option>
                                                                    <option value="Choice 3">20 Attempts</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Account Freeze time
                                                                    management</p>
                                                                <p class="fs-13 mb-0 text-muted mb-sm-0 mb-2">You can
                                                                    change the time for the account freeze when attempts
                                                                    for </p>
                                                            </div>
                                                            <div>
                                                                <select class="form-control" data-trigger
                                                                    name="account-freeze-time-format"
                                                                    id="account-freeze-time-format">
                                                                    <option value="Choice 1" selected>1 Day</option>
                                                                    <option value="Choice 2">1 Hour</option>
                                                                    <option value="Choice 3">1 Month</option>
                                                                    <option value="Choice 3">1 Year</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gx-5 gy-3">
                                                    <div class="col-xl-4">
                                                        <p class="fs-16 mb-1 fw-medium">Password Requirements</p>
                                                        <p class="fs-13 mb-0 text-muted">Security settings related to
                                                            password strength.</p>
                                                    </div>
                                                    <div class="col-xl-8">
                                                        <div
                                                            class="d-sm-flex d-block align-items-top justify-content-between mt-sm-0 mt-3 gap-3">
                                                            <div class="mail-security-settings">
                                                                <p class="fs-14 mb-1 fw-medium">Minimum number of
                                                                    characters in the password</p>
                                                                <p class="fs-13 mb-0 text-muted">There should be a
                                                                    minimum number of characters for a password to be
                                                                    validated that shouls be set here.</p>
                                                            </div>
                                                            <div>
                                                                <input type="text" class="form-control" value="8">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Contain A Number</p>
                                                                <p class="fs-13 mb-0 text-muted">Password should contain
                                                                    a number.</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch float-sm-end">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg20" checked="">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Contain A Special
                                                                    Character</p>
                                                                <p class="fs-13 mb-0 text-muted">Password should contain
                                                                    a special Character.</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch float-sm-end">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg22">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Atleast One Capital
                                                                    Letter</p>
                                                                <p class="fs-13 mb-0 text-muted">Password should contain
                                                                    atleast one capital letter.</p>
                                                            </div>
                                                            <div class="form-check form-check-lg form-switch float-sm-end">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="switch-lg21">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                                            <div>
                                                                <p class="fs-14 mb-1 fw-medium">Maximum Password Length
                                                                </p>
                                                                <p class="fs-13 mb-0 text-muted">Maximum password lenth
                                                                    should be selected here.</p>
                                                            </div>
                                                            <div>
                                                                <input type="text" class="form-control" value="16">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row gx-5 gy-3">
                                                    <div class="col-xl-4">
                                                        <p class="fs-16 mb-1 fw-medium">Unknown Chats</p>
                                                        <p class="fs-13 mb-0 text-muted">Security settings related to
                                                            unknown chats.</p>
                                                    </div>
                                                    <div class="col-xl-8 d-flex justify-content-end">
                                                        <div class="row gy-3">
                                                            <div class="col-xl-6">
                                                              <div class="d-flex align-items-center gap-2 bg-light border rounded px-2 py-2">
                                                                <input class="form-check-input" type="radio" name="show-hide" id="show-hide1" value="option1">
                                                                 <span>Show</span>
                                                              </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="d-flex align-items-center gap-2 bg-light border rounded px-2 py-2">
                                                                    <input class="form-check-input" type="radio" name="show-hide" id="show-hide2" value="option1" checked="">
                                                                     <span>Hide</span>
                                                                  </div>
                                                            </div>
                                                         </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="float-end">
                                    <button class="btn btn-light m-1">
                                        Restore Defaults
                                    </button>
                                    <button class="btn btn-primary m-1">
                                        Save Changes
                                    </button>
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

    <!-- Mail Settings -->
    <script src="/storage/assets/js/mail-settings.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>