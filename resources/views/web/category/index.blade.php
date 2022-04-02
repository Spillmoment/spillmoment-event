@extends('layouts.app')

@section('title', 'Halaman Kategori - Spillmoment')
@section('content')

<div class="kategory">

    <div class="box-v1">
        <div class="container">
            <div class="head-box">
                <h2>Kategori</h2>
                <p>Temukan kategori produk sesuai dengan keinginanmu.</p>
            </div>
            <div>
                <div class="wrapper-card">
                    <div class="card">
                        <a>
                            <img src="{{ asset('uploads/category/dekorasi.jpg') }}" alt="" />
                            <div class="content-card">
                                <h2>Makanan & Minuman</h2>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
