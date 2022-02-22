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
                            <h2>Confirm Password</h2>
                            <p>This is a secure area of the application. Please confirm your password before continuing.</p>
                        </div>

								@error('password')
										<span class="text-red-500 text-xs italic" role="alert">
											{{ $message }}
										</span>
								@enderror
								
                        <form method="POST" action="{{ route('password.confirm') }}">
									@csrf
                            <div class="auth-body">
                                <p>Password</p>
                                <div class="auth-input-box">
                                    <input id="password" type="password"
												name="password"
												required autocomplete="current-password" />
                                </div>
                            </div>
									 <div class="wrap-button">
										  <br />
										  <button>Confirm</button>
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
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
