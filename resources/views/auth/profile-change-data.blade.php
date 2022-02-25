@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update your profile.</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.data.store') }}">
                        @csrf
								@method('put')

								 <!-- Session Status -->
								@if (Session::has('status'))
									<div class="alert alert-success">
										<ul>
												<li>{{ Session::get('status') }}</li>
										</ul>
									</div>
								@endif

								<!-- Validation Errors -->
								@if($errors->any())
									<h4 class="text-danger">{{$errors->first()}}</h4>
								@endif

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>
                             <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                            <div class="col-md-6">
										 <select name="gender" id="gender">
											 <option value="pria" {{ $user->gender == 'pria' && 'selected' }}>Pria</option>
											 <option value="wanita" {{ $user->gender == 'wanita' && 'selected' }}>Wanita</option>
										 </select>
                            </div>
                        </div> 

                        <div class="form-group row">
									<label for="phone" class="col-md-4 col-form-label text-md-right">Telephone</label>
									 <div class="col-md-6">
										 <input id="phone" type="text" class="form-control" name="phone" value="{{ $user->phone }}" >
									</div>
							  </div>

                        <div class="form-group row">
									<label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
									 <div class="col-md-6">
										 <textarea name="address" id="address" cols="30" rows="10">{{ $user->address }}</textarea>
									</div>
							  </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Profile
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection