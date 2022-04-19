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
                                            <li class="breadcrumb-item"><a href="dashboard" class="breadcrumb-link">Tables</a></li>
                                            <li class="breadcrumb-item"><a href="wisatalist" class="breadcrumb-link">Data
                                                    Wisata</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li>Form Edit Wisata
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header">Editwisata</h5>
                            <div class="card-body">
                                <form action="/api/editwisata" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')

                                  <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ID Wisata</label>
                                        <div class="col-md-9">
                                            <input type="text" name="id" id="id" class="form-control" value="{{$wisata->id}}" readonly>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Image</label>
                                        <div class="col-md-9">
                                            <input type="file" accept="image/png, image/jpeg" class="form-control" id="image" name="image" required>
                                        </div>
                                    </div>

                                  <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama Kota</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="namecity" name="namecity" value="{{$wisata->namecity}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Tempat Wisata</label>
                                        <div class="col-md-9">
                                            <input type="text" name="nameplace" id="nameplace" class="form-control" value="{{$wisata->nameplace}}"
                                           required>
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
