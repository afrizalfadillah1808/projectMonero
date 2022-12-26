@extends('layouts.main')

@section('container')

    <div class="mx-5 bg-image rounded-3" style="background-image: url('https://source.unsplash.com/1920x560?programming');">
        <div class="mask rounded-3" style="background-color: rgba(0, 0, 0, 0.3); height: 560px;">
            <div class="d-flex mx-5 align-items-center h-100">
                <div class="text-white">
                    <h1>Job Ready Course</h1>
                    <p class="col-md-8">Kursus online yang siap membantu kamu dalam meningkatkan skill dan mengembangkan karier profesional</p>
                    <a class="btn btn-outline-light btn-lg" href="#!" role="button">Belajar Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <div class="m-5 cards d-flex flex-row justify-content-around">
        <div class="card-1 d-flex align-items-center">
            <div class="card-content bg-success rounded-3 p-4 shadow-sm">
                <i class="fa-solid fa-users text-white fs-3"></i>
            </div>
            <div class="card-1-text d-flex flex-column align-items-start ms-3">
                <h3 class="text-success">10+</h3>
                <p>Peserta Kursus</p>
            </div>
        </div>
        <div class="card-2 d-flex align-items-center">
            <div class="card-content bg-success rounded-3 p-4 shadow-sm">
                <i class="fa-solid fa-star text-white fs-3"></i>
            </div>
            <div class="card-2-text d-flex flex-column align-items-start ms-3">
                <h3 class="text-success">30+</h3>
                <p>Review Bintang 5</p>
            </div>
        </div>
        <div class="card-3 d-flex align-items-center">
            <div class="card-content bg-success rounded-3 p-4 shadow-sm">
                <i class="fa-solid fa-circle-play text-white fs-3"></i>
            </div>
            <div class="card-3-text d-flex flex-column align-items-start ms-3">
                <h3 class="text-success">5+</h3>
                <p>Pilihan Kursus</p>
            </div>
        </div>
    </div>

    <div class="expert-section w-100 p-5 d-flex flex-row align-items-center" style="background-color: rgb(243, 247, 249)">
        <div class="expert-section-left text-black col-md-7">
            <h1>Menjadi Expert</h1>
            <p>Dukungan kurikulum yang tepat untuk meningkatkan skill, serta metode belajar yang bisa dipilih sendiri.
                <br>Waktunya wujudkan karier impianmu dengan mudah!</p>
            <a href="#" class="btn btn-success">Lihat Kelas</a>
        </div>

        <div class="d-flex expert-section-right col-md-5 justify-content-end">
            <div id="carouselExampleControls" class="carousel slide shadow-sm" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://source.unsplash.com/800x800?programming" class="rounded d-block w-100" style="width: 460px; height: 460px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://source.unsplash.com/800x800?nature" class="rounded d-block w-100" style="width: 460px; height: 460px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://source.unsplash.com/800x800?sky" class="rounded d-block w-100" style="width: 460px; height: 460px;" alt="...">
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

    <div class="d-flex flex-column class-section m-5 align-items-center">
        <h3 class="mb-5">Kelas <span class="text-success">Populer</span></h3>
        <div class="d-flex w-100 justify-content-evenly class-card-section">
            <div class="class-card-1 shadow-sm rounded-3">
                <a class="text-decoration-none text-dark" href="#">
                    <div class="card" style="width: 20rem;">
                        <img src="https://source.unsplash.com/300x200?programming" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-success">Mixing For Music Producers</h5>
                            <p class="card-text">20 Jam | 189 Video</p>
                            <div class="mentor-information d-flex align-items-center">
                                <img class="rounded-circle" style="width: 50px; height: 50px;" src="https://source.unsplash.com/300x300?person" alt="">
                                <div class="mentor-name d-flex flex-column ms-3">
                                    <p class="my-auto">Ahmad Rosid Komarudin</p>
                                    <p class="my-auto">Mentor</p>
                                </div>
                            </div>
                            <hr>
                            <p class="m-auto">Rp. 209.999, 00</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="class-card-2 shadow-sm rounded-3">
                <a class="text-decoration-none text-dark" href="#">
                    <div class="card" style="width: 20rem;">
                        <img src="https://source.unsplash.com/300x200?programming" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-success">Mixing For Music Producers</h5>
                            <p class="card-text">20 Jam | 189 Video</p>
                            <div class="mentor-information d-flex align-items-center">
                                <img class="rounded-circle" style="width: 50px; height: 50px;" src="https://source.unsplash.com/300x300?person" alt="">
                                <div class="mentor-name d-flex flex-column ms-3">
                                    <p class="my-auto">Ahmad Rosid Komarudin</p>
                                    <p class="my-auto">Mentor</p>
                                </div>
                            </div>
                            <hr>
                            <p class="m-auto">Rp. 209.999, 00</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="class-card-3 shadow-sm rounded-3">
                <a class="text-decoration-none text-dark" href="#">
                    <div class="card" style="width: 20rem;">
                        <img src="https://source.unsplash.com/300x200?programming" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-success">Mixing For Music Producers</h5>
                            <p class="card-text">20 Jam | 189 Video</p>
                            <div class="mentor-information d-flex align-items-center">
                                <img class="rounded-circle" style="width: 50px; height: 50px;" src="https://source.unsplash.com/300x300?person" alt="">
                                <div class="mentor-name d-flex flex-column ms-3">
                                    <p class="my-auto">Ahmad Rosid Komarudin</p>
                                    <p class="my-auto">Mentor</p>
                                </div>
                            </div>
                            <hr>
                            <p class="m-auto">Rp. 209.999, 00</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="class-card-4 shadow-sm rounded-3">
                <a class="text-decoration-none text-dark" href="#">
                    <div class="card" style="width: 20rem;">
                        <img src="https://source.unsplash.com/300x200?programming" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-success">Mixing For Music Producers</h5>
                            <p class="card-text">20 Jam | 189 Video</p>
                            <div class="mentor-information d-flex align-items-center">
                                <img class="rounded-circle" style="width: 50px; height: 50px;" src="https://source.unsplash.com/300x300?person" alt="">
                                <div class="mentor-name d-flex flex-column ms-3">
                                    <p class="my-auto">Ahmad Rosid Komarudin</p>
                                    <p class="my-auto">Mentor</p>
                                </div>
                            </div>
                            <hr>
                            <p class="m-auto">Rp. 209.999, 00</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <a href="#" class="mt-5 btn btn-success">Lihat Kelas Lainnya</a>
    </div>

    <div class="review-section p-5 w-100 d-flex flex-column align-items-center justify-content-center" style="background-color: rgb(243, 247, 249)">
        <h3 class="mb-5">Apa <span class="text-success">Kata Mereka ?</span></h3>
        <div class="review-card-section justify-content-evenly d-flex">
            @foreach ($user as $u)
            <div class="review-card-1 p-4 rounded-3 bg-white shadow-sm position-relative col-md-5 style=min-width:100%">
                <img class="rounded-circle position-absolute top-0 start-0 translate-middle" style="width: 66px; height: 66px;" src="https://source.unsplash.com/300x300?person" alt="">
                <p>{{$u->commentUser}}</p>
                <div class="users-section d-flex flex-row justify-content-between">
                    <div class="stars-section">
                        <i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i>
                    </div>
                    <span>{{$u->namaUser}}</span>
                </div>
            </div>
            @endforeach

            <!-- <div class="review-card-2 p-4 rounded-3 bg-white shadow-sm position-relative col-md-5">
                <img class="rounded-circle position-absolute top-0 start-0 translate-middle" style="width: 66px; height: 66px;" src="https://source.unsplash.com/300x300?person" alt="">
                <p>Materi kursus online di Monero Course sangat menarik, isinya daging semua dan layak dipelajari.</p>
                <div class="users-section d-flex flex-row justify-content-between">
                    <div class="stars-section">
                        <i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i>
                    </div>
                    <span>Udin Gaming</span>
                </div>
            </div> -->
        </div>
    </div>

@endsection