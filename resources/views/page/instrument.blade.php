@extends('layouts.app')

@section('title', 'Katalog Alat Musik')

@section('content')

<div class="mb-4 text-center">
    <h2 class="fw-bold">Katalog Alat Musik</h2>
    <p class="text-muted">Gitar, drum, keyboard, amplifier, dan alat musik lainnya</p>
</div>

<!-- Kotak Pencarian dan Filter Kategori -->
<div class="card shadow-sm border-0 mb-4">
    <div class="card-body p-4">
        <form action="{{ route('instrument.index') }}" method="GET" class="d-flex gap-2 mb-3">
            @if (request('type'))
                <input type="hidden" name="type" value="{{ request('type') }}">
            @endif
            <input type="text" name="q" value="{{ request('q') }}" class="form-control"
                placeholder="Cari alat musik atau merek...">
            <button type="submit" class="btn btn-dark px-4">Cari</button>
        </form>

        <div class="d-flex flex-wrap gap-2 mb-3">
            <a href="{{ route('instrument.index', ['q' => request('q')]) }}"
                class="btn btn-sm rounded-pill px-3 {{ request('type') ? 'btn-outline-dark' : 'btn-dark' }}">Semua</a>
            @foreach ($types as $type)
                <a href="{{ route('instrument.index', ['type' => $type, 'q' => request('q')]) }}"
                    class="btn btn-sm rounded-pill px-3 {{ request('type') == $type ? 'btn-dark' : 'btn-outline-dark' }}">{{ $type }}</a>
            @endforeach
        </div>

        <small class="text-muted">Menampilkan {{ $instruments->count() }} produk</small>
    </div>
</div>

<div class="row g-4">
    @foreach ($instruments as $instrument)
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm border-0">
            <img src="{{ Str::startsWith($instrument->image, 'http') ? $instrument->image : asset('assets/images/' . $instrument->image) }}"
                alt="{{ $instrument->name }}" class="card-img-top"
                style="aspect-ratio: 1 / 1; object-fit: cover;">
            <div class="card-body">
                <span class="badge bg-success mb-2">{{ $instrument->type }}</span>
                <h5 class="card-title">{{ $instrument->name }}</h5>
                <p class="card-text mb-1"><small class="text-muted">{{ $instrument->brand }}</small></p>
            </div>
            <div class="card-footer bg-white border-0 pb-3">
                <div class="fw-bold btn-outline-dark mb-2">Rp {{ number_format($instrument->price, 0, ',', '.') }}</div>
                <a href="{{ route('instrument.show', $instrument->id) }}" class="btn btn-outline-dark w-100">Lihat Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@if ($instruments->isEmpty())
    <p class="text-center text-muted mt-4">Produk tidak ditemukan. Coba kata kunci atau kategori lain.</p>
@endif
@endsection