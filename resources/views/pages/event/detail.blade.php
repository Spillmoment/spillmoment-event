@extends('layouts.app')

@section('title',$events->title)
@section('content')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/event.css') }}">
@endpush

<div id="event-detail">
    <div class="box-v1">
        <div class="container">
            <div class="flex-w-1">
                <div class="card shadow mb-3" style="max-width: 1000px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <img src="{{ asset('uploads/events/' . $events->photo) }}" class="img-fluid rounded-start"
                                alt="{{ $events->title }}">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4 style="font-size: 25px;
                                    color: #333;"> {{ $events->title }}</h4>
                                </div>
                                <div class="wrapper-card">
                                    <div class="content-card">
                                        <div class="badge-wrap mb-1 mt-3 text-light">
                                            @if ($events->started == '0')
                                            <button class="badge">
                                                <i class="fas fa-stopwatch"></i> <label> Belum dimulai</label>
                                            </button>
                                            @else
                                            <button class="badge">
                                                <i class="fas fa-stopwatch"></i> <label> Telah dimulai</label>
                                            </button>
                                            @endif
                                            @if ($events->type == 'paid')
                                            <button class="badge paid">
                                                <i class="fas fa-wallet"></i> <label>Berbayar</label>
                                            </button>
                                            @else
                                            <button class="badge paid">
                                                <i class="fas fa-wallet"></i> <label>Gratis</label>
                                            </button>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                                <div class="card-text">
                                    <hr>
                                    <p class="text-muted">
                                        {!! $events->body !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="body-box">
                                <div class="auth-info">
                                    <h4>Pendaftaran Event</h4>
                                    <br>
                                    @auth

                                    @if ($cek_state > 0)
                                    <h6 class="text-success strong">Anda telah bergabung!</h6>
                                    @if ($events->type == 'paid')
                                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                                        <div class="small">
                                            <strong>Silahkan konfirmasi pembayaran sesuai dengan harga event</strong>.
                                            <br>
                                            <br>
                                            <h6 style="color: 34364a;" class="my-1"> PT.Spillmoment.id </h6>
                                            <h6 class="font-weight-bold" class="my-1">0826428529</h6>
                                            <br>
                                            Tiket akan hangus jika belum terkonfirmasi sebelum waktu event.
                                        </div>

                                    </div>
                                    <span class="btn btn-success btn-sm">
                                        <img src="{{ asset('assets/frontend/img/wa.png') }}" width="20px">
                                        <a href="https://wa.me/+6285236639572?text=Halo+Admin%2C+Saya+{{ auth()->user()->name }}+Berminat+Join+Dalam+Event+{{ $events->title }}"
                                            target="_blank" class="text-white text-decoration-none">
                                            Kunjungi Whats App
                                        </a>
                                    </span>
                                    @endif
                                    @else
                                    <form action="{{ route('event.join', $events->id) }}" method="post">
                                        @csrf
                                        <button class="btn-required">Daftar Sekarang</button>
                                    </form>
                                    @endif

                                    @else
                                    <a href="{{ route('login') }}"><button class="btn-required">Login untuk mengikuti
                                            event</button></a>
                                    @endauth
                                </div>
                                <br>
                                <hr>
                                <div class="detail-event">
                                    <h4>Detail Event</h4>
                                    <br>

                                    <!-- Kategori event -->
                                    <label for=""><span>
                                            <i class="fas fa-tag"></i> </span> Kategori Event</label>
                                    <p>{{ $events->category->name ?? ''}}</p>

                                    <!-- tipe event -->
                                    <label for=""><span>
                                            <i class="fas fa-hashtag"></i> </span> Tipe Event</label>
                                    @if ($events->type == 'paid')
                                    <p>Berbayar</p>
                                    @else
                                    <p>Gratis</p>
                                    @endif

                                    <!-- partner -->
                                    <label for=""><span>
                                            <i class="fas fa-handshake"></i> </span> Partner</label>
                                    <p>{{ $events->partner }}</p>

                                    <!-- Status -->
                                    <label for=""><span>
                                            <i class="fas fa-cube"></i> </span> Status Event</label>
                                    <p class="text-capitalize">{{ $events->status }}</p>

                                    <!-- Link Event -->
                                    @auth
                                    <label for=""><span>
                                            <i class="fas fa-link"></i> </span> Link Event</label>
                                    <p style="color: rgb(6, 112, 199); font-weight: 500">
                                        <a href="{{ $events->link }}" target="_blank"><i>{{ $events->link }}</i></a>
                                    </p>
                                    @endauth

                                    <!-- Place -->
                                    @if ($events->status == 'offline')
                                    <label for=""><span>
                                            <i class="fas fa-hotel"></i> </span> Tempat </label>
                                    <p class="text-capitalize">{{ $events->place}}</p>
                                    @endif

                                    <!-- mulai event -->
                                    <label for=""><span>
                                            <i class="fas fa-calendar-alt"></i> </span>Tanggal Mulai</label>
                                    <p> {{ \Carbon\Carbon::parse($events->event_date)->isoFormat('dddd, D MMMM Y')}}</p>

                                    <!-- waktu event -->
                                    <label for=""><span>
                                            <i class="fas fa-user-clock    "></i> </span>Waktu Mulai</label>
                                    <p> {{  $events->start_time->format('h:i')  }}.WIB - Selesai</p>

                                    <!-- harga dan certificate -->
                                    <label for=""><span>
                                            <i class="fas fa-certificate"></i> </span> Harga Event + Sertifikat</label>
                                    @if ($events->price != 0)
                                    <p>Rp. @convert($events->price)</p>
                                    @else
                                    <p>Gratis</p>
                                    @endif

                                    <!-- kuota -->
                                    <label for=""><span>
                                            <i class="fas fa-users"></i></span> Kuota Tersisa</label>
                                    <p>{{ $events->quota }}</p>

                                    <!--  -->
                                    <label for=""><span>
                                            <i class="fas fa-user"></i> </span> Mengikuti</label>
                                    <p>{{ $registers }} orang</p>

                                    <label for=""><span>
                                            <i class="fas fa-info-circle"></i> </span>Info</label>
                                    @if ($events->started == '0')
                                    <p>Belum Dimulai</p>
                                    @else
                                    <p>Sudah Dimulai</p>
                                    @endif

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
