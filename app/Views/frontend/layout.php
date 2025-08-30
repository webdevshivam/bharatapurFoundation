<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title . ' - ' : '' ?>Bharatpur Foundation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@400;500;600;700;800&family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Merriweather:wght@300;400;700;900&family=Lora:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Noto+Sans+Devanagari:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/css/bharatpur-theme.css') ?>" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0F3A66;
            --primary-light: #1A4F7A;
            --primary-dark: #0A2644;
            --secondary-color: #D69A2A;
            --secondary-light: #E0A95F;
            --accent-color: #D69A2A;
            --accent-light: #E0A95F;
            --success-color: #16A085;
            --success-light: #48C9B0;
            --warning-color: #F39C12;
            --warning-light: #F4D03F;
            --text-primary: #1A2B3D;
            --text-secondary: #4A5568;
            --text-light: #6B7280;
            --bg-primary: #ffffff;
            --bg-secondary: #FFF8F0;
            --bg-tertiary: #F8F9FA;
            --bg-soft: #fbf5ed;
            --border-light: #e8dcc9;
            --border-lighter: #f0e7d6;
            --shadow-sm: 0 1px 2px 0 rgb(165 102 28 / 0.08);
            --shadow-md: 0 4px 6px -1px rgb(165 102 28 / 0.15), 0 2px 4px -2px rgb(165 102 28 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(165 102 28 / 0.2), 0 4px 6px -4px rgb(165 102 28 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(165 102 28 / 0.25), 0 8px 10px -6px rgb(165 102 28 / 0.15);
            --gradient-primary: linear-gradient(135deg, #A5661C 0%, #6B3F1C 100%);
            --gradient-secondary: linear-gradient(135deg, #D4842B 0%, #A5661C 100%);
            --gradient-accent: linear-gradient(135deg, #E6A047 0%, #C78B2A 100%);
            --gradient-soft: linear-gradient(135deg, #fdf9f5 0%, #f8f1e8 100%);
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Lora', 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.7;
            color: var(--text-primary);
            background-color: var(--bg-primary);
            scroll-behavior: smooth;
            font-weight: 400;
        }

        .font-display {
            font-family: 'Playfair Display', 'Crimson Text', serif;
            font-weight: 600;
        }

        /* Enhanced Typography Classes */
        .font-heading {
            font-family: 'Playfair Display', serif;
        }

        .font-subheading {
            font-family: 'Merriweather', serif;
        }

        .font-accent {
            font-family: 'Crimson Text', serif;
            font-style: italic;
        }

        /* Navigation Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.98);
            border-bottom: 2px solid var(--border-light);
            box-shadow: var(--shadow-sm);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--primary-color) !important;
            text-decoration: none;
        }

        .navbar-brand:hover {
            color: var(--primary-dark) !important;
        }

        .navbar-nav .nav-link {
            color: var(--text-primary) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            padding: 0.8rem 1.2rem !important;
            border-radius: 6px;
            font-size: 0.95rem;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
            background: var(--bg-secondary);
        }

        /* Hero Section */
        .hero-section {
            background: var(--gradient-soft);
            color: var(--text-primary);
            padding: 120px 0 100px;
            text-align: center;
            border-bottom: 2px solid var(--border-light);
            position: relative;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(165, 102, 28, 0.05) 50%, transparent 70%);
            z-index: 1;
        }

        .hero-section>* {
            position: relative;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.8rem;
            color: var(--primary-color);
        }

        .hero-section .lead {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            color: var(--text-secondary);
            font-weight: 400;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Enhanced Shadow Classes */
        .shadow-2xl {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important;
        }

        /* Button Styles */
        .btn {
            font-weight: 600;
            border-radius: 6px;
            padding: 12px 24px;
            border: none;
            font-family: 'Poppins', sans-serif;
        }

        .btn-primary {
            background: var(--primary-color);
            color: white;
            box-shadow: var(--shadow-sm);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            color: white;
        }

        .btn-outline-primary {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
        }

        .btn-outline-primary:hover {
            background: var(--primary-color);
            color: white;
        }

        .btn-lg {
            padding: 14px 28px;
            font-size: 1.1rem;
        }

        /* Card Styles */
        .card {
            border: 1px solid var(--border-light);
            border-radius: 8px;
            box-shadow: var(--shadow-sm);
            background: var(--bg-primary);
        }

        .card-header {
            background: var(--bg-secondary);
            color: var(--text-primary);
            border-bottom: 1px solid var(--border-light);
            padding: 2rem;
        }

        /* Stats Cards */
        .stats-card {
            background: var(--gradient-soft);
            border: 2px solid var(--border-light);
            color: var(--text-primary);
            text-align: center;
            padding: 2.5rem 2rem;
            border-radius: 12px;
            position: relative;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
        }

        .stats-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
            border-radius: 12px 12px 0 0;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-color);
        }

        .stats-number {
            font-size: 3rem;
            font-weight: 800;
            display: block;
            line-height: 1;
            margin-bottom: 0.8rem;
            color: var(--primary-color);
        }

        .stats-card h5 {
            font-weight: 600;
            margin-bottom: 0.8rem;
            color: var(--text-primary);
        }

        /* Section Styling */
        .section-padding {
            padding: 7rem 0;
        }

        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
            color: var(--text-primary);
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 0;
            width: 80px;
            height: 4px;
            background: var(--gradient-secondary);
            border-radius: 2px;
        }

        .text-gradient {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Feature Icons */
        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-md);
        }

        .feature-icon:hover {
            transform: rotateY(180deg) scale(1.05);
            background: var(--gradient-secondary);
        }

        .bg-soft {
            background: var(--bg-secondary) !important;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--text-primary) 100%);
            color: white;
            padding: 5rem 0 2rem;
            margin-top: 0;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-secondary);
        }

        .footer h5 {
            color: white;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer a:hover {
            color: var(--secondary-light);
            transform: translateX(5px);
        }

        /* Remove animations - content always visible */
        .fade-in {
            opacity: 1;
            transform: translateY(0);
        }

        /* Additional Sections Styling */
        .testimonial-card {
            background: var(--bg-primary);
            border: 1px solid var(--border-light);
            border-radius: 8px;
            padding: 2.5rem;
            text-align: center;
        }

        .process-step {
            text-align: center;
            position: relative;
        }

        .process-number {
            width: 60px;
            height: 60px;
            background: var(--gradient-primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.3rem;
            margin: 0 auto 1.5rem;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.8rem;
            }

            .hero-section .lead {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .stats-number {
                font-size: 2.8rem;
            }

            .feature-icon {
                width: 70px;
                height: 70px;
                font-size: 1.8rem;
            }
        }

        /* Additional Design Elements */
        .hero-image-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hero-image-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .program-card {
            transition: transform 0.3s ease;
        }

        .program-card:hover {
            transform: translateY(-10px);
        }

        .process-card {
            transition: transform 0.3s ease;
        }

        .process-card:hover {
            transform: translateY(-5px);
        }

        .success-story-card {
            transition: transform 0.3s ease;
        }

        .success-story-card:hover {
            transform: translateY(-5px);
        }

        .news-card {
            transition: transform 0.3s ease;
        }

        .news-card:hover {
            transform: translateY(-5px);
        }

        .testimonial-card {
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-3px);
        }

        .icon-box {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .avatar-circle {
            flex-shrink: 0;
        }

        .bg-primary-light {
            background-color: rgba(37, 99, 235, 0.1) !important;
        }

        .bg-success-light {
            background-color: rgba(5, 150, 105, 0.1) !important;
        }

        .bg-warning-light {
            background-color: rgba(245, 158, 11, 0.1) !important;
        }

        .text-success {
            color: var(--secondary-color) !important;
        }

        .text-warning {
            color: var(--warning-color) !important;
        }

        .min-vh-100 {
            min-height: 100vh;
        }

        /* Enhanced spacing */
        .section-padding {
            padding: 100px 0;
        }

        /* Enhanced hero section */
        .hero-section {
            padding: 140px 0 120px;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-tertiary);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gradient-primary);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--gradient-secondary);
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand font-display d-flex align-items-center" href="<?= base_url() ?>">

                <span>Bharatpur Foundation</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url($language ?? 'en') ?>">
                            <i class="fas fa-home me-1"></i> <?= $translations['nav_home'] ?? 'Home' ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(($language ?? 'en') . '/beneficiaries') ?>">
                            <i class="fas fa-users me-1"></i> <?= $translations['nav_beneficiaries'] ?? 'Beneficiaries' ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(($language ?? 'en') . '/success-stories') ?>">
                            <i class="fas fa-trophy me-1"></i> <?= $translations['nav_success_stories'] ?? 'Success Stories' ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(($language ?? 'en') . '/ngo-works') ?>">
                            <?= $translations['nav_our_works'] ?? 'Our Works' ?>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <?= isset($yield) ? $yield : $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h5 class="font-display d-flex align-items-center">
                        <img src="<?= base_url('assets/images/bharatpur-logo.png') ?>" alt="Bharatpur Foundation" style="height: 35px; margin-right: 12px; object-fit: contain; filter: brightness(0) invert(1);">
                        Bharatpur Foundation
                    </h5>
                    <p class="lead">Empowering students through education and creating brighter futures for our community. Every contribution makes a difference in someone's life.</p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="text-white fs-4"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white fs-4"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-uppercase fw-bold">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="<?= base_url() ?>" class="text-light">Home</a></li>
                        <li><a href="<?= base_url('beneficiaries') ?>" class="text-light">Our Beneficiaries</a></li>
                        <li><a href="<?= base_url('success-stories') ?>" class="text-light">Success Stories</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-uppercase fw-bold">Contact Info</h6>
                    <div class="contact-info">
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="mailto:info@nayantar.org" class="text-light">info@nayantar.org</a>
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-phone me-2"></i>
                            <a href="tel:+919876543210" class="text-light">+91 98765 43210</a>
                        </p>
                        <p class="mb-0">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Mumbai, Maharashtra, India
                        </p>
                    </div>
                </div>
            </div>
            <hr class="my-4 border-light">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; <?= date('Y') ?> Bharatpur Foundation. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Made with <i class="fas fa-heart text-danger"></i> for education</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>