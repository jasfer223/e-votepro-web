@extends('admin.layouts.admin-app')
@section('page-title', 'Dashboard')
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.admin-dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            {{-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> --}}

                            <div class="card-body">
                                <h5 class="card-title">NEMSU <span>| This Semester</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="/NiceAdmin/assets/img/nemsu-logo.png" alt="" height="60">
                                        {{-- <i class="bi bi-cart"></i> --}}
                                    </div>
                                    <div class="ps-3">
                                        <h6>8234</h6>
                                        <span class="text-success small pt-1 fw-bold">1%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            {{-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> --}}

                            <div class="card-body">
                                <h5 class="card-title">CITE <span>| This Semester</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="/NiceAdmin/assets/img/cite-logo.png" alt="" height="80">
                                        {{-- <i class="bi bi-currency-dollar"></i> --}}
                                    </div>
                                    <div class="ps-3">
                                        <h6>608</h6>
                                        <span class="text-success small pt-1 fw-bold">2%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-md-6">

                        <div class="card info-card sales-card">

                            {{-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> --}}

                            <div class="card-body">
                                <h5 class="card-title">CAS <span>| This Semester</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="/NiceAdmin/assets/img/cas-logo.png" alt="" height="65">
                                        {{-- <i class="bi bi-people"></i> --}}
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="text-danger small pt-1 fw-bold">4%</span> <span
                                            class="text-muted small pt-2 ps-1">decrease</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- CBM Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            {{-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> --}}

                            <div class="card-body">
                                <h5 class="card-title">CBM <span>| This Semester</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="/NiceAdmin/assets/img/cbm-logo.png" alt="" height="60">
                                        {{-- <i class="bi bi-cart"></i> --}}
                                    </div>
                                    <div class="ps-3">
                                        <h6>6234</h6>
                                        <span class="text-success small pt-1 fw-bold">1%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- CTE Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            {{-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> --}}

                            <div class="card-body">
                                <h5 class="card-title">CTE <span>| This Semester</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="/NiceAdmin/assets/img/cte-logo.png" alt="" height="60">
                                        {{-- <i class="bi bi-cart"></i> --}}
                                    </div>
                                    <div class="ps-3">
                                        <h6>6234</h6>
                                        <span class="text-success small pt-1 fw-bold">1%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- CET Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            {{-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> --}}

                            <div class="card-body">
                                <h5 class="card-title">CET <span>| This Semester</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="/NiceAdmin/assets/img/cet-logo.png" alt="" height="60">
                                        {{-- <i class="bi bi-cart"></i> --}}
                                    </div>
                                    <div class="ps-3">
                                        <h6>6234</h6>
                                        <span class="text-success small pt-1 fw-bold">1%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End CET Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            {{-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> --}}

                            <div class="card-body">
                                <h5 class="card-title">Election Reports <span>| This Year</span></h5>

                                <!-- Line Chart -->
                                <div id="reportsChart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                            series: [{
                                                name: 'USG',
                                                data: [31, 40, 28, 51, 42, 82, 56],
                                            }, {
                                                name: 'CAS',
                                                data: [50, 32, 45, 32, 34, 52, 41]
                                            }, {
                                                name: 'CITE',
                                                data: [15, 11, 32, 18, 9, 24, 11]
                                            }, {
                                                name: 'CBM',
                                                data: [11, 20, 45, 32, 34, 67, 23]
                                            }, {
                                                name: 'CTE',
                                                data: [16, 60, 45, 32, 34, 28, 36]
                                            }, {
                                                name: 'CET',
                                                data: [12, 40, 45, 32, 34, 23, 34]
                                            }, ],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 4
                                            },
                                            colors: ['#053460', '#89c46b', '#4d0686', '#e85611', '#0792da', '#c99f68'],
                                            fill: {
                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 2
                                            },
                                            xaxis: {
                                                type: 'string',
                                                categories: ["1 | 2023-2024", "2 | 2023-2024", "1 | 2024-2025", "2 | 2024-2025",
                                                    "1 | 2025-2026", "2 | 2025-2026", "1 | 2026-2027",
                                                ]
                                            },
                                            tooltip: {
                                                x: {
                                                    format: 'dd/MM/yy HH:mm'
                                                },
                                            }
                                        }).render();
                                    });
                                </script>
                                <!-- End Line Chart -->

                            </div>

                        </div>
                    </div><!-- End Reports -->
                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            {{-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> --}}

                            <div class="card-body pb-0">
                                <h5 class="card-title">Top 10 Candidates <span>| This Year's Election</span></h5>

                                <table class="table table-sm table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <i class="bi bi-trophy"></i>
                                            </th>
                                            <th scope="col">Election</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Party</th>
                                            <th scope="col">Votes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>CITE</td>
                                            <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa
                                                    voluptas
                                                    nulla</a></td>
                                            <td>INSAN</td>
                                            <td class="fw-bold">
                                                <h6><span class="badge bg-secondary">100</span></h6>
                                            </td>


                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>USG</td>
                                            <td><a href="#" class="text-primary fw-bold">Exercitationem
                                                    similique
                                                    doloremque</a></td>
                                            <td>KOOL</td>
                                            <td class="fw-bold">
                                                <h6><span class="badge bg-secondary">100</span></h6>
                                            </td>


                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>USG</td>
                                            <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                                    exercitationem</a></td>
                                            <td>SHEESH</td>
                                            <td class="fw-bold">
                                                <h6><span class="badge bg-secondary">100</span></h6>
                                            </td>


                                        </tr>
                                        <tr>
                                            <th>4</th>
                                            <td>USG</td>
                                            <td><a href="#" class="text-primary fw-bold">Officiis quaerat
                                                    sint rerum
                                                    error</a></td>
                                            <td>INDEPENDENT</td>
                                            <td class="fw-bold">
                                                <h6><span class="badge bg-secondary">100</span></h6>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th>5</th>
                                            <td>USG</td>
                                            <td><a href="#" class="text-primary fw-bold">Sit unde debitis
                                                    delectus
                                                    repellendus</a></td>
                                            <td>WOW</td>
                                            <td class="fw-bold">
                                                <h6><span class="badge bg-secondary">100</span></h6>
                                            </td>


                                        </tr>
                                        <tr>
                                            <th>6</th>
                                            <td>CITE</td>
                                            <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa
                                                    voluptas
                                                    nulla</a></td>
                                            <td>INSAN</td>
                                            <td class="fw-bold">
                                                <h6><span class="badge bg-secondary">100</span></h6>
                                            </td>


                                        </tr>
                                        <tr>
                                            <th>7</th>
                                            <td>USG</td>
                                            <td><a href="#" class="text-primary fw-bold">Exercitationem
                                                    similique
                                                    doloremque</a></td>
                                            <td>KOOL</td>
                                            <td class="fw-bold">
                                                <h6><span class="badge bg-secondary">100</span></h6>
                                            </td>


                                        </tr>
                                        <tr>
                                            <th>8</th>
                                            <td>USG</td>
                                            <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                                    exercitationem</a></td>
                                            <td>SHEESH</td>
                                            <td class="fw-bold">
                                                <h6><span class="badge bg-secondary">100</span></h6>
                                            </td>


                                        </tr>
                                        <tr>
                                            <th>9</th>
                                            <td>USG</td>
                                            <td><a href="#" class="text-primary fw-bold">Officiis quaerat
                                                    sint rerum
                                                    error</a></td>
                                            <td>INDEPENDENT</td>
                                            <td class="fw-bold">
                                                <h6><span class="badge bg-secondary">100</span></h6>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th>10</th>
                                            <td>USG</td>
                                            <td><a href="#" class="text-primary fw-bold">Sit unde debitis
                                                    delectus
                                                    repellendus</a></td>
                                            <td>WOW</td>
                                            <td class="fw-bold">
                                                <h6><span class="badge bg-secondary">100</span></h6>
                                            </td>


                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns --><!-- End Right side columns -->
        </div>
    </section>
@endsection
