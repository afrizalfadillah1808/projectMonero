@extends('layouts.main')

@section('container')
<div class="first-class-section w-100">
  <div class="top-section d-flex flex-column p-5 align-items-center">
    <h3 class="text-indigo-900 fw-bold">Mau <span class="text-indigo-600">Belajar</span> Apa Kita <span class="text-indigo-600">Hari Ini</span> ?</h3>
    <p class="text-indigo-900">Ayo Tingkatkan Skillmu Bersama Monero Course</p>
    <div class="search-class w-25">
      <div class="input-group rounded-xl shadow-sm">
        <input type="text" class="border-0 px-3 rounded-xl form-control" placeholder="Search..." style="outline: none; box-shadow: none; padding-top: 12px; padding-bottom: 12px;">
        <button class="border-0 bg-indigo-600 rounded-xl px-3" type="button"><i class="fa-solid fa-search text-indigo-100"></i></button>
      </div>
    </div>
  </div>
</div>

<h3 class="text-indigo-600 fw-bold px-5 mx-3 mb-3">Kupon <span class="text-indigo-900">Diskon</span></h3>
<div class="diskon-section d-flex flex-column gap-3 mb-5 px-5 mx-3">
  <div class="diskon-list d-flex flex-row gap-3">
    <div class="discount-1 p-3 d-flex flex-column gap-3 shadow-sm rounded-xl bg-indigo-600 text-indigo-100" style="width: 25%">
      <div class="discount-content">
        <p class="fw-medium" style="font-size: 18px; font-style: italic;">Diskon 60.000</p>
        <p>Diskon ini terbatas. Gunakan Diskon kamu sekarang sebelum kehabisan.</p>
      </div>
      <hr class="text-indigo-100 border-2 my-0">
      <div class="discount-bottom my-auto d-flex flex-row justify-content-between">
        <div class="left-bottom gap-3 d-flex flex-row align-items-center">
          <i class="fa-solid fa-clock fs-4"></i>
          <p class="my-auto fw-medium">3 Jam, 30 Menit</p>
        </div>
        <div class="right-bottom">
          <button class="fw-medium border-0 bg-indigo-100 text-indigo-600 px-4 py-2 shadow shadow-sm rounded-xl copy-code">Salin Kode</button>
        </div>
      </div>
    </div>
    <div class="discount-2 p-3 d-flex flex-column gap-3 shadow-sm rounded-xl bg-indigo-600 text-indigo-100" style="width: 25%">
      <div class="discount-content">
        <p class="fw-medium" style="font-size: 18px; font-style: italic;">Diskon 60.000</p>
        <p>Diskon ini terbatas. Gunakan Diskon kamu sekarang sebelum kehabisan.</p>
      </div>
      <hr class="text-indigo-100 border-2 my-0">
      <div class="discount-bottom my-auto d-flex flex-row justify-content-between">
        <div class="left-bottom gap-3 d-flex flex-row align-items-center">
          <i class="fa-solid fa-clock fs-4"></i>
          <p class="my-auto fw-medium">3 Jam, 30 Menit</p>
        </div>
        <div class="right-bottom">
          <button class="fw-medium border-0 bg-indigo-100 text-indigo-600 px-4 py-2 shadow shadow-sm rounded-xl copy-code">Salin Kode</button>
        </div>
      </div>
    </div>
    <div class="discount-3 p-3 d-flex flex-column gap-3 shadow-sm rounded-xl bg-indigo-600 text-indigo-100" style="width: 25%">
      <div class="discount-content">
        <p class="fw-medium" style="font-size: 18px; font-style: italic;">Diskon 60.000</p>
        <p>Diskon ini terbatas. Gunakan Diskon kamu sekarang sebelum kehabisan.</p>
      </div>
      <hr class="text-indigo-100 border-2 my-0">
      <div class="discount-bottom my-auto d-flex flex-row justify-content-between">
        <div class="left-bottom gap-3 d-flex flex-row align-items-center">
          <i class="fa-solid fa-clock fs-4"></i>
          <p class="my-auto fw-medium">3 Jam, 30 Menit</p>
        </div>
        <div class="right-bottom">
          <button class="fw-medium border-0 bg-indigo-100 text-indigo-600 px-4 py-2 shadow shadow-sm rounded-xl copy-code">Salin Kode</button>
        </div>
      </div>
    </div>
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

<h3 class="text-indigo-900 fw-bold px-5 mx-3 mb-3">Kelas di <span class="text-indigo-600">Monero Course</span></h3>
<div class="list-class-section d-flex align-content-start flex-wrap gap-3 pb-5 px-5 mx-3 justify-content-center justify-content-lg-start">
  @foreach ($classSubjects as $cS)
  <a href="/class/{{ $cS->slugCourse }}" class="text-decoration-none">
    <div class="first-class bg-indigo-600 min-h-100 rounded-xl d-flex flex-column shadow-sm gap-3 p-3" style="width: 330px; min-height: auto">
      <img src="https://source.unsplash.com/330x200?Web+Programming" class="img-fluid rounded-xl" alt="" style="width: 330px; max-height: 200px;">
      <div class="first-class-section gap-0">
        <p class="my-auto fw-medium text-indigo-100" style="font-size: 18px; font-style: italic;">{{ $cS->namaCourse }}</p>
        <p class="text-indigo-100">{{ $cS->category->namaCategory }}</p>
        <p class="text-indigo-100">
          {{ $cS->lamaVideo }} Belajar dengan {{ $cS->jumlahVideo }}
        </p>
        <div class="first-class-section-mentor d-flex gap-3">
          <img src="https://source.unsplash.com/100x100?Person" class="img-fluid rounded-circle" alt="" style="max-width: 49.9px; max-height: 49.9px;">
          <div class="first-class-section-mentor-content d-flex flex-column">
            <p class="my-auto text-indigo-100">{{ $cS->mentor->namaMentor }}</p>
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
@endsection