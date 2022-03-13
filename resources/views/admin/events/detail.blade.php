@extends('admin.layouts.app')

@section('title', 'Admin - Detail Event')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-12 mb-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-3">
                <div class="d-block mb-4 mb-md-0">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.event.index') }}">Event</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail event</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <div class="card border-light shadow-sm components-section mt-3">
                <div class="card-header">
                    <h4 class="card-title">Detail Event {{ $event->title }}</h4>
                </div>
                <div class="row">
                    <div class="col-md-3 mx-2">
                        <a href="{{ route('admin.event.index') }}" class="btn btn-primary btn-sm"> <i
                                class="fa fa-angle-left" aria-hidden="true"></i> Kembali</a>
                    </div>
                </div>
                <div class="row">
                    <div class="card-body">
                        <style>
                            th,
                            td {
                                font-weight: 600;
                                text-transform: capitalize;
                            }

                        </style>
                        <table class="table table-striped">

                            <tr>
                                <th>Nama Event</th>
                                <td>{{ $event->title }}</td>
                            </tr>

                            <tr>
                                <th>Deskripsi</th>
                                <td>{!! $event->body !!}</td>
                            </tr>

                            <tr>
                                <th>Foto</th>
                                <td>
                                    @isset($event->photo)
                                    <img src="{{ url('uploads/events/' . $event->photo) }}" alt=""
                                        class="img-thumbnail mb-2" width="150px">
                                    @else
                                    Foto belum ada
                                    @endisset
                                    <br>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Lihat
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <th>Harga</th>
                                @if ($event->price != null)
                                <td>Rp.{{ $event->price }}.00</td>
                                @else
                                <td>Gratis</td>
                                @endif
                            </tr>


                            <tr>
                                <th>Status Event</th>
                                <td>{{ $event->status }}</td>
                            </tr>

                            <tr>
                                <th>Link Event</th>
                                <td>{{ $event->link }}</td>
                            </tr>

                            <tr>
                                <th>Partner</th>
                                <td>{{ $event->partner }}</td>
                            </tr>

                            <tr>
                                <th>Kuota</th>
                                <td>{{ $event->quota }} Peserta</td>
                            </tr>

                            <tr>
                                <th>Type</th>
                                <td>{{ $event->type == 'paid' ? 'Berbayar' : 'Gratis' }}</td>
                            </tr>

                            <tr>
                                <th>Tempat</th>
                                @if ($event->place == null)
                                <td>Online</td>
                                @else
                                <td> {{ $event->place  }}</td>
                                @endif
                                </td>
                            </tr>

                            <tr>
                                <th>Tanggal Event</th>
                                <td>{{ $event->event_date->format('d F Y') }}</td>
                            </tr>

                            <tr>
                                <th>Waktu Mulai</th>
                                <td>{{ $event->start_time->format('h:i') }}.WIB</td>
                            </tr>

                            <tr>
                                <th>Event</th>
                                <td>{{ $event->started == '0' ? 'Belum Dimulai' : 'Sudah Dimulai' }}</td>
                            </tr>


                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $event->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <img src="{{ url('uploads/events/' . $event->photo) }}">
            </div>
        </div>
    </div>
</div>
@endsection
