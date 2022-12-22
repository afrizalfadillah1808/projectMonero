<nav class="sticky-top navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">Monero Course</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Class") ? 'active' : '' }}" href="/class">Class</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Mentors") ? 'active' : '' }}" href="/mentors">Mentors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Discount") ? 'active' : '' }}" href="/discount">Discount</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/is">IT & Software</a></li>
                        <li><a class="dropdown-item" href="/fa">Finance & Accounting</a></li>
                        <li><a class="dropdown-item" href="/business">Business</a></li>
                        <li><a class="dropdown-item" href="/marketing">Marketing</a></li>
                        <li><a class="dropdown-item" href="/music">Music</a></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-nav ms-auto col-5">
                <input type="text" class="form-control me-2" placeholder="Mau belajar apa hari ini?">
                <button class="btn btn-light" type="submit">Search</button>
            </div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login">Login</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Sign Up") ? 'active' : '' }}" href="/signup">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

