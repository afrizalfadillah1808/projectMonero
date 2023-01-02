@extends('dashboard.layouts.app')

@section('content')
<div class="col-auto col-md-9 col-xl-10 px-sm-2 pt-5">
  <h5 class="ms-5 fw-medium text-indigo-900">Welcome Back, {{ Auth::user()->name }}</h5>
</div>
@endsection