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
                            <h1 class="page-title fw-medium fs-18 mb-2">List Group</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">List Group</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="btn-list">
                            <button type="button" class="btn btn-primary-light btn-wave me-2">
                                <i class="bx bx-crown align-middle"></i> Plan Upgrade
                            </button>
                            <button type="button" class="btn btn-secondary-light btn-wave me-0">
                                <i class="ri-upload-cloud-line align-middle"></i> Export Report
                            </button>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Basic List
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="/storage/assets/images/faces/1.jpg" alt="img">
                                                </span>
                                                <div class="ms-2 fw-medium">
                                                    Alicia Sierra
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="/storage/assets/images/faces/3.jpg" alt="img">
                                                </span>
                                                <div class="ms-2 fw-medium">
                                                    Samantha Mery
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="/storage/assets/images/faces/6.jpg" alt="img">
                                                </span>
                                                <div class="ms-2 fw-medium">
                                                    Juliana Pena
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="/storage/assets/images/faces/15.jpg" alt="img">
                                                </span>
                                                <div class="ms-2 fw-medium">
                                                    Adam Smith
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="/storage/assets/images/faces/13.jpg" alt="img">
                                                </span>
                                                <div class="ms-2 fw-medium">
                                                    Farhaan Amhed
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="/storage/assets/images/faces/1.jpg" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-medium"&gt;
                Alicia Sierra
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="/storage/assets/images/faces/3.jpg" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-medium"&gt;
                Samantha Mery
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="/storage/assets/images/faces/6.jpg" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-medium"&gt;
                Juliana Pena
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="/storage/assets/images/faces/15.jpg" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-medium"&gt;
                Adam Smith
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="/storage/assets/images/faces/13.jpg" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-medium"&gt;
                Farhaan Amhed
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Active items
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item active" aria-current="true">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-sm bg-white-transparent avatar-rounded svg-white p-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M216,116.69V216H152V152H104v64H40V116.69l82.34-82.35a8,8,0,0,1,11.32,0Z" opacity="0.2"></path><path d="M240,208H224V136l2.34,2.34A8,8,0,0,0,237.66,127L139.31,28.68a16,16,0,0,0-22.62,0L18.34,127a8,8,0,0,0,11.32,11.31L32,136v72H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM48,120l80-80,80,80v88H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48Zm96,88H112V160h32Z"></path></svg>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Home
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-sm bg-primary-transparent avatar-rounded svg-primary p-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M208,192H48a8,8,0,0,1-6.88-12C47.71,168.6,56,147.81,56,112a72,72,0,0,1,144,0c0,35.82,8.3,56.6,14.9,68A8,8,0,0,1,208,192Z" opacity="0.2"></path><path d="M224,71.1a8,8,0,0,1-10.78-3.42,94.13,94.13,0,0,0-33.46-36.91,8,8,0,1,1,8.54-13.54,111.46,111.46,0,0,1,39.12,43.09A8,8,0,0,1,224,71.1ZM35.71,72a8,8,0,0,0,7.1-4.32A94.13,94.13,0,0,1,76.27,30.77a8,8,0,1,0-8.54-13.54A111.46,111.46,0,0,0,28.61,60.32,8,8,0,0,0,35.71,72Zm186.1,103.94A16,16,0,0,1,208,200H167.2a40,40,0,0,1-78.4,0H48a16,16,0,0,1-13.79-24.06C43.22,160.39,48,138.28,48,112a80,80,0,0,1,160,0C208,138.27,212.78,160.38,221.81,175.94ZM150.62,200H105.38a24,24,0,0,0,45.24,0ZM208,184c-10.64-18.27-16-42.49-16-72a64,64,0,0,0-128,0c0,29.52-5.38,53.74-16,72Z"></path></svg>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Notifications
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-sm bg-primary-transparent avatar-rounded svg-primary p-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M208,128v72a8,8,0,0,1-8,8H56a8,8,0,0,1-8-8V128Z" opacity="0.2"></path><path d="M216,72H180.92c.39-.33.79-.65,1.17-1A29.53,29.53,0,0,0,192,49.57,32.62,32.62,0,0,0,158.44,16,29.53,29.53,0,0,0,137,25.91a54.94,54.94,0,0,0-9,14.48,54.94,54.94,0,0,0-9-14.48A29.53,29.53,0,0,0,97.56,16,32.62,32.62,0,0,0,64,49.57,29.53,29.53,0,0,0,73.91,71c.38.33.78.65,1.17,1H40A16,16,0,0,0,24,88v32a16,16,0,0,0,16,16v64a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V136a16,16,0,0,0,16-16V88A16,16,0,0,0,216,72ZM149,36.51a13.69,13.69,0,0,1,10-4.5h.49A16.62,16.62,0,0,1,176,49.08a13.69,13.69,0,0,1-4.5,10c-9.49,8.4-25.24,11.36-35,12.4C137.7,60.89,141,45.5,149,36.51Zm-64.09.36A16.63,16.63,0,0,1,96.59,32h.49a13.69,13.69,0,0,1,10,4.5c8.39,9.48,11.35,25.2,12.39,34.92-9.72-1-25.44-4-34.92-12.39a13.69,13.69,0,0,1-4.5-10A16.6,16.6,0,0,1,84.87,36.87ZM40,88h80v32H40Zm16,48h64v64H56Zm144,64H136V136h64Zm16-80H136V88h80v32Z"></path></svg>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Sent Messages
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-sm bg-primary-transparent avatar-rounded svg-primary p-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M192,96a64,64,0,1,1-64-64A64,64,0,0,1,192,96Z" opacity="0.2"></path><path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path></svg>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    New Requests
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-sm bg-primary-transparent avatar-rounded svg-primary p-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M200,56V208a8,8,0,0,1-8,8H64a8,8,0,0,1-8-8V56Z" opacity="0.2"></path><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path></svg>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Deleted Messages
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item active" aria-current="true"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-sm bg-white-transparent avatar-rounded svg-white p-1"&gt;
                    &lt;svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"&gt;&lt;path d="M216,116.69V216H152V152H104v64H40V116.69l82.34-82.35a8,8,0,0,1,11.32,0Z" opacity="0.2"&gt;&lt;/path&gt;&lt;path d="M240,208H224V136l2.34,2.34A8,8,0,0,0,237.66,127L139.31,28.68a16,16,0,0,0-22.62,0L18.34,127a8,8,0,0,0,11.32,11.31L32,136v72H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM48,120l80-80,80,80v88H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48Zm96,88H112V160h32Z"&gt;&lt;/path&gt;&lt;/svg&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                Home
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-sm bg-primary-transparent avatar-rounded svg-primary p-1"&gt;
                    &lt;svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"&gt;&lt;path d="M208,192H48a8,8,0,0,1-6.88-12C47.71,168.6,56,147.81,56,112a72,72,0,0,1,144,0c0,35.82,8.3,56.6,14.9,68A8,8,0,0,1,208,192Z" opacity="0.2"&gt;&lt;/path&gt;&lt;path d="M224,71.1a8,8,0,0,1-10.78-3.42,94.13,94.13,0,0,0-33.46-36.91,8,8,0,1,1,8.54-13.54,111.46,111.46,0,0,1,39.12,43.09A8,8,0,0,1,224,71.1ZM35.71,72a8,8,0,0,0,7.1-4.32A94.13,94.13,0,0,1,76.27,30.77a8,8,0,1,0-8.54-13.54A111.46,111.46,0,0,0,28.61,60.32,8,8,0,0,0,35.71,72Zm186.1,103.94A16,16,0,0,1,208,200H167.2a40,40,0,0,1-78.4,0H48a16,16,0,0,1-13.79-24.06C43.22,160.39,48,138.28,48,112a80,80,0,0,1,160,0C208,138.27,212.78,160.38,221.81,175.94ZM150.62,200H105.38a24,24,0,0,0,45.24,0ZM208,184c-10.64-18.27-16-42.49-16-72a64,64,0,0,0-128,0c0,29.52-5.38,53.74-16,72Z"&gt;&lt;/path&gt;&lt;/svg&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                Notifications
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-sm bg-primary-transparent avatar-rounded svg-primary p-1"&gt;
                    &lt;svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"&gt;&lt;path d="M208,128v72a8,8,0,0,1-8,8H56a8,8,0,0,1-8-8V128Z" opacity="0.2"&gt;&lt;/path&gt;&lt;path d="M216,72H180.92c.39-.33.79-.65,1.17-1A29.53,29.53,0,0,0,192,49.57,32.62,32.62,0,0,0,158.44,16,29.53,29.53,0,0,0,137,25.91a54.94,54.94,0,0,0-9,14.48,54.94,54.94,0,0,0-9-14.48A29.53,29.53,0,0,0,97.56,16,32.62,32.62,0,0,0,64,49.57,29.53,29.53,0,0,0,73.91,71c.38.33.78.65,1.17,1H40A16,16,0,0,0,24,88v32a16,16,0,0,0,16,16v64a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V136a16,16,0,0,0,16-16V88A16,16,0,0,0,216,72ZM149,36.51a13.69,13.69,0,0,1,10-4.5h.49A16.62,16.62,0,0,1,176,49.08a13.69,13.69,0,0,1-4.5,10c-9.49,8.4-25.24,11.36-35,12.4C137.7,60.89,141,45.5,149,36.51Zm-64.09.36A16.63,16.63,0,0,1,96.59,32h.49a13.69,13.69,0,0,1,10,4.5c8.39,9.48,11.35,25.2,12.39,34.92-9.72-1-25.44-4-34.92-12.39a13.69,13.69,0,0,1-4.5-10A16.6,16.6,0,0,1,84.87,36.87ZM40,88h80v32H40Zm16,48h64v64H56Zm144,64H136V136h64Zm16-80H136V88h80v32Z"&gt;&lt;/path&gt;&lt;/svg&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                Sent Messages
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-sm bg-primary-transparent avatar-rounded svg-primary p-1"&gt;
                    &lt;svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"&gt;&lt;path d="M192,96a64,64,0,1,1-64-64A64,64,0,0,1,192,96Z" opacity="0.2"&gt;&lt;/path&gt;&lt;path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"&gt;&lt;/path&gt;&lt;/svg&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                New Requests
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-sm bg-primary-transparent avatar-rounded svg-primary p-1"&gt;
                    &lt;svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"&gt;&lt;path d="M200,56V208a8,8,0,0,1-8,8H64a8,8,0,0,1-8-8V56Z" opacity="0.2"&gt;&lt;/path&gt;&lt;path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"&gt;&lt;/path&gt;&lt;/svg&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                Deleted Messages
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Disabled items
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item disabled" aria-disabled="true">A disabled item meant to be disabled
                                        </li>
                                        <li class="list-group-item">Simply dummy text of the printing</li>
                                        <li class="list-group-item">There are many variations of passages</li>
                                        <li class="list-group-item">All the Lorem Ipsum generators</li>
                                        <li class="list-group-item">Written in 45 BC. This book is a treatise on the theory</li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item disabled" aria-disabled="true"&gt;A disabled item meant to be disabled
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;Simply dummy text of the printing&lt;/li&gt;
    &lt;li class="list-group-item"&gt;There are many variations of passages&lt;/li&gt;
    &lt;li class="list-group-item"&gt;All the Lorem Ipsum generators&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Written in 45 BC. This book is a treatise on the theory&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Flush
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-inline-flex align-items-center fw-medium"><i class="ti ti-mail fs-16 align-middle me-2 text-muted"></i>Asish Trivedhi<span class="ms-1 text-muted fw-normal d-inline-block">(+1023-84534)</span></li>
                                        <li class="list-group-item d-inline-flex align-items-center fw-medium"><i class="ti ti-brand-tiktok fs-16 align-middle me-2 text-muted"></i>Alezander Russo<span class="ms-1 text-muted fw-normal d-inline-block">(+7546-12342)</span></li>
                                        <li class="list-group-item d-inline-flex align-items-center fw-medium"><i class="ti ti-brand-whatsapp fs-16 align-middle me-2 text-muted"></i>Karem Smith<span class="ms-1 text-muted fw-normal d-inline-block">(+9944-56632)</span></li>
                                        <li class="list-group-item d-inline-flex align-items-center fw-medium"><i class="ti ti-brand-facebook fs-16 align-middle me-2 text-muted"></i>Melissa Brien<span class="ms-1 text-muted fw-normal d-inline-block">(+1023-34323)</span></li>
                                        <li class="list-group-item d-inline-flex align-items-center fw-medium"><i class="ti ti-brand-instagram fs-16 align-middle me-2 text-muted"></i>Kamala Harris<span class="ms-1 text-muted fw-normal d-inline-block">(+91-63421)</span></li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group list-group-flush"&gt;
    &lt;li class="list-group-item d-inline-flex align-items-center fw-medium"&gt;&lt;i class="ti ti-mail fs-16 align-middle me-2 text-muted"&gt;&lt;/i&gt;Asish Trivedhi&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+1023-84534)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="list-group-item d-inline-flex align-items-center fw-medium"&gt;&lt;i class="ti ti-brand-tiktok fs-16 align-middle me-2 text-muted"&gt;&lt;/i&gt;Alezander Russo&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+7546-12342)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="list-group-item d-inline-flex align-items-center fw-medium"&gt;&lt;i class="ti ti-brand-whatsapp fs-16 align-middle me-2 text-muted"&gt;&lt;/i&gt;Karem Smith&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+9944-56632)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="list-group-item d-inline-flex align-items-center fw-medium"&gt;&lt;i class="ti ti-brand-facebook fs-16 align-middle me-2 text-muted"&gt;&lt;/i&gt;Melissa Brien&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+1023-34323)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="list-group-item d-inline-flex align-items-center fw-medium"&gt;&lt;i class="ti ti-brand-instagram fs-16 align-middle me-2 text-muted"&gt;&lt;/i&gt;Kamala Harris&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+91-63421)&lt;/span&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Links
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action active"
                                            aria-current="true">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xs bg-white text-default avatar-rounded">
                                                        C
                                                    </span>
                                                </div>
                                                <div class="ms-2">California</div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xs bg-secondary avatar-rounded">
                                                        N
                                                    </span>
                                                </div>
                                                <div class="ms-2">New Jersey</div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xs bg-info avatar-rounded">
                                                        L
                                                    </span>
                                                </div>
                                                <div class="ms-2">Los Angeles</div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xs bg-warning avatar-rounded">
                                                        M
                                                    </span>
                                                </div>
                                                <div class="ms-2">Miami Florida</div>
                                            </div>
                                        </a>
                                        <a class="list-group-item list-group-item-action disabled">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xs bg-success avatar-rounded">
                                                        W
                                                    </span>
                                                </div>
                                                <div class="ms-2">Washington D.C</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action active"
        aria-current="true"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-white text-default avatar-rounded"&gt;
                    C
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;California&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-secondary avatar-rounded"&gt;
                    N
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;New Jersey&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-info avatar-rounded"&gt;
                    L
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;Los Angeles&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-warning avatar-rounded"&gt;
                    M
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;Miami Florida&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a class="list-group-item list-group-item-action disabled"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-success avatar-rounded"&gt;
                    W
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;Washington D.C&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <button type="button" class="list-group-item list-group-item-action active" aria-current="true">Simply dummy text of the printing<span class="badge float-end bg-primary">243</span></button>
                                        <button type="button" class="list-group-item list-group-item-action">There are many variations of passages<span class="badge float-end bg-secondary-transparent">35</span></button>
                                        <button type="button" class="list-group-item list-group-item-action">All the Lorem Ipsum generators<span class="badge float-end bg-info-transparent">132</span></button>
                                        <button type="button" class="list-group-item list-group-item-action">All the Lorem Ipsum generators<span class="badge float-end bg-success-transparent">2525</span></button>
                                        <button type="button" class="list-group-item list-group-item-action" disabled>A disabled item meant to be disabled<span class="badge float-end bg-danger-transparent">21</span></button>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;button type="button" class="list-group-item list-group-item-action active" aria-current="true"&gt;Simply dummy text of the printing&lt;span class="badge float-end bg-primary"&gt;243&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="list-group-item list-group-item-action"&gt;There are many variations of passages&lt;span class="badge float-end bg-secondary-transparent"&gt;35&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="list-group-item list-group-item-action"&gt;All the Lorem Ipsum generators&lt;span class="badge float-end bg-info-transparent"&gt;132&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="list-group-item list-group-item-action"&gt;All the Lorem Ipsum generators&lt;span class="badge float-end bg-success-transparent"&gt;2525&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="list-group-item list-group-item-action" disabled&gt;A disabled item meant to be disabled&lt;span class="badge float-end bg-danger-transparent"&gt;21&lt;/span&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Contextual classes
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">A simple default list group item</li>

                                        <li class="list-group-item list-group-item-primary">A simple primary list
                                            group
                                            item</li>
                                        <li class="list-group-item list-group-item-secondary">A simple secondary
                                            list
                                            group item</li>
                                        <li class="list-group-item list-group-item-success">A simple success list
                                            group
                                            item</li>
                                        <li class="list-group-item list-group-item-danger">A simple danger list
                                            group
                                            item</li>
                                        <li class="list-group-item list-group-item-warning">A simple warning list
                                            group
                                            item</li>
                                        <li class="list-group-item list-group-item-info">A simple info list group
                                            item
                                        </li>
                                        <li class="list-group-item list-group-item-light">A simple light list group
                                            item
                                        </li>
                                        <li class="list-group-item list-group-item-dark">A simple dark list group
                                            item
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item"&gt;A simple default list group item&lt;/li&gt;

    &lt;li class="list-group-item list-group-item-primary"&gt;A simple primary list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-secondary"&gt;A simple secondary
        list
        group item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-success"&gt;A simple success list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-danger"&gt;A simple danger list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-warning"&gt;A simple warning list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-info"&gt;A simple info list group
        item
    &lt;/li&gt;
    &lt;li class="list-group-item list-group-item-light"&gt;A simple light list group
        item
    &lt;/li&gt;
    &lt;li class="list-group-item list-group-item-dark"&gt;A simple dark list group
        item
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Contextual classes with hover styles
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">A simple default
                                            list
                                            group item</a>

                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-primary">A
                                            simple primary list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-secondary">A
                                            simple secondary list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-success">A
                                            simple success list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-danger">A
                                            simple danger list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-warning">A
                                            simple warning list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-info">A
                                            simple
                                            info list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-light">A
                                            simple light list group item</a>
                                        <a href="javascript:void(0);"
                                            class="list-group-item list-group-item-action list-group-item-dark">A
                                            simple
                                            dark list group item</a>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;A simple default
        list
        group item&lt;/a&gt;

    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-primary"&gt;A
        simple primary list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-secondary"&gt;A
        simple secondary list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-success"&gt;A
        simple success list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-danger"&gt;A
        simple danger list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-warning"&gt;A
        simple warning list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-info"&gt;A
        simple
        info list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-light"&gt;A
        simple light list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);"
        class="list-group-item list-group-item-action list-group-item-dark"&gt;A
        simple
        dark list group item&lt;/a&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Solid Colored Lists
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">A simple default list group item</li>

                                        <li class="list-group-item list-item-solid-primary">A simple primary list
                                            group
                                            item</li>
                                        <li class="list-group-item list-item-solid-secondary">A simple secondary
                                            list
                                            group item</li>
                                        <li class="list-group-item list-item-solid-success">A simple success list
                                            group
                                            item</li>
                                        <li class="list-group-item list-item-solid-danger">A simple danger list
                                            group
                                            item</li>
                                        <li class="list-group-item list-item-solid-warning">A simple warning list
                                            group
                                            item</li>
                                        <li class="list-group-item list-item-solid-info">A simple info list group
                                            item
                                        </li>
                                        <li class="list-group-item list-item-solid-light">A simple light list group
                                            item
                                        </li>
                                        <li class="list-group-item list-item-solid-dark text-white">A simple dark list group
                                            item
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item"&gt;A simple default list group item&lt;/li&gt;

    &lt;li class="list-group-item list-item-solid-primary"&gt;A simple primary list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-secondary"&gt;A simple secondary
        list
        group item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-success"&gt;A simple success list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-danger"&gt;A simple danger list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-warning"&gt;A simple warning list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-info"&gt;A simple info list group
        item
    &lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-light"&gt;A simple light list group
        item
    &lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-dark text-white"&gt;A simple dark list group
        item
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Custom content
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action active"
                                            aria-current="true">
                                            <div class="d-sm-flex w-100 justify-content-between">
                                                <h6 class="mb-1 fw-medium text-fixed-white">Web page editors now use Lorem Ipsum?</h6>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            <small>24,Nov 2024.</small>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <div class="d-sm-flex w-100 justify-content-between">
                                                <h6 class="mb-1 fw-medium">Richard McClintock, a Latin professor?</h6>
                                                <small class="text-muted">4 hrs ago</small>
                                            </div>
                                            <p class="mb-1">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                                            <small class="text-muted">30,Nov 2024.</small>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <div class="d-sm-flex w-100 justify-content-between">
                                                <h6 class="mb-1 fw-medium">It uses a dictionary of over 200 Latin words?</h6>
                                                <small class="text-muted">15 hrs ago</small>
                                            </div>
                                            <p class="mb-1">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            <small class="text-muted">4,Nov 2024.</small>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                            <div class="d-sm-flex w-100 justify-content-between">
                                                <h6 class="mb-1 fw-medium">The standard Lorem Ipsum used since the 1500s?</h6>
                                                <small class="text-muted">45 mins ago</small>
                                            </div>
                                            <p class="mb-1">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                            <small class="text-muted">28,Oct 2024.</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action active"
        aria-current="true"&gt;
        &lt;div class="d-flex w-100 justify-content-between"&gt;
            &lt;h6 class="mb-1 fw-medium"&gt;Web page editors now use Lorem Ipsum?&lt;/h6&gt;
            &lt;small&gt;3 days ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.&lt;/p&gt;
        &lt;small&gt;24,Nov 2024.&lt;/small&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex w-100 justify-content-between"&gt;
            &lt;h6 class="mb-1 fw-medium"&gt;Richard McClintock, a Latin professor?&lt;/h6&gt;
            &lt;small class="text-muted"&gt;4 hrs ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.&lt;/p&gt;
        &lt;small class="text-muted"&gt;30,Nov 2024.&lt;/small&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex w-100 justify-content-between"&gt;
            &lt;h6 class="mb-1 fw-medium"&gt;It uses a dictionary of over 200 Latin words?&lt;/h6&gt;
            &lt;small class="text-muted"&gt;15 hrs ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.&lt;/p&gt;
        &lt;small class="text-muted"&gt;4,Nov 2024.&lt;/small&gt;
    &lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex w-100 justify-content-between"&gt;
            &lt;h6 class="mb-1 fw-medium"&gt;The standard Lorem Ipsum used since the 1500s?&lt;/h6&gt;
            &lt;small class="text-muted"&gt;45 mins ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.&lt;/p&gt;
        &lt;small class="text-muted"&gt;28,Oct 2024.&lt;/small&gt;
    &lt;/a&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Sub headings
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto text-muted">
                                                <div class="fw-medium fs-14 text-default">What Happened?</div>
                                                Many experts have recently suggested may exist.
                                            </div>
                                            <span class="badge bg-primary-transparent">32 Views</span>
                                        </li>
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto text-muted">
                                                <div class="fw-medium fs-14 text-default">It Was Amazing!</div>
                                                His idea involved taking red.
                                            </div>
                                            <span class="badge bg-secondary-transparent">52 Views</span>
                                        </li>
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto text-muted">
                                                <div class="fw-medium fs-14 text-default">News Is A Great Weapon.</div>
                                                News can influence in many ways.
                                            </div>
                                            <span class="badge bg-success-transparent">1,204 Views</span>
                                        </li>
                                        <li class="list-group-item d-sm-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto text-muted">
                                                <div class="fw-medium fs-14 text-default">majority have suffered.</div>
                                                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.
                                            </div>
                                            <span class="badge bg-danger-transparent">14 Views</span>
                                        </li>
                                    </ol>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ol class="list-group list-group-numbered"&gt;
    &lt;li class="list-group-item d-sm-flex justify-content-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-muted"&gt;
            &lt;div class="fw-medium fs-14 text-default"&gt;What Happened?&lt;/div&gt;
            Many experts have recently suggested may exist.
        &lt;/div&gt;
        &lt;span class="badge bg-primary-transparent"&gt;32 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item d-sm-flex justify-content-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-muted"&gt;
            &lt;div class="fw-medium fs-14 text-default"&gt;It Was Amazing!&lt;/div&gt;
            His idea involved taking red.
        &lt;/div&gt;
        &lt;span class="badge bg-secondary-transparent"&gt;52 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item d-sm-flex justify-content-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-muted"&gt;
            &lt;div class="fw-medium fs-14 text-default"&gt;News Is A Great Weapon.&lt;/div&gt;
            News can influence in many ways.
        &lt;/div&gt;
        &lt;span class="badge bg-success-transparent"&gt;1,204 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item d-sm-flex justify-content-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-muted"&gt;
            &lt;div class="fw-medium fs-14 text-default"&gt;majority have suffered.&lt;/div&gt;
            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.
        &lt;/div&gt;
        &lt;span class="badge bg-danger-transparent"&gt;14 Views&lt;/span&gt;
    &lt;/li&gt;
