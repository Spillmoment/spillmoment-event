@include('admin.layouts.style')

<title>Spillmoment | Forgot Password</title>

<body class="bg-soft">
    <main>

        <!-- Section -->
        <section class="vh-lg-100 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center form-bg-image"
                    data-background-lg="../../assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div
                            class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Reset Password</h1>

											<!-- Validation Errors -->
											@if($errors->any())
												<h4>{{$errors->first()}}</h4>
											@endif

                            </div>
                            <form method="POST" action="{{ route('admin.password.update') }}">
										@csrf
	
										<!-- Password Reset Token -->
										<input type="hidden" name="token" value="{{ $request->route('token') }}">
	
										 <div class="auth-body">
											  <p>Email</p>
											  <div class="auth-input-box">
													<input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email', $request->email) }}" required autofocus />
											  </div>
	
											  <br />
											  <p>Password</p>
											  <div class="auth-input-box">
													<div class="input-box-password">
														 <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="" id="password" required />
													</div>
											  </div>
											  
											  <br />
											  <p>Confirm Password</p>
											  <div class="auth-input-box">
													<div class="input-box-password">
														 <input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation" placeholder="" id="password_confirmation" required />
													</div>
											  </div>
	
										 </div>
										 <div class="wrap-button">
											  <br />
											  <button type="submit" class="btn btn-block btn-primary">Reset Password</button>
											  <br /><br />
										 </div>
									</form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    @include('admin.layouts.script')

</body>


