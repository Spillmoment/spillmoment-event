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
                            <h2>Forgot Password</h2>
                            <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                        </div>

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
									<h4>{{$errors->first()}}</h4>
								@endif

                        <form method="POST" action="{{ route('password.email') }}">
									@csrf
                            <div class="auth-body">
                                <p>Email</p>
                                <div class="auth-input-box">
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus />
                                </div>
                            </div>
									 <div class="wrap-button">
										  <br />
										  <button>Email Password Reset Link</button>
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

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
