<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}#hero">
    <img src="{{ asset('images/logo_baru.png') }}" 
         alt="KursusAI Logo" 
         class="logo-navbar">
    <span class="brand-text">KursusAI</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="#hero">
                        <i class="fas fa-home me-1"></i>Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('courses.*') ? 'active' : '' }}" href="#courses">
                        <i class="fas fa-graduation-cap me-1"></i>Kursus
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('articles.*') ? 'active' : '' }}" href="#why-choose">
                        <i class="fas fa-newspaper me-1"></i>Artikel
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="#about">
                        <i class="fas fa-info-circle me-1"></i>Tentang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="#contact">
                        <i class="fas fa-envelope me-1"></i>Kontak
                    </a>
                </li>
            </ul>
            <div class="d-flex">
                <!-- <a href="#newsletter" class="btn btn-outline-primary me-2">
                    <i class="fas fa-envelope me-2"></i>Newsletter
                </a> -->
                <a href="https://wa.me/6281904104102?text=Halo%20KursusAI,%20saya%20ingin%20bertanya%20tentang%20kursus%20AI" 
                   class="btn btn-success" 
                   target="_blank"
                   rel="noopener noreferrer">
                    <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</nav>