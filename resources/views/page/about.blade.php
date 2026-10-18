@extends('layouts.app')
@section('title', 'Tentang Toko')

@section('content')
    <div class="container my-5">

        <div class="card border-0 bg-light rounded-4 shadow-sm mb-5">
            <div class="card-body p-4 p-md-5">
                <div class="row align-items-center">
                    <div class="col-md-6 pe-md-5">
                        <h2 class="fw-bold mb-4">Mengenal Musical Shop</h2>
                        <p class="text-muted" style="line-height: 1.8;">
                            Musical Shop lahir dari sebuah keyakinan sederhana: setiap orang berhak punya alat musik yang tepat untuk mengekspresikan dirinya lewat nada.
                        </p>
                        <p class="text-muted" style="line-height: 1.8;">
                            Kami hadir bukan sekadar sebagai toko alat musik online biasa, tapi sebagai teman yang membantumu menemukan alat musik berkualitas, baik untuk belajar, latihan, maupun tampil di panggung.
                        </p>
                    </div>

                    <div class="col-md-6 mt-4 mt-md-0 text-center">
                        <img src="{{ asset('assets/images/tentang.jpg') }}" alt="Tentang Musical Shop" class="img-fluid rounded-4 shadow-sm">
                    </div>
                </div>
            </div>
        </div>

        <div class="card border-0 bg-light rounded-4 shadow-sm">
            <div class="card-body p-4 p-md-5">
                <h5 class="fw-bold mt-2">Visi</h5>
                <p class="text-muted mb-4">
                    Menjadi toko alat musik online yang menjadi rujukan para musisi dalam menemukan alat musik yang berkualitas dan terjangkau.
                </p>

                <h5 class="fw-bold">Misi</h5>
                <ul class="text-muted mb-2">
                    <li class="mb-2">Menyediakan alat musik yang beragam dari merek-merek terpercaya.</li>
                    <li class="mb-2">Memberikan kemudahan akses katalog alat musik secara online.</li>
                    <li class="mb-0">Menumbuhkan minat bermusik di kalangan masyarakat.</li>
                </ul>
            </div>
        </div>

    </div>
@endsection