<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KursusAI')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .logo-navbar {
        height: 60px;       /* pas dengan navbar Bootstrap (56px) */
        width: auto;        /* biar proporsional */
        margin-right: 6px;  /* rapat dengan teks */
    }

    .brand-text {
        font-size: 20px;    /* seimbang dengan tinggi logo */
        font-weight: 600;
        line-height: 1;
    }

        /* Active state untuk navigation */
        .nav-link.active {
            color: var(--primary) !important;
            background: rgba(99, 102, 241, 0.1) !important;
            font-weight: 600;
        }

        /* Highlight section saat di-scroll */
        section {
            scroll-margin-top: 80px;
        }

        /* Smooth transition untuk semua anchor links */
        html {
            scroll-behavior: smooth;
        }

        /* Responsive design untuk mobile */
        @media (max-width: 768px) {
            .nav-link {
                margin: 5px 0;
                padding: 10px 15px;
            }
            
            section {
                scroll-margin-top: 70px;
            }
        }
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --primary-light: #818cf8;
            --secondary: #8b5cf6;
            --accent: #06b6d4;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --dark: #1f2937;
            --darker: #111827;
            --light: #f9fafb;
            --lighter: #f3f4f6;
            --gradient-primary: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            --gradient-primary-soft: linear-gradient(135deg, rgba(99, 102, 241, 0.9) 0%, rgba(139, 92, 246, 0.9) 100%);
            --gradient-dark: linear-gradient(135deg, var(--dark) 0%, var(--darker) 100%);
            --gradient-light: linear-gradient(to bottom, var(--light) 0%, var(--lighter) 100%);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            background: var(--gradient-light);
            line-height: 1.6;
        }
        
        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 15px 0;
            transition: all 0.3s ease;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .nav-link {
            font-weight: 500;
            position: relative;
            margin: 0 5px;
            color: var(--dark);
            transition: all 0.3s ease;
        }
        
        .nav-link:hover,
        .nav-link.active {
            color: var(--primary);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            border-radius: 10px;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        /* Hero Section dengan Gradasi Halus */
        .hero-section {
            background: var(--gradient-primary);
            color: white;
            padding: 140px 0 100px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(139, 92, 246, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(99, 102, 241, 0.3) 0%, transparent 50%);
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        /* Cards dengan Gradasi Halus */
        .card-course {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            border-radius: 20px;
            overflow: hidden;
            background: white;
            box-shadow: 
                0 10px 25px rgba(0, 0, 0, 0.05),
                0 5px 10px rgba(0, 0, 0, 0.02);
            margin-bottom: 30px;
            height: 100%;
        }
        
        .card-course:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.1),
                0 10px 20px rgba(0, 0, 0, 0.05);
        }
        
        .card-img-top {
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .card-course:hover .card-img-top {
            transform: scale(1.05);
        }
        
        /* Buttons dengan Gradasi */
        .btn-primary {
            background: var(--gradient-primary);
            border: none;
            border-radius: 50px;
            padding: 14px 32px;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(99, 102, 241, 0.25);
        }
        
        .btn-outline-primary {
            border: 2px solid var(--primary);
            color: var(--primary);
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 500;
            transition: all 0.3s ease;
            background: transparent;
        }
        
        .btn-outline-primary:hover {
            background: var(--gradient-primary);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(99, 102, 241, 0.2);
            border-color: transparent;
        }
        
        /* Feature Cards dengan Gradasi */
        .feature-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(249, 250, 251, 0.9) 100%);
            border-radius: 20px;
            padding: 35px 30px;
            height: 100%;
            transition: all 0.4s ease;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 
                0 10px 25px rgba(0, 0, 0, 0.04),
                0 5px 10px rgba(0, 0, 0, 0.02);
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.08),
                0 10px 20px rgba(0, 0, 0, 0.04);
            background: linear-gradient(135deg, rgba(255, 255, 255, 1) 0%, rgba(249, 250, 251, 1) 100%);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            background: var(--gradient-primary);
            color: white;
            font-size: 2rem;
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
        }
        
        /* Footer yang Disempurnakan */
        footer {
            background: var(--gradient-dark);
            color: white;
            padding: 100px 0 40px;
            margin-top: 100px;
            position: relative;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: -60px;
            left: 0;
            width: 100%;
            height: 60px;
            background: linear-gradient(to bottom, transparent, var(--dark));
        }
        
        .footer-brand {
            font-weight: 700;
            font-size: 2rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 25px;
            display: inline-block;
        }
        
        .footer-description {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.7;
            margin-bottom: 30px;
        }
        
        .footer-links h5 {
            font-weight: 600;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 15px;
            color: white;
        }
        
        .footer-links h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--gradient-primary);
            border-radius: 10px;
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 15px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            position: relative;
        }
        
        .footer-links a::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            transition: width 0.3s ease;
            border-radius: 2px;
        }
        
        .footer-links a:hover {
            color: white;
            transform: translateX(8px);
        }
        
        .footer-links a:hover::before {
            width: 100%;
        }
        
        .footer-links a i {
            margin-right: 12px;
            font-size: 0.9rem;
            color: var(--primary-light);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-decoration: none;
            position: relative;
            overflow: hidden;
        }
        
        .social-links a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 50%;
        }
        
        .social-links a:hover::before {
            opacity: 1;
        }
        
        .social-links a i {
            position: relative;
            z-index: 1;
        }
        
        .social-links a:hover {
            transform: translateY(-5px) rotate(5deg);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .contact-info li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.8);
        }
        
        .contact-info i {
            margin-right: 18px;
            margin-top: 5px;
            color: var(--primary-light);
            min-width: 20px;
            font-size: 1.1rem;
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            margin-top: 50px;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }
        
        /* Animations */
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(2deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        
        .floating-element {
            animation: float 8s ease-in-out infinite;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 1s ease forwards;
        }
        
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        

        /* Tools Carousel dengan Animasi Continuous */
        .tools-carousel-container {
            position: relative;
            overflow: hidden;
            padding: 50px 0;
        }

        .tools-carousel {
            display: flex;
            width: max-content;
            animation: scroll 40s linear infinite;
        }

        .tools-carousel:hover {
            animation-play-state: paused;
        }

        .tool-item {
            flex: 0 0 auto;
            margin: 0 25px;
            transition: all 0.4s ease;
            text-align: center;
        }

        .tool-item:hover {
            transform: scale(1.15) translateY(-5px);
        }

        .tool-logo {
            width: 90px;
            height: 90px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, white 0%, #f8fafc 100%);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 18px;
            font-size: 2.2rem;
            color: var(--primary);
            transition: all 0.3s ease;
        }

        .tool-item:hover .tool-logo {
            background: var(--gradient-primary);
            color: white;
            box-shadow: 0 15px 30px rgba(99, 102, 241, 0.25);
        }

        .tool-name {
            font-weight: 500;
            color: var(--dark);
            font-size: 0.95rem;
        }

        /* Infinite scroll animation */
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        /* Duplicate content for seamless loop */
        .tools-carousel-wrapper {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .tools-carousel-original, .tools-carousel-duplicate {
            display: flex;
            width: max-content;
        }

        .tools-carousel-duplicate {
            position: absolute;
            top: 0;
            left: 100%;
        }

        /* Alternatif: CSS-only infinite scroll */
        .tools-scroll-infinite {
            display: flex;
            width: max-content;
            animation: scrollInfinite 30s linear infinite;
        }

        @keyframes scrollInfinite {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
                
        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
        
        /* Section Titles */
        .section-title {
            position: relative;
            padding-bottom: 25px;
            margin-bottom: 50px;
            text-align: center;
            font-weight: 700;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--gradient-primary);
            border-radius: 10px;
        }
        
        /* Why Choose Us */
        .why-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 35px;
            padding: 25px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(249, 250, 251, 0.8) 100%);
            border-radius: 16px;
            transition: all 0.3s ease;
        }
        
        .why-item:hover {
            background: linear-gradient(135deg, rgba(255, 255, 255, 1) 0%, rgba(249, 250, 251, 1) 100%);
            transform: translateX(10px);
        }
        
        .why-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--gradient-primary);
            color: white;
            font-size: 1.5rem;
            margin-right: 25px;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }
        
        .why-item:hover .why-icon {
            transform: scale(1.1) rotate(5deg);
        }
    </style>
    @stack('styles')
