@extends('layouts.app')
@section('title', 'Beranda')

@section('content')

    <!-- Hero Banner Section -->
    <div class="hero-section mb-5 position-relative rounded shadow-sm overflow-hidden" style="background-image: url('{{ asset('assets/images/bghome.jpg') }}'); background-size: cover; background-position: center; height: 400px;">

        <!-- Efek Gelap (Overlay) agar tulisan putih terbaca -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.6;"></div>

        <!-- Konten Tulisan di Tengah Banner -->
        <div class="position-relative w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center text-white p-4">
            <h1 class="fw-bold display-5 mb-3">Temukan Alat Musik Impianmu<br>di Nada Prima</h1>
            <p class="lead mb-4">Dari gitar hingga drum, semua kebutuhan bermusikmu ada di sini.</p>
            <a class="btn btn-outline-light btn-lg px-4 rounded-pill" href="{{ url('/katalog') }}">Lihat Katalog Alat Musik</a>
        </div>
    </div>

    <!-- Tiga Kartu Layanan -->
    <div class="row g-4 mt-2 text-center">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 bg-light">
                <div class="card-body p-4">
                    <h5 class="card-title fw-bold mb-3">Koleksi Pilihan</h5>
                    <p class="card-text text-muted">Beragam gitar, drum, keyboard, amplifier, alat tiup, dan alat gesek dari merek-merek ternama.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 bg-light">
                <div class="card-body p-4">
                    <h5 class="card-title fw-bold mb-3">Belanja Online</h5>
                    <p class="card-text text-muted">Lihat katalog, bandingkan harga, dan pilih alat musik yang kamu suka langsung dari rumah.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 bg-light">
                <div class="card-body p-4">
                    <h5 class="card-title fw-bold mb-3">Layanan Ramah</h5>
                    <p class="card-text text-muted">Tim kami siap membantu merekomendasikan alat musik yang sesuai dengan level dan kebutuhanmu.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Produk Pilihan -->
    <div class="bg-white p-4 rounded shadow-sm border mt-5 mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0">Produk Pilihan</h3>
            <a href="{{ url('/katalog') }}" class="btn btn-outline-dark btn-sm rounded-pill px-3">Lihat Semua</a>
        </div>

        @if ($featured->isNotEmpty())
        <div id="produkCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                @foreach ($featured->chunk(4) as $chunk)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="row g-4 px-md-5">
                        @foreach ($chunk as $instrument)
                        <div class="col-6 col-md-3">
                            <a href="{{ route('instrument.show', $instrument->id) }}" class="text-decoration-none text-dark d-block">
                                <div class="ratio ratio-1x1 mb-3">
                                    <img src="{{ Str::startsWith($instrument->image, 'http') ? $instrument->image : asset('assets/images/' . $instrument->image) }}"
                                        alt="{{ $instrument->name }}" class="w-100 h-100 rounded"
                                        style="object-fit: contain;">
                                </div>
                                <div class="fw-semibold mb-2"
                                    style="min-height: 3rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                    {{ $instrument->name }}
                                </div>
                                <div class="fs-5 fw-bold">Rp {{ number_format($instrument->price, 0, ',', '.') }}</div>
                                <small class="text-success">{{ $instrument->type }}</small>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

            @if ($featured->count() > 4)
            <!-- Panah kiri dan kanan -->
            <button class="carousel-control-prev" type="button" data-bs-target="#produkCarousel" data-bs-slide="prev" style="width: 5%;">
                <span class="carousel-control-prev-icon" style="filter: invert(1);"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#produkCarousel" data-bs-slide="next" style="width: 5%;">
                <span class="carousel-control-next-icon" style="filter: invert(1);"></span>
                <span class="visually-hidden">Berikutnya</span>
            </button>
            @endif
        </div>
        @else
            <p class="text-center text-muted mb-0">Produk belum tersedia. Jalankan seeder terlebih dahulu.</p>
        @endif
    </div>
@endsection