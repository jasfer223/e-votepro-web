@extends('admin.layouts.admin-app')
@section('page-title', 'Officers')
@section('content')
    <div class="pagetitle">
        <h1>Officers</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.admin-dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Officers</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <!-- USG -->
            <div class="col-12">
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
                        <h5 class="card-title">USG <span>| A.Y 2022-2023</span></h5>

                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Position</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Party Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>President</th>
                                    <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa
                                            voluptas
                                            nulla</a></td>
                                    <td>USWAGG</td>


                                </tr>
                                <tr>
                                    <th>Vice-President</th>
                                    <td><a href="#" class="text-primary fw-bold">Exercitationem
                                            similique
                                            doloremque</a></td>
                                    <td>KOOL</td>


                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                            exercitationem</a></td>
                                    <td>SHEESH</td>

                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td><a href="#" class="text-primary fw-bold">Officiis quaerat
                                            sint rerum
                                            error</a></td>
                                    <td>INDEPENDENT</td>


                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td><a href="#" class="text-primary fw-bold">Sit unde debitis
                                            delectus
                                            repellendus</a></td>
                                    <td>WOW</td>


                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div><!-- End Top USG -->
        </div>
        <div class="row">
            <!-- USG -->
            <div class="col-12">
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
                        <h5 class="card-title">CITE <span>| A.Y 2022-2023</span></h5>

                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Position</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Party Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Governor</th>
                                    <td><a href="#" class="text-primary fw-bold">Joven Charles Panganiban</a></td>
                                    <td>PSRP</td>


                                </tr>
                                <tr>
                                    <th>Vice-Governor</th>
                                    <td><a href="#" class="text-primary fw-bold">Exercitationem
                                            similique
                                            doloremque</a></td>
                                    <td>KOOL</td>


                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                            exercitationem</a></td>
                                    <td>SHEESH</td>

                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td><a href="#" class="text-primary fw-bold">Officiis quaerat
                                            sint rerum
                                            error</a></td>
                                    <td>INDEPENDENT</td>


                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td><a href="#" class="text-primary fw-bold">Sit unde debitis
                                            delectus
                                            repellendus</a></td>
                                    <td>WOW</td>


                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div><!-- End Top USG -->
        </div>
    </section>
@endsection
