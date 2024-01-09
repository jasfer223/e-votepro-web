@extends('admin.layouts.admin-app')
@section('page-title', 'Students')
@section('content')
    <div class="pagetitle">
        <h1>Students</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.admin-dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Students</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="pt-4 mb-4 col-md-8">
                            <div class="row">
                                <label for="formFile" class="col-form-label">Upload student data (.csv or .xlsx)</label>
                            </div>
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-6">
                                        <input class="form-control form-control-sm" type="file" id="formFile">
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">CITE</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">CAS</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">CTE</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="cbm-tab" data-bs-toggle="tab" data-bs-target="#bordered-cbm"
                                    type="button" role="tab" aria-controls="cbm" aria-selected="false">CBM</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="cet-tab" data-bs-toggle="tab" data-bs-target="#bordered-cet"
                                    type="button" role="tab" aria-controls="cet" aria-selected="false">CET</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="borderedTabContent">
                            <div class="tab-pane fade show active table-responsive" id="bordered-home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <h5 class="card-title">CITE Student Records</h5>
                                <!-- Table with stripped rows -->
                                <table class="table table-hover table-sm datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Course</th>
                                            <th>Year</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>johndoe@mail.com</td>
                                            <td>admin123</td>
                                            <td>BSCS</td>
                                            <td>4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jane Doe</td>
                                            <td>janedoe@mail.com</td>
                                            <td>admin123</td>
                                            <td>BSMID</td>
                                            <td>4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->


                            </div>
                            <div class="tab-pane fade table-responsive" id="bordered-profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <h5 class="card-title">CAS Student Records</h5>
                                <!-- Table with stripped rows -->
                                <table class="table table-hover table-sm datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Course</th>
                                            <th>Year</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>johndoe@mail.com</td>
                                            <td>admin123</td>
                                            <td>BSCS</td>
                                            <td>4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jane Doe</td>
                                            <td>janedoe@mail.com</td>
                                            <td>admin123</td>
                                            <td>BSMID</td>
                                            <td>4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->

                            </div>
                            <div class="tab-pane fade table-responsive" id="bordered-contact" role="tabpanel"
                                aria-labelledby="contact-tab">
                                <h5 class="card-title">CTE Student Records</h5>
                                <!-- Table with stripped rows -->
                                <table class="table table-hover table-sm datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Course</th>
                                            <th>Year</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>johndoe@mail.com</td>
                                            <td>admin123</td>
                                            <td>BSCS</td>
                                            <td>4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jane Doe</td>
                                            <td>janedoe@mail.com</td>
                                            <td>admin123</td>
                                            <td>BSMID</td>
                                            <td>4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>
                            <div class="tab-pane fade table-responsive" id="bordered-cbm" role="tabpanel"
                                aria-labelledby="cbm-tab">
                                <h5 class="card-title">CBM Student Records</h5>
                                <!-- Table with stripped rows -->
                                <table class="table table-hover table-sm datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Course</th>
                                            <th>Year</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>johndoe@mail.com</td>
                                            <td>admin123</td>
                                            <td>BSCS</td>
                                            <td>4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jane Doe</td>
                                            <td>janedoe@mail.com</td>
                                            <td>admin123</td>
                                            <td>BSMID</td>
                                            <td>4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>

                            <div class="tab-pane fade table-responsive" id="bordered-cet" role="tabpanel"
                                aria-labelledby="cet-tab">
                                <h5 class="card-title">CET Student Records</h5>
                                <!-- Table with stripped rows -->
                                <table class="table table-hover table-sm datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Course</th>
                                            <th>Year</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>johndoe@mail.com</td>
                                            <td>admin123</td>
                                            <td>BSCS</td>
                                            <td>4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jane Doe</td>
                                            <td>janedoe@mail.com</td>
                                            <td>admin123</td>
                                            <td>BSMID</td>
                                            <td>4</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>
                        </div>
                        <!-- End Bordered Tabs -->
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
