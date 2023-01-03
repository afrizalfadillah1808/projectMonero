@extends('dashboard.layouts.app')

@section('content')
  <div class="m-0 col-auto col-md-9 col-xl-10 px-sm-2 pt-5">
    <h5 class="ms-5 fw-medium text-indigo-900">Add Category</h5>
    <form action="/dashboard/categories" method="POST" class="ms-5 col-md-5 pt-2" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <input type="text" class="@error('namaCategory') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="namaCategory" name="namaCategory" placeholder="Category Name" value="{{ old('namaCategory') }}" autofocus required>
        @error('namaCategory')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('slugCategory') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="slugCategory" name="slugCategory" placeholder="Slug Category" value="{{ old('slugCategory') }}" autofocus required>
        @error('slugCategory')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <button class="border-0 bg-indigo-600 px-4 py-2 fw-medium rounded-2 text-center" style="width: auto;"><a class="text-indigo-100" href="/dashboard/categories" style="text-decoration: none;">Back</a></button>
        <button type="submit" class="border-0 bg-indigo-600 text-indigo-100 px-4 py-2 fw-medium rounded-2 text-center" style="text-decoration: none; width: auto;">Add Category</button>
      </div>
    </form>
  </div>
@endsection