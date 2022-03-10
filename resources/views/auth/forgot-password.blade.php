@extends('layouts.auth')

@section('title','Spillmoment | Lupa Password')
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
                            <h2>Halaman Lupa Password</h2>
                            <p>lupa password, Silahkan masukkan email anda yang sudah terdaftar</p>
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
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>{{$errors->first()}}</strong>
                        </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="auth-body">
                                <p>Email</p>
                                <div class="auth-input-box">
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                        autofocus placeholder="Masukkan Email" />
                                </div>
                            </div>
                            <div class="wrap-button">
                                <br />
                                <button>Konfirmasi Email</button>
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
