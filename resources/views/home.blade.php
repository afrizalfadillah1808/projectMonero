@extends('layouts.main')

@section('container')
  <div class="first-home-section w-100">
    <img src="https://source.unsplash.com/1920x480?Web+Programming" class="img-fluid" alt="" style="min-height: 480px">
    <div class="stats-section d-flex justify-content-around p-5 my-auto bg-indigo-100">
      <div class="left-section d-flex align-items-center gap-3 p-3">
        <div class="left-square bg-indigo-600 fs-5 p-4 shadow-sm rounded-xl">
          <i class="fa-solid fa-users text-indigo-100 fs-3"></i>
        </div>
        <div class="left-content text-indigo-900">
          <h4 class="my-auto">99++</h4>
          <p class="my-auto fw-medium">Peserta Kursus</p>
        </div>
      </div>
      <div class="middle-section d-flex align-items-center gap-3 p-3">
        <div class="middle-square bg-indigo-600 fs-5 p-4 shadow-sm rounded-xl">
          <i class="fa-solid fa-star text-indigo-100 fs-3"></i>
        </div>
        <div class="middle-content text-indigo-900">
          <h4 class="my-auto">99++</h4>
          <p class="my-auto fw-medium">Review Bintang 5</p>
        </div>
      </div>
      <div class="right-section d-flex align-items-center gap-3 p-3">
        <div class="right-square bg-indigo-600 fs-5 p-4 shadow-sm rounded-xl">
          <i class="fa-solid fa-circle-play text-indigo-100 fs-3"></i>
        </div>
        <div class="right-content text-indigo-900">
          <h4 class="my-auto">99++</h4>
          <p class="my-auto fw-medium">Pilihan Kursus</p>
        </div>
      </div>
    </div>
  </div>
  <div class="second-home-section d-flex align-items-center p-5 gap-3 bg-indigo-115 w-100">
    <div class="left-section d-flex flex-column gap-3 p-3" style="max-width: calc( 66% + 3.75px )">
      <h3 class="text-indigo-900 fw-bold">Menjadi <span class="text-indigo-600">Expert</span></h3>
      <p class="text-indigo-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam excepturi iure nam unde, nostrum libero ullam nemo ratione molestias, repudiandae placeat voluptate recusandae voluptatem porro exercitationem blanditiis neque quis suscipit rerum. Magni cupiditate est neque nisi, iste quos adipisci cum. Laboriosam enim inventore cum, quos exercitationem fuga similique. Fugiat reiciendis atque repudiandae nulla porro ea blanditiis doloribus impedit corporis cumque.</p>
      <a class="bg-indigo-600 text-indigo-100 px-4 py-2 fw-medium shadow-sm rounded-xl text-center" href="#" style="text-decoration: none; width: 8.5rem;">Lihat Kelas</a>
    </div>
    <div class="right-section ms-auto w-auto p-3">
      <div id="carouselExampleControls" class="carousel slide shadow-sm" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://source.unsplash.com/800x800?it+software" class="img-fluid shadow-sm rounded-xl" style="width: 480px; height: 480px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/800x800?finance+accounting" class="img-fluid shadow-sm rounded-xl" style="width: 480px; height: 480px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/800x800?business" class="img-fluid shadow-sm rounded-xl" style="width: 480px; height: 480px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/800x800?marketing" class="img-fluid shadow-sm rounded-xl" style="width: 480px; height: 480px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/800x800?music" class="img-fluid shadow-sm rounded-xl" style="width: 480px; height: 480px;" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <div class="third-home-section bg-indigo-100 d-flex flex-column p-5 gap-5">
    <h3 class="text-center text-indigo-600 fw-bold">Kelas <span class="text-indigo-900">Populer</span></h3>
    <div class="class-section d-flex gap-3 p-3 align-items-center justify-content-around">
      @foreach ($courses as $course)
      <a href="/class/{{ $course->slugCourse }}" class="text-decoration-none">
        <div class="first-class bg-indigo-600 min-h-100 rounded-xl d-flex flex-column shadow-sm gap-3 p-3" style="width: 330px">
          <img src="https://source.unsplash.com/330x200?Web+Programming" class="img-fluid rounded-xl" alt="" style="width: 330px; max-height: 200px;">
          <div class="first-class-section gap-0">
            <p class="my-auto fw-medium text-indigo-100" style="font-size: 18px; font-style: italic;">{{ $course->namaCourse }}</p>
            <p class="text-indigo-100">{{ $course->category->namaCategory }}</p>
            <p class="text-indigo-100">
              {{ $course->lamaVideo }} Belajar dengan {{ $course->jumlahVideo }}
            </p>
            <div class="first-class-section-mentor d-flex gap-3">
              <img src="https://source.unsplash.com/100x100?Person" class="img-fluid rounded-circle" alt="" style="max-width: 49.9px; max-height: 49.9px;">
              <div class="first-class-section-mentor-content d-flex flex-column">
                <p class="my-auto text-indigo-100">{{ $course->mentor->name }}</p>
                <p class="my-auto fw-medium text-indigo-100">Mentors</p>
              </div>
            </div>
          </div>
          <hr class="text-indigo-100 border-2 my-0">
          <div class="second-class-section-bottom d-flex align-items-center justify-content-between">
            <p class="my-auto text-indigo-100 fw-medium">{{ $course->hargaCourse }}</p>
            <p class="my-auto text-indigo-100 fw-medium"><i class="fa-solid fa-star text-indigo-100 fs-5"></i> 4.8</p>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
  <div class="fourth-home-section d-flex flex-column align-items-center p-5 gap-3 bg-indigo-115">
    <h3 class="text-center text-indigo-900 fw-bold">Apa Kata <span class="text-indigo-600">Mereka ?</span></h3>
    <div class="comment-section d-flex justify-content-around gap-5 p-5">
      <div class="left-comment-section bg-indigo-600 d-flex flex-column rounded-xl shadow-sm position-relative w-50 p-4">
        <img class="rounded-circle position-absolute top-0 start-0 translate-middle" style="width: 66px; height: 66px;" src="https://source.unsplash.com/300x300?person" alt="">
        <p class="text-indigo-100">{{ $commentUser }}</p>
        <div class="d-flex justify-content-between left-comment-review">
          <div class="stars-section">
            <i class="fa-solid fa-star text-indigo-100 fs-5"></i><i class="fa-solid fa-star text-indigo-100 fs-5"></i><i class="fa-solid fa-star text-indigo-100 fs-5"></i><i class="fa-solid fa-star text-indigo-100 fs-5"></i><i class="fa-solid fa-star text-indigo-100 fs-5"></i>
          </div>
          <span class="text-indigo-100">{{ $namaUser01 }}</span>
        </div>
      </div>
      <div class="right-comment-section bg-indigo-600 d-flex flex-column rounded-xl shadow-sm position-relative w-50 p-4">
        <img class="rounded-circle position-absolute top-0 start-0 translate-middle" style="width: 66px; height: 66px;" src="https://source.unsplash.com/300x300?person" alt="">
        <p class="text-indigo-100">{{ $commentUser }}</p>
        <div class="d-flex justify-content-between right-comment-review">
          <div class="stars-section">
            <i class="fa-solid fa-star text-indigo-100 fs-5"></i><i class="fa-solid fa-star text-indigo-100 fs-5"></i><i class="fa-solid fa-star text-indigo-100 fs-5"></i><i class="fa-solid fa-star text-indigo-100 fs-5"></i><i class="fa-solid fa-star text-indigo-100 fs-5"></i>
          </div>
          <span class="text-indigo-100">{{ $namaUser02 }}</span>
        </div>
      </div>
    </div>
  </div>
@endsection