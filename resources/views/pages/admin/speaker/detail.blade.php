@extends('admin.layouts.app')

@section('title', 'Admin - Detail Speaker')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-12 mb-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-3">
                <div class="d-block mb-4 mb-md-0">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.speaker.index') }}">Speaker</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Speaker</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <div class="card border-light shadow-sm components-section mt-3">
                <div class="card-header">
                    <h4 class="card-title">Detail Speaker {{ $speaker->name }}</h4>
                </div>
                <div class="row">
                    <div class="col-md-3 mx-2">
                        <a href="{{ route('admin.speaker.index') }}" class="btn btn-primary btn-sm"> <i
                                class="fa fa-angle-left" aria-hidden="true"></i> Kembali</a>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body">
                        <style>
                            th,
                            td {
                                font-weight: 600;
                            }

                        </style>
                        <table class="table table-striped">

                            <tr>
                                <th>Nama Lengkap </th>
                                <td>{{ $speaker->name }}</td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td>{{ $speaker->email }}</td>
                            </tr>

                            <tr>
                                <th>No Telp</th>
                                <td>{{ $speaker->phone }}</td>
                            </tr>

                            <tr>
                                <th>Foto</th>
                                <td>
                                    @isset($speaker->photo)
                                    <img src="{{ url('uploads/speaker/' . $speaker->photo) }}" alt=""
                                        class="img-thumbnail mb-2" width="150px">
                                    @else
                                    Foto belum ada
                                    @endisset
                                </td>
                            </tr>

                            <tr>
                                <th>Alamat</th>
                                <td>{{ $speaker->address }}</td>
                            </tr>

                            <tr>
                                <th>Kompetensi</th>
                                <td>{{ $speaker->competence }}</td>
                            </tr>

                            <tr>
                                <th>Jabatan</th>
                                <td>{{ $speaker->position }}</td>
                            </tr>


                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
