@extends('layouts.app')

@section('title','Detail Produk - Spillmoment')

@section('content')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/product.css') }}">
@endpush

<div class="container">
    <div class="row my-5 text-center pt-5 pb-5">
        <h3>test</h3>
    </div>
    <div class="row my-5 pt-5 pb-5 justify-content-center">
        <hr class="garis">
        <div class="col-md-2 my-3">
            <img class="thumbnail rounded-circle"
                src="https://kwikku.us/uploads/public/images/listicle/header/75187-listicle-20171227204602.jpg" alt=""
                srcset="">
        </div>
        <div class="col-md-4 my-3">
            <span class="title fs-5">Make up Natural & Modern</span>
            <span class="fw-normal vendors fs-6">Sari Salon</span>
            <span class="fw-bolder price fs-4">Rp. 1.500.000</span>
            <span class="tag">Makeup</span>
            <span><i class="fa fa-map-marker-alt map-icon" aria-hidden="true"></i> Tenggarang</span>
            <span><i class="fa fa-star star-icon" aria-hidden="true"></i> 5.0</span>

            <div class="d-flex flex-row bd-highlight mb-3 mt-2 test">
                <div class="p-2 bd-highlight">600
                    <br>
                    Love
                </div>
                <div class="p-2 bd-highlight">600
                    <br>
                    View
                </div>
                <div class="p-2 bd-highlight">600
                    <br>
                    Preview
                </div>
            </div>


        </div>
        <div class="col-md-3 my-3">
            <a class="btn btn-primary btn-sm " href="#" role="button">Link</a>
        </div>
        <div class="col-md-3 my-3">
            <a class="btn btn-primary btn-sm " href="#" role="button"> aa</a>
        </div>
        <hr class="garis">
    </div>
    <div class="row my-5">

    </div>


</div>


@endsection
