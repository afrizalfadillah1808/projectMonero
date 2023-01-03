@extends('dashboard.layouts.app')

@section('content')
  <div class="m-0 col-auto col-md-9 col-xl-10 px-sm-2 pt-5">
    <h5 class="ms-5 fw-medium text-indigo-900">Edit Course</h5>
    <form action="/dashboard/admin/courses/{{ $course->slugCourse }}" method="POST" class="ms-5 col-md-5 pt-2" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="mb-3">
        <input type="text" class="@error('namaCourse') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="namaCourse" name="namaCourse" placeholder="Course Name" value="{{ old('namaCourse', $course->namaCourse) }}" autofocus required>
        @error('namaCourse')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('slugCourse') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="slugCourse" name="slugCourse" placeholder="Slug" value="{{ old('slugCourse', $course->slugCourse) }}" autofocus required readonly>
        @error('slugCourse')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('lamaVideo') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="lamaVideo" name="lamaVideo" placeholder="Course Duration" value="{{ old('lamaVideo', $course->lamaVideo) }}" autofocus required>
        @error('lamaVideo')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('jumlahVideo') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="jumlahVideo" name="jumlahVideo" placeholder="Course Video" value="{{ old('jumlahVideo', $course->jumlahVideo) }}" autofocus required>
        @error('jumlahVideo')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('hargaCourse') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="hargaCourse" name="hargaCourse" placeholder="Course Price" value="{{ old('hargaCourse', $course->hargaCourse) }}" autofocus required>
        @error('hargaCourse')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <select class="@error('category_id') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="category_id" name="category_id" placeholder="Course Category" value="{{ old('category_id'), $course->category_id }}" autofocus required>
          @foreach ($categories as $category)
            @if(old('category_id', $course->category_id) == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->namaCategory }}</option>
            @else
              <option value="{{ $category->id }}">{{ $category->namaCategory }}</option>
            @endif
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
        <input type="hidden" name="oldImage" value="{{ $course->imgCourse }}">
        @if ($course->imgCourse)
          <img src="{{ asset('storage/' . $course->imgCourse) }}" alt="" id="imgPreview" class="mt-3 img-fluid">
        @else
          <img src="" alt="" id="imgPreview" class="mt-3 d-none img-fluid">
        @endif
      </div>
      <div class="mb-3">
        <textarea rows="10" class="@error('deskripsiCourse') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="deskripsiCourse" name="deskripsiCourse" placeholder="Course Description" autofocus required>{{ old('deskripsiCourse', $course->deskripsiCourse) }}</textarea>
        @error('deskripsiCourse')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <a href="/dashboard/admin/courses" class="bg-indigo-600 px-4 py-2 fw-medium shadow-sm rounded-xl text-center text-indigo-100 text-decoration-none"><i class="fa-solid fa-arrow-left text-indigo-100 me-1"></i> Back</a>
        <button type="submit" class="bg-indigo-600 px-4 py-2 fw-medium shadow-sm rounded-xl text-center text-indigo-100 text-decoration-none border-0" style="text-decoration: none;">Edit Course</button>
      </div>
    </form>
  </div>
@endsection