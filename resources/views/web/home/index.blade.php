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
                <h1>Product Terbaru</h1>
                <a href="{{ route('product.index') }}" class="showall">Lihat Semua</a>
            </div>
            <div class="wrapper-card">
                <div class="owl-carousel owl-theme" id="carousel-2">

                    @forelse ($product as $item)
                    <div class="card">
                        <img height="250px" src="{{ asset('uploads/product/'. $item->photos) }}"
                            alt="Spillmoment picture" />
                        <!-- bagian content card -->
                        <div class="content-card">
                            <h1>{{ $item->name }}</h1>
                            <h2>Rp {{ $item->price }}.000</h2>
                            <p>{{ $item->category->name }}</p>
                        </div>
                        <div class="footer-card">
                            <a href="#"><i class="far fa-map"></i> <span>{{ $item->vendor->address }}</span></a>
                            <a href="#"><i class="far fa-heart"></i> <span>100</span></a>
                            <a href="#"><i class="far fa-star"></i> <span>5.0</span></a>
                        </div>
                    </div>
                    @empty
                    <h3>Produk Kosong</h3>
                    @endforelse

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
                <h1>Spillmoment</h1>
                <a href="" class="showall">Lihat semua</a>
            </div>
            <div class="wrapper-card">
                <div class="owl-carousel owl-theme" id="carousel-6">

                    @forelse ($spill as $item)
                    <div class="card">
                        <!-- bagian image card -->
                        <div class="shine">
                            <img height="250px" src="{{ asset('uploads/spillmoment/' . $item->image) }}"
                                alt="Spillmoment.id" />
                        </div>
                        <!-- bagian content card -->
                        <div class="content-item">

                            <div class="flex-card">
                                <div class="col-card">
                                    <h2>{{ $item->title }}</h2>
                                </div>
                                <div class="col-card">
                                    <button>Detail</button>
                                </div>
                            </div>

                            <div class="event">
                                <h2>{{ $item->vendor->name }}</h2>
                            </div>
                        </div>
                        <div class="footer-card">
                            <div class="flex-footer-card">
                                <div class="col-card-ft">
                                    <a href="#"><i class="far fa-home"></i>
                                        <span>{{ $item->vendor->address }}</span></a>
                                </div>
                                <div class="col-card-ft">
                                    <a href="#"><i class="far fa-calendar"></i>
                                        <span> {{ $item->created_at->format('d F Y') }}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse

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
                <a href="{{ route('category.index') }}" class="showall">Lihat semua</a>
            </div>
            <div class="wrapper-card">
                <div class="owl-carousel owl-theme" id="carousel-4">

                    @forelse ($category as $item)
                    <a href="{{ route('category.detail', $item->id) }}">
                        <div class="card">
                            <img height="250px" src="{{ asset('uploads/category/' . $item->image) }}"
                                alt="Spillmoment picture" />
                            <div class="content-card">
                                <h2>{{ $item->name }}</h2>
                            </div>
                        </div>
                    </a>
                    @empty
                    <h3>Kategori Kosong</h3>
                    @endforelse

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
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span class="star">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <span class="star">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <span class="star">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <span class="star">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
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
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span class="star">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <span class="star">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <span class="star">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <span class="star">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
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
