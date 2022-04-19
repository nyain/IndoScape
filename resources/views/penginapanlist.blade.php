@extends('layouts.admin')

@section('content')
                    <div class="dashboard-ecommerce">
                        <div class="container-fluid dashboard-content ">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="page-header">
                                        <h2 class="pageheader-title">Data Penginapan Host</h2>
                                        <div class="page-breadcrumb">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="dashboard" class="breadcrumb-link">Tables</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Data Penginapan Host</li>
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
                                        <a href="penginapan" class="btn btn-primary">Tambah Data</a>
                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success mt-2" role="alert">
                                            {{ $message }}
                                        </div>
                                        @endif
                                        <br><br>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>#</th>
                                                    <th>Nama Kota</th>
                                                    <th>Nama Tempat Wisata</th>
                                                    <th>Gambar</th>
                                                    <th>Nama Tempat Penginapan</th>
                                                    <th>Harga</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $no = 1;
                                                @endphp
                                                @foreach ($penginapan as $row)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    
                                                    <td>{{ $row->namecity }}</td>
                                                    <td>{{ $row->tempatwisata }}</td>
                                                    <td>
                                                        <img src="{{ asset('images/'. $row->image) }}"
                                                            alt="" style="width: 8em;">
                                                    </td>
                                                    <td>{{ $row->penginapan }}</td>
                                                    <td>{{ $row->harga }}</td>
                                                    <td>{{ $row->deskripsi }}</td>
                                                    <td>{{ $row->updated_at->format('D M Y') }}</td>
                                                    <td>{{ $row->updated_at->diffForHumans() }}</td>
                                                    <td class="d-flex mt-3">
                                                        <form action="/api/deletepenginapan" method="POST" enctype="multipart/form-data">
                                                            @method('DELETE')
                                                            <input type="hidden" name="id" value="{{ $row->id }}">
                                                            <button type="submit" class="btn btn-danger mr-1" href="penginapanlist">DELETE</button>
                                                        </form>
                                                        <form action="/editpenginapan" method="GET" enctype="multipart/form-data">
                                                            
                                                            <input type="hidden" name="id" value="{{ $row->id }}">
                                                            <button type="submit" class="btn btn-primary">EDIT</button>
                                                         </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection