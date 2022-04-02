@extends('layouts.app')

@section('title','Detail Produk - Spillmoment')

@section('content')


@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endpush


<div class="detail-product">

    <div class="box-v1">
        <div class="container">
            {{--   <div class="wrapper-video">
                <div class="plyr__video-embed" id="player">
                    <blockquote class="tiktok-embed"
                        cite="https://www.tiktok.com/@gerrybrooksprin/video/6808679698583850246"
                        data-video-id="6808679698583850246" style="max-width: 605px;min-width: 325px;">
                        <section> <a target="_blank" title="@gerrybrooksprin"
                                href="https://www.tiktok.com/@gerrybrooksprin">@gerrybrooksprin</a>
                        </section>
                    </blockquote>
                    <script async src="https://www.tiktok.com/embed.js"></script>
                </div>
            </div> --}}
        </div>
    </div>
    <br>
    <br>
    <div class="box-v2">
        <div class="container">
            <div class="grid-container">
                <div class="col-grid">
                    <div class="profile-wrapper">
                        <div class="avatar-profile profile-info">
                            <img src="../assets/img/women1.jpg" alt="profile picture">
                        </div>
                        <div class="profile-info">
                            <h2>Makeup Natural & Modern</h2>
                            <p>Sari Salon</p>
                            <br>
                            <h2>Rp 500.000 - 1.500.000</h2>
                            <br>
                            <label for="">Makeup</label><label for="">
                                <fa :icon="['fas','map-marker-alt']" class="map-icon" /> <span
                                    class="text">Tenggarang</span></label><label for="">
                                <fa :icon="['fas','star']" class="star-icon" /> <span class="text">5.0</span></label>
                            <br> <br>
                            <div class="insight-wrap">
                                <div class="col-insight">
                                    <p>600</p>
                                    <p>Love</p>
                                </div>
                                <div class="col-insight">
                                    <p>600</p>
                                    <p>View</p>
                                </div>
                                <div class="col-insight">
                                    <p>600</p>
                                    <p>Preview</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-grid">
                    <button>Pesan Sekarang</button>
                </div>
            </div>
            <div id="tab-on-dp">
                {{--  <TabNav :tabs="['Koleksi','Ulasan', 'Tentang']" :selected="selected" @selected="setSelected">
                    <br><br>
                    <div class="line"></div>
                    <br>
                    <Tab :isSelected="selected === 'Koleksi'">
                        <div id="collection">
                            <p>Menampilkan 100 dari semua hasil</p>
                            <br><br>
                            <div class="wrapper-collection">
                                <div class="col-collect">
                                    <div class="body-collect">
                                        <div class="content-collect">
                                            <h2>Hello</h2>
                                        </div>
                                    </div>
                                    <button class="btn-play">
                                        <fa :icon="['fas','play']" /></button>
                                    <img src="../assets/img/dt-card.jpg" alt="">
                                </div>
                            </div>
                        </div>

                    </Tab>
                    <Tab :isSelected="selected === 'Ulasan'">
                        <p>Ulasan</p>
                    </Tab>
                    <Tab :isSelected="selected === 'Tentang'">
                        <p>Tentang</p>
                    </Tab>
                </TabNav> --}}
            </div>
        </div>

    </div>

</div>


@endsection
