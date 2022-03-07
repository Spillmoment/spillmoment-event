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
                                        {{ $events->body }}
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
														 <h6 class="text-secondary">Anda sudah bergabung.</h6>
													@else
														@if ($events->type == 'paid')
															<span class="btn btn-success btn-sm">
																<img src="{{ asset('assets/frontend/img/wa.png') }}" width="20px">
																<a href="https://wa.me/085232629479?text=Hallo+Admin%2C+saya+berminat+join+dalam+event+{{ $events->title }}" target="_blank" class="text-white text-decoration-none"> Whats App </a>
															</span>
														@else
															<form action="{{ route('event.join', $events->id) }}" method="post">
																@csrf
																<button class="btn-required">Daftar Event</button>
															</form>
															 
														@endif
													@endif

                                    @else
                                    <a href="{{ route('login') }}"><button class="btn-required">Login untuk mengikuti event</button></a>
                                    @endauth
                                </div>
                                <br>
                                <hr>
                                <div class="detail-event">
                                    <h4>Detail Event</h4>
                                    <br>

                                    <!-- Kategori event -->
                                    <label for=""><span>
                                            <i class="fas fa-adn"></i> </span> Kategori Event</label>
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

                                    <!-- mulai event -->
                                    <label for=""><span>
                                            <i class="fas fa-calendar-alt"></i> </span> Mulai</label>
                                    <p> {{ \Carbon\Carbon::parse($events->event_date)->isoFormat('dddd, D MMMM Y')}}</p>

                                    <!-- harga dan certificate -->
                                    <label for=""><span>
                                            <i class="fas fa-certificate"></i> </span> Harga Event + Sertifikat</label>
                                    @if ($events->price != 0)
                                    <p>Rp. {{ $events->price }}.00</p>
                                    @else
                                    <p>Gratis</p>
                                    @endif

                                    <!-- kuota -->
                                    <label for=""><span>
                                            <i class="fas fa-users"></i></span> Kuota tersisa</label>
                                    <p>{{ $events->quota }}</p>

                                    <!--  -->
                                    <label for=""><span>
                                            <i class="fas fa-user"></i> </span> Mengikuti</label>
                                    <p>{{ $registers }} orang</p>

                                    <label for=""><span>
                                            <i class="fas fa-info-circle"></i> </span> Status</label>

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
