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
                    <a class="nav-link {{ ($title === "Kelas") ? 'active' : '' }}" href="/kelas">Kelas</a>
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
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Mentor") ? 'active' : '' }}" href="/mentor">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Diskon") ? 'active' : '' }}" href="/diskon">Diskon</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Daftar") ? 'active' : '' }}" href="/daftar">Daftar</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Masuk") ? 'active' : '' }}" href="/masuk">Masuk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

