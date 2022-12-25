@extends('layouts.main')

@section('container')
    
    <div class="diskon-section d-flex flex-column gap-5 mx-5">
        <h4 class="my-auto">Pilih Diskon Sesukamu 🔥</h4>
        <div class="diskon-list d-flex flex-row gap-5 justify-content-between">
            <div class="discount-1 p-3 d-flex flex-column gap-3 shadow-sm" style="border-radius: 12px; background-color: white">
                <div class="discount-cover">
                    <img src="https://source.unsplash.com/460x200?web+programming" alt="" style="border-radius: 12px;">
                </div>
                <div class="discount-content">
                    <p class="fs-5">Diskon 60.000</p>
                    <p class="text-secondary">Diskon ini terbatas. Gunakan Diskon kamu sekarang sebelum kehabisan.</p>
                    <hr>
                </div>
                <div class="discount-bottom d-flex flex-row justify-content-between">
                    <div class="left-bottom gap-3 d-flex flex-row align-items-center">
                        <i class="fa-solid fa-clock fs-4"></i>
                        <p class="my-auto">3 Jam, 30 Menit</p>
                    </div>
                    <div class="right-bottom">
                        <button class="btn btn-success copy-code" style="border-radius: 12px;">Salin Kode</button>
                    </div>
                </div>
            </div>
            <div class="discount-2 p-3 d-flex flex-column gap-3 shadow-sm" style="border-radius: 12px; background-color: white">
                <div class="discount-cover">
                    <img src="https://source.unsplash.com/460x200?web+programming" alt="" style="border-radius: 12px;">
                </div>
                <div class="discount-content">
                    <p class="fs-5">Diskon 60.000</p>
                    <p class="text-secondary">Diskon ini terbatas. Gunakan Diskon kamu sekarang sebelum kehabisan.</p>
                    <hr>
                </div>
                <div class="discount-bottom d-flex flex-row justify-content-between">
                    <div class="left-bottom gap-3 d-flex flex-row align-items-center">
                        <i class="fa-solid fa-clock fs-4"></i>
                        <p class="my-auto">3 Jam, 30 Menit</p>
                    </div>
                    <div class="right-bottom">
                        <button class="btn btn-success copy-code" style="border-radius: 12px;">Salin Kode</button>
                    </div>
                </div>
            </div>
            <div class="discount-3 p-3 d-flex flex-column gap-3 shadow-sm" style="border-radius: 12px; background-color: white">
                <div class="discount-cover">
                    <img src="https://source.unsplash.com/460x200?web+programming" alt="" style="border-radius: 12px;">
                </div>
                <div class="discount-content">
                    <p class="fs-5">Diskon 60.000</p>
                    <p class="text-secondary">Diskon ini terbatas. Gunakan Diskon kamu sekarang sebelum kehabisan.</p>
                    <hr>
                </div>
                <div class="discount-bottom d-flex flex-row justify-content-between">
                    <div class="left-bottom gap-3 d-flex flex-row align-items-center">
                        <i class="fa-solid fa-clock fs-4"></i>
                        <p class="my-auto">3 Jam, 30 Menit</p>
                    </div>
                    <div class="right-bottom">
                        <button class="btn btn-success copy-code" style="border-radius: 12px;">Salin Kode</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast hide bg-white shadow-sm" role="alert" aria-live="assertive" aria-atomic="true" style="border-radius: 12px">
            <div class="toast-header bg-success" style="border-top-left-radius: 12px; border-top-right-radius: 12px;">
                <strong class="me-auto text-white">Diskon</strong>
                <small class="text-white">0 Mins Ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">Kode Diskon Berhasil Disalin!</div>
        </div>
    </div>
    
@endsection