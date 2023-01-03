@extends('dashboard.layouts.app')

@section('content')
  <div class="m-0 col-auto col-md-9 col-xl-10 px-sm-2 pt-5">
    <h5 class="ms-5 fw-medium text-indigo-900">Edit Category</h5>
    <form action="/dashboard/categories/{{ $category->slugCategory }}" method="POST" class="ms-5 col-md-5 pt-2" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="mb-3">
        <input type="text" class="@error('namaCategory') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="namaCategory" name="namaCategory" placeholder="Course Name" value="{{ old('namaCategory', $category->namaCategory) }}" autofocus required>
        @error('namaCategory')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('slugCategory') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="slugCategory" name="slugCategory" placeholder="Slug" value="{{ old('slugCategory', $category->slugCategory) }}" autofocus required>
        @error('slugCategory')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <a href="/dashboard/categories" class="bg-indigo-600 px-4 py-2 fw-medium shadow-sm rounded-xl text-center text-indigo-100 text-decoration-none"><i class="fa-solid fa-arrow-left text-indigo-100 me-1"></i> Back</a>
        <button type="submit" class="bg-indigo-600 px-4 py-2 fw-medium shadow-sm rounded-xl text-center text-indigo-100 text-decoration-none border-0" style="text-decoration: none;">Edit Category</button>
      </div>
    </form>
  </div>
@endsection