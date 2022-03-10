@extends('layouts.app')

@section('title','Spillmoment | Daftar Events')
@section('content')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endpush


<div class="container">

    <div class="row mt-5">
        <div id="event">
            <div class="box-v1">
                <div class="container">

                    <div class="row mt-3 row-cols-1 row-cols-md-4 g-4" id="card-event">
                        <aside class="col-md-4">
                            <!--   SIDEBAR   -->
                            <div class="list-group">
                                <a href="{{ route('profile.data') }}"
                                    class="{{ Route::currentRouteName() == 'profile.data' ? 'active-profile' : '' }} list-group-item list-group-item-action">Profile</a>
                                <a href="{{ route('profile.password') }}"
                                    class="{{ Route::currentRouteName() == 'profile.password' ? 'active-profile' : '' }} list-group-item list-group-item-action">Account</a>

                            </div>
                            <!--   SIDEBAR .//END   -->
                        </aside>
                        <main class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    @if(Route::currentRouteName() == 'profile.data')
                                    @include('auth.profile-change-data')
                                    @elseif(Route::currentRouteName() == 'profile.password')
                                    @include('auth.profile-change-password')
                                    @endif
                                </div>
                            </div>

                        </main>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .active-profile {
        z-index: 2;
        color: #242329;
        background-color: #F5C6A5;
        border-color: #F5C6A5;
    }

    .active-profile:hover {
        background: #242329;
        color: #F5C6A5;
    }

    .bg-profile {
        background-color: #F5C6A5;
    }

    .btn-profile {
        background-color: #F5C6A5;
        color: #242329;
    }

</style>

@endsection
@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script>
    var readURL = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.img-target').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".form-control-file").on('change', function () {
        readURL(this);
    });

</script>
@endpush
