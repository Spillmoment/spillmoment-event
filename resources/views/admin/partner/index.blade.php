@extends('admin.layouts.app')

@section('title', 'Admin - Halaman Partner Event')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mb-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-3">
                <div class="d-block mb-4 mb-md-0">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                            <li class="breadcrumb-item"><a href="#">Partner Event</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Halaman Partner Event</li>
                        </ol>
                    </nav>
                    <h2 class="h4 mt-1">Data Partner Event</h2>
                </div>
            </div>

            <div class="d-flex flex-row-reverse bd-highlight">
                <div class="btn-group">
                    <a href="#" class="btn btn-sm btn-success mx-1">
                        <i class="fas fa-file-excel"></i> Export Excel</a>
                    <a href="#" class="btn btn-sm btn-danger mx-1">
                        <i class="fas fa-file-pdf"></i> Export PDF</a>
                    <a href="{{ route('admin.partner.create') }}" class="btn btn-primary btn-sm mx-1">
                        <i class="fas fa-plus"></i> Tambah Partner
                    </a>
                </div>
            </div>


            <div class="card border-light shadow-sm components-section mt-3">
                <div class="row">

                    <div class="card-body">
                        <table class="table table-hover table-striped" id="partnerTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Partner</th>
                                    <th>Alamat</th>
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
@push('scripts')
<script>
    // AJAX DataTable
    var datatable = $('#partnerTable').DataTable({
        processing: true,
        serverSide: true,
        ordering: true,
        ajax: {
            url: '{!! url()->current() !!}',
        },
        columns: [{
                "data": 'id',
                "sortable": false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'address',
                name: 'address'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false,
                width: '20%'
            },
        ],

    });

</script>
@endpush
