@extends('admin.layouts.app')

@section('title', 'Admin - Halaman Tambah Speaker')

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
                            <li class="breadcrumb-item active" aria-current="page">Halaman Speaker</li>
                        </ol>
                    </nav>
                    <h2 class="h4 mt-1">Form Tambah Speaker</h2>
                </div>
            </div>


            <div class="card border-light shadow-sm components-section">
                <div class="card-body">

                    <form action="{{ route('admin.speaker.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">

                            <div class="col-lg-6 col-sm-6">

                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text"
                                        class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}"
                                        name="name" id="name" value="{{old('name')}}"
                                        placeholder="Masukkan Nama Lengkap">
                                    <div class="invalid-feedback">
                                        {{$errors->first('name')}}
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="email">Alamat Email</label>
                                    <input type="email"
                                        class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}"
                                        name="email" id="email" value="{{old('email')}}"
                                        placeholder="Masukkan Alamat Email">
                                    <div class="invalid-feedback">
                                        {{$errors->first('email')}}
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="phone">No Telephone</label>
                                    <input type="number"
                                        class="form-control {{ $errors->first('phone') ? 'is-invalid' : '' }}"
                                        name="phone" id="phone" value="{{old('phone')}}"
                                        placeholder="Masukkan No Telephone">
                                    <div class="invalid-feedback">
                                        {{$errors->first('phone')}}
                                    </div>
                                </div>

                                <div>
                                    <label for="photo">Foto</label>
                                    <br>
                                    <input type="file"
                                        class="form-control-file {{ $errors->first('photo') ? 'is-invalid' : '' }}"
                                        name="photo" id="photo">
                                    <div class="invalid-feedback">
                                        {{$errors->first('photo')}}
                                    </div>
                                    <div class="my-3">
                                        <img id="img" class="img-target" width="200px">
                                    </div>
                                </div>


                                <!-- End of Form -->
                            </div>

                            <div class="col-lg-6 col-sm-6">

                                <!-- Form -->

                                <div class="mb-4">
                                    <label for="competence">Kompetensi</label>
                                    <input type="text"
                                        class="form-control {{ $errors->first('competence') ? 'is-invalid' : '' }}"
                                        name="competence" id="competence" value="{{old('competence')}}"
                                        placeholder="Masukkan Kompetensi">
                                    <div class="invalid-feedback">
                                        {{$errors->first('competence')}}
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="position">Jabatan</label>
                                    <input type="text"
                                        class="form-control {{ $errors->first('position') ? 'is-invalid' : '' }}"
                                        name="position" id="position" value="{{old('position')}}"
                                        placeholder="Masukkan Jabatan">
                                    <div class="invalid-feedback">
                                        {{$errors->first('position')}}
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="address">Alamat</label>
                                    <textarea name="address"
                                        class="form-control {{ $errors->first('address') ? 'is-invalid' : '' }}"
                                        id="address" rows="3"
                                        placeholder="Masukkan Alamat">{{old('address')}}</textarea>
                                    <div class="invalid-feedback">
                                        {{$errors->first('address')}}
                                    </div>
                                </div>

                                <!-- End of Form -->
                            </div>


                            <button type="submit" class="btn btn-block btn-primary">
                                Simpan</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    var readURL = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.img-target').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".form-control-file").on('change', function () {
        readURL(this);
    });

</script>
@endpush
