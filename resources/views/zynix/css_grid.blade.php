<!-- include mainhead.html"-->

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
                <div
                    class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                    <div>
                        <h1 class="page-title fw-medium fs-18 mb-2">Css Grid</h1>
                        <div class="">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Css Grid</li>
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
                    <div class="col-xxl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            starts
                                        </div>
                                    </div>
                                    <div class="card-body bd-example-cssgrid text-center">
                                        <div class="grid">
                                            <div class="g-col-3 g-start-2">.g-col-3 .g-start-2</div>
                                            <div class="g-col-4 g-start-6">.g-col-4 .g-start-6</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Responsive
                                        </div>
                                    </div>
                                    <div class="card-body bd-example-cssgrid text-center">
                                        <div class="grid mb-3">
                                            <div class="g-col-md-4">.g-col-md-4</div>
                                            <div class="g-col-md-4">.g-col-md-4</div>
                                            <div class="g-col-md-4">.g-col-md-4</div>
                                        </div>
                                        <p>Compare that to this two column layout at all viewports.</p>
                                        <div class="grid">
                                            <div class="g-col-6">.g-col-6</div>
                                            <div class="g-col-6">.g-col-6</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> Auto columns </div>
                                    </div>
                                    <div class="card-body bd-example-cssgrid">
                                        <p>When there are no classes on the grid items (the immediate children of a
                                            <span class="text-danger">.grid</span>), each grid item will automatically
                                            be sized to one column. </p>
                                        <div class="grid mb-3 text-center grid-autocol-responsive">
                                            <div class="g-col-6">.g-col-6</div>
                                            <div class="g-col-6">.g-col-6</div>
                                            <div class="g-col-6">.g-col-6</div>
                                            <div class="g-col-6">.g-col-6</div>
                                        </div>
                                        <p>This behavior can be mixed with grid column classes.</p>
                                        <div class="grid text-center grid-col-mixed-responsive">
                                            <div class="g-col-6">.g-col-6</div>
                                            <div>1</div>
                                            <div>1</div>
                                            <div>1</div>
                                            <div>1</div>
                                            <div>1</div>
                                            <div>1</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Columns and gaps
                                        </div>
                                    </div>
                                    <div class="card-body bd-example-cssgrid text-center">
                                        <div class="grid mb-3" style="--bs-columns: 4; --bs-gap: 5rem;">
                                            <div class="g-col-2">.g-col-2</div>
                                            <div class="g-col-2">.g-col-2</div>
                                        </div>
                                        <div class="grid" style="--bs-columns: 10; --bs-gap: 1rem;">
                                            <div class="g-col-6">.g-col-6</div>
                                            <div class="g-col-4">.g-col-4</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Gaps
                                        </div>
                                    </div>
                                    <div class="card-body bd-example-cssgrid text-center">
                                        <P>Change the vertical gaps only by modifying the <span
                                                class="text-danger">row-gap</span>. Note that we use gap on
                                            <span class="text-danger">.grid</span>s, but row-gap and <Span
                                                class="text-danger">column-gap</Span>can be modified as needed.
                                        </P>
                                        <div class="grid mb-3" style="row-gap: 0;">
                                            <div class="g-col-6">.g-col-6</div>
                                            <div class="g-col-6">.g-col-6</div>

                                            <div class="g-col-6">.g-col-6</div>
                                            <div class="g-col-6">.g-col-6</div>
                                        </div>
                                        <p>Because of that, you can have different vertical and horizontal gaps, which
                                            can
                                            take a single value (all sides) or a pair of values (vertical and
                                            horizontal).
                                            This can be applied with an inline style for <span
                                                class="text-danger">gap</span>, or with our <span
                                                class="text-danger">--bs-gap</span> CSS
                                            variable.</p>
                                        <div class="grid" style="--bs-gap: .25rem 1rem;">
                                            <div class="g-col-6">.g-col-6</div>
                                            <div class="g-col-6">.g-col-6</div>

                                            <div class="g-col-6">.g-col-6</div>
                                            <div class="g-col-6">.g-col-6</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Three columns
                                        </div>
                                    </div>
                                    <div class="card-body bd-example-cssgrid text-center">
                                        <div class="grid">
                                            <div class="g-col-4">.g-col-4</div>
                                            <div class="g-col-4">.g-col-4</div>
                                            <div class="g-col-4">.g-col-4</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Wrapping
                                        </div>
                                    </div>
                                    <div class="card-body bd-example-cssgrid text-center">
                                        <div class="grid">
                                            <div class="g-col-6">.g-col-6</div>
                                            <div class="g-col-6">.g-col-6</div>

                                            <div class="g-col-6">.g-col-6</div>
                                            <div class="g-col-6">.g-col-6</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Nesting
                                        </div>
                                    </div>
                                    <div class="card-body bd-example-cssgrid text-center nesting-grid-reponsive">
                                        <div class="grid" style="--bs-columns: 3;">
                                            <div>
                                                First auto-column
                                                <div class="grid">
                                                    <div>Auto-column</div>
                                                    <div>Auto-column</div>
                                                </div>
                                            </div>
                                            <div>
                                                Second auto-column
                                                <div class="grid" style="--bs-columns: 12;">
                                                    <div class="g-col-6">6 of 12</div>
                                                    <div class="g-col-4">4 of 12</div>
                                                    <div class="g-col-2">2 of 12</div>
                                                </div>
                                            </div>
                                            <div>Third auto-column</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            No grid classes
                                        </div>
                                    </div>
                                    <div class="card-body bd-example-cssgrid text-center">
                                        <div class="grid" style="--bs-columns: 3;">
                                            <div>Auto-column</div>
                                            <div>Auto-column</div>
                                            <div>Auto-column</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Adding rows
                                        </div>
                                    </div>
                                    <div class="card-body bd-example-cssgrid text-center">
                                        <div class="grid" style="--bs-rows: 3; --bs-columns: 3;">
                                            <div>Auto-column</div>
                                            <div class="g-start-2" style="grid-row: 2">Auto-column</div>
                                            <div class="g-start-3" style="grid-row: 3">Auto-column</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Customizing
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Variable</th>
                                                        <th>Fallback value</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><code>--bs-rows</code></td>
                                                        <td><code>1</code></td>
                                                        <td>The number of rows in your grid template</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>--bs-columns</code></td>
                                                        <td><code>12</code></td>
                                                        <td>The number of columns in your grid template</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>--bs-gap</code></td>
                                                        <td><code>1.5rem</code></td>
                                                        <td>The size of the gap between columns (vertical and
                                                            horizontal)
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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

    <!-- Custom JS -->
    <script src="/storage/assets/js/custom.js"></script>

</body>

</html>