</head>
<body>
    @include('partials.navigation')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animasi saat scroll
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.animate-fade-in-up');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.visibility = 'visible';
                        entry.target.classList.add('animate-fade-in-up');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            animatedElements.forEach(el => {
                el.style.visibility = 'hidden';
                observer.observe(el);
            });
            
            // Navbar scroll effect
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.style.padding = '10px 0';
                    navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.05)';
                } else {
                    navbar.style.padding = '15px 0';
                    navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.05)';
                }
            });
        });
    </script>
    @stack('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth infinite scroll untuk tools carousel
        function initToolsCarousel() {
            const carousel = document.querySelector('.tools-carousel');
            if (!carousel) return;
            
            // Clone items untuk seamless loop
            const items = carousel.querySelectorAll('.tool-item');
            items.forEach(item => {
                const clone = item.cloneNode(true);
                carousel.appendChild(clone);
            });
            
            // Reset animation position ketika selesai
            carousel.addEventListener('animationiteration', () => {
                // Tidak perlu reset karena kita menggunakan duplicate items
            });
        }
        
        initToolsCarousel();
        
        // Alternatif: JavaScript-based infinite scroll
        function initSmoothScroll() {
            const container = document.querySelector('.tools-carousel-container');
            const carousel = document.querySelector('.tools-carousel');
            
            if (!container || !carousel) return;
            
            let animation;
            let speed = 1; // pixels per frame
            let position = 0;
            const carouselWidth = carousel.scrollWidth / 2; // Karena kita duplicate items
            
            function animate() {
                position -= speed;
                
                // Reset position ketika mencapai setengah width
                if (Math.abs(position) >= carouselWidth) {
                    position = 0;
                }
                
                carousel.style.transform = `translateX(${position}px)`;
                requestAnimationFrame(animate);
            }
            
            // Start animation
            animation = requestAnimationFrame(animate);
            
            // Pause on hover
            container.addEventListener('mouseenter', () => {
                speed = 0;
            });
            
            container.addEventListener('mouseleave', () => {
                speed = 1;
            });
        }
        
        // Pilih salah satu metode
        // initSmoothScroll(); // Uncomment untuk JavaScript-based animation
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Hitung offset untuk navbar fixed
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Update URL hash tanpa trigger scroll
                    if (history.pushState) {
                        history.pushState(null, null, targetId);
                    } else {
                        window.location.hash = targetId;
                    }
                }
            });
        });
        
        // Update active state pada navigasi saat scroll
        function updateActiveNav() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let currentSection = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const navbarHeight = document.querySelector('.navbar').offsetHeight;
                
                if (window.pageYOffset >= sectionTop - navbarHeight - 50 && 
                    window.pageYOffset < sectionTop + sectionHeight - navbarHeight) {
                    currentSection = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                const href = link.getAttribute('href');
                if (href === `#${currentSection}`) {
                    link.classList.add('active');
                }
            });
        }
        
        // Update active state on scroll
        window.addEventListener('scroll', updateActiveNav);
        
        // Initial update
        updateActiveNav();
        
        // Navbar scroll effect
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 20) {
                navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.05)';
                navbar.style.padding = '15px 0';
            } else {
                navbar.style.boxShadow = 'none';
                navbar.style.padding = '20px 0';
            }
        });
    });
</script>
</body>
</html>