@extends('layouts.app')

@section('title', 'Tentang Kami - Akademi AI')

@section('content')
<section class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-4">Tentang Akademi AI</h1>
            <p class="lead text-center">Portal informasi terpercaya untuk menemukan kursus kecerdasan buatan terbaik</p>
            
            <div class="card shadow-sm border-0 mb-5">
                <div class="card-body p-5">
                    <h3 class="mb-4">Misi Kami</h3>
                    <p>Akademi AI hadir sebagai solusi bagi Anda yang ingin mempelajari Artificial Intelligence tetapi bingung memilih kursus yang tepat. Kami tidak menyelenggarakan kursus langsung, tetapi:</p>
                    
                    <ul>
                        <li>Menyediakan rekomendasi kursus AI terbaik dari berbagai platform</li>
                        <li>Memberikan ulasan objektif dan informasi lengkap tentang setiap kursus</li>
                        <li>Membantu Anda menemukan kursus yang sesuai dengan level dan kebutuhan</li>
                        <li>Berbagi artikel dan panduan tentang perkembangan terkini di dunia AI</li>
                    </ul>
                    
                    <h3 class="mb-4 mt-5">Mengapa Mempercayai Kami?</h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="fas fa-check-circle text-primary fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Rekomendasi Terkurasi</h5>
                                    <p>Setiap kursus melalui proses seleksi ketat oleh tim ahli kami</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Ulasan Objektif</h5>
                                    <p>Review berdasarkan pengalaman nyata dan feedback peserta</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="fas fa-sync-alt text-primary fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Informasi Terupdate</h5>
                                    <p>Konten selalu diperbarui mengikuti perkembangan terbaru</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3">
                                    <i class="fas fa-graduation-cap text-primary fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Panduan Belajar</h5>
                                    <p>Tips dan panduan untuk memaksimalkan pembelajaran AI</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection