@extends('admin.layouts.app')

@section('title', 'Admin - Tambah Kategori Event')

@section('content')

<div class="py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item"><a href="#">Kategori Event</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Kategori</li>
        </ol>
    </nav>

</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm components-section mt-3">
            <div class="card-body">
                <form action="{{ route('admin.kategori.store') }}" method="post">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-lg-12 col-sm-6">
                            <div class="mb-3">
                                <label for="name">Nama Kategori</label>
                                <input type="text" class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}"
                                    name="name" id="name" value="{{old('name')}}" placeholder="Masukkan Kategori">
                                <div class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary">
                                Simpan</button>
                        </div>
                    </div>

            </div>
        </div>
        </form>

    </div>
</div>


@endsection
