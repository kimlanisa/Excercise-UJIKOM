<x-app-layout title="Dashboard">
    <x-slot name="vendor_css">
        <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
        <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
        <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />
        <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
        <link rel="stylesheet"
            href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
        <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    </x-slot>
    <x-slot name="page_css"></x-slot>

    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- View sales -->
                <div class="col-xl-4 mb-4 col-lg-5 col-12">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-7">
                                <div class="card-body text-nowrap">
                                    {{-- get first word --}}
                                    @php
                                        $name = explode(' ', Auth::user()->name);
                                    @endphp
                                    <h5 class="card-title mb-0">Welcome {{ $name[0] }}! 🎉</h5>
                                    <p class="card-text font-small-2">Semoga harimu menyenangkan.</p> <br>
                                    {{ date('l, d F Y') }}
                                </div>
                            </div>
                            <div class="col-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="../../assets/img/illustrations/card-advance-sale.png" height="140"
                                        alt="view sales" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- View sales -->

                <!-- Statistics -->
                <div class="col-xl-8 mb-4 col-lg-7 col-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="card-title mb-0">Statistics</h5>
                                <small class="text-muted">Updated 1 month ago</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge rounded-pill bg-label-primary me-3 p-2">
                                            <i class="ti ti-users ti-sm"></i>
                                        </div>
                                        <div class="card-info">
                                            <h5 class="mb-0">200</h5>
                                            <small>Customers</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge rounded-pill bg-label-info me-3 p-2">
                                            <i class="ti ti-package ti-sm"></i>
                                        </div>
                                        <div class="card-info">
                                            <h5 class="mb-0">5</h5>
                                            <small>Masuk</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge rounded-pill bg-label-danger me-3 p-2">
                                            <i class="ti ti-browser-check ti-sm"></i>
                                        </div>
                                        <div class="card-info">
                                            <h5 class="mb-0">5</h5>
                                            <small>Selesai</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge rounded-pill bg-label-success me-3 p-2">
                                            <i class="ti ti-packge-export ti-sm"></i>
                                        </div>
                                        <div class="card-info">
                                            <h5 class="mb-0">7</h5>
                                            <small>Diambil</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Statistics -->

                <div class="col-xl-4 col-12">
                    <div class="row">
                        <!-- Expenses -->
                        <div class="col-xl-6 mb-4 col-md-3 col-6">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h5 class="card-title mb-0">Hari Ini</h5>
                                    <h6 class="font-weight-bolder mb-1">0 <span
                                            style="font-style: italic; font-size:9px">Kg</span> </h6>
                                </div>
                                <div class="card-body">
                                    <div class="mt-md-2 text-right mt-lg-3 mt-3">
                                        <small class="text-muted mt-3">kilogram</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Expenses -->

                        <!-- Profit last month -->
                        <div class="col-xl-6 mb-4 col-md-3 col-6">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h5 class="card-title mb-0">Kemarin</h5>
                                    <h6 class="font-weight-bolder mb-1">30 <span
                                            style="font-style: italic; font-size:9px">Kg</span> </h6>
                                </div>
                                <div class="card-body">
                                    <div class="mt-md-2 text-right mt-lg-3 mt-3">
                                        <small class="text-muted mt-3">kilogram</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Profit last month -->

                        <!-- Generated Leads -->
                        <div class="col-xl-12 mb-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-column">
                                            <div class="card-title mb-auto">
                                                <h5 class="mb-1 text-nowrap">Pendapatan Bulanan</h5>
                                                <small>Bulan {{ date('M') }}</small>
                                            </div>
                                            <div class="chart-statistics">
                                                <h3 class="card-title mb-1">Rp. 600.000</h3>
                                                Pendapatan Naik
                                                <small class="text-success text-nowrap">15.8%</small>
                                                Dari Bulan Kemarin
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Generated Leads -->
                    </div>
                </div>

                <!-- Revenue Report -->
                <div class="col-12 col-xl-8 mb-4 col-lg-7">
                    <div class="card">
                        <div class="card-header pb-3">
                            <h5 class="m-0 me-2 card-title">Laporan Bulanan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row row-bordered g-0">
                                <div id="totalRevenueChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Revenue Report -->

            </div>
        </div>
    </main>

    <x-slot name="vendor_js">
        <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
        <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    </x-slot>
    <x-slot name="page_js">
        <script src="../../assets/js/dashboards.js"></script>
    </x-slot>
</x-app-layout>
