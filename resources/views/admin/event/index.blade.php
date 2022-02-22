@extends('admin.layouts.app')

@section('title', 'Admin - Halaman Event')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mb-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-3">
                <div class="d-block mb-4 mb-md-0">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                            <li class="breadcrumb-item"><a href="#">Event</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Halaman Event</li>
                        </ol>
                    </nav>
                    <h2 class="h4 mt-1">Daftar Event</h2>
                </div>
            </div>

            <div class="d-flex flex-row-reverse bd-highlight">
                <div class="btn-group">
                    <a href="#" class="btn btn-sm btn-success mx-1">
                        <i class="fas fa-file-excel"></i> Export Excel</a>
                    <a href="#" class="btn btn-sm btn-danger mx-1">
                        <i class="fas fa-file-pdf"></i> Export PDF</a>
                    <a href="{{ route('admin.event.create') }}" class="btn btn-primary btn-sm mx-1">
                        <i class="fas fa-plus"></i> Tambah Event
                    </a>
                </div>
            </div>


            <div class="card border-light shadow-sm components-section mt-3">
                <div class="row my-1 mx-1">
                    {{-- <div class="col-md-3">
                        <select id="filter-kategori" data-column="0" class="form-select filter">
                            <option selected>Pilih Kategori</option>
                            @foreach ($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                    @endforeach
                    </select>
                </div> --}}
            </div>
            <div class="row">

                <div class="card-body">
                    <table class="table table-hover table-striped" id="kursusTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kursus</th>
                                <th>Kategori</th>
                                <th>Gambar Kursus</th>
                                <th width="210">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <footer class="footer section py-2">

                </div>

            </div>
        </div>

    </div>
</div>
</div>

@endsection
