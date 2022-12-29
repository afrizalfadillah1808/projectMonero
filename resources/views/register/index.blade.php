@extends('layouts.main')

@section('container')
    <div class="container h-100 pb-5 mb-5">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-0">
                    <img src="{{ asset('img/monero.png') }}" alt="logo" width="200">
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                        <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="name">Name</label>
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                                <div class="invalid-feedback">
                                    Name is required	
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>

                            <div class="align-items-center d-flex mt-3">
                                <button type="submit" class="btn btn-success ms-auto">
                                    Register	
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer border-0">
                        <div class="text-center">
                            Already have an account? <a href="index.html" class="text-dark">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection