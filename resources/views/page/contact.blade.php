@extends('layouts.app')
@section('title', 'Kontak')

@section('content')
    <div class="row g-4 my-4">

        <!-- Kolom Kiri: Informasi Toko -->
        <div class="col-lg-6">
            <small class="text-uppercase fw-bold text-dark" style="letter-spacing: 2px;">Mari Berbincang</small>
            <h2 class="fw-bold mt-2 mb-3">Kontak</h2>
            <p class="text-muted mb-4">
                Punya pertanyaan tentang alat musik atau paket? Kirim pesan dan kami akan menghubungimu melalui email.
            </p>

            <div class="mb-3">
                <div class="fw-bold text-dark">Alamat</div>
                <div>Jl. Raya Serpong, Tangerang Selatan</div>
            </div>
            <div class="mb-3">
                <div class="fw-bold text-dark">Jam buka</div>
                <div>Senin - Minggu, 09.00 - 21.00 WIB</div>
            </div>
            <div class="mb-3">
                <div class="fw-bold text-dark">Email</div>
                <a href="mailto:info@musicalshop.test" class="text-dark">info@musicalshop.test</a>
            </div>
            <div class="mb-3">
                <div class="fw-bold text-dark">Telepon</div>
                <a href="tel:+6281234567890" class="text-dark">+6289525884615</a>
            </div>
        </div>

        <!-- Kolom Kanan: Form Kirim Pesan -->
        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4">Kirim Pesan</h4>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ url('/contact') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Nama</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Nama Anda">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror" placeholder="email@contoh.com">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label fw-bold">Pesan</label>
                            <textarea id="message" name="message" rows="5"
                                class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Ceritakan kebutuhan alat musikmu secara singkat.</div>
                        </div>

                        <button type="submit" class="btn btn-dark w-100">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection