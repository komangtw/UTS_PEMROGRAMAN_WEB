<!DOCTYPE html>
<html lang="id">

@include('head')

<body>

    <nav class="uts-navbar">
        <div class="uts-navbar-inner">
            <a href="{{ url('/') }}" class="uts-brand">UTS Pem Web</a>
            <ul class="uts-nav-list">
                <li><a href="{{ url('/') }}" class="uts-link-home">Home</a></li>
                <li><a href="#" class="uts-link-muted">Features</a></li>
                <li><a href="#" class="uts-link-muted">(Masukkan Nama)</a></li>
                <li><a href="#" class="uts-link-disabled" aria-disabled="true">(Masukkan NIM)</a></li>
            </ul>
        </div>
    </nav>

    <main class="uts-container">
        @yield('content')

        <footer class="uts-footer">
            <div class="uts-footer-links">
                <a href="{{ url('/') }}">Home</a>
                <a href="#">Features</a>
                <a href="#">Pricing</a>
                <a href="#">FAQs</a>
                <a href="#">About</a>
            </div>
            <p class="uts-footer-copy">
                © 2025 Dibuat Sejujurjurnya Oleh Team (Komang) dan (Aryo) Tanpa Mencotek
                dari Tim Lain
            </p>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
