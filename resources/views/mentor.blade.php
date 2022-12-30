@extends('layouts.main')

@section('container')
  <h3 class="text-indigo-600 fw-bold pt-5 px-5 mx-3 mb-3">Mentors</h3>
  <div class="mentors d-flex flex-column text-indigo-900 px-5 mx-3">
    @foreach ($mentors as $mentor)
      <div class="mentor d-flex flex-row">
        <img src="{{ $mentor->fotoMentor }}" alt="mentor" class="mentor-img">
        <div class="mentor-details d-flex flex-column">
          <h4 class="text-indigo-900 fw-bold">{{ $mentor->namaMentor }}</h4>
          <p>{{ $mentor->deskripsiMentor }}</p>
        </div>
      </div>
    @endforeach
  </div>
@endsection