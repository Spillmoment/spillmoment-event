@extends('layouts.auth')

@section('title','Spillmoment | Login User')
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

                        <!-- Session Status -->
                        @if (Session::has('status'))
                        <div class="alert alert-success">
                            <h6>{{ Session::get('status') }}</h6>
                        </div>
                        @endif

                        <!-- Validation Errors -->
                        @if($errors->any())
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>{{$errors->first()}}</strong>
                        </div>
                        @endif

                        <form method="POST" id="login-form" action="" >
                            @csrf
                            <div class="auth-body">
                                <p>Alamat Email</p>
                                <div class="auth-input-box">
                                    <input type="text" name="email" id="userphonemail" placeholder="Alamat Email"
                                        required autofocus value="{{ old('email') }}" />
                                </div>
                                <br />
                                <p>Kata Sandi</p>
                                <div class="auth-input-box">
                                    <div class="input-box-password">
                                        <input type="password" name="password" placeholder="Kata Sandi"
                                            id="passwordInput" required />
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
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Lupa kata sandi?</a>
                                @endif
                                <button>Masuk</button>
                                <br /><br />
                            </div>
                        </form>

                        <p id="hint">
                            Apakah anda belum mendaftar?<a href="/register">
                                <span style="margin-rigth: 5px"><b>Daftar Sekarang</b></span>
                            </a>
                        </p>
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
	document.getElementById("login-form").action = `/login?page=${document.referrer}`;
	
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
