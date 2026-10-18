<style>
    .site-footer {
        background: #4a4a4a;
        color: #fff;
    }

    .site-footer a {
        color: #fff;
        text-decoration: none;
    }

    .site-footer a:hover {
        text-decoration: underline;
    }

    .footer-brand {
        font-family: Georgia, 'Times New Roman', serif;
        font-style: italic;
        font-size: 1.7rem;
    }

    .footer-sep {
        color: rgba(255, 255, 255, 0.5);
        margin: 0 0.75rem;
    }

    .footer-social a {
        width: 38px;
        height: 38px;
        border: 1.5px solid rgba(255, 255, 255, 0.7);
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .footer-social a:hover {
        background: #fff;
        color: #4a4a4a;
        text-decoration: none;
    }
</style>

<footer class="site-footer mt-5 py-4">
    <div class="container">

        <!-- Baris 1: Nama toko + menu -->
        <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
            <a href="{{ url('/') }}" class="d-flex align-items-center gap-2 me-2">
                <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo Musical Shop" width="42" height="42"
                    class="rounded-circle object-fit-cover bg-white">
                <span class="footer-brand">Musical Shop</span>
            </a>
            <div class="small">
                <a href="{{ url('/') }}">Beranda</a><span class="footer-sep">|</span>
                <a href="{{ url('/about') }}">Tentang Toko</a><span class="footer-sep">|</span>
                <a href="{{ url('/katalog') }}">Katalog Alat Musik</a><span class="footer-sep">|</span>
                <a href="{{ url('/contact') }}">Kontak</a>
            </div>
        </div>

        <!-- Baris 2: Copyright + info toko, sosial media di kanan -->
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-3">
            <div style="font-size: 0.78rem;">
                <div class="mb-1">&copy; 2026 Musical Shop - Toko Alat Musik. All rights reserved.</div>
                <div>
                    <span>Jl. Raya Serpong, Tangerang Selatan</span><span class="footer-sep">|</span>
                    <span>Senin - Minggu, 09.00 - 21.00 WIB</span><span class="footer-sep">|</span>
                    <a href="mailto:info@musicalshop.test" class="text-decoration-underline">info@musicalshop.test</a>
                </div>
            </div>

            <div class="footer-social d-flex gap-2">
                <!-- Facebook -->
                <a href="https://www.facebook.com/" target="_blank" aria-label="Facebook">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
                <!-- Instagram -->
                <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="18" height="18" rx="5" />
                        <circle cx="12" cy="12" r="4" />
                        <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
                    </svg>
                </a>
                <!-- YouTube -->
                <a href="https://www.youtube.com/" target="_blank" aria-label="YouTube">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" fill-rule="evenodd">
                        <path d="M21.6 7.2a2.5 2.5 0 0 0-1.8-1.8C18.2 5 12 5 12 5s-6.2 0-7.8.4A2.5 2.5 0 0 0 2.4 7.2C2 8.8 2 12 2 12s0 3.2.4 4.8a2.5 2.5 0 0 0 1.8 1.8C5.8 19 12 19 12 19s6.2 0 7.8-.4a2.5 2.5 0 0 0 1.8-1.8c.4-1.6.4-4.8.4-4.8s0-3.2-.4-4.8zM10 15V9l5.2 3L10 15z" />
                    </svg>
                </a>
            </div>
        </div>

    </div>
</footer>