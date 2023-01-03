@extends('dashboard.layouts.app')

@section('content')
  <div class="m-0 col-auto col-md-9 col-xl-10 px-sm-2 pt-5">
    <h5 class="ms-5 fw-medium text-indigo-900">Add Discount</h5>
    <form action="/dashboard/discounts" method="POST" class="ms-5 col-md-5 pt-2" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <input type="text" class="@error('jumlahDiscount') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="jumlahDiscount" name="jumlahDiscount" placeholder="Discount Value" value="{{ old('jumlahDiscount') }}" autofocus required>
        @error('jumlahDiscount')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('kodeDiscount') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="kodeDiscount" name="kodeDiscount" placeholder="Discount Code" value="{{ old('kodeDiscount') }}" autofocus required>
        @error('kodeDiscount')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <textarea rows="10" class="@error('keteranganDiscount') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="keteranganDiscount" name="keteranganDiscount" placeholder="Discount Description" value="{{ old('keteranganDiscount') }}" autofocus required></textarea>
        @error('keteranganDiscount')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="@error('waktuDiscount') is-invalid @enderror border-0 bg-indigo-115 rounded-2 p-2 w-100 text-indigo-900" id="waktuDiscount" name="waktuDiscount" placeholder="Discount Time" value="{{ old('waktuDiscount') }}" autofocus required>
        @error('waktuDiscount')
          <div class="invalid-feedback text-capitalize">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <button class="border-0 bg-indigo-600 px-4 py-2 fw-medium rounded-2 text-center" style="width: auto;"><a class="text-indigo-100" href="/dashboard/discounts" style="text-decoration: none;">Back</a></button>
        <button type="submit" class="border-0 bg-indigo-600 text-indigo-100 px-4 py-2 fw-medium rounded-2 text-center" style="text-decoration: none; width: auto;">Add Discount</button>
      </div>
    </form>
  </div>
@endsection