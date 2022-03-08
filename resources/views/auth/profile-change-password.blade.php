<div class="card">
    <div class="card-header mb-2 text-dark bg-profile">
        <div class="clearfix">
            <h5 class="card-title mb-4">Pengaturan Account</h4>
        </div>
    </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" method="POST" action="{{ route('profile.password.store') }}">
            @csrf
            @method('put')

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle    "></i>
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="row mb-3">
                <div class="col">
                    <label for="validationCustom01" class="form-label">Password Sebelumnya</label>
                    <input type="password"
                        class="form-control {{ $errors->first('current_password') ? 'is-invalid' : '' }}"
                        name="current_password" id="validationCustom01" placeholder="Masukkan Password Sebelumnya">
                    <div class="invalid-feedback">
                        {{$errors->first('current_password')}}
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="validationCustom02" class="form-label">Password Baru</label>
                    <input type="password" class="form-control 
                    {{ $errors->first('password') ? 'is-invalid' : '' }}" id="validationCustom02" name="password"
                        placeholder="Masukkan Password Baru">
                    <div class="invalid-feedback">
                        {{$errors->first('password')}}
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="validationCustom03" class="form-label">Konfirmasi Password Baru</label>
                    <input type="password"
                        class="form-control {{ $errors->first('password_confirmation') ? 'is-invalid' : '' }}"
                        name="password_confirmation" id="validationCustom03"
                        placeholder="Masukkan Konfirmasi Password Baru">
                    <div class="invalid-feedback">
                        {{$errors->first('password_confirmation')}}
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-profile" type="submit">Update Account</button>
            </div>
        </form>
    </div>
</div>
