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
                                <h1 class="mb-0 h3">Forgot Password</h1>
										  <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>


											<!-- Session Status -->
											@if (Session::has('status'))
												<div class="text-success">
													<ul>
															<li>{{ Session::get('status') }}</li>
													</ul>
												</div>
											@endif

											<!-- Validation Errors -->
											@if($errors->any())
												<h6 class="text-danger">{{$errors->first()}}</h6>
											@endif

                            </div>
                            <form method="POST" action="{{ route('admin.password.email') }}">
										@csrf
										 <div class="auth-body">
											  <p>Email</p>
											  <div class="auth-input-box">
													<input type="email" name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Masukan Email" id="email" value="{{ old('email') }}" autofocus
                                            required>
											  </div>
										 </div>
										 <div class="wrap-button">
											  <br />
											  <button type="submit" class="btn btn-block btn-primary">Email Password Reset Link</button>
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

