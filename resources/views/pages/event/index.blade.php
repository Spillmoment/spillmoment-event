@extends('layouts.app')

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
            <div class="wrapper-card">
                <!-- tambahkan data v-for disini -->
                @forelse ($events as $item)
                <div class="card">
                    <!-- note gambar akan terpotong apabila foto yang digunakan berukuran potrait -->
                    <img src="{{ asset('uploads/events/sharing.jpg') }}" alt="">
                    <!-- content card -->
                    <div class="content-card">
                        <h2>{{ $item->title }}</h2>
                        <!-- status event -->
                        <div class="badge-wrap">
                            <!-- Note kasik condition if apabila event nya masih belum dimulai -->
                            <button class="badge" v-if="event.status == 'a'">
                                <fa :icon="['fas', 'stopwatch']" /> <label>Belum dimulai</label>
                            </button>
                            <!-- Note kasik condition if apabila eventnya dimulai -->
                            <button class="badge started" v-else-if="event.status == 'b'">
                                <p>Telah dimulai</p>
                            </button>
                            <!-- Note kasik condition if apabila event nya berbayar -->
                            <button class="badge paid" v-else-if="event.status == 'c'">
                                <fa :icon="['fas', 'wallet']" /> <label>Berbayar</label>
                            </button>
                            <!-- Note kasik condition if apabila event nya berbayar -->
                            <button class="badge ended" v-else>
                                <fa :icon="['fas', 'calendar-check']" /> <label>Sudah berakhir</label>
                            </button>
                        </div>
                        <br>
                        <!-- info waktu dan anggota -->
                        <div class="info-tanggal">
                            <fa :icon="['fas', 'calendar-alt']" /> <label for="">Jumat, 21 januari 2020 </label>
                        </div><br>
                        <div class="info-jam">
                            <fa :icon="['fas', 'clock']" /> <label for="">20.30</label>
                        </div><br>
                        <div class="info-anggota">
                            <fa :icon="['fas', 'users']" /> <label for="">800 orang</label>
                        </div>
                        <br>
                        <!-- tombol gabung -->
                        <a href="">
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
