@extends('layouts.app')

@section('title','Spillmoment | Daftar Events')
@section('content')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/event.css') }}">
@endpush

<div class="container">

    <div class="row mt-3">
        <div id="event">
            <div class="box-v1">
                <div class="container">

                    <div class="title-box">
                        <h2>Daftar Event</h2>
                    </div>
                    <br>
                    <div class="wrapper-combo-box">
                        <div class="combo-box">
                            <p>Kategori Event</p><br>
                            <select name="kategori-event" id="kategori-event" class="select-combox">
                                <option>- Pilih Kategori Event -</option>
                                @foreach ($category as $item)
                                <option value="{{ $item->slug }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="combo-box">
                            <p>Status Event</p><br>
                            <select name="status-event" id="status-event" class="select-combox">
                                <option>- Pilih Status Event -</option>
                                @foreach ($status as $item)
                                <option value="{{ $item->status }}">{{ $item->status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="combo-box">
                            <p>Tipe Event</p><br>
                            <select name="type-event" id="type-event" class="select-combox">
                                <option>- Pilih Tipe Event -</option>
                                @foreach ($type as $item)
                                <option value="{{ $item->type }}">{{ $item->type }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-3 row-cols-1 row-cols-md-3 g-4" id="card-event">

        @forelse ($events as $item)
        <div class="col">
            <div class="card">
                <img style="width: 100%;
                box-sizing: border-box;
                height: 200px;
                -o-object-fit: cover;
                object-fit: cover;" src="{{ asset('uploads/events/' . $item->photo) }}" class="card-img-top"
                    alt="{{ $item->title }}">
                <div class="card-body">
                    <a href="{{ route('event.detail', $item->slug) }}" class="text-decoration-none">
                        <h4 class="card-title" style="font-size: 20px;
                    color: #333;">{{ $item->title }}</h4>
                    </a>
                    <div class="wrapper-card">
                        <div class="content-card">
                            <div class="badge-wrap mb-1 mt-3 text-light">
                                @if ($item->started == '0')
                                <button class="badge">
                                    <i class="fas fa-stopwatch"></i> <label> Belum dimulai</label>
                                </button>
                                @else
                                <button class="badge">
                                    <i class="fas fa-stopwatch"></i> <label> Telah dimulai</label>
                                </button>
                                @endif
                                @if ($item->type == 'paid')
                                <button class="badge paid">
                                    <i class="fas fa-wallet"></i> <label>Berbayar</label>
                                </button>
                                @else
                                <button class="badge paid">
                                    <i class="fas fa-wallet"></i> <label>Gratis</label>
                                </button>
                                @endif
                            </div>

                            <br>
                            <span class="info-tanggal">
                                <i class="fas fa-calendar-alt"></i> <label
                                    for="">{{ $item->event_date->format('d F Y') }}
                                </label>
                            </span><br>
                            <span class="info-jam">
                                <i class="fas fa-clock"></i>
                                <label for="">{{ $item->start_time->format('h:i') }}</label> WIB
                            </span><br>
                            <span class="info-anggota">
                                <i class="fas fa-laptop"></i>
                                @if ($item->status == 'offline')
                                <label for="">Offline</label>
                                @else
                                <label for="">Online</label>
                                @endif
                            </span>
                            <br>
                        </div>
                    </div>
                    <br>
                    <a href="{{ route('event.detail', $item->slug) }}" class="btn btn-event w-100">Detail </a>

                </div>
            </div>
        </div>
        @empty
        <div>
            <h3>Event Sedang Kosong</h3>
        </div>
        @endforelse

    </div>
</div>


@endsection

@push('script')
	 <script>
		$(document).ready(function(){
			$('#kategori-event').val(localStorage.getItem('category'));
			$('#status-event').val(localStorage.getItem('status'));
			$('#type-event').val(localStorage.getItem('type'));

			$("#kategori-event").change(function(){
				let categoryValue = $('#kategori-event').val();
				localStorage.setItem('category', categoryValue);

				send()
			});
			
			$("#status-event").change(function(){
				let statusValue = $('#status-event').val();
				localStorage.setItem('status', statusValue);

				send()
			});

			$("#type-event").change(function(){
				let typeValue = $('#type-event').val();
				localStorage.setItem('type', typeValue);

				send()
			});
			
			function send() {
				let categoryStorage = localStorage.getItem('category');
				let statusStorage = localStorage.getItem('status');
				let typeStorage = localStorage.getItem('type');

				$.ajax({
					type:'GET',
					url:"{{ route('event.filter') }}",
					data:{
						category: categoryStorage,
						status: statusStorage,
						type: typeStorage,
					},
					success:function(data)
					{
						$('#card-event').html(data);
						console.log(data);
					}
				})
			}
		});
	 </script>
@endpush