@extends('layouts.auth')

@section('title','Spillmoment | Reset Password')
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
                            <h2>Reset Password</h2>
                            <p>Silahkan reset password anda</p>
                        </div>

                        <!-- Validation Errors -->
                        @if($errors->any())
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>{{$errors->first()}}</strong>
                        </div>
                        @endif

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="auth-body">
                                <p>Email</p>
                                <div class="auth-input-box">
                                    <input type="email" name="email" id="email"
                                        value="{{ old('email', $request->email) }}" required autofocus />
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
                                        <input type="password" name="password_confirmation" placeholder=""
                                            id="password_confirmation" required />
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