&lt;/ol&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Numbered Lists
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item">Simply dummy text of the printing.</li>
                                        <li class="list-group-item">There are many variations of passages.</li>
                                        <li class="list-group-item">All the Lorem Ipsum generators.</li>
                                        <li class="list-group-item">Written in 45 BC. This book is a treatise on the theory.</li>
                                        <li class="list-group-item">Randomised words which don't look.</li>
                                        <li class="list-group-item">Always free from repetition, injected humour.</li>
                                    </ol>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ol class="list-group list-group-numbered"&gt;
    &lt;li class="list-group-item"&gt;Simply dummy text of the printing.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;There are many variations of passages.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;All the Lorem Ipsum generators.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Written in 45 BC. This book is a treatise on the theory.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Randomised words which don't look.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Always free from repetition, injected humour.&lt;/li&gt;
&lt;/ol&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        List With Checkboxes
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 fw-medium" type="checkbox" value=""
                                                aria-label="..." checked>
                                                Accurate information at any given point.
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 fw-medium" type="checkbox" value=""
                                                aria-label="...">
                                                Hearing the information and responding.
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 fw-medium" type="checkbox" value=""
                                                aria-label="..." checked>
                                                Setting up and customizing your own sales.
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 fw-medium" type="checkbox" value=""
                                                aria-label="..." checked>
                                                New Admin Launched.
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 fw-medium" type="checkbox" value=""
                                                aria-label="...">
                                                To maximize profits and improve productivity.
                                        </li>
                                        <li class="list-group-item">
                                            <input class="form-check-input me-1 fw-medium" type="checkbox" value=""
                                                aria-label="...">
                                                To have a complete 360° overview of sales information, having.
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-medium" type="checkbox" value=""
            aria-label="..." checked&gt;
            Accurate information at any given point.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-medium" type="checkbox" value=""
            aria-label="..."&gt;
            Hearing the information and responding.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-medium" type="checkbox" value=""
            aria-label="..." checked&gt;
            Setting up and customizing your own sales.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-medium" type="checkbox" value=""
            aria-label="..." checked&gt;
            New Admin Launched.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-medium" type="checkbox" value=""
            aria-label="..."&gt;
            To maximize profits and improve productivity.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-medium" type="checkbox" value=""
            aria-label="..."&gt;
            To have a complete 360° overview of sales information, having.
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        List With Radios
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio" checked>
                                                Accurate information at any given point.
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio" checked>
                                                Hearing the information and responding.
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio" checked>
                                                Setting up and customizing your own sales.
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio">
                                                New Admin Launched.
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio">
                                                To maximize profits and improve productivity.
                                        </label>
                                        <label class="list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio">
                                                To have a complete 360° overview of sales information, having.
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio" checked&gt;
            Accurate information at any given point.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio" checked&gt;
            Hearing the information and responding.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio" checked&gt;
            Setting up and customizing your own sales.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio"&gt;
            New Admin Launched.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio"&gt;
            To maximize profits and improve productivity.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio"&gt;
            To have a complete 360° overview of sales information, having.
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        List With badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Groceries
                                            <span class="badge bg-primary">Available</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Furniture
                                            <span class="badge bg-secondary">Buy</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Beauty
                                            <span class="badge bg-danger rounded-pill">32</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Books
                                            <span class="badge bg-light text-default">New</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Toys
                                            <span class="badge bg-info-gradient">Hot</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-medium">
                                            Mobiles
                                            <span class="badge bg-warning">Sold Out</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-medium"&gt;
        Grocies
        &lt;span class="badge bg-primary"&gt;Available&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-medium"&gt;
        Furniture
        &lt;span class="badge bg-secondary"&gt;Buy&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-medium"&gt;
        Beauty
        &lt;span class="badge bg-danger rounded-pill"&gt;32&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-medium"&gt;
        Books
        &lt;span class="badge bg-light text-default"&gt;New&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-medium"&gt;
        Toys
        &lt;span class="badge bg-info-gradient"&gt;Hot&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-medium"&gt;
        Mobiles
        &lt;span class="badge bg-warning"&gt;Sold Out&lt;/span&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Horizontal
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="mb-3 list-group list-group-horizontal">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <ul class="mb-3 list-group list-group-horizontal-sm">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <ul class="mb-3 list-group list-group-horizontal-md">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <ul class="mb-3 list-group list-group-horizontal-lg">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <ul class="mb-3 list-group list-group-horizontal-xl">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                    <ul class="mb-3 list-group list-group-horizontal-xxl">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="mb-3 list-group list-group-horizontal"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="mb-3 list-group list-group-horizontal-sm"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="mb-3 list-group list-group-horizontal-md"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="mb-3 list-group list-group-horizontal-lg"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="mb-3 list-group list-group-horizontal-xl"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="mb-3 list-group list-group-horizontal-xxl"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

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