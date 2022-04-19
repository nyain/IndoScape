@extends('layouts.admin')

@section('content')
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Customer</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                            <li class="breadcrumb-item"><a href="table_customer.php" class="breadcrumb-link">Data
                                                    Customer</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li>Form Host
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header">Data Host</h5>
                            <div class="card-body">
                                <form action="/api/edituser" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ID User</label>
                                        <div class="col-md-9">
                                            <input type="text" name="id" id="id" class="form-control" value="{{$user->id}}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-9">
                                            <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" 
                                           readonly >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5">
                                        <div class="col-md-6">
                                            <!-- back to home -->
                                            <a name="backBtn" id="backBtn" class="btn btn-dark btn-block btn-lg" 
                                            href="javascript:javascript:history.go(-1)" role="button">Kembali</a>
                                        </div>

                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success btn-block btn-lg">Edit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection