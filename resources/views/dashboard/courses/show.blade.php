@extends('dashboard.layouts.app')

@section('content')
  <div class="m-0 col-auto col-md-9 col-xl-10 px-sm-2 pt-5">
    <h5 class="ms-5 fw-medium text-indigo-900">Course {{ $course->namaCourse }}</h5>
    <div class="class-details d-flex flex-column text-indigo-900 mx-5 col-9">
      @if ($course->imgCourse)
        <img src="{{ asset('storage/' . $course->imgCourse) }}" alt="{{ $course->namaCourse }}" class="mb-2 img-fluid" style="max-height: 300px; overflow: hidden;">
      @else
        <img src="https://source.unsplash.com/1200x300?{{ $course->category->namaCategory }}" alt="{{ $course->namaCourse }}" class="mb-2 img-fluid">
      @endif
      <a class="text-indigo-600" href="/classes?category={{ $course->category->slugCategory }}" style="text-decoration: none;">{{ $course->category->namaCategory }}</a></p>
      <p class="text-capitalize">{{ $course->lamaVideo }} Belajar dengan <span> {{ $course->jumlahVideo }}</span></p>
      <p>{{ $course->deskripsiCourse }}</p>
      <p>{{ $course->hargaCourse }}</p>
      <div class="d-flex gap-1">
        <button class="border-0 bg-indigo-600 px-4 py-2 fw-medium rounded-2 text-center" style="width: auto;"><a class="text-indigo-100" href="/dashboard/courses" style="text-decoration: none;">Back</a></button>
        <button class="border-0 bg-indigo-600 px-4 py-2 fw-medium rounded-2 text-center" style="width: auto;"><a class="text-indigo-100" href="/dashboard/courses/{{ $course->slugCourse }}/edit" style="text-decoration: none;">Edit</a></button>
        <form action="/dashboard/courses/{{ $course->slugCourse }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button type="submit" onclick="return confirm('Are you Sure?')" class="bg-indigo-600 px-4 py-2 fw-medium rounded-2 text-center text-indigo-100 text-decoration-none border-0">Delete</button>
        </form>
      </div>
    </div>
  </div>
@endsection