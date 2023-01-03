@extends('layouts.main')

@section('container')
  <h3 class="text-indigo-900 fw-bold pt-5 px-5 mx-3 mb-3">Mentor <span class="text-indigo-600">{{ $namaMentor }}</span></h3>
  <div class="class-details d-flex flex-column text-indigo-900 px-5 mx-3 col-10">
    <p>{{ $mentor->deskripsiMentor }}</p>
  </div>
  <div class="class-details text-indigo-900 px-5 mx-3">
    <button class="border-0 bg-indigo-600 px-4 py-2 fw-medium rounded-xl text-center" style="width: auto;"><a class="text-indigo-100" href="/mentors" style="text-decoration: none;">Back</a></button>
    <button class="border-0 bg-indigo-600 px-4 py-2 fw-medium rounded-xl text-center" style="width: auto;"><a class="text-indigo-100" href="/mentors/{{ $mentor->username }}" style="text-decoration: none;">See Courses</a></button>
  </div>
@endsection