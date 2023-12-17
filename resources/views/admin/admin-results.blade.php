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
                        <h5 class="card-title">USG ELECTION <span>| A.Y 2022-2023</span></h5>
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="card-title">President</h5>
                                <table class="table table-sm">
                                    <thead>
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
                                            <td>GG</td>
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
                            <div class="col-md-2">
                                <div id="president" style="min-height: 230px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#president")).setOption({
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
                                                radius: ['50%', '80%'],
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
                                                        name: 'John Doe'
                                                    },
                                                    {
                                                        value: 484,
                                                        name: 'Sample'
                                                    },
                                                    {
                                                        value: 300,
                                                        name: 'Sample 2'
                                                    }
                                                ]
                                            }]
                                        });
                                    });
                                </script>
                            </div>
                            <div class="col-md-4">
                                {{-- <h5 class="card-title">USG ELECTION <span>| A.Y 2022-2023</span></h5> --}}
                                <h5 class="card-title">Vice-President (External)</h5>
                                <table class="table table-sm">
                                    <thead>
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
                                            <td>GG</td>
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
                            <div class="col-md-2">
                                <div id="usgVicePresidentChart" style="min-height: 230px;" class="echart"></div>

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
                                                radius: ['50%', '80%'],
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
                                                        name: 'John Doe'
                                                    },
                                                    {
                                                        value: 484,
                                                        name: 'Sample'
                                                    },
                                                    {
                                                        value: 300,
                                                        name: 'Sample 2'
                                                    }
                                                ]
                                            }]
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="card-title">Vice-President (Internal)</h5>
                                <table class="table table-sm">
                                    <thead>
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
                                            <td>GG</td>
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
                            <div class="col-md-2">
                                <div id="vpInternal" style="min-height: 230px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#vpInternal")).setOption({
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
                                                radius: ['50%', '80%'],
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
                                                        name: 'John Doe'
                                                    },
                                                    {
                                                        value: 484,
                                                        name: 'Sample'
                                                    },
                                                    {
                                                        value: 300,
                                                        name: 'Sample 2'
                                                    }
                                                ]
                                            }]
                                        });
                                    });
                                </script>
                            </div>
                            <div class="col-md-4">
                                {{-- <h5 class="card-title">USG ELECTION <span>| A.Y 2022-2023</span></h5> --}}
                                <h5 class="card-title">Secretary</h5>
                                <table class="table table-sm">
                                    <thead>
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
                                            <td>GG</td>
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
                            <div class="col-md-2">
                                <div id="secretary" style="min-height: 230px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#secretary")).setOption({
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
                                                radius: ['50%', '80%'],
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
                                                        name: 'John Doe'
                                                    },
                                                    {
                                                        value: 484,
                                                        name: 'Sample'
                                                    },
                                                    {
                                                        value: 300,
                                                        name: 'Sample 2'
                                                    }
                                                ]
                                            }]
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                {{-- <h5 class="card-title">USG ELECTION <span>| A.Y 2022-2023</span></h5> --}}
                                <h5 class="card-title">Senator</h5>
                                <table class="table table-sm">
                                    <thead>
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
                                            <td>GG</td>
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
                            <div class="col-md-2">
                                <div id="senator" style="min-height: 230px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#senator")).setOption({
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
                                                radius: ['50%', '80%'],
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
                                                        name: 'John Doe'
                                                    },
                                                    {
                                                        value: 484,
                                                        name: 'Sample'
                                                    },
                                                    {
                                                        value: 300,
                                                        name: 'Sample 2'
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
