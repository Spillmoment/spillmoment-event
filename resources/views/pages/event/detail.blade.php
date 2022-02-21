@extends('layouts.app')

@section('title',$events->title)
@section('content')
<div id="event-detail">
    <div class="box-v1">
        <div class="container">
            <div class="flex-w-1">
                <div class="col-flex">
                    <div class="image-wrapper">
                        <img src="{{ asset('uploads/events/' . $events->photo) }}" alt="">
                    </div>
                    <section class="body-box">
                        <div class="title-event">
                            <h2>{{ $events->title }}</h2>
                        </div>
                        <div class="badge-wrap">
                            @if ($events->started == '0')
                            <button class="badge">
                                <i class="fas fa-stopwatch"></i> <label> Belum dimulai</label>
                            </button>
                            @else
                            <button class="badge">
                                <i class="fas fa-stopwatch"></i> <label> Telah dimulai</label>
                            </button>
                            @endif
                            <!-- Note kasik condition if apabila event nya berbayar -->
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
                        <br><br>
                        <div class="event-description">
                            <p>
                                {{ $events->body }}
                            </p>
                        </div>
                    </section>
                </div>
                <div class="col-flex">
                    <div class="body-box">
                        <div class="auth-info">
                            <h2>Pendaftaran Event</h2>
                            <br>
                            <button class="btn-required">Login untuk mendaftar</button>
                        </div>
                        <br><br>
                        <div class="detail-event">
                            <h2>Detail Event</h2>
                            <br><br>
                            <!-- tipe event -->
                            <label for=""><span>
                                    <i class="fas fa-hashtag"></i> </span> Tipe Event</label>
                            @if ($events->type == 'paid')
                            <p>Berbayar</p>
                            @else
                            <p>Gratis</p>
                            @endif
                            <br>
                            <!-- partner -->
                            <label for=""><span>
                                    <i class="fas fa-handshake"></i> </span> Partner</label>
                            <p>{{ $events->partner }}</p>
                            <br>
                            <!-- mulai event -->
                            <label for=""><span>
                                    <i class="fas fa-calendar-alt"></i> </span> Mulai</label>
                            <p>{{ $events->event_date->format('d F Y') }}</p>
                            <br>
                            <!-- harga dan certificate -->
                            <label for=""><span>
                                    <i class="fas fa-certificate"></i> </span> Harga Event + Sertifikat</label>
                            @if ($events->price != 0)
                            <p>Rp. {{ $events->price }}.00</p>
                            @else
                            <p>Gratis</p>
                            @endif
                            <br>
                            <!-- kuota -->
                            <label for=""><span>
                                    <i class="fas fa-users"></i></span> Kuota tersisa</label>
                            <p>{{ $events->quota }}</p>
                            <br>
                            <!--  -->
                            <label for=""><span>
                                    <i class="fas fa-user"></i> </span> Mengikuti</label>
                            <p>{{ $registers }} orang</p>
                            <br>
                            <label for=""><span>
                                    <i class="fas fa-info-circle"></i> </span> Status</label>

                            @if ($events->started == '0')
                            <p>Belum Dimulai</p>
                            @else
                            <p>Sudah Dimulai</p>
                            @endif
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
