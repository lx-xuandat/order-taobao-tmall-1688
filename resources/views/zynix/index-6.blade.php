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
                        <h1 class="page-title fw-medium fs-18 mb-2">Projects</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">
                                     Dashboards
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
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
                    <div class="col-xxl-9">
                        <div class="row">
                            <div class="col-xxl-7">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card custom-card">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-start justify-content-between flex-wrap">
                                                    <div>
                                                        <span class="d-block text-muted mb-2">Earnings</span>
                                                        <h3 class="fw-semibold lh-1 mb-0">$12,563.50<span class="text-success fs-13 fw-semibold ms-1 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>0.15%</span></h3>
                                                    </div>
                                                    <div>
                                                        <span class="avatar avatar-md bg-primary svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-white" viewBox="0 0 24 24"><path d="M14,11H10a2,2,0,0,1,0-4h5a1,1,0,0,1,1,1,1,1,0,0,0,2,0,3,3,0,0,0-3-3H13V3a1,1,0,0,0-2,0V5H10a4,4,0,0,0,0,8h4a2,2,0,0,1,0,4H9a1,1,0,0,1-1-1,1,1,0,0,0-2,0,3,3,0,0,0,3,3h2v2a1,1,0,0,0,2,0V19h1a4,4,0,0,0,0-8Z"></path></svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-start justify-content-between flex-wrap">
                                                    <div>
                                                        <span class="d-block text-muted mb-2">Cost</span>
                                                        <h3 class="fw-semibold lh-1 mb-0">$6,156.38<span class="text-success fs-13 ms-1 fw-semibold d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>2.50%</span></h3>
                                                    </div>
                                                    <div>
                                                        <span class="avatar avatar-md bg-secondary svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-white" viewBox="0 0 24 24"><path d="M19,7H18V6a3,3,0,0,0-3-3H5A3,3,0,0,0,2,6H2V18a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V10A3,3,0,0,0,19,7ZM5,5H15a1,1,0,0,1,1,1V7H5A1,1,0,0,1,5,5ZM20,15H19a1,1,0,0,1,0-2h1Zm0-4H19a3,3,0,0,0,0,6h1v1a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8.83A3,3,0,0,0,5,9H19a1,1,0,0,1,1,1Z"></path></svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-start justify-content-between flex-wrap">
                                                    <div>
                                                        <span class="d-block text-muted mb-2">Productivity</span>
                                                        <h3 class="fw-semibold lh-1 mb-0">$95.5M<span class="text-danger fs-13 ms-1 fw-semibold d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-down"></i>4.77%</span></h3>
                                                    </div>
                                                    <div>
                                                        <span class="avatar avatar-md bg-success svg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-white" viewBox="0 0 24 24"><path d="M21.71,7.29a1,1,0,0,0-1.42,0L14,13.59,9.71,9.29a1,1,0,0,0-1.42,0l-6,6a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L9,11.41l4.29,4.3a1,1,0,0,0,1.42,0l7-7A1,1,0,0,0,21.71,7.29Z"></path></svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card custom-card">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-start justify-content-between flex-wrap">
                                                    <div>
                                                        <span class="d-block text-muted mb-2">Total Time On Project</span>
                                                        <h3 class="fw-semibold lh-1 mb-0">148:00h<span class="text-success fs-13 ms-1 fw-semibold d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>3.36%</span></h3>
                                                    </div>
                                                    <div>
                                                        <span class="avatar avatar-md bg-info svg-white">
                                                            <svg id="Layer_1" class="svg-white" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.09814,12.63379,13,11.42285V7a1,1,0,0,0-2,0v5a.99985.99985,0,0,0,.5.86621l2.59814,1.5a1.00016,1.00016,0,1,0,1-1.73242ZM12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z"></path></svg>
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
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Project categories
                                        </div>
                                        <button class="btn btn-light btn-sm border">
                                            View All
                                        </button>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="progress-stacked progress-sm mb-3">
                                            <div class="progress-bar rounded" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary rounded" role="progressbar" style="width: 15%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-info rounded" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <span class="d-block text-muted">Total number of projects</span>
                                            <h6 class="fw-semibold mb-0">18,643</h6>
                                        </div>
                                        <div class="row gy-3">
                                            <div class="col-xl-6">
                                                <span class="mb-0 me-1 project-category category1">UI Projects</span>
                                                <span class="text-success fw-semibold fs-12">
                                                    <span class="me-1"><i class="ti ti-trending-up align-middle"></i></span>
                                                    <span class="">(42.34%)</span>
                                                </span>
                                            </div>
                                            <div class="col-xl-6">
                                                <span class="mb-0 me-1 project-category category2">UX Projects</span>
                                                <span class="text-danger fw-semibold fs-12">
                                                    <span class="me-1"><i class="ti ti-trending-down align-middle"></i></span>
                                                    <span class="">(13%)</span>
                                                </span>
                                            </div>
                                            <div class="col-xl-6">
                                                <span class="mb-0 me-1 project-category category3">Finance</span>
                                                <span class="text-success fw-semibold fs-12">
                                                    <span class="me-1"><i class="ti ti-trending-up align-middle"></i></span>
                                                    <span class="">(62%)</span>
                                                </span>
                                            </div>
                                            <div class="col-xl-6">
                                                <span class="mb-0 me-1 project-category category4">Banking</span>
                                                <span class="text-success fw-semibold fs-12">
                                                    <span class="me-1"><i class="ti ti-trending-up align-middle"></i></span>
                                                    <span class="">(22.46%)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Project Statistics</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row ps-5">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                <div class="mb-1">Active Projects</div>
                                                <div class="mb-1 d-flex align-items-center flex-wrap">
                                                    <span class="mt-1 h6 mb-0 fw-semibold text-primary">166</span>
                                                    <span class="text-success"><i class="ti ti-arrow-narrow-up ms-1 align-middle"></i>
                                                    <span class="badge bg-success-transparent text-success">+0.9%</span></span>
                                                </div>
                                                <div class="text-muted fs-13">More Projects are yet to start</div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                <div class="mb-">Completed Projects</div>
                                                <div class="mb-1 d-flex align-items-center flex-wrap">
                                                    <span class="mt-1 h6 mb-0 fw-semibold text-primary">538</span>
                                                    <span class="text-success"><i class="ti ti-arrow-narrow-up ms-1 align-middle"></i>
                                                    <span class="badge bg-success-transparent text-success">+0.39%</span></span>
                                                </div>
                                                <div class="text-muted fs-13">32 Completed this year</div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                <div class="mb-1 ">Project Revenue</div>
                                                <div class="mb-0 d-flex align-items-center flex-wrap">
                                                    <span class="mt-1 h6 mb-0 fw-semibold text-secondary">$32,124.00</span>
                                                    <span class="text-danger"><i class="ti ti-arrow-narrow-up ms-1 align-middle"></i>
                                                    <span class="badge bg-danger-transparent text-danger">-0.15%</span></span>
                                                </div>
                                                <div class="text-muted fs-13">Reached yearly target</div>
                                            </div>
                                        </div>
                                        <div id="project-statistics"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            To-Do List
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled projects-to-do-list">
                                            <li>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Finish Presentation Slides</span>
                                                        <span class="fs-13 text-muted">May 29, 2024</span>
                                                    </div>
                                                    <button class="btn btn-light btn-sm border">Edit</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input form-checked-secondary" type="checkbox" value="" id="defaultCheck2" checked>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Send Follow-up Emails</span>
                                                        <span class="fs-13 text-muted">May 27, 2024</span>
                                                    </div>
                                                    <button class="btn btn-light btn-sm border">Edit</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input form-checked-success" type="checkbox" value="" id="defaultCheck3">
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Research New Software</span>
                                                        <span class="fs-13 text-muted">May 30, 2024</span>
                                                    </div>
                                                    <button class="btn btn-light btn-sm border">Edit</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input form-checked-warning" type="checkbox" value="" id="defaultCheck4">
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Schedule Training Session</span>
                                                        <span class="fs-13 text-muted">May 29, 2024</span>
                                                    </div>
                                                    <button class="btn btn-light btn-sm border">Edit</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input form-checked-info" type="checkbox" value="" id="defaultCheck5" checked>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Update Task Board</span>
                                                        <span class="fs-13 text-muted">May 27, 2024</span>
                                                    </div>
                                                    <button class="btn btn-light btn-sm border">Edit</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input form-checked-danger" type="checkbox" value="" id="defaultCheck6">
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Attend Team Meeting</span>
                                                        <span class="fs-13 text-muted">May 28, 2024</span>
                                                    </div>
                                                    <button class="btn btn-light btn-sm border">Edit</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Recent Transactions
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled project-recent-transactions-list">
                                            <li>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-ms avatar-rounded bg-primary-transparent fw-semibold fs-14">
                                                            S
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Swift Ads</span>
                                                        <span class="d-block fs-13 text-muted">Payment</span>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="h6 mb-0 fw-semibold text-danger">-$500</span>
                                                        <span class="d-block text-muted fs-13">May 25, 2024</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-ms avatar-rounded bg-secondary-transparent fw-semibold fs-14">
                                                            E
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Eco Build</span>
                                                        <span class="d-block fs-13 text-muted">Expense</span>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="h6 mb-0 fw-semibold text-danger">-$200</span>
                                                        <span class="d-block text-muted fs-13">May 24, 2024</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-ms avatar-rounded bg-success-transparent fw-semibold fs-14">
                                                            H
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Health Track</span>
                                                        <span class="d-block fs-13 text-muted">Income</span>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="h6 mb-0 fw-semibold text-success">+$1000</span>
                                                        <span class="d-block text-muted fs-13">May 23, 2024</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-ms avatar-rounded bg-info-transparent fw-semibold fs-14">
                                                            S
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Solar Grid</span>
                                                        <span class="d-block fs-13 text-muted">Expense</span>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="h6 mb-0 fw-semibold text-danger">-$300</span>
                                                        <span class="d-block text-muted fs-13">May 22, 2024</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="lh-1">
                                                        <span class="avatar avatar-ms avatar-rounded bg-warning-transparent fw-semibold fs-14">
                                                            D
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <span class="d-block fw-semibold">Data Stream</span>
                                                        <span class="d-block fs-13 text-muted">Income</span>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="h6 mb-0 fw-semibold text-success">+$700</span>
                                                        <span class="d-block text-muted fs-13">May 19, 2024</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <span class="d-block fs-16 mb-3">Completed Projects</span>
                                                <h3 class="mb-3 fw-semibold">28</h3>
                                                <span class="d-block text-muted">Increased by <span class="text-green ms-1">0.45%<i class="ti ti-arrow-narrow-up"></i></span></span>
                                            </div>
                                            <div id="projects-done"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center justify-content-between mb-4">
                                                <div class="mb-3">
                                                    <h6 class="mb-3 fw-semibold">Projects In Progress</h6>
                                                    <span class="h3 mb-0 fw-semibold d-flex align-items-center">55.3% <span class="fs-12 text-secondary op-7 ms-2">+0.59<i class="ti ti-arrow-big-up-line ms-1 d-inline-flex"></i></span></span>
                                                </div>
                                            </div>
                                            <div id="projects-ongoing" class="w-100"></div>
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
                    <div class="col-xxl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Task Activity
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="task-activity"></div>
                                <div class="mt-3">
                                    <ul class="list-group task-activity-list">
                                        <li class="list-group-item male">
                                            <div class="d-flex align-items-start justify-content-between">
                                                <div>
                                                    <span class="d-block fw-semibold">On Going Tasks<span class="text-success fw-medium ms-1"><i class="ti ti-arrow-narrow-up"></i>0.78%</span></span>
                                                </div>
                                                <div class="h6 mb-0 fw-semibold">
                                                    1,823
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item female">
                                            <div class="d-flex align-items-start justify-content-between">
                                                <div>
                                                    <span class="d-block fw-semibold">Completed Tasks<span class="text-danger fw-medium ms-1"><i class="ti ti-arrow-narrow-down"></i>1.57%</span></span>
                                                </div>
                                                <div class="h6 mb-0 fw-semibold">
                                                    1,274
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item others">
                                            <div class="d-flex align-items-start justify-content-between">
                                                <div>
                                                    <span class="d-block fw-semibold">To Do Tasks<span class="text-success fw-medium ms-1"><i class="ti ti-arrow-narrow-up"></i>0.32%</span></span>
                                                </div>
                                                <div class="h6 mb-0 fw-semibold">
                                                    769
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item not-mentioned">
                                            <div class="d-flex align-items-start justify-content-between">
                                                <div>
                                                    <span class="d-block fw-semibold">Pending Tasks<span class="text-success fw-medium ms-1"><i class="ti ti-arrow-narrow-up"></i>19.45%</span></span>
                                                </div>
                                                <div class="h6 mb-0 fw-semibold">
                                                    1,458
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Employee Profile
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Member</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Hours</th>
                                                <th scope="col">Tasks</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="top-selling">
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="/storage/assets/images/faces/2.jpg" class="" alt="">
                                                        </span>
                                                        <div class="flex-1 ms-2">
                                                            <span class="d-block fw-semibold">Richard Dom</span>
                                                            <a href="javascript:void(0);" class="text-muted fs-12">richarddom1116@demo.com</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-muted">Team Leader</span>
                                                </td>
                                                <td>
                                                    <span class="">31h <span class="text-muted">/ 36h</span></span>
                                                </td>
                                                <td>
                                                    <span class="">143</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Online</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="/storage/assets/images/faces/21.jpg" class="" alt="">
                                                        </span>
                                                        <div class="flex-1 ms-2">
                                                            <span class="d-block fw-semibold">Jennifer Tab</span>
                                                            <a href="javascript:void(0);" class="text-muted fs-12">jenny258@demo.com</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-muted">Project Manager</span>
                                                </td>
                                                <td>
                                                    <span class="">11h <span class="text-muted">/ 20h</span></span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">186</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Online</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="/storage/assets/images/faces/3.jpg" class="" alt="">
                                                        </span>
                                                        <div class="flex-1 ms-2">
                                                            <span class="d-block fw-semibold">Nikki Jey</span>
                                                            <a href="javascript:void(0);" class="text-muted fs-12">nikkiJ141@demo.com</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-muted">UI Developer</span>
                                                </td>
                                                <td>
                                                    <span class="">20h <span class="text-muted">/ 22h</span></span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">652</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-light text-default border">Offline</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="/storage/assets/images/faces/21.jpg" class="" alt="">
                                                        </span>
                                                        <div class="flex-1 ms-2">
                                                            <span class="d-block fw-semibold">Arifa Zed</span>
                                                            <a href="javascript:void(0);" class="text-muted fs-12">arifaZ@demo.com</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fw-medium text-muted">Web Developer</span>
                                                </td>
                                                <td>
                                                    <span class="">83h <span class="text-muted">/83h</span></span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">752</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Online</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0 rounded">
                                                    <div class="d-flex">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="/storage/assets/images/faces/4.jpg" class="" alt="">
                                                        </span>
                                                        <div class="flex-1 ms-2">
                                                            <span class="d-block fw-semibold">Xiong Yu</span>
                                                            <a href="javascript:void(0);" class="text-muted fs-12">xingzing444@demo.com</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-bottom-0 rounded">
                                                    <span class="fw-medium text-muted">Team Member</span>
                                                </td>
                                                <td class="border-bottom-0 rounded">
                                                    <span class="">51h <span class="text-muted">/62h</span></span>
                                                </td>
                                                <td class="border-bottom-0 rounded">
                                                    <span class="fw-medium">268</span>
                                                </td>
                                                <td class="border-bottom-0 rounded">
                                                    <span class="badge bg-light text-default border">offline</span>
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
                            <div class="card-body">
                                <div class="d-flex gap-3 align-items-start mb-3">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-light p-1">
                                            <img src="/storage/assets/images/company-logos/2.png" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <h6 class="mb-0 fw-semibold">Project Nebula</h6>
                                        <span class="d-block fs-13 text-muted">Opened Yesterday</span>
                                        <div><span>28 Tasks</span><span class="ms-2 text-primary fs-12 d-inline-flex">11 Nov 2024 - Due Date</span></div>
                                    </div>
                                    <div class="d-flex align-items-start lh-1">
                                        <div class="stars-main me-3 text-warning"> <i class="ri-star-fill star"></i> </div>
                                        <div class="dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);" class="op-4" data-bs-toggle="dropdown" aria-expanded="true">
                                                <i class="bi bi-grid text-primary"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu" data-popper-placement="bottom-start">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-1"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-forward-line me-1"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-file-copy-2-line me-1"></i>Clone</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start justify-content-between mb-3">
                                    <div>
                                        <span class="d-block">Members</span>
                                        <div class="avatar-list-stacked">
                                            <span class="avatar avatar-sm">
                                                <img src="/storage/assets/images/faces/2.jpg" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="/storage/assets/images/faces/8.jpg" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="/storage/assets/images/faces/2.jpg" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="/storage/assets/images/faces/10.jpg" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="/storage/assets/images/faces/4.jpg" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="/storage/assets/images/faces/13.jpg" alt="img">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="d-block">Due date</span>
                                        <span class="d-block text-danger fw-semibold fs-13">24,Jan 2024</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-1 justify-content-between">
                                        <span class="d-block">Project Progress</span>
                                        <span class="d-block fs-12">60%</span>
                                    </div>
                                    <div class="progress progress-xs" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 60%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex gap-3 align-items-start mb-3">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-light p-1">
                                            <img src="/storage/assets/images/company-logos/7.png" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <h6 class="mb-0 fw-semibold">Web Design</h6>
                                        <span class="d-block fs-13 text-muted">Opened Today</span>
                                        <div><span>16 Tasks</span><span class="ms-2 text-primary fs-12 d-inline-flex">12 May 2024 - Due Date</span></div>
                                    </div>
                                    <div class="d-flex align-items-start lh-1">
                                        <div class="stars-main me-3 text-muted"> <i class="ri-star-fill star"></i> </div>
                                        <div class="dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);" class="op-4" data-bs-toggle="dropdown" aria-expanded="true">
                                                <i class="bi bi-grid text-primary"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu" data-popper-placement="bottom-start">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-pencil-line me-1"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-share-forward-line me-1"></i>Share</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-file-copy-2-line me-1"></i>Clone</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start justify-content-between mb-3">
                                    <div>
                                        <span class="d-block">Members</span>
                                        <div class="avatar-list-stacked">
                                            <span class="avatar avatar-sm">
                                                <img src="/storage/assets/images/faces/5.jpg" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="/storage/assets/images/faces/10.jpg" alt="img">
                                            </span>
                                            <span class="avatar avatar-sm">
                                                <img src="/storage/assets/images/faces/12.jpg" alt="img">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="d-block">Due date</span>
                                        <span class="d-block text-danger fw-semibold fs-13">28,May 2024</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-1 justify-content-between">
                                        <span class="d-block">Project Progress</span>
                                        <span class="d-block fs-12">39%</span>
                                    </div>
                                    <div class="progress progress-xs" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 39%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xxl-3">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                   Project Status
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light">View All</a>
                            </div>
                            <div class="card-body p-0 overflow-auto">
                                <table class="table mb-0 text-nowrap Project-status ">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <span class="avatar avatar-sm p-1 bg-light border avatar-rounded">
                                                        <img src="/storage/assets/images/company-logos/4.png" alt="">
                                                    </span>
                                                    <p class="mb-0">Wordpress Template</p>
                                                </div>
                                            </td>
                                            <td class="">
                                                <span class="fw-medium fs-14">25%</span>
                                            </td>
                                            <td class="">
                                                <span class="badge bg-info-transparent">Progress</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <span class="avatar avatar-sm p-1 bg-light border avatar-rounded">
                                                        <img src="/storage/assets/images/company-logos/1.png" alt="">
                                                    </span>
                                                    <p class="mb-0">Blog Page</p>
                                                </div>
                                            </td>
                                            <td class="">
                                                <span class="fw-medium fs-14">60%</span>
                                            </td>
                                            <td class="">
                                                <span class="badge bg-warning-transparent">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <span class="avatar avatar-sm p-1 bg-light border avatar-rounded">
                                                        <img src="/storage/assets/images/company-logos/2.png" alt="">
                                                    </span>
                                                    <p class="mb-0">E commerce Blog</p>
                                                </div>
                                            </td>
                                            <td class="">
                                                <span class="fw-medium fs-14">75%</span>
                                            </td>
                                            <td class="">
                                                <span class="badge bg-info-transparent">Progress</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <span class="avatar avatar-sm p-1 bg-light border avatar-rounded">
                                                        <img src="/storage/assets/images/company-logos/3.png" alt="">
                                                    </span>
                                                    <p class="mb-0">E-mail Templates</p>
                                                </div>
                                            </td>
                                            <td class="">
                                                <span class="fw-medium fs-14">100%</span>
                                            </td>
                                            <td class="">
                                                <span class="badge bg-success-transparent">Finished</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <span class="avatar avatar-sm p-1 bg-light border avatar-rounded">
                                                        <img src="/storage/assets/images/company-logos/5.png" alt="">
                                                    </span>
                                                    <p class="mb-0">Business Website</p>
                                                </div>
                                            </td>
                                            <td class="">
                                                <span class="fw-medium fs-14">100%</span>
                                            </td>
                                            <td class="">
                                                <span class="badge bg-success-transparent">Finished</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <span class="avatar avatar-sm p-1 bg-light border avatar-rounded">
                                                        <img src="/storage/assets/images/company-logos/6.png" alt="">
                                                    </span>
                                                    <p class="mb-0">Admin Templates</p>
                                                </div>
                                            </td>
                                            <td class="">
                                                <span class="fw-medium fs-14">90%</span>
                                            </td>
                                            <td class="">
                                                <span class="badge bg-info-transparent">Progress</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-bottom-0 rounded">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <span class="avatar avatar-sm p-1 bg-light border avatar-rounded">
                                                        <img src="/storage/assets/images/company-logos/7.png" alt="">
                                                    </span>
                                                    <p class="mb-0">Beauty Templates</p>
                                                </div>
                                            </td>
                                            <td class="border-bottom-0 rounded">
                                                <span class="fw-medium fs-14">50%</span>
                                            </td>
                                            <td class="border-bottom-0 rounded">
                                                <span class="badge bg-warning-transparent">Pending</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Projects Summary
                                </div>
                                <div class="d-flex flex-wrap">
                                    <div class="me-3 my-1">
                                        <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown my-1">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
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
                                                <th scope="col">Poject Title</th>
                                                <th scope="col">Assigned Team</th>
                                                <th scope="col">Tasks</th>
                                                <th scope="col">Progress</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Due Date</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <span class="fw-medium"> Home Page</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/6.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/7.jpg" alt="img">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>110 <span class="text-muted">/180</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar  bg-primary" style="width: 25%"></div>
                                                        </div>
                                                        <div class="ms-2">25%</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary-transparent">In Progress</span>
                                                </td>
                                                <td>
                                                    14-04-2023
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-sm btn-primary-light"><i class="ti ti-eye"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-sm btn-success-light"><i class="ti ti-pencil"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill btn-sm  btn-danger-light"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    <span class="fw-medium"> Landing Design </span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/6.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/7.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>95  <span class="op-8">/100</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm w-100" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar  bg-primary" style="width: 95%"></div>
                                                        </div>
                                                        <div class="ms-2">95%</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary-transparent">In Progress</span>
                                                </td>
                                                <td>
                                                    20-04-2023
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-sm btn-primary-light"><i class="ti ti-eye"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-sm btn-success-light"><i class="ti ti-pencil"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill btn-sm  btn-danger-light"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    <span class="fw-medium">  New Template Design</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/16.jpg" alt="img">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td> 0  <span class="text-muted">/100</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-animate progress-sm w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-primary" style="width: 0%"></div>
                                                        </div>
                                                        <div class="ms-2">0%</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-warning-transparent">Pending</span>
                                                </td>
                                                <td>
                                                    29-05-2023
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-sm btn-primary-light"><i class="ti ti-eye"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-sm btn-success-light"><i class="ti ti-pencil"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill btn-sm  btn-danger-light"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    <span class="fw-medium"> HR Management Design </span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/14.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/16.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-xs bg-light text-default  border-2 avatar-rounded" href="javascript:void(0);">
                                                            +2
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>26 <span class="text-muted">/71</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-animate progress-sm w-100" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-primary" style="width: 35%"></div>
                                                        </div>
                                                        <div class="ms-2">35%</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary-transparent">In Progress</span>
                                                </td>
                                                <td>
                                                    18-04-2023
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-sm btn-primary-light"><i class="ti ti-eye"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-sm btn-success-light"><i class="ti ti-pencil"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill btn-sm  btn-danger-light"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    <span class="fw-medium">   Designing New Template</span>
                                                </td>
                                                <td>
                                                    <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/14.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/4.jpg" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-xs avatar-rounded">
                                                            <img src="/storage/assets/images/faces/16.jpg" alt="img">
                                                        </span>
                                                        <a class="avatar avatar-xs bg-light text-default  border-2 avatar-rounded" href="javascript:void(0);">
                                                            +2
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>120 <span class="text-muted">/120</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-animate progress-sm w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-primary" style="width: 100%"></div>
                                                        </div>
                                                        <div class="ms-2">100%</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">Completed</span>
                                                </td>
                                                <td>
                                                    11-04-2023
                                                </td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn  btn-icon rounded-pill btn-sm btn-primary-light"><i class="ti ti-eye"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn  btn-icon rounded-pill btn-sm btn-success-light"><i class="ti ti-pencil"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn  btn-icon rounded-pill btn-sm  btn-danger-light"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer border-top-0">
                                <div class="d-flex align-items-center">
                                    <div>
                                        Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
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

    <!-- Projects Dashboard -->
    <script src="/storage/assets/js/projects-dashboard.js"></script>

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

   @include('zynix.partials.custom_switcherjs')

</body>

</html>