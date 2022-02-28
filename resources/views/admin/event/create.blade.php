@extends('admin.layouts.app')

@section('title', 'Admin - Halaman Tambah Event')

@section('content')

@push('style')
<link href="{{ asset('assets/backend/js/picker/mdtimepicker.css') }}" rel="stylesheet">
@endpush


<div class="container">
    <div class="row">
        <div class="col-12 mb-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-3">
                <div class="d-block mb-4 mb-md-0">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.event.index') }}">Event</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Halaman Event</li>
                        </ol>
                    </nav>
                    <h2 class="h4 mt-1">Form Tambah Event</h2>
                </div>
            </div>


            <div class="card border-light shadow-sm components-section">
                <div class="card-body">

                    <form action="{{ route('admin.event.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">

                            <div class="col-lg-6 col-sm-6">

                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="title">Nama Event</label>
                                    <input type="text"
                                        class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}"
                                        name="title" id="title" value="{{old('title')}}"
                                        placeholder="Masukkan Nama Event" autofocus>
                                    <div class="invalid-feedback">
                                        {{$errors->first('title')}}
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="body">Deskripsi</label>
                                    <input type="text"
                                        class="form-control {{ $errors->first('body') ? 'is-invalid' : '' }}"
                                        name="body" id="body" value="{{old('body')}}" placeholder="Masukkan Deskripsi">
                                    <div class="invalid-feedback">
                                        {{$errors->first('body')}}
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="my-1 mr-2" for="kategori">Kategori Event</label>
                                    <select name="event_category_id"
                                        class="form-select {{ $errors->first('event_category_id') ? 'is-invalid' : '' }}"
                                        id="kategori" aria-label="Default select example">
                                        <option selected="">Pilih Kategori</option>
                                        @forelse ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @empty
                                        <option value=""></option>
                                        @endforelse
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="my-1 mr-2" for="speaker">Speaker Event</label>
                                    <select name="speaker_id"
                                        class="form-select {{ $errors->first('speaker_id') ? 'is-invalid' : '' }}"
                                        id="speaker" aria-label="Default select example">
                                        <option selected="">Pilih Speaker</option>
                                        @forelse ($speaker as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @empty
                                        <option value=""></option>
                                        @endforelse
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="partner">Partner</label>
                                    <input type="text"
                                        class="form-control {{ $errors->first('partner') ? 'is-invalid' : '' }}"
                                        name="partner" id="partner" value="{{old('partner')}}"
                                        placeholder="Masukkan Partner">
                                    <div class="invalid-feedback">
                                        {{$errors->first('partner')}}
                                    </div>
                                </div>

                                <div>
                                    <label for="photo">Gambar</label>
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
                                    <label for="quota">Jumlah Kuota</label>
                                    <input type="number"
                                        class="form-control {{ $errors->first('quota') ? 'is-invalid' : '' }}"
                                        name="quota" id="quota" value="{{old('quota')}}"
                                        placeholder="Masukkan Jumlah Kuota">
                                    <div class="invalid-feedback">
                                        {{$errors->first('quota')}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-4">
                                            <fieldset>
                                                <label for="jenkel">Status Event</label>
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input {{ $errors->first('status') ? 'is-invalid' : '' }}"
                                                        type="radio" name="status" id="radio_on" value="online" checked>
                                                    <label class="form-check-label" for="radio_on">
                                                        Online
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input {{ $errors->first('status') ? 'is-invalid' : '' }}"
                                                        type="radio" name="status" id="radio_off" value="offline">
                                                    <label class="form-check-label" for="radio_off">
                                                        Offline
                                                    </label>
                                                </div>
                                            </fieldset>
                                            <div class="invalid-feedback">
                                                {{$errors->first('status')}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-4">
                                            <fieldset>
                                                <label for="type">Type Event</label>
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input {{ $errors->first('type') ? 'is-invalid' : '' }}"
                                                        type="radio" name="type" id="radio_paid" value="paid" checked>
                                                    <label class="form-check-label" for="radio_paid">
                                                        Berbayar
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input {{ $errors->first('status') ? 'is-invalid' : '' }}"
                                                        type="radio" name="type" id="radio_free" value="free">
                                                    <label class="form-check-label" for="radio_free">
                                                        Gratis
                                                    </label>
                                                </div>
                                            </fieldset>
                                            <div class="invalid-feedback">
                                                {{$errors->first('status')}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="price">Harga Event</label>
                                    <input type="text"
                                        class="form-control {{ $errors->first('price') ? 'is-invalid' : '' }}"
                                        name="price" id="price" value="{{old('price')}}"
                                        placeholder="Masukkan Harga Event">
                                    <small id="emailHelp" class="form-text text-muted">Kosongkan jika event
                                        gratis</small>
                                    <div class="invalid-feedback">
                                        {{$errors->first('price')}}
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="link">Link Event</label>
                                    <input type="text"
                                        class="form-control {{ $errors->first('link') ? 'is-invalid' : '' }}"
                                        name="link" id="link" value="{{old('link')}}" placeholder="Masukkan Link Event">
                                    <div class="invalid-feedback">
                                        {{$errors->first('link')}}
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="place">Tempat Event</label>
                                    <input type="text"
                                        class="form-control {{ $errors->first('place') ? 'is-invalid' : '' }}"
                                        name="place" id="place" value="{{old('place')}}" placeholder="Masukkan Place">
                                    <div class="invalid-feedback">
                                        {{$errors->first('place')}}
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="event_date">Tanggal Event</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                        <input data-datepicker="" name="event_date"
                                            class="form-control datepicker-input {{ $errors->first('event_date') ? 'is-invalid' : '' }}"
                                            id="event_date" type="text" placeholder="dd/mm/yyyy"
                                            value="{{old('event_date')}}">
                                        <div class="invalid-feedback">
                                            {{$errors->first('event_date')}}
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="start_time">Waktu Mulai</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="far fa-clock-o"></span></span>
                                        <input type="text" name="start_time"
                                            class="form-control timepicker1 {{ $errors->first('start_time') ? 'is-invalid' : '' }}">
                                    </div>
                                    <div class="invalid-feedback">
                                        {{$errors->first('start_time')}}
                                    </div>
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
<script src="{{ asset('assets/backend/js/picker/mdtimepicker.js') }}"></script>
<script>
    $(document).ready(function () {

        $('.timepicker1').mdtimepicker({

            // format of the time value (data-time attribute)
            timeFormat: 'hh:mm:ss.000',

            // format of the input value
            format: 'h:mm tt',

            // theme of the timepicker
            // 'red', 'purple', 'indigo', 'teal', 'green', 'dark'
            theme: 'blue',

            // determines if input is readonly
            readOnly: true,

            // determines if display value has zero padding for hour value less than 10 (i.e. 05:30 PM); 24-hour format has padding by default
            hourPadding: false,

            // determines if clear button is visible  
            clearBtn: false

        });
    });

</script>
@endpush
