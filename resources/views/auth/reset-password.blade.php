@extends('layouts.auth')

@section('content')
<div id="auth-login">
    <div class="box-v1">
        <div class="flex-box">
            <div class="col">
                <div class="col-body">
                    <div class="auth-box">
                        <div class="auth-icon-brand">
                            <img src="{{ asset('img/logo-spillmoment.png') }}" alt="" />
                        </div>
                        <div class="auth-title">
                            <h2>Login</h2>
                            <p>Masuk dengan akun yang sudah terdaftar.</p>
                        </div>

								<!-- Validation Errors -->
								@if($errors->any())
									<h4>{{$errors->first()}}</h4>
								@endif
								
                        <form method="POST" action="{{ route('password.update') }}">
									@csrf

									<!-- Password Reset Token -->
									<input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="auth-body">
                                <p>Email</p>
                                <div class="auth-input-box">
                                    <input type="email" name="email" id="email" value="{{ old('email', $request->email) }}" required autofocus />
                                </div>

                                <br />
                                <p>Password</p>
                                <div class="auth-input-box">
                                    <div class="input-box-password">
                                        <input type="password" name="password" placeholder="" id="password" required />
                                        <label for="password-function" class="checkbox-pass">
                                            <input type="checkbox" name="" id="password-function" />
                                            <div class="icon-eye1 icon">
                                                <i class="fas fa-eye-slash"></i>
                                            </div>
                                            <div class="icon-eye2 icon">
                                                <i class="fas fa-eye"></i>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                
										  <br />
                                <p>Confirm Password</p>
                                <div class="auth-input-box">
                                    <div class="input-box-password">
                                        <input type="password" name="password_confirmation" placeholder="" id="password_confirmation" required />
                                        <label for="password-function" class="checkbox-pass">
                                            <input type="checkbox" name="" id="password-function" />
                                            <div class="icon-eye1 icon">
                                                <i class="fas fa-eye-slash"></i>
                                            </div>
                                            <div class="icon-eye2 icon">
                                                <i class="fas fa-eye"></i>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                            </div>
									 <div class="wrap-button">
										  <br />
										  <button>Reset Password</button>
										  <br /><br />
									 </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    var user = document.querySelector("#userphonemail").value;
    var pass = document.querySelector("#password").value;

    var showHidepass = document.querySelector("#password-function");
    var iconEyeOne = document.querySelector(".icon-eye1");
    var iconEyeTwo = document.querySelector(".icon-eye2");
    var passInput = document.querySelector("#passwordInput");
    showHidepass.addEventListener("click", function () {
        if (showHidepass.checked == true) {
            iconEyeOne.style.display = "none";
            iconEyeTwo.style.display = "block";
            passInput.type = "text";
        } else {
            iconEyeOne.style.display = "block";
            iconEyeTwo.style.display = "none";
            passInput.type = "password";
        }
    });

</script>
@endpush


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
