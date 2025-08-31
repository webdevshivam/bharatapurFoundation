
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative min-h-[70vh] bg-gradient-to-br from-stone-800 via-stone-900 to-stone-800 flex items-center overflow-hidden">
    <!-- Golden Particles Background -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-2 h-2 bg-amber-400 rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-20 w-3 h-3 bg-yellow-300 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-40 left-20 w-2 h-2 bg-amber-500 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 right-10 w-4 h-4 bg-yellow-400 rounded-full animate-bounce" style="animation-delay: 0.5s;"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-5xl mx-auto py-20">
            <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-stone-100 leading-tight mb-8">
                Our 
                <span class="bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500 bg-clip-text text-transparent">
                    Founders & Members
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-stone-300 leading-relaxed mb-12 max-w-4xl mx-auto font-body">
                Meet the visionary leaders and dedicated members who drive our mission forward.
            </p>
        </div>
    </div>
</section>

<!-- Founders & Members Section -->
<section class="py-20 section-dark">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="section-title-dark">Leadership Team</h2>
            <p class="section-subtitle-dark max-w-3xl mx-auto">
                Our dedicated team of visionaries working tirelessly to transform lives through education
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Sanjeev Garg -->
            <div class="feature-card-dark text-center group">
                <div class="relative mb-6">
                    <div class="w-32 h-32 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl mx-auto flex items-center justify-center shadow-xl">
                        <img src="https://via.placeholder.com/128x128/ffb800/292524?text=SG" 
                             alt="Sanjeev Garg" 
                             class="w-28 h-28 rounded-xl object-cover border-2 border-stone-800">
                    </div>
                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-crown text-white text-xs"></i>
                    </div>
                </div>
                <h3 class="font-heading text-xl font-bold text-stone-100 mb-2">Sanjeev Garg</h3>
                <p class="text-amber-400 font-semibold mb-4 font-body">Founder & Chairman</p>
                <p class="text-stone-300 text-sm leading-relaxed font-body">
                    Visionary leader with extensive experience in education and social impact. 
                    Passionate about creating sustainable change through innovative educational programs.
                </p>
                <div class="mt-6 flex justify-center space-x-3">
                    <a href="#" class="w-8 h-8 bg-stone-700 rounded-lg flex items-center justify-center hover:bg-amber-500 hover:text-stone-800 transition-all duration-200">
                        <i class="fab fa-linkedin text-sm"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-stone-700 rounded-lg flex items-center justify-center hover:bg-amber-500 hover:text-stone-800 transition-all duration-200">
                        <i class="fas fa-envelope text-sm"></i>
                    </a>
                </div>
            </div>
            
            <!-- Chavi Goyal -->
            <div class="feature-card-dark text-center group">
                <div class="relative mb-6">
                    <div class="w-32 h-32 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl mx-auto flex items-center justify-center shadow-xl">
                        <img src="https://via.placeholder.com/128x128/ffb800/292524?text=CG" 
                             alt="Chavi Goyal" 
                             class="w-28 h-28 rounded-xl object-cover border-2 border-stone-800">
                    </div>
                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-star text-white text-xs"></i>
                    </div>
                </div>
                <h3 class="font-heading text-xl font-bold text-stone-100 mb-2">Chavi Goyal</h3>
                <p class="text-amber-400 font-semibold mb-4 font-body">Co-Founder & Director</p>
                <p class="text-stone-300 text-sm leading-relaxed font-body">
                    Strategic leader focused on program development and community outreach. 
                    Dedicated to ensuring sustainable impact and measurable outcomes for all beneficiaries.
                </p>
                <div class="mt-6 flex justify-center space-x-3">
                    <a href="#" class="w-8 h-8 bg-stone-700 rounded-lg flex items-center justify-center hover:bg-amber-500 hover:text-stone-800 transition-all duration-200">
                        <i class="fab fa-linkedin text-sm"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-stone-700 rounded-lg flex items-center justify-center hover:bg-amber-500 hover:text-stone-800 transition-all duration-200">
                        <i class="fas fa-envelope text-sm"></i>
                    </a>
                </div>
            </div>
            
            <!-- Sudip Majumdar -->
            <div class="feature-card-dark text-center group">
                <div class="relative mb-6">
                    <div class="w-32 h-32 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl mx-auto flex items-center justify-center shadow-xl">
                        <img src="https://via.placeholder.com/128x128/ffb800/292524?text=SM" 
                             alt="Sudip Majumdar" 
                             class="w-28 h-28 rounded-xl object-cover border-2 border-stone-800">
                    </div>
                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-gradient-to-br from-blue-400 to-cyan-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-medal text-white text-xs"></i>
                    </div>
                </div>
                <h3 class="font-heading text-xl font-bold text-stone-100 mb-2">Sudip Majumdar</h3>
                <p class="text-amber-400 font-semibold mb-4 font-body">Board Member & Advisor</p>
                <p class="text-stone-300 text-sm leading-relaxed font-body">
                    Expert advisor with deep knowledge in operations and strategic planning. 
                    Committed to ensuring the foundation's mission reaches maximum impact through efficient execution.
                </p>
                <div class="mt-6 flex justify-center space-x-3">
                    <a href="#" class="w-8 h-8 bg-stone-700 rounded-lg flex items-center justify-center hover:bg-amber-500 hover:text-stone-800 transition-all duration-200">
                        <i class="fab fa-linkedin text-sm"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-stone-700 rounded-lg flex items-center justify-center hover:bg-amber-500 hover:text-stone-800 transition-all duration-200">
                        <i class="fas fa-envelope text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Statement -->
<section class="py-20 section-dark-alt">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-stone-100 mb-8">Our Mission</h2>
            <p class="text-stone-300 text-lg leading-relaxed font-body mb-12">
                "We believe that education is the most powerful weapon to change the world. Our commitment is to ensure that every underprivileged student gets the opportunity to transform their life through quality education and skill development."
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-eye text-stone-800 text-xl"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-stone-100 mb-2">Vision</h4>
                    <p class="text-stone-300 text-sm font-body">A world where every student has access to quality education</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bullseye text-stone-800 text-xl"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-stone-100 mb-2">Mission</h4>
                    <p class="text-stone-300 text-sm font-body">Transform underprivileged students into job-ready professionals</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-stone-800 text-xl"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-stone-100 mb-2">Values</h4>
                    <p class="text-stone-300 text-sm font-body">Integrity, compassion, excellence, and sustainable impact</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
