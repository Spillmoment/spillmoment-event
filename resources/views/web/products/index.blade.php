@extends('layouts.app')

@section('title', 'Halaman Produk - Spillmoment')
@section('content')

<div class="vendor">

    <div class="box-v1">
        <div class="head-box">
            <div class="container">
                <h2>Daftar Produk</h2>
            </div>
        </div>
        <div class="container">
            <div class="select-box">
                <div class="flex">
                    <div class="col">
                        <select name="" id="">
                            <option value="default">Provinsi</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="" id="">
                            <option value="default">Kategori</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="" id="">
                            <option value="default">Harga</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col">
                        <button>Cari Product</button>
                    </div>
                </div>
            </div>
            <div class="wrapper-card">
                <div class="card">
                    <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/ramen-jepang_20150706_152514.jpg"
                        alt="" />

                    <!-- bagian content card -->
                    <div class="content-card">
                        <h1>Mie Ramen Rasa Soto Babi</h1>
                        <h2>Rp.500.000</h2>
                        <p>Makanan</p>
                    </div>
                    <div class="footer-card">
                        <a href="#">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i><span>Konogakure</span>
                            <i class="fas fa-heart" aria-hidden="true"></i><span>100</span>
                            <i class="fas fa-star" aria-hidden="true"></i><span>5.0</span>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>

@endsection
