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
                    <h1 class="fs-4 card-title fw-bold mb-4">Masuk</h1>
                    <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="email">Alamat E-mail</label>
                            <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                            <div class="invalid-feedback">
                                Email tidak sesuai
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="mb-2 w-100">
                                <label class="text-muted" for="password">Password</label>
                                <a href="forgot.html" class="float-end">
                                    Lupa Password?
                                </a>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <div class="invalid-feedback">
                                Masukkan Kata Sandi
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="form-check">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                <label for="remember" class="form-check-label">Ingat Saya</label>
                            </div>
                            <button type="submit" class="btn btn-success ms-auto">
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer py-3 border-0">
                    <div class="text-center">
                        Tidak mempunyai Akun? <a href="" class="text-dark">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection