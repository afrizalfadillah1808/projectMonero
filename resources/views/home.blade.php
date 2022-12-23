@extends('layouts.main')

@section('container')

    <div class="m-5 bg-image rounded-3" style="background-image: url('https://source.unsplash.com/1920x560?programming');">
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

    <div class="expert-section w-100 p-5 d-flex flex-row align-items-center" style="background-color: hsl(0, 0%, 86%, 0.2)">
        <div class="expert-section-left text-black col-md-7">
            <h1>Menjadi Expert</h1>
            <p>Dukungan kurikulum yang tepat untuk meningkatkan skill, serta metode belajar yang bisa dipilih sendiri.
                <br>Waktunya wujudkan karier impianmu dengan mudah!</p>
            {{-- <button class="px-1 py-2 text-white align-items-center rounded btn-success">Lihat Kelas</button> --}}
            <a href="#" class="btn btn-success">Lihat Kelas</a>
        </div>
        <div class="d-flex expert-section-right col-md-5 justify-content-end">
            <img class="rounded-3" src="https://source.unsplash.com/460x460?programming" alt="">
        </div>
    </div>

    <div class="class-section m-5 align-items-center text-center">
        <h3 class="text-center mb-5">Kelas <span class="text-success">Populer</span></h3>
        <div class="class-card-section d-flex flex-row justify-content-around">
            <div class="class-card-1 shadow-sm rounded-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/300x180?programming" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: hsl(0, 0%, 86%, 0.2)">
                        <h5 class="card-title text-success">Mastering Web Hacking</h5>
                        <p class="card-text">6 Jam | 69 Video</p>
                        <a href="#" class="btn btn-success">Lihat Kelas</a>
                    </div>
                </div>
            </div>
            
            <div class="class-card-2 shadow-sm rounded-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/300x180?programming" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: hsl(0, 0%, 86%, 0.2)">
                        <h5 class="card-title text-success">Customer Service Training</h5>
                        <p class="card-text">8 Jam | 89 Video</p>
                        <a href="#" class="btn btn-success">Lihat Kelas</a>
                    </div>
                </div>
            </div>
            <div class="class-card-3 shadow-sm rounded-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/300x180?programming" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: hsl(0, 0%, 86%, 0.2)">
                        <h5 class="card-title text-success">Practical Guide To Learn Bitcoin</h5>
                        <p class="card-text">9 Jam | 79 Video</p>
                        <a href="#" class="btn btn-success">Lihat Kelas</a>
                    </div>
                </div>
            </div>
            <div class="class-card-4 shadow-sm rounded-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/300x180?programming" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: hsl(0, 0%, 86%, 0.2)">
                        <h5 class="card-title text-success">Mixing For Music Producers</h5>
                        <p class="card-text">8 Jam | 89 Video</p>
                        <a href="#" class="btn btn-success">Lihat Kelas</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="mt-5 btn btn-success">Lihat Kelas Lainnya</a>
    </div>

    <div class="review-section p-5 w-100 d-flex flex-column align-items-center justify-content-center" style="background-color: hsl(0, 0%, 86%, 0.2)">
        <h3 class="mb-5">Apa <span class="text-success">Kata Mereka ?</span></h3>
        <div class="review-card-section justify-content-around d-flex gap-5">
            <div class="review-card-1 p-4 rounded-3 bg-white shadow-sm">
                <p>Kursus online di Monero Course sangat Berkesan, materinya simple dan tidak berbelit-belit.</p>
                <div class="users-section d-flex flex-row justify-content-between">
                    <div class="stars-section">
                        <i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i>
                    </div>
                    <span>Budi Gaming</span>
                </div>
            </div>

            <div class="review-card-2 p-4 rounded-3 bg-white shadow-sm">
                <p>Materi kursus online di Monero Course sangat menarik,isinya daging semua dan layak dipelajari.</p>
                <div class="users-section d-flex flex-row justify-content-between">
                    <div class="stars-section">
                        <i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i><i class="fa-solid fa-star text-success"></i>
                    </div>
                    <span>Udin Gaming</span>
                </div>
            </div>
        </div>
    </div>

@endsection