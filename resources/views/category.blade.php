@extends('layouts.main')

@section('container')
  {{-- <h3 class="pt-5 px-5">Course in {{ $namaCategory }}</h3>
  @foreach ($courses as $course)
    <div class="p-5">
      <h3><a href="/class/{{ $course->slugCourse }}">{{ $course->namaCourse }}</a></h3>
      <p>{{ $course->lamaVideo }} |<span> {{ $course->jumlahVideo }}</span></p>
      <p>{{ $course->hargaCourse }}</p>
    </div>
  @endforeach --}}
  <h3 class="text-indigo-900 fw-bold px-5 mx-3 py-5 pb-0 mb-3">Courses in <span class="text-indigo-600">{{ $namaCategory }}</span></h3>
  <div class="diskon-section d-flex flex-column gap-3 mb-5 px-5 mx-3">
    <div class="diskon-list d-flex flex-wrap gap-3 w-100">
      @foreach ($courses as $course)
      <div class="discount-1 p-3 d-flex flex-column gap-2 shadow-sm w-lg-25 rounded-xl bg-indigo-600 text-indigo-100" style="width: 30%">
        <div class="discount-content">
          <p class="fw-medium" style="font-size: 18px; font-style:italic">{{ $course->namaCourse }}</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quaerat dolorum consectetur sapiente quibusdam velit dolores dolorem fugit dolor harum.</p>
        </div>
        <hr class="text-indigo-100 border-2 my-0">
        <div class="discount-bottom my-auto d-flex flex-row justify-content-between">
          <div class="left-bottom gap-3 d-flex flex-row align-items-center">
            <p class="my-auto fw-medium">{{ $namaCategory }}</p>
          </div>
          <div class="right-bottom">
            <button class="fw-medium border-0 bg-indigo-100 text-indigo-600 px-3 py-2 shadow shadow-sm rounded-xl"><a class="text-decoration-none text-indigo-600" href="/class/{{ $course->slugCourse }}">Lihat Kelas</a></button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

@endsection