@extends('dashboard.layouts.app')

@section('content')
  <div class="m-0 col-auto col-md-9 col-xl-10 px-sm-2 pt-5">
    <h5 class="ms-5 fw-medium text-indigo-900">Add Course</h5>
    <form action="/dashboard/admin/courses" method="POST" class="ms-5 col-md-5 pt-2" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <input type="text" class="@error('namaCourse') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="namaCourse" name="namaCourse" placeholder="Course Name" value="{{ old('namaCourse') }}" autofocus required>
        @error('namaCourse')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('slugCourse') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="slugCourse" name="slugCourse" placeholder="Slug" value="{{ old('slugCourse') }}" autofocus required readonly>
        @error('slugCourse')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('lamaVideo') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="lamaVideo" name="lamaVideo" placeholder="Course Duration" value="{{ old('lamaVideo') }}" autofocus required>
        @error('lamaVideo')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('jumlahVideo') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="jumlahVideo" name="jumlahVideo" placeholder="Course Video" value="{{ old('jumlahVideo') }}" autofocus required>
        @error('jumlahVideo')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('hargaCourse') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="hargaCourse" name="hargaCourse" placeholder="Course Price" value="{{ old('hargaCourse') }}" autofocus required>
        @error('hargaCourse')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <select class="@error('category_id') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="category_id" name="category_id" placeholder="Course Category" value="{{ old('category_id') }}" autofocus required>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->namaCategory }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <input type="file" class="@error('imgCourse') is-invalid @enderror border-0 bg-indigo-115 rounded-2 text-capitalize p-2 w-100 text-indigo-900" id="imgCourse" name="imgCourse" placeholder="Course Thumbnail" autofocus>
        @error('imgCourse')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
        <img src="" alt="" id="imgPreview" class="mt-3 d-none img-fluid">
      </div>
      <div class="mb-3">
        <textarea rows="10" class="@error('deskripsiCourse') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="deskripsiCourse" name="deskripsiCourse" placeholder="Course Description" value="{{ old('deskripsiCourse') }}" autofocus required></textarea>
        @error('deskripsiCourse')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <button type="submit" class="border-0 bg-indigo-600 px-3 py-2 rounded-2 text-center text-indigo-100 text-decoration-none w-25" style="text-decoration: none; width: 8.5rem; font-size: 18px;">Add Course</button>
      </div>
    </form>
  </div>
@endsection