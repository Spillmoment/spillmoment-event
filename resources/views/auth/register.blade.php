@extends('layouts.auth')

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
                                    <input type="text" name="name" id="nama" placeholder="nama kamu?"  value="{{ old('name') }}" />
											</div>
											@error('name')
										  <small style="color: rgb(255, 78, 78); font-weight: bold">{{ $message }}</small>
                                @enderror

                                <br />
                                <p>Alamat Email</p>
                                <div class="auth-input-box">
                                    <input type="email" name="email" id="email" placeholder="Masukan alamat email yang ada" value="{{ old('email') }}" />
                                </div>
										  @error('email')
										  <small style="color: rgb(255, 78, 78); font-weight: bold">{{ $message }}</small>
                                @enderror

                                <br />
                                <p>Nomor Ponsel (opsional)</p>
                                <div class="auth-input-box">
                                    <input type="number" name="phone" id="phone" placeholder="contoh: +6208974xxxx" value="{{ old('phone') }}" />
                                </div>
										  @error('phone')
										  <small style="color: rgb(255, 78, 78); font-weight: bold">{{ $message }}</small>
                                @enderror
                                
										  <br />
                                <p>Jenis kelamin</p>
                                <div class="auth-input-box">
                                    <div class="flex-input">
                                        <select name="gender" id="select-input gender">
                                            <option value="pria" {{old('gender') == 'pria' ? 'selected' : ''}}>Pria</option>
                                            <option value="wanita" {{old('gender') == 'wanita' ? 'selected' : ''}}>Wanita</option>
                                        </select>
                                        <button>
                                            <fa :icon="['fas', 'caret-down']" />
                                        </button>
                                    </div>
                                </div>
										  @error('gender')
										  <small style="color: rgb(255, 78, 78); font-weight: bold">{{ $message }}</small>
                                @enderror
                                
										  <br />
                                <p>Password</p>
                                <div class="auth-input-box">
                                    <div class="input-box-password">
                                        <input type="password" name="password" placeholder=""
                                            v-on:keyup="isGood(this.value)" id="passwordInput" />
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

										  <br />
											<p>Konfirmasi Password</p>
											<div class="auth-input-box">
												<div class="input-box-password">
														<input type="password" name="password_confirmation" placeholder=""
															v-on:keyup="isGood(this.value)" id="password_confirmation" />
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
											@error('password')
										  <small style="color: rgb(255, 78, 78); font-weight: bold">{{ $message }}</small>
                                @enderror
									</div>

                        <div class="wrap-button">
                            <br />
                            <button @click="reg">Lanjutkan</button>
                            <br /><br />
                        </div>
								</form>
                        <p id="hint">
                            Sudah punya akun terdaftar? <a href={{ route('login') }}><b>Masuk!</b></a>
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
