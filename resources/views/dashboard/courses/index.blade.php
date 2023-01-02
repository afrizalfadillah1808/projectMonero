@extends('dashboard.layouts.app')

@section('content')
  <div class="m-0 col-auto col-md-9 col-xl-10 px-sm-2 pt-5">
    <h5 class="ms-5 fw-medium text-indigo-900">My Course</h5>
    <div class="container m-0 px-0 pt-3">
      <div class="m-0 row">
        <div class="col-10 ms-5 p-0">
          <a href="/dashboard/courses/create" class="bg-indigo-600 px-3 py-2 rounded-2 text-center text-indigo-100 text-decoration-none">Add Course</a>
        </div>
      </div>
    </div>
    <div class="container m-0 px-0 pt-4">
      <div class="m-0 row">
        <div class="col-10 ms-5 p-0">
          <div class="table-responsive">
            <table id="example" class="table table-bordered" style="width: 100%; border-color: #3c366b;">
              <thead>
                <tr>
                  <th class="text-center fw-medium text-indigo-900">No</th>
                  <th class="text-center fw-medium text-indigo-900">Course Name</th>
                  <th class="text-center fw-medium text-indigo-900">Course Price</th>
                  <th class="text-center fw-medium text-indigo-900">Course Mentor</th>
                  <th class="text-center fw-medium text-indigo-900">Course Category</th>
                  <th class="text-center fw-medium text-indigo-900">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($courses as $course)
                <tr>
                  <td class="text-indigo-900 text-center align-middle">{{ $loop->iteration }}.</td>
                  <td class="text-indigo-900 text-center align-middle">{{ $course->namaCourse }}</td>
                  <td class="text-indigo-900 text-center align-middle">{{ $course->hargaCourse }}</td>
                  <td class="text-indigo-900 text-center align-middle">{{ $course->mentor->name }}</td>
                  <td class="text-indigo-900 text-center align-middle">{{ $course->category->namaCategory }}</td>
                  <td class="d-flex justify-content-center gap-2 align-middle">
                    <a href="/dashboard/courses/{{ $course->slugCourse }}/edit" class="bg-indigo-600 py-1 px-2 rounded-2" style="width: 32px; height: 32px;"><i class="fa-solid fa-wrench text-indigo-100"></i></a>
                    <a href="/dashboard/courses/{{ $course->slugCourse }}" class="bg-indigo-600 py-1 px-2 rounded-2" style="width: 32px; height: 32px;"><i class="fa-solid fa-eye text-indigo-100"></i></a>
                    <form action="/dashboard/courses/{{ $course->slugCourse }}" method="POST" class="d-inline">
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