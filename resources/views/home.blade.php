@extends('layouts.app')

@section('title', 'KursusAI - Informasi Kursus Kecerdasan Buatan')

@section('content')
<style>
.hero-section {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    background: linear-gradient(to bottom, #6a0dad 0%, #8a6c97ff 50%, #ffffff 100%);
}
</style>

<!-- Hero Section dengan ID untuk navigasi -->
<section id="hero" class="hero-section">
    <div class="container text-center position-relative">
        <div class="floating-element" style="position: absolute; top: 20%; left: 10%; opacity: 0.8;">
            <i class="fas fa-brain fa-4x text-white"></i>
        </div>
        <div class="floating-element" style="position: absolute; top: 60%; right: 10%; opacity: 0.8;">
            <i class="fas fa-robot fa-4x text-white"></i>
        </div>
        
        <div class="hero-content">
            <h1 class="display-3 fw-bold mb-4 animate-fade-in-up">Temukan Kursus AI Terbaik</h1>
            <p class="lead mb-4 fs-4 animate-fade-in-up delay-1">Portal rekomendasi kursus kecerdasan buatan dari berbagai platform terpercaya</p>
            <div class="animate-fade-in-up delay-2">
                <a href="#courses" class="btn btn-light btn-lg px-5 me-3">
                    <i class="fas fa-graduation-cap me-2"></i>Jelajahi Kursus
                </a>
                <a href="#why-choose" class="btn btn-outline-light btn-lg px-5">
                    <i class="fas fa-newspaper me-2"></i>Baca Artikel
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Kategori Kursus AI dengan ID -->
<section id="courses" class="container py-5 mt-5">
    <h2 class="section-title">Kategori Produk Kursus AI</h2>
    
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 animate-fade-in-up">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-video"></i>
                </div>
                <h4>AI Video Creator</h4>
                <p>Editing & pembuatan video otomatis dengan tools seperti Runway dan Pika Labs. Pelajari teknik pembuatan konten video menggunakan AI.</p>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-3 mb-4 animate-fade-in-up delay-1">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-pen-fancy"></i>
                </div>
                <h4>AI Content Writing</h4>
                <p>Strategi copywriting, SEO article, dan blog dengan AI. Kuasai teknik penulisan konten yang optimal untuk digital marketing.</p>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-3 mb-4 animate-fade-in-up delay-2">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h4>AI Business Strategy</h4>
                <p>Menggunakan AI untuk analisis pasar, riset kompetitor, dan prediksi tren. Tingkatkan pengambilan keputusan bisnis dengan AI.</p>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-3 mb-4 animate-fade-in-up delay-3">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h4>AI untuk Pendidikan</h4>
                <p>Adaptive learning, personal tutor AI, analisis performa siswa. Transformasi pendidikan dengan teknologi kecerdasan buatan.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section dengan ID -->
<section id="about" class="container py-5 bg-light rounded-4">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <h2 class="section-title text-start">Tentang Kursus AI</h2>
            <p class="lead">Kecerdasan Buatan adalah masa depan teknologi yang sedang mengubah berbagai industri.</p>
            <p>Kursus AI dirancang untuk membantu Anda menguasai keterampilan yang paling dicari di era digital ini. Mulai dari dasar-dasar machine learning hingga aplikasi AI dalam bisnis, kursus-kursus ini memberikan pemahaman komprehensif tentang bagaimana AI bekerja dan bagaimana menerapkannya dalam berbagai skenario dunia nyata.</p>
            <p>Dengan pembelajaran yang terstruktur dan praktis, Anda akan siap menghadapi tantangan industri dan memanfaatkan peluang yang ditawarkan oleh revolusi AI.</p>
        </div>
        <div class="col-lg-6 text-center">
            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="AI Education" class="img-fluid rounded-3" style="max-height: 400px;">
        </div>
    </div>
</section>

<!-- Why Choose Us Section dengan ID untuk Artikel -->
<section id="why-choose" class="container py-5">
    <h2 class="section-title">Kenapa Memilih Kursus AI?</h2>
    
    <div class="row">
        <div class="col-md-6">
            <div class="why-item">
                <div class="why-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <div>
                    <h4>Relevan dengan Masa Depan</h4>
                    <p>AI adalah keterampilan yang paling dicari di era digital. Memahami AI membuka peluang karir yang luas di berbagai industri.</p>
                </div>
            </div>
            
            <div class="why-item">
                <div class="why-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div>
                    <h4>Tingkatkan Produktivitas</h4>
                    <p>AI dapat mengotomatisasi tugas-tugas repetitif, menghemat waktu, dan meningkatkan efisiensi kerja hingga 40%.</p>
                </div>
            </div>
            
            <div class="why-item">
                <div class="why-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <div>
                    <h4>Inovasi Tanpa Batas</h4>
                    <p>Dengan AI, Anda dapat menciptakan solusi inovatif untuk masalah kompleks dan mengembangkan produk yang revolusioner.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="why-item">
                <div class="why-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <div>
                    <h4>Kompetensi Global</h4>
                    <p>Keterampilan AI diakui secara internasional dan membuka peluang kerja di perusahaan global maupun remote working.</p>
                </div>
            </div>
            
            <div class="why-item">
                <div class="why-icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <div>
                    <h4>Potensi Penghasilan Tinggi</h4>
                    <p>Profesional AI termasuk yang paling well-paid dengan rata-rata gaji 30-50% lebih tinggi daripada bidang IT lainnya.</p>
                </div>
            </div>
            
            <div class="why-item">
                <div class="why-icon">
                    <i class="fas fa-infinity"></i>
                </div>
                <div>
                    <h4>Terus Berkembang</h4>
                    <p>Bidang AI terus berkembang dengan inovasi baru, menjamin bahwa keterampilan Anda akan selalu relevan dan updated.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tools Section -->
<section class="section section-light">
    <div class="container">
        <h2 class="section-title">Tools yang Akan Anda Kuasai</h2>
        <p class="text-center mt-5">
            Pelajari tools AI terdepan yang digunakan oleh profesional di industri
        </p>
        
        <div class="tools-carousel-container">
            <div class="tools-carousel">
                <!-- Duplicate set untuk animasi continuous -->
                @foreach([
                    ['icon' => 'fab fa-google', 'name' => 'TensorFlow', 'color' => '#FF6F00'],
                    ['icon' => 'fab fa-meta', 'name' => 'PyTorch', 'color' => '#EE4C2C'],
                    ['icon' => 'fas fa-eye', 'name' => 'OpenCV', 'color' => '#5DADE2'],
                    ['icon' => 'fas fa-language', 'name' => 'Hugging Face', 'color' => '#FFD700'],
                    ['icon' => 'fas fa-video', 'name' => 'Runway ML', 'color' => '#9B59B6'],
                    ['icon' => 'fas fa-robot', 'name' => 'GPT-4', 'color' => '#3498DB'],
                    ['icon' => 'fas fa-image', 'name' => 'DALL-E', 'color' => '#E74C3C'],
                    ['icon' => 'fas fa-music', 'name' => 'Jukebox', 'color' => '#2ECC71'],
                    ['icon' => 'fas fa-chart-bar', 'name' => 'DataRobot', 'color' => '#F39C12'],
                    ['icon' => 'fab fa-microsoft', 'name' => 'Azure AI', 'color' => '#0078D4'],
                    ['icon' => 'fas fa-brain', 'name' => 'Scikit-learn', 'color' => '#1E8449']
                ] as $tool)
                <div class="tool-item">
                    <div class="tool-logo" style="color: {{ $tool['color'] }};">
                        <i class="{{ $tool['icon'] }}"></i>
                    </div>
                    <div class="tool-name">{{ $tool['name'] }}</div>
                </div>
                @endforeach
                
                <!-- Duplicate set untuk animasi seamless -->
                @foreach([
                    ['icon' => 'fab fa-google', 'name' => 'TensorFlow', 'color' => '#FF6F00'],
                    ['icon' => 'fab fa-meta', 'name' => 'PyTorch', 'color' => '#EE4C2C'],
                    ['icon' => 'fas fa-eye', 'name' => 'OpenCV', 'color' => '#5DADE2'],
                    ['icon' => 'fas fa-language', 'name' => 'Hugging Face', 'color' => '#FFD700'],
                    ['icon' => 'fas fa-video', 'name' => 'Runway ML', 'color' => '#9B59B6'],
                    ['icon' => 'fas fa-robot', 'name' => 'GPT-4', 'color' => '#3498DB'],
                    ['icon' => 'fas fa-image', 'name' => 'DALL-E', 'color' => '#E74C3C'],
                    ['icon' => 'fas fa-music', 'name' => 'Jukebox', 'color' => '#2ECC71'],
                    ['icon' => 'fas fa-chart-bar', 'name' => 'DataRobot', 'color' => '#F39C12'],
                    ['icon' => 'fab fa-microsoft', 'name' => 'Azure AI', 'color' => '#0078D4'],
                    ['icon' => 'fas fa-brain', 'name' => 'Scikit-learn', 'color' => '#1E8449']
                ] as $tool)
                <div class="tool-item">
                    <div class="tool-logo" style="color: {{ $tool['color'] }};">
                        <i class="{{ $tool['icon'] }}"></i>
                    </div>
                    <div class="tool-name">{{ $tool['name'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="text-center mt-5">
            <p class="text-muted">* Dan puluhan tools AI lainnya yang akan Anda pelajari dalam kursus</p>
        </div>
    </div>
</section>
@endsection