@extends('layouts.main')

@section('container')
  <div class="register-content d-flex flex-column align-items-center mx-auto p-5" style="width: 35%">
    <div class="top-register-content w-100">
      <h3 class="text-indigo-600 fw-bold">Daftar <span class="text-indigo-900">Akun</span></h3>
      <p class="text-indigo-900">Daftar Sekarang dan Nikmati Kelas yang tersedia di Monero Course.</p>
    </div>
    <div class="form-register-content w-100">
      <form action="/register" method="POST">
        @csrf
        <div class="mb-3">
          <input type="text" class="@error('name') is-invalid @enderrorborder-0 bg-indigo-115 rounded-xl p-3 w-100 text-indigo-900" id="name" name="name" placeholder="Nama" required value="{{ old('name') }}">
        </div>
        @error('name')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
        <div class="mb-3">
          <input type="text" class="@error('username') is-invalid @enderrorborder-0 bg-indigo-115 rounded-xl p-3 w-100 text-indigo-900" id="username" name="username" placeholder="Username" required value="{{ old('username') }}">
        </div>
        @error('username')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
        <div class="mb-3">
          <input type="email" class="@error('email') is-invalid @enderrorborder-0 bg-indigo-115 rounded-xl p-3 p-2 w-100 text-indigo-900" id="email" name="email" placeholder="Email" required value="{{ old('email') }}">
        </div>
        @error('email')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
        <div class="mb-3">
          <input type="password" class="@error('password') is-invalid @enderrorborder-0 bg-indigo-115 rounded-xl p-3 p-2 w-100 text-indigo-900" id="password" name="password" placeholder="Password" required>
        </div>
        @error('password')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
        <button type="submit" class="bg-indigo-600 border-0 text-indigo-100 p-3 fw-medium shadow-sm rounded-xl text-center w-100 mb-3" style="text-decoration: none; width: 8.5rem; font-size: 18px;">Daftar</button>
      </form>
      <p class="text-indigo-900">Sudah Punya Akun ? <a href="/login" class="text-indigo-600 text-decoration-none">Login</a></p>
    </div>
  </div>
@endsection