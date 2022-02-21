@extends('layouts.app')

@section('title','Spillmoment | Daftar Events')
@section('content')
<div id="event">
    <div class="box-v1">
        <div class="container">
            <div class="title-box">
                <h2>Daftar Event</h2>
            </div><br>
            <div class="wrapper-combo-box">
                <div class="combo-box">
                    <p>Kategori Event</p><br>
                    <select name="" id="" class="select-combox">
                        <option>- Pilih Kategori Event -</option>
                        @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="combo-box">
                    <p>Status Event</p><br>
                    <select name="" id="" class="select-combox">
                        <option>- Pilih Status Event -</option>
                        @foreach ($status as $item)
                        <option value="{{ $item->id }}">{{ $item->status }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="combo-box">
                    <p>Tipe Event</p><br>
                    <select name="" id="" class="select-combox">
                        <option>- Pilih Tipe Event -</option>
                        @foreach ($type as $item)
                        <option value="{{ $item->id }}">{{ $item->type }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="wrapper-card" a>
                <!-- tambahkan data v-for disini -->
                @forelse ($events as $item)
                <div class="card" style="margin-bottom: 20px">
                    <!-- note gambar akan terpotong apabila foto yang digunakan berukuran potrait -->
                    <img src="{{ asset('uploads/events/' . $item->photo) }}" alt="">
                    <!-- content card -->
                    <div class="content-card">
                        <h2>{{ $item->title }}</h2>
                        <!-- status event -->
                        <div class="badge-wrap">

                            <!-- Note kasik condition if apabila event nya masih belum dimulai -->
                            @if ($item->started == '0')
                            <button class="badge">
                                <i class="fas fa-stopwatch"></i> <label> Belum dimulai</label>
                            </button>
                            @else
                            <button class="badge">
                                <i class="fas fa-stopwatch"></i> <label> Telah dimulai</label>
                            </button>
                            @endif
                            <!-- Note kasik condition if apabila event nya berbayar -->
                            @if ($item->type == 'paid')
                            <button class="badge paid">
                                <i class="fas fa-wallet"></i> <label>Berbayar</label>
                            </button>
                            @else
                            <button class="badge paid">
                                <i class="fas fa-wallet"></i> <label>Gratis</label>
                            </button>
                            @endif
                        </div>

                        <br>

                        <!-- info waktu dan anggota -->
                        <div class="info-tanggal">
                            <i class="fas fa-calendar-alt"></i> <label for="">{{ $item->event_date->format('d F Y') }}
                            </label>
                        </div><br>
                        <div class="info-jam">
                            <i class="fas fa-clock"></i>
                            <label for="">{{ $item->start_time->format('h:i') }}</label> WIB
                        </div><br>
                        <div class="info-anggota">
                            <i class="fas fa-laptop"></i>
                            @if ($item->status == 'offline')
                            <label for="">Offline</label>
                            @else
                            <label for="">Online</label>
                            @endif
                        </div>
                        <br>

                        <!-- tombol gabung -->
                        <a href="{{ route('event.detail', $item->slug) }}">
                            <button type="button" class="btn-event">Detail Event</button>
                        </a>
                    </div>

                </div>
                @empty
                <center>
                    <h3>Events Kosong</h3>
                </center>
                @endforelse
            </div>
        </div>
    </div>
    @endsection
