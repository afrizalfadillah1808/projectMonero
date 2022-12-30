<nav class="sticky-top shadow-sm text-indigo-100 bg-indigo-600">
    <div class="container d-flex p-3 justify-content-between align-items-center fw-medium">
      <a class="navbar-brand" href="/">
        <h5 class="m-0">Monero Course</h5>
      </a>
      <div class="d-flex gap-3">
        <a class="nav-link {{ ($title === "Home") ? 'textActive' : '' }}" href="/">Home</a>
        <a class="nav-link {{ ($title === "Class") ? 'textActive' : '' }}" href="/classes">Class</a>
        <li class="nav-item dropdown list-unstyled">
          <a class="nav-link dropdown-toggle text-decoration-none" role="button" data-bs-toggle="dropdown" href="#">Category</a>
          <ul class="dropdown-menu bg-indigo-600 rounded-xl border-none">
            <li><a class="text-indigo-100 fw-medium dropdown-item" href="/categories/it-software">IT & Software</a></li>
            <li><a class="text-indigo-100 fw-medium dropdown-item" href="/categories/finance-accounting">Finance & Accounting
            </a></li>
            <li><a class="text-indigo-100 fw-medium dropdown-item" href="/categories/business">Business</a></li>
            <li><a class="text-indigo-100 fw-medium dropdown-item" href="/categories/marketing">Marketing</a></li>
            <li><a class="text-indigo-100 fw-medium dropdown-item" href="/categories/music">Music</a></li>
          </ul>
        </li>
        </li>
        <a class="nav-link {{ ($title === "Mentors") ? 'textActive' : '' }}" href="/mentors">Mentors</a>
      </div>
      <div class="d-flex align-items-center gap-3">
        <a class="nav-link" href="/register">Sign Up</a>
        <a class="bg-indigo-100 text-indigo-600 px-4 py-2 shadow shadow-sm rounded-xl" href="/login" style="text-decoration: none;">Login</a>
      </div>
    </div>
  </nav>
  
  