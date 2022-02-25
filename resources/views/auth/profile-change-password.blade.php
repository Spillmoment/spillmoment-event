@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change Password with Current Password Validation</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.password.store') }}">
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
                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
                             <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" />
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>  
                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" />
                            </div>
                        </div>  

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Password
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