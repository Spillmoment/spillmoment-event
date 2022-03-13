@extends('layouts.app')

@section('title','Spillmoment | Daftar Events')
@section('content')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/event.css') }}">

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
                            {{-- <select name="kategori-event" id="kategori-event" class="select-combox">
                                @foreach ($category as $item)
                                <option value="{{ $item->slug }}">{{ $item->name }}</option>
                                @endforeach
                            </select> --}}
									 <select name="kategori-event" id="kategori-event" class="select-combox"></select>
                        </div>
                        <div class="combo-box">
                            <p>Status Event</p><br>
                            <select name="status-event" id="status-event" class="select-combox">
                                @foreach ($status as $item)
                                <option value="{{ $item->status }}">{{ $item->status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="combo-box">
                            <p>Tipe Event</p><br>
                            <select name="type-event" id="type-event" class="select-combox">
                                @foreach ($type as $item)
                                <option value="{{ $item->type }}">{{ $item->type }}</option>
                                @endforeach
                            </select>
                        </div>

							</div>
							<div class="row mt-2">
								<div class="d-grid gap-2 col-4 mx-auto">
									<button id="btn-reset-filter" class="btn" style="background-color: #e4b391">
										Bersihkan
									</button>
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
                                <i class="fas fa-calendar-alt"></i> <label for="">
                                    {{ \Carbon\Carbon::parse($item->event_date)->isoFormat('dddd, D MMMM Y') }}
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {

		let categoryStorage = localStorage.getItem('category');
		let statusStorage = localStorage.getItem('status');
		let typeStorage = localStorage.getItem('type');

		// Set default option if storage exists
		const str2 = categoryStorage.charAt(0).toUpperCase() + categoryStorage.slice(1);
		//   $("#kategori-event").html(`<option value=${localStorage.getItem('category')}> ${str2} </option>`)
		  $('#kategori-event').append(`<option value="${categoryStorage}"> ${str2} </option>`);
		  $('#status-event').val(statusStorage);
		  $('#type-event').val(typeStorage);
		  // ----------------------------------------

		$('#kategori-event').select2({
			placeholder: 'Kategori...',
			ajax: {
			url: "{{ route('event.kategori.getAutocomplte') }}",
			dataType: 'json',
			delay: 250,
			processResults: function (data) {
				return {
					results:  $.map(data, function (item) {
					return {
						text: item.name,
						id: item.slug
					}
					})
				};
			},
			cache: true
			}
		});

		$("#kategori-event").change(function () {
			let categoryValue = $('#kategori-event').val();
			localStorage.setItem('category', categoryValue);

			send()
		});

		$("#status-event").change(function () {
			let statusValue = $('#status-event').val();
			localStorage.setItem('status', statusValue);

			send()
		});

		$("#type-event").change(function () {
			let typeValue = $('#type-event').val();
			localStorage.setItem('type', typeValue);

			send()
		});
		
		$("#btn-reset-filter").click(function () {
			
			localStorage.removeItem("category");
			localStorage.removeItem("status");
			localStorage.removeItem("type");


			send()
		});

		function send() {
			$.ajax({
					type: 'GET',
					url: "{{ route('event.filter') }}",
					data: {
					category: localStorage.getItem('category'),
					status: localStorage.getItem('status'),
					type: localStorage.getItem('type'),
					},
					success: function (data) {
					if (localStorage.getItem('category') === null) document.getElementById('kategori-event').value=null;
					if (localStorage.getItem('status') === null) document.getElementById('status-event').value=null;
					if (localStorage.getItem('type') === null) document.getElementById('type-event').value=null;
					
					$('#card-event').html(data);
					if (data == '') {
						$('#card-event').html('<h6 style="color: #e0a173" class="text-center"><strong>Event tidak ditemukan, mungkin akan hadir dalam beberapa waktu mendatang.</strong></h6>');
					}
					}
			})
		}

		if (categoryStorage !== null || statusStorage !== null || typeStorage !== null) send()
  
		

    });

</script>
@endpush
