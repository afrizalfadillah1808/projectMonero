@extends('layouts.main')

@section('container')
  <div class="login-content d-flex flex-column align-items-center mx-auto p-5" style="width: 35%">
    <div class="top-login-content w-100">
      <h3 class="text-indigo-900 fw-bold">Login <span class="text-indigo-600">Akun</span></h3>
      <p class="text-indigo-900">Masuk untuk Mengakses Kelas kamu di Monero Course.</p>
    </div>
    <div class="form-login-content w-100">
      <form action="/login" method="POST">
        @csrf
        <div class="mb-3">
          <input type="text" class="border-0 bg-indigo-115 rounded-xl p-3 w-100 text-indigo-900" id="username" name="username" placeholder="Username" value="{{ old('username') }}" autofocus required>
        </div>
        <div class="mb-3">
          <input type="password" class="border-0 bg-indigo-115 rounded-xl p-3 p-2 w-100 text-indigo-900" id="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="bg-indigo-600 border-0 text-indigo-100 p-3 fw-medium shadow-sm rounded-xl text-center w-100 mb-3" style="text-decoration: none; width: 8.5rem; font-size: 18px;">Login</button>
      </form>
      <p class="text-indigo-900">Belum Punya Akun ? <a href="/register" class="text-indigo-600 text-decoration-none">Daftar</a></p>
    </div>
  </div>
@endsection