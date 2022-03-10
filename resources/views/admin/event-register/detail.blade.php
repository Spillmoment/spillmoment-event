@extends('admin.layouts.app')

@section('title', 'Admin - Detail Registrasi Event')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-12 mb-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-3">
                <div class="d-block mb-4 mb-md-0">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.event-register.index') }}">Event</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Registrasi Event</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <div class="card border-light shadow-sm components-section mt-3">
                <div class="card-header">
                    <h4 class="card-title">Detail Registrasi User {{ $event->users->name }}</h4>
                </div>
                <div class="row">
                    <div class="col-md-3 mx-2">
                        <a href="{{ route('admin.event-register.index') }}" class="btn btn-primary btn-sm"> <i
                                class="fa fa-angle-left" aria-hidden="true"></i> Kembali</a>
                    </div>

						  
						</div>

						@if($errors->any())
						<div class="alert alert-danger text-light" role="alert">
							<strong>
								{{$errors->first()}}
							</strong>
						</div>
						@endif

						@if(session()->has('success'))
						<div class="alert alert-success text-primary" role="alert">
							<strong>
								{{ session()->get('success') }}
							</strong>
						</div>
						@endif

                <div class="row">
                    <div class="card-body">
                        <style>
                            th,
                            td {
                                font-weight: 600;
                            }

                        </style>
                        <table class="table table-striped">

                            <tr>
                                <th>Nama</th>
                                <td>{{ $event->users->name }}</td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td>{{ $event->users->email }}</td>
                            </tr>

                            <tr>
                                <th>Foto</th>
                                <td>
                                    @isset($event->users->photo)
                                    <img src="{{ url('uploads/users/' . $event->users->photo) }}" alt=""
                                        class="img-thumbnail mb-2" width="150px">
                                    <br>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Lihat
                                    </button>
                                    @else
                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                                        alt="" class="img-thumbnail mb-2" width="150px">
                                    @endisset
                                </td>
                            </tr>

									 <tr>
										<th>Konfirmasi Pembayaran</th>
										<td>
											@if ($event->pay_status == 'pending')
												<small style="color: rgb(150, 150, 150)"><em>** Peserta belum terkonfirmasi</em></small>
												<br>
												<form action="{{ route('admin.confirm-event', [$event->id, 'success']) }}" method="post">
													@csrf
													@method('put')
													<button class="btn btn-outline-dark" type="submit">Confirm</button>
												</form>
											@elseif($event->pay_status == 'success')
												<small class="text-success">** Peserta sudah dikonfirmasi, tekan tombol kuning untuk membatalkan</small>
												<br>
												<form action="{{ route('admin.confirm-event', [$event->id, 'pending']) }}" method="post">
													@csrf
													@method('put')
													<button class="btn btn-warning"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation" viewBox="0 0 16 16">
														<path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z"/>
													 </svg> Cancel</button>
												</form>
											@else
												<small style="color: rgb(150, 150, 150)"><em>** Tidak perlu konfirmasi dengan event type FREE</em></small>
											@endif
											
										</td>
									 </tr>


                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $event->users->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <img src="{{ url('uploads/users/' . $event->users->photo) }}">
            </div>
        </div>
    </div>
</div>
@endsection
