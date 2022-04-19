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
                                <h2 class="pageheader-title">Form Penginapan</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="dashboard" class="breadcrumb-link">Tables</a></li>
                                            <li class="breadcrumb-item"><a href="penginapanlist" class="breadcrumb-link">Data
                                                    Penginapan Host</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li>Form Tambah Penginapan
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header">Data Penginapan</h5>
                            <div class="card-body">
                                <form  action="/api/addpenginapan" method="POST" enctype="multipart/form-data">
                                  @csrf
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama Kota</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="namecity" name="namecity" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama Tempat Wisata</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="tempatwisata" name="tempatwisata" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Gambar</label>
                                        <div class="col-md-9">
                                            <input type="file" accept="image/png, image/jpeg" class="form-control" id="image" name="image" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama Tempat Penginapan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="penginapan" name="penginapan" required> 
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Harga</label>
                                        <div class="col-md-9">
                                            <input type="number" name="harga" id="harga" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Deskripsi</label>
                                        <div class="col-md-9">
                                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <div class="col-md-6">
                                            <!-- back to home -->
                                            <a name="backBtn" id="backBtn" class="btn btn-dark btn-block btn-lg" href="penginapanlist"
                                                role="button">Kembali</a>
                                        </div>

                                        <div class="col-md-6">
                                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Tambah" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
