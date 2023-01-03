<div class="bg-indigo-600 col-auto col-md-3 col-xl-2 px-sm-2 px-0">
  <div class="d-flex flex-column align-items-center align-items-sm-start px-3 py-4 text-indigo-100 min-vh-100">
    <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-indigo-100 text-decoration-none"><span class="fs-5 d-none d-sm-inline">Monero Course</span></a>
    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu" >
      <li class="nav-item">
        <a href="/dashboard" class="nav-link text-decoration-none align-middle px-0 text-indigo-100"><i class="fa-solid fa-table-columns me-1"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span></a>
      </li>
      @can('isAdmin')
        <li>
          <a href="/dashboard/admin/courses" class="nav-link text-decoration-none align-middle px-0 text-indigo-100"><i class="fa-solid fa-scroll me-1"></i><span class="ms-1 d-none d-sm-inline">Courses</span></a>
        </li>
        <li>
          <a href="/dashboard/categories" class="nav-link text-indigo-100 text-decoration-none px-0 align-middle"><i class="fa-solid fa-list me-1"></i><span class="ms-1 d-none d-sm-inline">Categories</span></a>
        </li>
        <li>
          <a href="/dashboard/mentors" class="nav-link text-indigo-100 text-decoration-none px-0 align-middle"><i class="fa-regular fa-user me-1"></i><span class="ms-1 d-none d-sm-inline">Mentors</span></a>
        </li>
        <li>
          <a href="/dashboard/discounts" class="nav-link text-indigo-100 text-decoration-none px-0 align-middle"><i class="fa-solid fa-tag me-1"></i><span class="ms-1 d-none d-sm-inline">Discount</span></a>
        </li>
      @endcan
      @if (Auth::user()->username == 'Administrator')
      <li></li>
      @else
        <li>
          <a href="/dashboard/courses" class="nav-link text-decoration-none align-middle px-0 text-indigo-100"><i class="fa-solid fa-scroll me-1"></i><span class="ms-1 d-none d-sm-inline">My Course</span></a>
        </li>
      @endif
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-indigo-100 text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"><img src="https://source.unsplash.com/100x100?Person" alt="hugenerd" width="30" height="30" class="rounded-circle me-2"><span class="d-none d-sm-inline">{{ Auth::user()->name }}</span></a>
      <ul class="dropdown-menu bg-indigo-600 text-small shadow">
        <li><a class="text-indigo-100 fw-medium dropdown-item" href="/"><span class="me-2"><i class="fa-solid fa-house"></i></span>Home</a></li>
        <li><hr class="my-1 border-2 text-indigo-100"></li>
        <form action="/logout" method="POST">
          @csrf
          <li><button class="dropdown-item text-indigo-100" href="#" type="submit"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</button></li>
        </form>
      </ul>
    </div>
  </div>
</div>