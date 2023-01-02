@extends('layouts.main')

@section('container')
  <h3 class="text-indigo-600 fw-bold pt-5 px-5 mx-3 mb-3 text-center">Mentors</h3>
  <div class="mentors-section w-100 mx-auto">
    <div class="mentors-content d-flex gap-3 p-3 justify-content-center">
      @foreach ($mentors as $mentor)
        <div class="mentor-list d-flex justify-content-between text-center" style="width: 100%">
          <div class="mentor-link d-flex flex-column justify-content-center align-items-center mx-auto">
            <img src="https://source.unsplash.com/random/200x200" alt="mentor" class="img-fluid rounded-circle mb-5">
            <a class="text-decoration-none text-indigo-900" href="/mentors/detail/{{ $mentor->username }}">
              <h4 class="text-indigo-900 fw-bold">{{ $mentor->name }}</h4>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection