@extends('layouts.admin')

@section('content')
                    <div class="dashboard-ecommerce">
                        <div class="container-fluid dashboard-content ">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="page-header">
                                        <h2 class="pageheader-title">User</h2>
                                        <div class="page-breadcrumb">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="dashboard" class="breadcrumb-link">Tables</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Data User</li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-xl-12">
                                <div class="card">
                                    <h5 class="card-header">Data User</h5>
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Created at</th>
                                                    <th>Last Edited</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $no = 1;
                                                @endphp
                                                @foreach ($user as $row)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->updated_at->format('D M Y') }}</td>
                                                    <td>{{ $row->updated_at->diffForHumans() }}</td>
                                                    <td class="d-flex mt-3">
                                                        <form action="/api/deleteuser" method="POST" enctype="multipart/form-data">
                                                            @method('DELETE')
                                                            <input type="hidden" name="id" value="{{ $row->id }}">
                                                            <button type="submit" class="btn btn-danger mr-1">DELETE</button>
                                                        </form>
                                                        <form action="/edituser" method="GET" enctype="multipart/form-data">
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
