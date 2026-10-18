<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3 mb-4">
    <div class="container d-flex flex-column align-items-center">
        <!-- Logo dan Nama Toko di Tengah -->
        <a class="navbar-brand d-flex flex-column align-items-center mx-0 mb-3" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo" width="80" height="80" class="mb-2 rounded-circle object-fit-cover shadow-sm">
            <span class="fs-4 fw-bold text-uppercase text-dark tracking-wide">Musical Shop</span>
        </a>

        <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navigasi di Tengah -->
        <div class="collapse navbar-collapse w-100 justify-content-center" id="navbarNav">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link text-dark {{ Request::is('/') ? 'active fw-bold' : '' }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/about') }}" class="nav-link text-dark {{ Request::is('about') ? 'active fw-bold' : '' }}">Tentang Toko</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/katalog') }}" class="nav-link text-dark {{ Request::is('katalog*') ? 'active fw-bold' : '' }}">Katalog Alat Musik</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/contact') }}" class="nav-link text-dark {{ Request::is('contact') ? 'active fw-bold' : '' }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>