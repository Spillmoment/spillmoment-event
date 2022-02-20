@extends('layouts.app')

@section('content')
<div id="event">
    <div class="box-v1">
        <div class="container">
            <div class="title-box">
                <h2>Event</h2>
                <p>Event diadakan setiap setahun sekali</p>
            </div><br>
            <div class="wrapper-combo-box">
                <div class="combo-box">
                    <p>Kategory Event</p><br>
                    <select name="" id="" class="select-combox">
                        <option>- Cari kategory event -</option>
                    </select>
                </div>
                <div class="combo-box">
                    <p>Status Event</p><br>
                    <select name="" id="" class="select-combox">
                        <option>- Pilih Status event -</option>
                    </select>
                </div>
                <div class="combo-box">
                    <p>Tipe Event</p><br>
                    <select name="" id="" class="select-combox">
                        <option>- Pilih tipe event -</option>
                    </select>
                </div>
                <!-- <div class="combo-box">
                <p>Vendor Event</p><br>
                <select name="" id="" class="select-combox">
                    <option>- Cari nama vendor -</option>
                </select>
            </div> -->
                <!-- <br><br> -->
            </div>
            <div class="wrapper-card">
                <!-- tambahkan data v-for disini -->
                <div class="card" v-for="events in event" v-bind:key="events.id">
                    <!-- note gambar akan terpotong apabila foto yang digunakan berukuran potrait -->
                    <img src="" alt="">
                    <!-- content card -->
                    <div class="content-card">
                        <h2>Event Title</h2>
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
                            <button type="button" class="btn-event">Gabung Event</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
