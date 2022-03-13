@extends('admin.layouts.app')

@section('title', 'Admin - Edit Partner Event')

@section('content')

<div class="py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item"><a href="#">Partner Event</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Partner Event</li>
        </ol>
    </nav>

</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm components-section mt-3">
            <div class="card-body">
                <form method="post" action="{{route('admin.partner.update',[$partner->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <div class="col-lg-12 col-sm-6">
                            <div class="mb-3">
                                <label for="name">Nama Partner</label>
                                <input type="text" class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}"
                                    name="name" id="name" value="{{$partner->name}}" placeholder="Nama Partner">
                                <div class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="address">Alamat</label>
                                <textarea type="text"
                                    class="form-control {{ $errors->first('address') ? 'is-invalid' : '' }}"
                                    name="address" id="address"
                                    placeholder="Masukkan Alamat">{{old('address', $partner->address)}}</textarea>
                                <div class="invalid-feedback">
                                    {{$errors->first('address')}}
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
