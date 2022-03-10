<div class="card">
    <div class="card-header mb-2 text-dark bg-profile">
        <div class="clearfix">
            <h5 class="card-title mb-4">Profile {{ auth()->user()->name }}</h4>
                @if (Auth::user()->photo != null)
                <img src="{{ asset('uploads/users/'.Auth::user()->photo) }}" class="img-sm rounded-circle
                border" width="100px" height="100px">
                @else
                <img src="https://sekolahutsman.sch.id/wp-content/uploads/2016/03/no-profile.png" class="img-sm rounded-circle
                border" width="100px" height="100px">
                @endif
        </div>

    </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" method="POST" action="{{ route('profile.data.store') }}"
            enctype="multipart/form-data">
            @csrf
            @method('put')

            @if (session('success'))
            <div class=" alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i>
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}" name="name"
                    id="validationCustom01" placeholder="Masukkan Nama Lengkap" value="{{ auth()->user()->name }}">
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
            </div>

            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="email" class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}" name="email"
                    id="validationCustom02" placeholder="Masukkan Email" value="{{ auth()->user()->email }}">
                <div class="invalid-feedback">
                    {{$errors->first('email')}}
                </div>
            </div>

            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Nomor Telephone</label>
                <input type="number" class="form-control {{ $errors->first('phone') ? 'is-invalid' : '' }}" name="phone"
                    id="validationCustom03" placeholder="Masukkan Nomor Telephone" value="{{ auth()->user()->phone }}">
                <div class="invalid-feedback">
                    {{$errors->first('phone')}}
                </div>
            </div>

            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Jenis Kelamin: </label>
                <select name="gender" id="gender" class="form-select" id="validationCustom04">
                    <option value="pria" @selected(auth()->user()->gender == 'pria')>Pria</option>
                    <option value="wanita" @selected(auth()->user()->gender == 'wanita')>Wanita</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control-file {{ $errors->first('photo') ? 'is-invalid' : '' }}"
                    name="photo" id="photo">
                <br>
                @if (auth()->user()->photo != null)
                <small class="text-muted">Kosongkan jika tidak ingin mengubah
                    Foto</small>
                @endif
                <div class="invalid-feedback">
                    {{$errors->first('photo')}}
                </div>

                <div class="my-3">
                    <img id="img" class="img-target" width="200px">
                </div>
            </div>

            <div class="col-md-6">
                <label for="address" class="form-label">Alamat</label>
                <textarea name="address" class="form-control 
                {{ $errors->first('address') ? 'is-invalid' : '' }}" id="address" rows="3"
                    placeholder="Masukkan Alamat">{{auth()->user()->address}}</textarea>
                <div class="invalid-feedback">
                    {{$errors->first('address')}}
                </div>
            </div>


            <div class="col-12">
                <button class="btn btn-profile" type="submit">Update Profile</button>
            </div>
        </form>
    </div>
</div>
