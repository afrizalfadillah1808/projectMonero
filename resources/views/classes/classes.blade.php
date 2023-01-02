@extends('layouts.main')

@section('container')
  <div class="first-class-section w-100">
    <div class="top-section d-flex flex-column p-5 align-items-center">
      <h3 class="text-indigo-900 fw-bold">Mau Belajar Apa Kita <span class="text-indigo-600">Hari Ini</span> ?</h3>
      <p class="text-indigo-900">Ayo Tingkatkan Skillmu Bersama Monero Course</p>
      <div class="search-class w-25">
        <form class="input-group rounded-xl shadow-sm" action="/classes">
          @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('mentor'))
            <input type="hidden" name="mentor" value="{{ request('mentor') }}">
          @endif
          <input type="text" class="border-0 px-3 form-control" name="search" value="{{ request('search') }}" placeholder="Search..." style="outline: none; box-shadow: none; padding-top: 12px; padding-bottom: 12px; border-radius: 0.75rem 0 0 0.75rem;">
          <button class="border-0 bg-indigo-600 px-3" type="submit" style="border-radius: 0 0.75rem 0.75rem 0"><i class="fa-solid fa-search text-indigo-100"></i></button>
        </form>
      </div>
    </div>
  </div>

  <h3 class="text-indigo-600 fw-bold px-5 mx-3 mb-3">Kupon <span class="text-indigo-900">Diskon</span></h3>
  <div class="diskon-section d-flex flex-column gap-3 mb-5 px-5 mx-3">
    <div class="diskon-list d-flex flex-row gap-4 justify-content-center justify-content-lg-between">
      @foreach ($discounts as $discount)
        <div class="discount-1 p-3 d-flex flex-column gap-3 shadow-sm rounded-xl bg-indigo-600 text-indigo-100" style="width: 32%">
          <div class="discount-content">
            <p class="fw-medium" style="font-size: 18px; font-style: italic;">Diskon {{ $discount->jumlahDiscount }}</p>
            <p>{{ $discount->keteranganDiscount }}</p>
          </div>
          <hr class="text-indigo-100 border-2 my-0">
          <div class="discount-bottom my-auto d-flex flex-row justify-content-between">
            <div class="left-bottom gap-3 d-flex flex-row align-items-center">
              <i class="fa-solid fa-clock fs-4"></i>
              <p class="my-auto fw-medium">{{ $discount->waktuDiscount }}</p>
            </div>
            <div class="right-bottom">
              <button class="fw-medium border-0 bg-indigo-100 text-indigo-600 px-4 py-2 shadow shadow-sm rounded-xl copy-code">Salin Kode</button>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast hide bg-indigo-115 shadow-sm rounded-xl" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header bg-indigo-600" style="border-top-left-radius: 0.75rem; border-top-right-radius: 0.75rem;">
        <strong class="me-auto text-indigo-100">Diskon</strong>
        <small class="text-indigo-100">0 Mins Ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body fw-medium text-indigo-900">Kode Diskon Berhasil Disalin!</div>
    </div>
  </div>
  
  @if (request('category', 'mentor'))
    <h3 class="text-indigo-900 fw-bold px-5 mx-3 mb-3">Kelas di <span class="text-indigo-600">Monero Course <span class="text-indigo-900">{{ $title }}</span></span></h3>
  @else
    <h3 class="text-indigo-900 fw-bold px-5 mx-3 mb-3">Kelas di <span class="text-indigo-600">Monero Course</span></h3>
  @endif
  @if ($classSubjects->count())
    <div class="list-class-section d-flex align-items-start flex-wrap gap-4 pb-5 px-5 mx-3 justify-content-center justify-content-lg-between">
      @foreach ($classSubjects as $cS)
      <a href="/class/{{ $cS->slugCourse }}" class="text-decoration-none">
        <div class="first-class bg-indigo-600 min-h-100 rounded-xl d-flex flex-column shadow-sm gap-3 p-3" style="width: 100%; min-height: auto">
          @if ($cS->imgCourse)
            <img src="{{ asset('storage/' . $cS->imgCourse) }}" alt="{{ $cS->namaCourse }}" class="img-fluid rounded-xl" style="width: 330px; height: 200px;">
          @else
            <img src="https://source.unsplash.com/330x200?{{ $cS->category->namaCategory }}" class="img-fluid rounded-xl" alt="" style="width: 100%; max-height: 200px;">
          @endif
          <div class="first-class-section gap-0">
            <p class="my-auto fw-medium text-indigo-100" style="font-size: 18px; font-style: italic;">{{ $cS->namaCourse }}</p>
            <p class="text-indigo-100">{{ $cS->category->namaCategory }}</p>
            <p class="text-indigo-100">
              {{ $cS->lamaVideo }} Belajar dengan {{ $cS->jumlahVideo }}
            </p>
            <div class="first-class-section-mentor d-flex gap-3">
              <img src="https://source.unsplash.com/100x100?Person" class="img-fluid rounded-circle" alt="" style="max-width: 49.9px; max-height: 49.9px;">
              <div class="first-class-section-mentor-content d-flex flex-column">
                <p class="my-auto text-indigo-100">{{ $cS->mentor->name }}</p>
                <p class="my-auto fw-medium text-indigo-100">Mentors</p>
              </div>
            </div>
          </div>
          <hr class="text-indigo-100 border-2 my-0">
          <div class="second-class-section-bottom d-flex align-items-center justify-content-between">
            <p class="my-auto text-indigo-100 fw-medium">{{ $cS->hargaCourse }}</p>
            <p class="my-auto text-indigo-100 fw-medium"><i class="fa-solid fa-star text-indigo-100 fs-5"></i> 4.8</p>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  @else
    <div class="d-flex justify-content-center" style="height: 100vh">
      <h5 class="p-5 m-3 text-indigo-900 fw-medium">Belum ada Kelas yang Tersedia 😓</h5>
    </div>
  @endif

@endsection