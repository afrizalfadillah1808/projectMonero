@extends('layouts.main')

@section('container')
  <div class="register-content d-flex flex-column align-items-center mx-auto p-5" style="width: 35%">
    <img src="{{ asset('img/monero.png') }}" alt="" width="200">
    <div class="top-register-content w-100">
      <h3 class="text-indigo-600 fw-bold">Daftar <span class="text-indigo-900">Akun</span></h3>
      <p class="text-indigo-900">Daftar Sekarang dan Nikmati Kelas yang tersedia di Monero Course.</p>
    </div>
    <div class="form-register-content w-100">
      <form action="/register" method="POST">
        @csrf
        <div class="mb-3">
          <input type="text" class="border-0 bg-indigo-115 rounded-xl p-3 w-100 text-indigo-900" id="name" name="name" placeholder="Nama" required value="{{ old('name') }}">
          {{-- error feedback --}}
          @error('name')
            <div class="text-capitalize invalid-feedback mt-2">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <input type="text" class="border-0 bg-indigo-115 rounded-xl p-3 w-100 text-indigo-900" id="username" name="username" placeholder="Username" required value="{{ old('username') }}">
          {{-- error feedback --}}
          @error('username')
            <div class="text-capitalize invalid-feedback mt-2">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <input type="email" class="border-0 bg-indigo-115 rounded-xl p-3 p-2 w-100 text-indigo-900" id="email" name="email" placeholder="Email" required value="{{ old('email') }}">
          {{-- error feedback --}}
          @error('email')
            <div class="text-capitalize invalid-feedback mt-2">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <input type="password" class="border-0 bg-indigo-115 rounded-xl p-3 p-2 w-100 text-indigo-900" id="password" name="password" placeholder="Password" required>
          {{-- error feedback --}}
          @error('password')
            <div class="text-capitalize invalid-feedback mt-2">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="bg-indigo-600 border-0 text-indigo-100 p-3 fw-medium shadow-sm rounded-xl text-center w-100 mb-3" style="text-decoration: none; width: 8.5rem; font-size: 18px;">Daftar</button>
      </form>
      <p class="text-indigo-900">Sudah Punya Akun ? <a href="/login" class="text-indigo-600 text-decoration-none">Login</a></p>
    </div>
  </div>
@endsection