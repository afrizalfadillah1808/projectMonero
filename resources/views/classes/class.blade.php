@extends('layouts.main')

@section('container')
  <h3 class="text-indigo-600 fw-bold pt-5 px-5 mx-3 mb-3">Kelas <span class="text-indigo-900">{{ $class->namaCourse }}</span></h3>
  <div class="class-details d-flex flex-column text-indigo-900 px-5 mx-3 col-lg-10">
    @if ($class->imgCourse)
      <img src="{{ asset('storage/' . $class->imgCourse) }}" alt="{{ $class->namaCourse }}" class="mb-2 img-fluid" style="max-height: 300px; overflow: hidden;">
    @else
      <img src="https://source.unsplash.com/1200x300?{{ $class->category->namaCategory }}" alt="{{ $class->namaCourse }}" class="mb-2 img-fluid">
    @endif
    <p>Mentored by <a class="text-indigo-600" href="/classes?mentor={{ $class->mentor->username }}" style="text-decoration: none;">{{ $class->mentor->name }}</a> | <a class="text-indigo-600" href="/classes?category={{ $class->category->slugCategory }}" style="text-decoration: none;">{{ $class->category->namaCategory }}</a></p>
    <p class="text-capitalize">{{ $class->lamaVideo }} Belajar dengan <span> {{ $class->jumlahVideo }}</span></p>
    <p>{{ $class->deskripsiCourse }}</p>
    <p>{{ $class->hargaCourse }} | <a href="/checkout" class="text-indigo-600" style="text-decoration: none;">Buy Class</a></p>
    <a href="/categories/{{ $class->category->slugCategory }}" class="text-indigo-600 mb-5" style="text-decoration: none;">Back to Categories</a>
  </div>
@endsection