@extends('layouts.app')

@section('title','Spillmoment | Halaman Home')
@section('content')
<div class="home">
    <!-- ini adalah bagian box 1 -->
    <div class="box-p1">
        <div class="owl-carousel owl-theme" id="carousel-1">
            <div class="item-carousel">
                <div class="content-item">
                    <h1>Buat Momen Impianmu Menjadi Kenyataan</h1>
                    <br /><br />
                    <button>Pesan Sekarang</button>
                </div>
                <img src="https://cdn.spillmoment.id/img/unsplash_BcVvVvqiCGA.png" alt="Spillmoment picture" />
            </div>
            <div class="item-carousel">
                <div class="content-item">
                    <h1>Buat Momen Impianmu Menjadi Kenyataan</h1>
                    <br /><br />
                    <button>Pesan Sekarang</button>
                </div>
                <img src="https://cdn.spillmoment.id/img/unsplash_mW8IZdX7n8E.png" alt="Spillmoment picture" />
            </div>
            <div class="item-carousel">
                <div class="content-item">
                    <h1>Buat Momen Impianmu Menjadi Kenyataan</h1>
                    <br /><br />
                    <button>Pesan Sekarang</button>
                </div>
                <img src="https://cdn.spillmoment.id/img/unsplash_smgTvepind4.png" alt="Spillmoment picture" />
            </div>
            <div class="item-carousel">
                <div class="content-item">
                    <h1>Buat Momen Impianmu Menjadi Kenyataan</h1>
                    <br /><br />
                    <button>Pesan Sekarang</button>
                </div>
                <img src="https://cdn.spillmoment.id/img/image 1.png" alt="Spillmoment picture" />
            </div>
        </div>

    </div>
    <!-- akhir dari box 1 -->

    <!-- ini adalah bagian box 2 -->
    <div class="box-p2">
        <div class="container">
            <div class="option-menu-box">
                <h1>Vendor Terbaru</h1>
                <a href="/vendor" class="showall">Lihat Semua</a>
            </div>
            <div class="wrapper-card">
                <div class="owl-carousel owl-theme" id="carousel-2">

                    <div class="card">
                        <img src="https://cdn.spillmoment.id/img/makanan.jpg" alt="Spillmoment picture" />
                        <!-- bagian content card -->
                        <div class="content-card">
                            <h1>Prasmanan Rendang & Sambal kentang</h1>
                            <h2>Rp 1.500.000</h2>
                            <p>Makanan</p>
                        </div>
                        <div class="footer-card">
                            <a href="#"><i class="far fa-map-marked-alt"></i> <span>Tenggarang</span></a>
                            <a href="#"><i class="far fa-heart"></i> <span>100</span></a>
                            <a href="#"><i class="far fa-star"></i> <span>5.0</span></a>
                        </div>
                    </div>
                    <div class="card">
                        <!-- bagian image card  -->
                        <img src="https://cdn.spillmoment.id/img/gaun2-vendor.jpg" alt="Spillmoment picture" />
                        <!-- bagian content card -->
                        <div class="content-card">
                            <h1>Gaun Pernikahan</h1>
                            <h2>Rp 500.000</h2>
                            <p>Gaun nikah & Tunangan</p>
                        </div>
                        <!-- bagian rate product card  -->
                        <div class="footer-card">
                            <a href="#"><i class="far fa-map-marked-alt"></i> <span>Tenggarang</span></a>
                            <a href="#"><i class="far fa-heart"></i> <span>100</span></a>
                            <a href="#"><i class="far fa-star"></i> <span>5.0</span></a>
                        </div>
                    </div>
                    <div class="card">
                        <!-- bagian image card  -->
                        <img src="https://cdn.spillmoment.id/img/bayi2.jpg" alt="Spillmoment picture" />
                        <!-- bagian content card -->
                        <div class="content-card">
                            <h1>Sewa Fotografer</h1>
                            <h2>Rp 1.500.000</h2>
                            <p>Fotografer</p>
                        </div>
                        <!-- bagian rate product card  -->
                        <div class="footer-card">
                            <a href="#"><i class="far fa-map-marked-alt"></i> <span>Tenggarang</span></a>
                            <a href="#"><i class="far fa-heart"></i> <span>100</span></a>
                            <a href="#"><i class="far fa-star"></i> <span>5.0</span></a>
                        </div>
                    </div>
                    <div class="card">
                        <!-- bagian image card  -->
                        <img src="https://cdn.spillmoment.id/img/makeup3-vendor.jpg" alt="Spillmoment picture" />
                        <div class="content-card">
                            <h1>Makeup modern</h1>
                            <h2>Rp 800.000</h2>
                            <p>Makeup</p>
                        </div>
                        <!-- bagian rate product card  -->
                        <div class="footer-card">
                            <a href="#"><i class="far fa-map-marked-alt"></i> <span>Tenggarang</span></a>
                            <a href="#"><i class="far fa-heart"></i> <span>100</span></a>
                            <a href="#"><i class="far fa-star"></i> <span>5.0</span></a>
                        </div>
                    </div>
                    {{-- </carousel> --}}
                </div>
                <div style="height: 100px"></div>
            </div>
        </div>
    </div>
    <!-- akhir dari box 2 -->

    <!-- ini adalah bagian box 3 -->
    <div class="box-p3">
        <div class="container">
            <div class="option-menu-box">
                <h1>Paket Promo</h1>
                <router-link to="" class="showall">Lihat semua</router-link>
            </div>
            <div class="wrapper-card">
                <div class="owl-carousel owl-theme" id="carousel-3">

                    {{--    <div class="card">
                        <!-- bagian image card -->
                        <div class="shine">
                            <img src="https://cdn.spillmoment.id/img/img-1.jpg" alt="Spillmoment.id" />
                        </div>
                        <!-- bagian content card -->
                        <div class="content-item">
          
                            <div class="flex-card">
                                <div class="col-card">
                                    <h2>Pernikahan Mewah Lisa & Bejo</h2>
                                </div>
                                <div class="col-card">
                                    <button>Detail</button>
                                </div>
                            </div>

                            <div class="event">
                                <h2>Acara</h2>
                            </div>
                        </div>
                        <div class="footer-card">
                            <div class="flex-footer-card">
                                <div class="col-card-ft">
                                    <a href="#"><i class="far fa-home"></i> <span>Sepatan</span></a>
                                </div>
                                <div class="col-card-ft">
                                    <a href="#"><i class="far fa-calendar"></i>
                                        <span> Desember 2021</span></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="card">
                        <!-- bagian image card -->
                        <div class="shine">
                            <img src="https://cdn.spillmoment.id/img/img-2.jpg" alt="Spillmoment.id" />
                        </div>
                        <!-- bagian content card -->
                        <div class="content-item">
                            <div class="flex-card">
                                <div class="col-card">
                                    <h2>Sewa Semalaman Hotel Yellow Be</h2>
                                </div>
                                <div class="col-card">
                                    <button>Detail</button>
                                </div>
                            </div>

                            <div class="cost">
                                <h2>Rp. 559.999</h2>
                                <h2><strike>Rp. 1.200.000 </strike></h2>
                            </div>


                        </div>

                    </div>

                    {{-- </carousel> --}}
                </div>
                <div style="height: 100px"></div>
            </div>
        </div>
    </div>
    <!-- akhir dari box 3 -->

    <!-- ini adalah bagian box 3 -->
    <div class="box-p3" style="margin-top: -100px">
        <div class="container">
            <div class="option-menu-box">
                <h1>Spillmoment</h1>
                <a href="" class="showall">Lihat semua</a>
            </div>
            <div class="wrapper-card">
                <div class="owl-carousel owl-theme" id="carousel-6">

                    <div class="card">
                        <!-- bagian image card -->
                        <div class="shine">
                            <img src="https://cdn.spillmoment.id/img/img-1.jpg" alt="Spillmoment.id" />
                        </div>
                        <!-- bagian content card -->
                        <div class="content-item">
                            <div class="flex-card">
                                <div class="col-card">
                                    <h2>Pernikahan Mewah Lisa & Bejo</h2>
                                </div>
                                <div class="col-card">
                                    <button>Detail</button>
                                </div>
                            </div>

                            <div class="event">
                                <h2>Acara</h2>
                            </div>
                        </div>
                        <div class="footer-card">
                            <div class="flex-footer-card">
                                <div class="col-card-ft">
                                    <a href="#"><i class="far fa-home"></i> <span>Sepatan</span></a>
                                </div>
                                <div class="col-card-ft">
                                    <a href="#"><i class="far fa-calendar"></i>
                                        <span> Desember 2021</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <!-- bagian image card -->
                        <div class="shine">
                            <img src="https://cdn.spillmoment.id/img/img-2.jpg" alt="Spillmoment.id" />
                        </div>
                        <!-- bagian content card -->
                        <div class="content-item">
                            <div class="flex-card">
                                <div class="col-card">
                                    <h2>Sewa Semalaman Hotel Yellow Be</h2>
                                </div>
                                <div class="col-card">
                                    <button>Detail</button>
                                </div>
                            </div>

                            <div class="cost">
                                <h2>Rp. 559.999</h2>
                                <h2><strike>Rp. 1.200.000 </strike></h2>
                            </div>


                        </div>
                        <div class="footer-card">
                            <div class="flex-footer-card">
                                <div class="col-card-ft">
                                    <a href="#"><i class="far fa-home"></i> <span>Sepatan</span></a>
                                </div>
                                <div class="col-card-ft">
                                    <a href="#"><i class="far fa-calendar"></i>
                                        <span> Desember 2021</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <!-- bagian image card -->
                        <img src="https://cdn.spillmoment.id/img/img-3.jpg" alt="Spillmoment.id" />
                        <!-- bagian content card -->
                        <div class="content-item">
                            <div class="flex-card">
                                <div class="col-card">
                                    <h2>Photografer keren</h2>
                                </div>
                                <div class="col-card">
                                    <button>Detail</button>
                                </div>
                            </div>

                            <div class="event">
                                <h2>Acara</h2>
                            </div>
                        </div>
                        <div class="footer-card">
                            <div class="flex-footer-card">
                                <div class="col-card-ft">
                                    <a href="#"><i class="far fa-home"></i> <span>Sepatan</span></a>
                                </div>
                                <div class="col-card-ft">
                                    <a href="#"><i class="far fa-calendar"></i>
                                        <span> Desember 2021</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <!-- bagian image card -->

                        <img src="https://cdn.spillmoment.id/img/img-1.jpg" alt="Spillmoment.id" />
                        <!-- bagian content card -->
                        <div class="content-item">
                            <div class="flex-card">
                                <div class="col-card">
                                    <h2>Pernikahan Mewah Lisa & Bejo</h2>
                                </div>
                                <div class="col-card">
                                    <button>Detail</button>
                                </div>
                            </div>


                            <div class="event">
                                <h2>Acara</h2>
                            </div>
                        </div>
                        <div class="footer-card">
                            <div class="flex-footer-card">
                                <div class="col-card-ft">
                                    <a href="#"><i class="far fa-home"></i> <span>Sepatan</span></a>
                                </div>
                                <div class="col-card-ft">
                                    <a href="#"><i class="far fa-calendar"></i>
                                        <span> Desember 2021</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- </carousel> --}}
                </div>
                <div style="height: 100px"></div>
            </div>
        </div>
    </div>
    <!-- akhir dari box 3 -->

    <!-- ini adalah bagian box 4 -->
    <div class="box-p4">
        <div class="container">
            <div class="option-menu-box">
                <h1>Kategori</h1>
                <router-link to="/kategory" class="showall">Lihat semua</router-link>
            </div>
            <div class="wrapper-card">
                <div class="owl-carousel owl-theme" id="carousel-4">


                    <a to="/dekorasi">
                        <div class="card">
                            <img src="https://cdn.spillmoment.id/img/dekorasi4.jpg" alt="Spillmoment picture" />
                            <div class="content-card">
                                <h2>Dekorasi</h2>
                            </div>
                        </div>
                    </a>
                    <a to="/makeup">
                        <div class="card">
                            <img src="https://cdn.spillmoment.id/img/makeup3-vendor.jpg" alt="Spillmoment picture" />
                            <div class="content-card">
                                <h2>Make up</h2>
                            </div>
                        </div>
                    </a>
                    <div class="card">
                        <a to="/gaunnikah">
                            <img src="https://cdn.spillmoment.id/img/gaun2-vendor.jpg" alt="Spillmoment picture" />
                            <div class="content-card">
                                <h2>Gaun nikah & Tunangan</h2>
                            </div>
                        </a>
                    </div>
                    <a to="/fotografer">
                        <div class="card">
                            <img src="https://cdn.spillmoment.id/img/bayi1.jpg" alt="Spillmoment picture" />
                            <div class="content-card">
                                <h2>Fotografer</h2>
                            </div>
                        </div>
                    </a>
                    {{-- </carousel> --}}
                </div>
                <div style="height: 50px"></div>
            </div>
        </div>
    </div>
    <!-- akhir dari box 4 -->

    <!-- ini adalah bagian box 5 -->

    <div class="box-p5">
        <div class="container">
            <div class="title-box">
                <h1>Apa kata mereka</h1>
            </div>
            <div class="wrapper-rate">
                <div class="owl-carousel owl-theme" id="carousel-5">

                    <!-- bagian rate -->
                    <div class="rate-box">
                        <div class="avatar-box">
                            <div class="avatar-profile">
                                <div class="col-avatar">
                                    <img src="https://cdn.spillmoment.id/img/women1.jpg" alt="Spillmoment picture" />
                                </div>
                                <div class="col-avatar">
                                    <h2>Nissa Sabyan</h2>
                                    <p>Vendor Suplier</p>
                                </div>
                                <div class="col-avatar">
                                    <div class="rate-star">
                                        <span class="star">
                                            <fa :icon="['fas', 'star']" /></span>
                                        <span class="star">
                                            <fa :icon="['fas', 'star']" /></span>
                                        <span class="star">
                                            <fa :icon="['fas', 'star']" /></span>
                                        <span class="star">
                                            <fa :icon="['fas', 'star']" /></span>
                                        <span class="star">
                                            <fa :icon="['fas', 'star']" /></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-rate">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Provident, doloribus impedit quisquam eius qui eaque hic vel,
                                nam ipsum sequi beatae, corporis delectus deleniti! Debitis,
                                fugiat. Quidem neque voluptate aliquam repudiandae, numquam
                                illo iste, labore maiores nisi impedit reiciendis sint nam
                                exercitationem, pariatur saepe. Placeat ratione dolorem iste
                                veniam recusandae neque tempore! Mollitia voluptatum quas ea,
                                et ducimus culpa.
                            </p>
                        </div>
                        <div class="height"></div>
                    </div>
                    <div class="rate-box">
                        <div class="avatar-box">
                            <div class="avatar-profile">
                                <div class="col-avatar">
                                    <img src="https://cdn.spillmoment.id/img/men1.jpg" alt="Spillmoment picture" />
                                </div>
                                <div class="col-avatar">
                                    <h2>Jhon Doe</h2>
                                    <p>Client Wedding</p>
                                </div>
                                <div class="col-avatar">
                                    <div class="rate-star">
                                        <span class="star">
                                            <fa :icon="['fas', 'star']" /></span>
                                        <span class="star">
                                            <fa :icon="['fas', 'star']" /></span>
                                        <span class="star">
                                            <fa :icon="['fas', 'star']" /></span>
                                        <span class="star">
                                            <fa :icon="['fas', 'star']" /></span>
                                        <span class="star">
                                            <fa :icon="['fas', 'star']" /></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-rate">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Provident, doloribus impedit quisquam eius qui eaque hic vel,
                                nam ipsum sequi beatae, corporis delectus deleniti! Debitis,
                                fugiat. Quidem neque voluptate aliquam repudiandae, numquam
                                illo iste, labore maiores nisi impedit reiciendis sint nam
                                exercitationem, pariatur saepe. Placeat ratione dolorem iste
                                veniam recusandae neque tempore! Mollitia voluptatum quas ea,
                                et ducimus culpa.
                            </p>
                        </div>
                        <div class="height"></div>
                    </div>
                </div>
                {{-- </carousel> --}}
            </div>
        </div>
    </div>
</div>
</div>
@endsection


@push('script')
@include('web.home.carousel')
@endpush
