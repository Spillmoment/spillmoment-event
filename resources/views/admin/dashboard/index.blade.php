@extends('admin.layouts.app')

@section('title','Spillmoment - Statistik Dashboard')
@section('content')

@push('style')
<link rel="stylesheet" href="{{ asset('assets/backend/css/card.css') }}">
@endpush

<div class="py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Halaman Dashboard</li>
        </ol>
    </nav>

</div>

<div class="container">
    <div class="row justify-content-md-center">

        <div class="col-md-4 col-xl-3">
            <div class="cards bg-c-blue order-cards">
                <div class="cards-block mt-2">
                    <h6 class="m-b-20">Kategori Event</h6>
                    <h2 class="text-right"><i class="fas fa-tag f-left"></i><span>{{ $category }}</span></h2>
                    <p class="m-b-0 text-right mt-2">
                        <a href="{{ route('admin.kategori.index') }}" class="text-decoration-none">
                            Detail
                            <span class="fas fa-arrow-right fa-sm"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="cards bg-c-green order-cards">
                <div class="cards-block mt-2">
                    <h6 class="m-b-20">Speaker Event</h6>
                    <h2 class="text-right"><i class="fas fa-users f-left"></i><span>{{ $speaker }}</span></h2>
                    <p class="m-b-0 text-right mt-2">
                        <a href="{{ route('admin.speaker.index') }}" class="text-decoration-none">
                            Detail
                            <span class="fas fa-arrow-right fa-sm"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="cards bg-c-yellow order-cards">
                <div class="cards-block mt-2">
                    <h6 class="m-b-20">Event</h6>
                    <h2 class="text-right"><i class="fas fa-folder f-left"></i><span>{{ $event }}</span></h2>
                    <p class="m-b-0 text-right mt-2">
                        <a href="{{ route('admin.events.index') }}" class="text-decoration-none">
                            Detail
                            <span class="fas fa-arrow-right fa-sm"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-xl-3">
            <div class="cards bg-c-pink order-cards">
                <div class="cards-block mt-2">
                    <h6 class="m-b-20">User Registrasi</h6>
                    <h2 class="text-right"><i class="fas fa-user-plus f-left"></i><span>{{ $users }}</span></h2>
                    <p class="m-b-0 text-right mt-2">
                        <a href="{{ route('admin.event-register.index') }}" class="text-decoration-none">
                            Detail
                            <span class="fas fa-arrow-right fa-sm"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>


    </div>
    <div class="row justify-content-md-center">
        <div class="container">
            <h5 class="my-3 text-primary">User Register Event Terbaru</h5>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Event</th>
                        <th>Speaker</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @forelse ($user_event as $item)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            <a href="{{ route('admin.event-register.show', $item->id) }}"
                                class="text-primary font-weight-bold">
                                {{ $item->users->name }}
                            </a>
                        </td>
                        <td>
                            <span class="font-weight-normal">{{ $item->users->email }}</span>
                        </td>
                        <td><span class="font-weight-normal">{{ $item->event->title }}</td>
                        <td><span class="font-weight-normal">{{ $item->event->speaker->name }}</td>
                    </tr>
                    @empty
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
