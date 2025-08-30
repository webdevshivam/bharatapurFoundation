<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title . ' - ' : '' ?>Bharatpur Foundation</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts - Modern Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&family=Manrope:wght@200;300;400;500;600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'display': ['Playfair Display', 'serif'],
                        'heading': ['Space Grotesk', 'sans-serif'],
                        'body': ['Inter', 'sans-serif'],
                        'accent': ['Manrope', 'sans-serif'],
                        'mono': ['DM Sans', 'monospace']
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                            950: '#082f49'
                        },
                        accent: {
                            50: '#fffbeb',
                            100: '#fef3c7',
                            200: '#fde68a',
                            300: '#fcd34d',
                            400: '#fbbf24',
                            500: '#f59e0b',
                            600: '#d97706',
                            700: '#b45309',
                            800: '#92400e',
                            900: '#78350f',
                            950: '#451a03'
                        },
                        navy: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                            950: '#020617'
                        }
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out',
                        'fade-in': 'fadeIn 0.8s ease-out',
                        'slide-in-right': 'slideInRight 0.7s ease-out',
                        'bounce-subtle': 'bounceSubtle 2s infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideInRight: {
                            '0%': { opacity: '0', transform: 'translateX(30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        bounceSubtle: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-5px)' }
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="font-body text-gray-900 bg-white">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="<?= base_url() ?>" class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-primary-600 to-primary-800 rounded-xl flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-white text-lg"></i>
                        </div>
                        <span class="font-display text-xl font-bold text-gray-900">Bharatpur Foundation</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        <a href="<?= base_url($language ?? 'en') ?>" 
                           class="font-heading font-medium text-gray-700 hover:text-primary-600 transition-colors duration-200">
                            <?= $translations['nav_home'] ?? 'Home' ?>
                        </a>
                        <a href="<?= base_url(($language ?? 'en') . '/beneficiaries') ?>" 
                           class="font-heading font-medium text-gray-700 hover:text-primary-600 transition-colors duration-200">
                            <?= $translations['nav_beneficiaries'] ?? 'Beneficiaries' ?>
                        </a>
                        <a href="<?= base_url(($language ?? 'en') . '/success-stories') ?>" 
                           class="font-heading font-medium text-gray-700 hover:text-primary-600 transition-colors duration-200">
                            <?= $translations['nav_success_stories'] ?? 'Success Stories' ?>
                        </a>
                        <a href="<?= base_url(($language ?? 'en') . '/ngo-works') ?>" 
                           class="font-heading font-medium text-gray-700 hover:text-primary-600 transition-colors duration-200">
                            <?= $translations['nav_our_works'] ?? 'Our Works' ?>
                        </a>
                        <a href="#donate" 
                           class="bg-gradient-to-r from-primary-600 to-primary-700 text-white px-6 py-2 rounded-lg font-heading font-semibold hover:from-primary-700 hover:to-primary-800 transition-all duration-200 shadow-md hover:shadow-lg">
                            Donate Now
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" id="mobile-menu-button" class="text-gray-700 hover:text-primary-600 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-100">
            <div class="px-4 pt-2 pb-6 space-y-3">
                <a href="<?= base_url($language ?? 'en') ?>" 
                   class="block font-heading font-medium text-gray-700 hover:text-primary-600 py-2">
                    <?= $translations['nav_home'] ?? 'Home' ?>
                </a>
                <a href="<?= base_url(($language ?? 'en') . '/beneficiaries') ?>" 
                   class="block font-heading font-medium text-gray-700 hover:text-primary-600 py-2">
                    <?= $translations['nav_beneficiaries'] ?? 'Beneficiaries' ?>
                </a>
                <a href="<?= base_url(($language ?? 'en') . '/success-stories') ?>" 
                   class="block font-heading font-medium text-gray-700 hover:text-primary-600 py-2">
                    <?= $translations['nav_success_stories'] ?? 'Success Stories' ?>
                </a>
                <a href="<?= base_url(($language ?? 'en') . '/ngo-works') ?>" 
                   class="block font-heading font-medium text-gray-700 hover:text-primary-600 py-2">
                    <?= $translations['nav_our_works'] ?? 'Our Works' ?>
                </a>
                <a href="#donate" 
                   class="block bg-gradient-to-r from-primary-600 to-primary-700 text-white px-4 py-3 rounded-lg font-heading font-semibold text-center mt-4">
                    Donate Now
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        <?= isset($yield) ? $yield : $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Foundation Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-primary-700 rounded-xl flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-white text-xl"></i>
                        </div>
                        <span class="font-display text-2xl font-bold">Bharatpur Foundation</span>
                    </div>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6 font-accent">
                        Transforming lives through education and creating sustainable impact in underprivileged communities. 
                        Every contribution creates lasting change.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary-600 transition-colors duration-200">
                            <i class="fab fa-facebook text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary-600 transition-colors duration-200">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary-600 transition-colors duration-200">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary-600 transition-colors duration-200">
                            <i class="fab fa-linkedin text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-heading text-lg font-semibold mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="<?= base_url() ?>" class="text-gray-300 hover:text-white transition-colors duration-200 font-accent">Home</a></li>
                        <li><a href="<?= base_url('beneficiaries') ?>" class="text-gray-300 hover:text-white transition-colors duration-200 font-accent">Beneficiaries</a></li>
                        <li><a href="<?= base_url('success-stories') ?>" class="text-gray-300 hover:text-white transition-colors duration-200 font-accent">Success Stories</a></li>
                        <li><a href="<?= base_url('ngo-works') ?>" class="text-gray-300 hover:text-white transition-colors duration-200 font-accent">Our Works</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="font-heading text-lg font-semibold mb-6">Contact Info</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-primary-400"></i>
                            <a href="mailto:info@nayantar.org" class="text-gray-300 hover:text-white transition-colors duration-200 font-accent">info@nayantar.org</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-primary-400"></i>
                            <a href="tel:+919876543210" class="text-gray-300 hover:text-white transition-colors duration-200 font-accent">+91 98765 43210</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-primary-400"></i>
                            <span class="text-gray-300 font-accent">Mumbai, Maharashtra, India</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row items-center justify-between">
                <p class="text-gray-400 font-accent">&copy; <?= date('Y') ?> Bharatpur Foundation. All rights reserved.</p>
                <p class="text-gray-400 font-accent mt-4 md:mt-0">
                    Made with <i class="fas fa-heart text-red-500"></i> for education
                </p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
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