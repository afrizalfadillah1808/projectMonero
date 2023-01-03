@extends('dashboard.layouts.app')

@section('content')
  <div class="m-0 col-auto col-md-9 col-xl-10 px-sm-2 pt-5">
    <h5 class="ms-5 fw-medium text-indigo-900">List Category</h5>
    <div class="container m-0 px-0 pt-3">
      <div class="m-0 row">
        <div class="col-10 ms-5 p-0">
          <button class="border-0 bg-indigo-600 px-4 py-2 fw-medium rounded-2 text-center" style="width: auto;"><a class="text-indigo-100" href="/dashboard/categories/create" style="text-decoration: none;">Add Category</a></button>
        </div>
      </div>
    </div>
    <div class="container m-0 px-0 pt-4">
      <div class="m-0 row">
        <div class="col-11 ms-5 p-0">
          <div class="table-responsive">
            <table id="example" class="table table-bordered" style="width: 100%; border-color: #3c366b;">
              <thead>
                <tr>
                  <th class="text-center fw-medium text-indigo-900">No</th>
                  <th class="text-center fw-medium text-indigo-900">Category Name</th>
                  <th class="text-center fw-medium text-indigo-900">Slug Category</th>
                  <th class="text-center fw-medium text-indigo-900">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                <tr>
                  <td class="text-indigo-900 text-center align-middle">{{ $loop->iteration }}.</td>
                  <td class="text-indigo-900 text-center align-middle">{{ $category->namaCategory }}</td>
                  <td class="text-indigo-900 text-center align-middle">{{ $category->slugCategory }}</td>
                  <td class="d-flex justify-content-center gap-2 align-middle">
                    <a href="/dashboard/categories/{{ $category->slugCategory }}/edit" class="bg-indigo-600 py-1 px-2 rounded-2" style="width: 32px; height: 32px;"><i class="fa-solid fa-wrench text-indigo-100"></i></a>
                    <form action="/dashboard/categories/{{ $category->slugCategory }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button type="submit" onclick="return confirm('Are you Sure?')" class="border-0 bg-indigo-600 py-1 px-2 rounded-2" style="width: 32px; height: 32px;"><i class="fa-solid fa-trash text-indigo-100"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection