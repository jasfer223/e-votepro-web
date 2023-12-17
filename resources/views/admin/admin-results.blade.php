@extends('admin.layouts.admin-app')
@section('page-title', 'Results')
@section('content')
    <div class="pagetitle">
        <h1>Results</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.admin-dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Results</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card top-usg overflow-auto">

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
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title">USG ELECTION <span>| A.Y 2022-2023</span></h5>
                                <table class="table table-sm">
                                    <thead>
                                        <h5 class="card-title">President</h5>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Party Name</th>
                                            <th scope="col" colspan="2">Votes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                John Doe
                                                <button class="btn btn-primary btn-sm"></button>
                                            </td>
                                            <td>USWAGG</td>
                                            <td>100%</td>
                                            <td><span class="badge bg-secondary">100</span></td>

                                        </tr>
                                        <tr>
                                            <td>
                                                John Doe
                                                <button class="btn btn-success btn-sm"></button>
                                            </td>
                                            <td>KOOL</td>
                                            <td>100%</td>
                                            <td><span class="badge bg-secondary">100</span></td>


                                        </tr>
                                        <tr>
                                            <td>
                                                John Doe
                                                <button class="btn btn-warning btn-sm"></button>
                                            </td>
                                            <td>SHEESH</td>
                                            <td>100%</td>
                                            <td><span class="badge bg-secondary">100</span></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#trafficChart")).setOption({
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            // legend: {
                                            //     top: '5%',
                                            //     left: 'center'
                                            // },
                                            series: [{
                                                name: 'Access From',
                                                type: 'pie',
                                                radius: ['20%', '50%'],
                                                avoidLabelOverlap: false,
                                                label: {
                                                    show: false,
                                                    position: 'center'
                                                },
                                                emphasis: {
                                                    label: {
                                                        show: true,
                                                        fontSize: '18',
                                                        fontWeight: 'bold'
                                                    }
                                                },
                                                labelLine: {
                                                    show: false
                                                },
                                                data: [{
                                                        value: 1048,
                                                        name: 'Search Engine'
                                                    },
                                                    {
                                                        value: 484,
                                                        name: 'Union Ads'
                                                    },
                                                    {
                                                        value: 300,
                                                        name: 'Video Ads'
                                                    }
                                                ]
                                            }]
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-sm">
                                    <thead>
                                        <h5 class="card-title">Vice-President</h5>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Party Name</th>
                                            <th scope="col" colspan="2">Votes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                John Doe
                                                <button class="btn btn-primary btn-sm"></button>
                                            </td>
                                            <td>USWAGG</td>
                                            <td>100%</td>
                                            <td><span class="badge bg-secondary">100</span></td>

                                        </tr>
                                        <tr>
                                            <td>
                                                John Doe
                                                <button class="btn btn-success btn-sm"></button>
                                            </td>
                                            <td>KOOL</td>
                                            <td>100%</td>
                                            <td><span class="badge bg-secondary">100</span></td>


                                        </tr>
                                        <tr>
                                            <td>
                                                John Doe
                                                <button class="btn btn-warning btn-sm"></button>
                                            </td>
                                            <td>SHEESH</td>
                                            <td>100%</td>
                                            <td><span class="badge bg-secondary">100</span></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div id="usgVicePresidentChart" style="min-height: 400px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#usgVicePresidentChart")).setOption({
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            // legend: {
                                            //     top: '5%',
                                            //     left: 'center'
                                            // },
                                            series: [{
                                                name: 'Access From',
                                                type: 'pie',
                                                radius: ['20%', '50%'],
                                                avoidLabelOverlap: false,
                                                label: {
                                                    show: false,
                                                    position: 'center'
                                                },
                                                emphasis: {
                                                    label: {
                                                        show: true,
                                                        fontSize: '18',
                                                        fontWeight: 'bold'
                                                    }
                                                },
                                                labelLine: {
                                                    show: false
                                                },
                                                data: [{
                                                        value: 1048,
                                                        name: 'Search Engine'
                                                    },
                                                    {
                                                        value: 484,
                                                        name: 'Union Ads'
                                                    },
                                                    {
                                                        value: 300,
                                                        name: 'Video Ads'
                                                    }
                                                ]
                                            }]
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Top USG -->
        </div>
    </section>
@endsection
