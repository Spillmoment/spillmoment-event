@extends('layouts.auth')

@section('title','Spillmoment | Register User')
@section('content')
<div id="auth-register">
    <div class="box-v1">
        <div class="flex-box">
            <div class="col">
                <div class="col-body">
                    <div class="auth-box">
                        <div class="auth-icon-brand">
                            <img src="{{ asset('img/logo-spillmoment.png') }}" alt="" />
                        </div>
                        <div class="auth-title">
                            <h2>Daftar</h2>
                            <p>Daftarkan akun sebagai member dari kami.</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="auth-body">
                                <p>Masukan Nama</p>
                                <div class="auth-input-box">
                                    <input type="text" name="" id="nama" placeholder="nama kamu?" required />
                                </div>
                                <br />
                                <p>Alamat Email</p>
                                <div class="auth-input-box">
                                    <input type="email" name="" id="email" placeholder="Masukan alamat email yang ada"
                                        required />
                                </div>
                                <br />
                                <p>Nomor Ponsel (opsional)</p>
                                <div class="auth-input-box">
                                    <input type="number" name="" id="phone" placeholder="contoh: +6208974xxxx"
                                        required />
                                </div>
                                <br />
                                <p>Jenis kelamin</p>
                                <div class="auth-input-box">
                                    <div class="flex-input">
                                        <select name="" id="select-input gender">
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                        <button>
                                            <fa :icon="['fas', 'caret-down']" />
                                        </button>
                                    </div>
                                </div>
                                <br />
                                <p>Tanggal lahir</p>
                                <div class="auth-input-box">
                                    <input type="date" name="" id="born_date" placeholder="" required />
                                </div>
                                <br />
                                <p>Buat Kata sandi</p>
                                <div class="auth-input-box">
                                    <div class="input-box-password">
                                        <input type="password" name="katasandi" placeholder=""
                                            v-on:keyup="isGood(this.value)" id="passwordInput" required />
                                        <label for="password-function" class="checkbox-pass">
                                            <input type="checkbox" name="" id="password-function" />
                                            <div class="icon-eye1 icon">
                                                <fa :icon="['fas', 'eye-slash']" />
                                            </div>
                                            <div class="icon-eye2 icon">
                                                <fa :icon="['fas', 'eye']" />
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <small id="password-text"></small>
                            </div>


                        </form>

                        <div class="wrap-button">
                            <br />
                            <a href="/forgot-password">Lupa kata sandi?</a>
                            <button @click="reg">Lanjutkan</button>
                            <br /><br />
                        </div>
                        <p id="hint">
                            Sudah punya akun terdaftar?<router-link to="/login"><b>Masuk!</b></router-link>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    var name = document.querySelector("#nama").value;
    var email = document.querySelector("#email").value;
    var phone = document.querySelector("#phone").value;
    var password = document.querySelector("#passwordInput").value;
    var gender = document.querySelector("#gender").value;
    var borndate = document.querySelector("#born_date").value;

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
    },

</script>
@endpush
