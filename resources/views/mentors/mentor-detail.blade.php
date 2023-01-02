@extends('layouts.main')

@section('container')
  <h3 class="text-indigo-900 fw-bold pt-5 px-5 mx-3 mb-3">Mentor <span class="text-indigo-600">{{ $namaMentor }}</span></h3>
  <div class="class-details d-flex flex-column text-indigo-900 px-5 mx-3">
    <p>{{ $mentor->deskripsiMentor }}</p>
  </div>
  <div class="class-details text-indigo-900 px-5 mx-3">
    <a href="/mentors" class="text-indigo-600" style="text-decoration: none;">Back to Mentors</a> | <a href="/mentors/{{ $mentor->username }}" class="text-indigo-600" style="text-decoration: none;">See Courses</a>
  </div>
@endsection