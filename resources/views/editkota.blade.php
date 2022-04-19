@extends('layouts.admin')

@section('content')
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Kota       </h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="dashboard" class="breadcrumb-link">Tables</a></li>
                                            <li class="breadcrumb-item"><a href="kota" class="breadcrumb-link">Data
                                                    Kota</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li>Form Kota
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header">Data Kota</h5>
                            <div class="card-body">
                                <form action="/api/editcity" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">ID City</label>
                                        <div class="col-md-9">
                                            <input type="text" name="id" id="id" class="form-control" value="{{$city->id}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama Kota</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="namecity" name="namecity" value="{{$city->namecity}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama Provinsi</label>
                                        <div class="col-md-9">
                                            <input type="text" name="nameprovince" id="nameprovince" class="form-control" value="{{$city->nameprovince}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Image</label>
                                        <div class="col-md-9">
                                        <img src="{{ asset('images/'. $city->image) }}"
                                            alt="" style="width: 8em;">
                                        <input type="file" accept="image/png, image/jpeg"  id="image" name="image" value="{{$city->image}}" required>
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