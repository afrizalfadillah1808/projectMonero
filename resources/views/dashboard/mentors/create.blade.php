@extends('dashboard.layouts.app')

@section('content')
  <div class="m-0 col-auto col-md-9 col-xl-10 px-sm-2 pt-5">
    <h5 class="ms-5 fw-medium text-indigo-900">Add Discount</h5>
    <form action="/dashboard/mentors" method="POST" class="ms-5 col-md-5 pt-2" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <input type="text" class="@error('name') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="name" name="name" placeholder="Mentor Name" value="{{ old('name') }}" autofocus required>
        @error('name')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('username') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="username" name="username" placeholder="Username Mentor" value="{{ old('username') }}" autofocus required>
        @error('username')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="email" class="@error('email') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="email" name="email" placeholder="Email Mentor" value="{{ old('email') }}" autofocus required>
        @error('email')
        <div class="invalid-feedback text-capitalize">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="password" class="@error('password') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="password" name="password" placeholder="Password Mentor" value="{{ old('password') }}" autofocus required>
        @error('password')
        <div class="invalid-feedback text-capitalize">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <textarea rows="10" class="@error('deskripsiMentor') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="deskripsiMentor" name="deskripsiMentor" placeholder="Mentor Description" value="{{ old('deskripsiMentor') }}" autofocus required></textarea>
        @error('deskripsiMentor')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <button type="submit" class="border-0 bg-indigo-600 px-3 py-2 rounded-2 text-center text-indigo-100 text-decoration-none w-25" style="text-decoration: none; width: 8.5rem; font-size: 18px;">Add Mentor</button>
      </div>
    </form>
  </div>
@endsection