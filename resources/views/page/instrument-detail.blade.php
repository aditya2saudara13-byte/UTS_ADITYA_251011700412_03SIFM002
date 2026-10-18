@extends('layouts.app')

@section('title', 'Detail Alat Musik - ' . $instrument->name)

@section('content')
<div class="mb-4">
    <a href="{{ route('instrument.index') }}" class="btn btn-outline-dark btn-sm">
        &larr; Kembali ke Katalog Alat Musik
    </a>
</div>
<div class="row justify-content-center g-4">

    <div class="col-md-5 col-lg-4">
        <div class="card shadow-sm border-0">
            <img src="{{ Str::startsWith($instrument->image, 'http') ? $instrument->image : asset('assets/images/' . $instrument->image) }}"
                alt="{{ $instrument->name }}" class="img-fluid w-100"
                style="aspect-ratio: 1 / 1; object-fit: cover;">
        </div>
    </div>
    <div class="col-md-7 col-lg-6">
        <div class="card-body p-4">
            <div class="mb-2">
                <span class="badge bg-success mb-2">{{ $instrument->type }}</span>
            </div>
            <div class="mb-2">
                <h2 class="card-title">{{ $instrument->name }}</h2>
                <p class="card-text">{{ $instrument->description }}</p>
            </div>

            <table class="table table-sm table-borderless w-auto mb-3">
                <tr>
                    <td class="text-muted ps-0">Merek</td>
                    <td>: {{ $instrument->brand }}</td>
                </tr>
                <tr>
                    <td class="text-muted ps-0">Jenis</td>
                    <td>: {{ $instrument->type }}</td>
                </tr>
            </table>
            <h4 class="fw-bold btn-outline-dark">Rp {{ number_format($instrument->price, 0, ',', '.') }}</h4>
        </div>
    </div>
</div>
@endsection