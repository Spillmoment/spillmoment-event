@extends('layouts.app')

@section('title','Detail Produk - Spillmoment')

@section('content')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/product.css') }}">
@endpush

<div class="container">
    <div class="row my-5 text-center pt-5 pb-5">
        <h3>test</h3>
    </div>
    <div class="row my-5 justify-content-center">
        <hr class="garis">
        <div class="col-md-2 my-3">
            <img class="thumbnail rounded-circle"
                src="https://kwikku.us/uploads/public/images/listicle/header/75187-listicle-20171227204602.jpg" alt="">
        </div>
        <div class="col-md-5 my-3">
            <span class="title fs-3">Make up Natural & Modern</span>
            <span class="fw-normal vendors fs-6">Sari Salon</span>
            <span class="fw-bolder price fs-3">Rp. 1.500.000</span>
            <span class="tag">Makeup</span>
            <span><i class="fa fa-map-marker-alt map-icon"></i> Tenggarang</span>
            <span><i class="fa fa-star star-icon"></i> 5.0</span>

            <div class="d-flex flex-row bd-highlight mb-3 mt-2 text-footer">
                <div class="p-2 bd-highlight mx-2">600
                    <br>
                    Love
                </div>
                <div class="p-2 bd-highlight mx-2">600
                    <br>
                    View
                </div>
                <div class="p-2 bd-highlight mx-2">600
                    <br>
                    Preview
                </div>
            </div>

        </div>

        <div class="col-md-5 my-4">
            <div class="d-flex flex-row bd-highlight mb-2">
                <button type="submit" class="btn btn-bg">
                    <img src="{{ asset('assets/frontend/img/whatsapp.png') }}" alt="Logo WhatsApp">
                    <span class="text-sm-start"> Pesan Sekarang</span>
                </button>
                <button type="submit" class="btn btn-bg">
                    <img src="{{ asset('assets/frontend/img/like.png') }}" alt="Logo Like">
                    <span class="text-sm-start"> Ikuti </span>
                </button>

            </div>
            <div class="d-flex flex-row bd-highlight mb-2">
                <button type="submit" class="btn btn-bg">
                    <img src="{{ asset('assets/frontend/img/comment.png') }}" alt="Logo Like">
                    <span class="text-sm-start"> Like </span>
                </button>
                <button type="submit" class="btn btn-bg">
                    <img src="{{ asset('assets/frontend/img/comment.png') }}" alt="Logo Like">
                    <span class="text-sm-start"> Tulis Ulasan</span>
                </button>
            </div>
        </div>
        <hr class="garis">
    </div>


    <div class="row my-2 ">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link text-dark mx-1 active" id="nav-koleksi-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-koleksi" type="button" role="tab" aria-controls="nav-koleksi"
                    aria-selected="true">
                    <span class="text-nav">Koleksi</span>
                </button>
                <button class="nav-link text-dark mx-1 " id="nav-ulasan-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-ulasan" type="button" role="tab" aria-controls="nav-ulasan"
                    aria-selected="false">
                    <span class="text-nav">Ulasan</span>
                </button>
                <button class="nav-link text-dark mx-1 " id="tentang-tab" data-bs-toggle="tab" data-bs-target="#tentang"
                    type="button" role="tab" aria-controls="tentang" aria-selected="false">
                    <span class="text-nav"> Tentang </span>
                </button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-koleksi" role="tabpanel" aria-labelledby="nav-koleksi-tab">

                <p style="color: rgba(111, 111, 111, 0.9);" class="my-5">
                    Menampilkan 100 dari semua hasil
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@yohnsd/video/6962871365275831554"
                            data-video-id="6962871365275831554" style="max-width: 605px;min-width: 325px;">
                            <section> <a target="_blank" title="@yohnsd"
                                    href="https://www.tiktok.com/@yohnsd">@yohnsd</a> <a title="startup" target="_blank"
                                    href="https://www.tiktok.com/tag/startup">#startup</a> <a title="kdramaquotes"
                                    target="_blank" href="https://www.tiktok.com/tag/kdramaquotes">#kdramaquotes</a> <a
                                    title="foryou" target="_blank" href="https://www.tiktok.com/tag/foryou">#foryou</a>
                                <a title="foryoupage" target="_blank"
                                    href="https://www.tiktok.com/tag/foryoupage">#foryoupage</a> <a target="_blank"
                                    title="♬ original sound  - alsa"
                                    href="https://www.tiktok.com/music/original-sound-alsa-6898375538734631681">♬
                                    original sound - alsa</a> </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>
                    <div class="col-md-4">
                        <blockquote class="tiktok-embed"
                            cite="https://www.tiktok.com/@secondself_/video/7057086643450301722"
                            data-video-id="7057086643450301722" style="max-width: 605px;min-width: 325px;">
                            <section> <a target="_blank" title="@secondself_"
                                    href="https://www.tiktok.com/@secondself_">@secondself_</a> <a title="startup"
                                    target="_blank" href="https://www.tiktok.com/tag/startup">#startup</a> <a
                                    title="koreandrama" target="_blank"
                                    href="https://www.tiktok.com/tag/koreandrama">#koreandrama</a> <a title="kdrama"
                                    target="_blank" href="https://www.tiktok.com/tag/kdrama">#kdrama</a> <a
                                    target="_blank" title="♬ Day &#38; Night - Shin Giwon Piano"
                                    href="https://www.tiktok.com/music/Day-Night-6904734070299707394">♬ Day &#38; Night
                                    - Shin Giwon Piano</a> </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>
                    <div class="col-md-4">
                        <blockquote class="tiktok-embed"
                            cite="https://www.tiktok.com/@hi.chelsa/video/7064883380285934874"
                            data-video-id="7064883380285934874" style="max-width: 605px;min-width: 325px;">
                            <section> <a target="_blank" title="@hi.chelsa"
                                    href="https://www.tiktok.com/@hi.chelsa">@hi.chelsa</a> When han jipyeong meets hong
                                jiseok😂 <a title="startupkdrama" target="_blank"
                                    href="https://www.tiktok.com/tag/startupkdrama">#startupkdrama</a> <a
                                    title="kimseonho" target="_blank"
                                    href="https://www.tiktok.com/tag/kimseonho">#kimseonho</a> <a target="_blank"
                                    title="♬ She Knows - J. Cole"
                                    href="https://www.tiktok.com/music/She-Knows-6921490873293211649">♬ She Knows - J.
                                    Cole</a> </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>


                </div>

            </div>
            <div class="tab-pane fade" id="nav-ulasan" role="tabpanel" aria-labelledby="nav-ulasan-tab">

                <div class="row tab-ulasan my-5">

                    <div class="d-flex flex-row my-2">
                        <div class="mx-3">
                            4.5
                        </div>
                        <div class="mx-3">
                            <i class="fa fa-star bg-yellow"></i>
                            <i class="fa fa-star bg-yellow"></i>
                            <i class="fa fa-star bg-yellow"></i>
                            <i class="fa fa-star bg-yellow"></i>
                            <i class="fa fa-star-half bg-yellow"></i>
                        </div>
                        <div class="mx-3">
                            Ulasan (100)
                        </div>
                    </div>

                    <div class="d-flex flex-row mt-5 mb-4">
                        <div class="mx-2">
                            Menampilkan Semua Hasil
                        </div>
                        <div class="mx-5">
                            Tampilkan
                            <span class="mr-5">
                                <a class="btn btn-white btn-sm" href="#" role="button">
                                    <sub>
                                        <span class="text">Semua</span>
                                    </sub>
                                </a>
                                <button class="btn btn-gray btn-md"></button>
                            </span>
                        </div>
                        <div class="mx-2">
                            Urutkan
                            <span class="mr-5">
                                <a class="btn btn-white btn-sm " href="#" role="button">
                                    <sub>
                                        <span class="text"> Terbaru</span>
                                    </sub>
                                </a>
                                <button class="btn btn-gray btn-md"></button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row tab-review">
                    <div class="col-md-2">
                        <img src="{{ asset('assets/frontend/img/logo-spillmoment.png') }}"
                            class="thumbnail rounded-circle">
                        <br>
                        <span class="user-proc">Mawar</span>
                    </div>
                    <div class="col-md-6">
                        <div class="rating">
                            <i class="fa fa-star bg-yellow"></i>
                            <i class="fa fa-star bg-yellow"></i>
                            <i class="fa fa-star bg-yellow"></i>
                            <i class="fa fa-star bg-yellow"></i>
                            <i class="fa fa-star-half bg-yellow"></i>

                            <span class="mx-3 font-weight-900 text-dark fs-6"> 4.5 / 5</span>
                        </div>
                        <div class="my-3 detail-rev">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit temporibus error
                            reprehenderit? Repellat debitis ab aperiam ullam ex officiis adipisci!
                        </div>
                    </div>
                    <div class="col-md-4"></div>

                </div>

            </div>
            <div class="tab-pane fade" id="tentang" role="tabpanel" aria-labelledby="tentang-tab">
                ...
            </div>
        </div>

    </div>


</div>

@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endpush

@endsection
