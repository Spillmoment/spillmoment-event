@extends('admin.layouts.app')

@section('title', 'Admin - Halaman Tambah Event')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mb-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-3">
                <div class="d-block mb-4 mb-md-0">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                            <li class="breadcrumb-item"><a href="#">Event</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Halaman Event</li>
                        </ol>
                    </nav>
                    <h2 class="h4 mt-1">Form Tambah Event</h2>
                </div>
            </div>


            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-6 col-sm-6">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone
                                    else.</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconLeft">Icon Left</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><span
                                            class="fas fa-search"></span></span>
                                    <input type="text" class="form-control" id="exampleInputIconLeft"
                                        placeholder="Search" aria-label="Search">
                                </div>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconRight">Icon Right</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputIconRight"
                                        placeholder="Search" aria-label="Search">
                                    <span class="input-group-text" id="basic-addon2"><span
                                            class="fas fa-search"></span></span>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="exampleInputIconPassword"
                                        placeholder="Password" aria-label="Password">
                                    <span class="input-group-text" id="basic-addon3"><span
                                            class="fas fa-unlock-alt"></span></span>
                                </div>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control is-valid" id="firstName" value="Mark" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-6 col-sm-6">

                            <!-- Form -->
                            <div class="my-4">
                                <label for="textarea">Example textarea</label>
                                <textarea class="form-control" placeholder="Enter your message..." id="textarea"
                                    rows="4"></textarea>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="usernameValidate">Username</label>
                                <input type="text" class="form-control is-invalid" id="usernameValidate" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                            <!-- End of Form -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
