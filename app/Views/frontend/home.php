<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section-enhanced bg-gradient-to-br from-stone-800 via-stone-900 to-stone-800 relative overflow-hidden">
    <!-- Golden Pattern Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-stone-800/95 via-stone-900/90 to-stone-800/95 z-10"></div>

    <!-- Decorative Golden Elements -->
    <div class="absolute inset-0 z-20">
        <div class="absolute top-20 left-10 w-2 h-2 bg-amber-400 rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-20 w-3 h-3 bg-yellow-300 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-40 left-20 w-2 h-2 bg-amber-500 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 right-10 w-4 h-4 bg-yellow-400 rounded-full animate-bounce" style="animation-delay: 0.5s;"></div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-30">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center min-h-[85vh] py-20">
            <!-- Left Content -->
            <div class="hero-content-enhanced text-center lg:text-left">
                <!-- Logo Container with Golden Theme -->
                <div class="w-20 h-20 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl flex items-center justify-center mx-auto lg:mx-0 mb-8 shadow-xl border-2 border-amber-400/30">
                    <i class="fas fa-graduation-cap text-stone-800 text-2xl"></i>
                </div>

                <p class="text-amber-400 text-lg font-semibold mb-4 font-heading tracking-wide uppercase">
                    Bharatpur Foundation
                </p>

                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-stone-100 leading-tight mb-6">
                    We transform 
                    <span class="bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500 bg-clip-text text-transparent">
                        underprivileged students
                    </span>
                    into job-ready professionals
                </h1>

                <p class="text-stone-300 text-lg md:text-xl leading-relaxed mb-10 max-w-2xl mx-auto lg:mx-0 font-body">
                    Empowering dreams through education, skills development, and mentorship. 
                    Join us in our mission to break the cycle of poverty through sustainable learning opportunities.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mb-12 justify-center lg:justify-start">
                    <a href="<?= base_url(($language ?? 'en') . '/beneficiaries') ?>" 
                       class="btn-hero-primary inline-flex items-center justify-center">
                        <i class="fas fa-users mr-2"></i>
                        View Beneficiaries
                    </a>
                    <a href="<?= base_url(($language ?? 'en') . '/success-stories') ?>" 
                       class="btn-hero-secondary inline-flex items-center justify-center">
                        <i class="fas fa-star mr-2"></i>
                        Success Stories
                    </a>
                </div>

                <!-- Journey Steps -->
                <div class="bg-stone-700/30 backdrop-blur-lg border border-amber-500/20 rounded-2xl p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <i class="fas fa-hand-holding-heart text-stone-800 text-xl"></i>
                            </div>
                            <h6 class="font-heading text-lg font-bold text-stone-100 mb-2">Identify</h6>
                            <small class="text-stone-300 font-body">Find students in need</small>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <i class="fas fa-graduation-cap text-stone-800 text-xl"></i>
                            </div>
                            <h6 class="font-heading text-lg font-bold text-stone-100 mb-2">Educate</h6>
                            <small class="text-stone-300 font-body">Provide quality education</small>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <i class="fas fa-briefcase text-stone-800 text-xl"></i>
                            </div>
                            <h6 class="font-heading text-lg font-bold text-stone-100 mb-2">Employ</h6>
                            <small class="text-stone-300 font-body">Connect to opportunities</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content (Image/Illustration) -->
            <div class="hero-image-container flex items-center justify-center lg:justify-end">
                <div class="relative w-[500px] h-[500px] flex items-center justify-center">
                    <!-- AI-generated style illustration -->
                    <div class="absolute top-1/4 left-1/4 w-32 h-32 bg-amber-400/40 rounded-full filter blur-3xl animate-slow-move"></div>
                    <div class="absolute bottom-1/4 right-1/4 w-24 h-24 bg-amber-300/30 rounded-full filter blur-2xl animate-slow-move-reverse"></div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 bg-gradient-to-br from-amber-400 to-yellow-300 rounded-full filter blur-xl animate-pulse-wider"></div>
                    <div class="relative w-64 h-64 rounded-3xl overflow-hidden shadow-2xl border-4 border-amber-400/50">
                        <img src="<?= base_url('assets/images/hero-student-transformed.jpg') ?>" 
                             alt="Student Transformation" 
                             class="w-full h-full object-cover transform scale-105 hover:scale-100 transition-transform duration-500">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Three Pillars Section -->
<section class="py-20 bg-gradient-to-br from-stone-900 via-stone-800 to-stone-900 border-t-4 border-stone-700">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <div class="inline-block bg-gradient-to-br from-amber-900 to-yellow-800 rounded-2xl p-8 shadow-lg border border-amber-700 mb-8">
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-stone-100 mb-6">
                    Complete Student Development
                </h2>
                <p class="font-body text-lg md:text-xl text-stone-300 max-w-3xl mx-auto leading-relaxed">
                    Three comprehensive pillars that ensure every student receives world-class support for their academic and professional journey
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Education Pillar -->
            <div class="group bg-gradient-to-br from-stone-800 to-stone-700 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up border-2 border-amber-600 hover:border-amber-500">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <i class="fas fa-graduation-cap text-stone-800 text-2xl"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-stone-100 mb-4">Quality Education</h3>
                <p class="font-body text-stone-300 mb-6 leading-relaxed">
                    Complete academic fee coverage with modern learning tools and industry-relevant curriculum designed for success.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center font-body text-sm text-stone-200">
                        <i class="fas fa-check text-amber-400 mr-3"></i>
                        Full academic coverage
                    </li>
                    <li class="flex items-center font-body text-sm text-stone-200">
                        <i class="fas fa-check text-amber-400 mr-3"></i>
                        Modern learning tools
                    </li>
                    <li class="flex items-center font-body text-sm text-stone-200">
                        <i class="fas fa-check text-amber-400 mr-3"></i>
                        Industry-relevant skills
                    </li>
                </ul>
            </div>

            <!-- Mentoring Pillar -->
            <div class="group bg-gradient-to-br from-stone-800 to-stone-700 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up border-2 border-amber-600 hover:border-amber-500" style="animation-delay: 0.2s;">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <i class="fas fa-users text-stone-800 text-2xl"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-stone-100 mb-4">Personal Mentoring</h3>
                <p class="font-body text-stone-300 mb-6 leading-relaxed">
                    One-on-one guidance from industry professionals for comprehensive career and personal development.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center font-body text-sm text-stone-200">
                        <i class="fas fa-check text-amber-400 mr-3"></i>
                        Industry mentors
                    </li>
                    <li class="flex items-center font-body text-sm text-stone-200">
                        <i class="fas fa-check text-amber-400 mr-3"></i>
                        Regular guidance sessions
                    </li>
                    <li class="flex items-center font-body text-sm text-stone-200">
                        <i class="fas fa-check text-amber-400 mr-3"></i>
                        Personality development
                    </li>
                </ul>
            </div>

            <!-- Career Development Pillar -->
            <div class="group bg-gradient-to-br from-stone-800 to-stone-700 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up border-2 border-amber-600 hover:border-amber-500" style="animation-delay: 0.4s;">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <i class="fas fa-briefcase text-stone-800 text-2xl"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-stone-100 mb-4">Career Placement</h3>
                <p class="font-body text-stone-300 mb-6 leading-relaxed">
                    Job placement assistance and professional training for sustainable, well-paying careers in top companies.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center font-body text-sm text-stone-200">
                        <i class="fas fa-check text-amber-400 mr-3"></i>
                        Job placement support
                    </li>
                    <li class="flex items-center font-body text-sm text-stone-200">
                        <i class="fas fa-check text-amber-400 mr-3"></i>
                        Interview training
                    </li>
                    <li class="flex items-center font-body text-sm text-stone-200">
                        <i class="fas fa-check text-amber-400 mr-3"></i>
                        Career advancement
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Impact Statistics -->
<section class="py-20 bg-gradient-to-br from-stone-900 via-stone-800 to-stone-900 text-stone-100 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 20% 80%, #ffffff 1px, transparent 1px), radial-gradient(circle at 80% 20%, #ffffff 1px, transparent 1px); background-size: 60px 60px, 40px 40px;"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-stone-100">
                Lives Transformed, Futures Built
            </h2>
            <p class="font-body text-lg md:text-xl text-stone-300 max-w-3xl mx-auto leading-relaxed">
                Every number represents a family with new hope, a student achieving dreams, and communities growing stronger together
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="text-center group animate-fade-in-up">
                <div class="bg-stone-800/50 backdrop-blur-lg rounded-2xl p-6 hover:bg-stone-700/70 transition-all duration-300 group-hover:scale-105 border border-amber-600/30">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-users text-stone-800 text-xl"></i>
                    </div>
                    <div class="font-display text-3xl md:text-4xl font-bold mb-2 text-stone-100"><?= $total_beneficiaries ?? '500' ?>+</div>
                    <div class="font-body text-stone-200 font-medium">Lives Transformed</div>
                    <div class="text-xs text-stone-400 mt-1 font-body">From struggle to success</div>
                </div>
            </div>

            <div class="text-center group animate-fade-in-up" style="animation-delay: 0.1s;">
                <div class="bg-stone-800/50 backdrop-blur-lg rounded-2xl p-6 hover:bg-stone-700/70 transition-all duration-300 group-hover:scale-105 border border-amber-600/30">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-briefcase text-stone-800 text-xl"></i>
                    </div>
                    <div class="font-display text-3xl md:text-4xl font-bold mb-2 text-stone-100">95%</div>
                    <div class="font-body text-stone-200 font-medium">Employment Rate</div>
                    <div class="text-xs text-stone-400 mt-1 font-body">In chosen fields</div>
                </div>
            </div>

            <div class="text-center group animate-fade-in-up" style="animation-delay: 0.2s;">
                <div class="bg-stone-800/50 backdrop-blur-lg rounded-2xl p-6 hover:bg-stone-700/70 transition-all duration-300 group-hover:scale-105 border border-amber-600/30">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-user-tie text-stone-800 text-xl"></i>
                    </div>
                    <div class="font-display text-3xl md:text-4xl font-bold mb-2 text-stone-100">50+</div>
                    <div class="font-body text-stone-200 font-medium">Industry Mentors</div>
                    <div class="text-xs text-stone-400 mt-1 font-body">Professional guidance</div>
                </div>
            </div>
        </div>

        <!-- Transparency Link -->
        <div class="text-center mt-12 animate-fade-in-up" style="animation-delay: 0.4s;">
            <a href="#impact-report" class="inline-flex items-center bg-stone-700/30 backdrop-blur-lg text-stone-100 px-8 py-4 rounded-xl font-heading font-semibold hover:bg-stone-700/50 transition-all duration-200 border border-amber-600/30 hover:border-amber-500">
                <i class="fas fa-file-alt mr-2"></i>
                View Full Impact Report
            </a>
        </div>
    </div>
</section>

<!-- Students Showcase Section -->
<section class="py-20 bg-gradient-to-br from-stone-900 to-stone-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-stone-100 mb-6">
                Meet Our Amazing Students
            </h2>
            <p class="font-body text-lg md:text-xl text-stone-300 max-w-3xl mx-auto leading-relaxed">
                Dedicated individuals transforming their lives through education, determination, and the support of our community
            </p>
        </div>

        <?php 
        $beneficiaryModel = new \App\Models\BeneficiaryModel();
        $featured_beneficiaries = $beneficiaryModel->getActiveBeneficiaries(3);
        ?>

        <?php if (!empty($featured_beneficiaries)): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($featured_beneficiaries as $index => $beneficiary): ?>
                    <div class="group bg-stone-800 rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-stone-700 animate-fade-in-up" style="animation-delay: <?= $index * 0.1 ?>s;">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="w-16 h-16 rounded-2xl overflow-hidden bg-stone-700 flex-shrink-0">
                                <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                                    <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>"
                                         alt="<?= esc($beneficiary['name']) ?>" 
                                         class="w-full h-full object-cover">
                                <?php else: ?>
                                    <div class="w-full h-full bg-gradient-to-br from-amber-500 to-yellow-400 flex items-center justify-center">
                                        <i class="fas fa-user-graduate text-stone-800 text-xl"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div>
                                <h3 class="font-heading text-lg font-bold text-stone-100"><?= esc($beneficiary['name']) ?></h3>
                                <p class="font-body text-stone-300"><?= esc($beneficiary['course']) ?></p>
                                <span class="inline-flex items-center bg-amber-500/20 text-amber-300 px-3 py-1 rounded-full text-xs font-heading font-medium mt-2 border border-amber-400/30">
                                    <i class="fas fa-graduation-cap mr-1"></i>
                                    <?= $beneficiary['is_passout'] ? 'Alumni' : 'Active Student' ?>
                                </span>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex items-center text-stone-200">
                                <i class="fas fa-university text-amber-400 mr-3"></i>
                                <span class="font-body text-sm"><?= esc($beneficiary['institution']) ?></span>
                            </div>
                            <?php if (!empty($beneficiary['city'])): ?>
                                <div class="flex items-center text-stone-200">
                                    <i class="fas fa-map-marker-alt text-amber-400 mr-3"></i>
                                    <span class="font-body text-sm"><?= esc($beneficiary['city']) ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-12 animate-fade-in-up" style="animation-delay: 0.4s;">
                <a href="<?= base_url(($language ?? 'en') . '/beneficiaries') ?>" 
                   class="inline-flex items-center bg-gradient-to-br from-amber-500 to-yellow-400 text-stone-800 px-8 py-4 rounded-xl font-heading font-semibold hover:from-amber-600 hover:to-yellow-500 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <i class="fas fa-users mr-2"></i>
                    Meet All Our Students
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Success Stories Preview -->
<?php if (!empty($success_stories)): ?>
    <section class="py-20 bg-gradient-to-br from-stone-900 to-stone-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-stone-100 mb-6">
                    Success Stories That Inspire
                </h2>
                <p class="font-body text-lg md:text-xl text-stone-300 max-w-3xl mx-auto leading-relaxed">
                    Discover the journeys of brave individuals who transformed challenges into triumphs through determination and education
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach (array_slice($success_stories, 0, 3) as $index => $story): ?>
                    <div class="group bg-stone-800 rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-stone-700 animate-fade-in-up" style="animation-delay: <?= $index * 0.1 ?>s;">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="w-16 h-16 rounded-2xl overflow-hidden bg-stone-700 flex-shrink-0">
                                <?php if (!empty($story['image'])): ?>
                                    <img src="<?= base_url('uploads/success_stories/' . $story['image']) ?>"
                                         alt="<?= esc($story['name']) ?>" 
                                         class="w-full h-full object-cover">
                                <?php else: ?>
                                    <div class="w-full h-full bg-gradient-to-br from-amber-500 to-yellow-400 flex items-center justify-center">
                                        <i class="fas fa-user text-stone-800 text-xl"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div>
                                <h3 class="font-heading text-lg font-bold text-stone-100"><?= esc($story['name']) ?></h3>
                                <p class="font-body text-stone-300"><?= esc($story['current_position']) ?></p>
                                <span class="inline-flex items-center bg-amber-500/20 text-amber-300 px-3 py-1 rounded-full text-xs font-heading font-medium mt-2 border border-amber-400/30">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    Employed
                                </span>
                            </div>
                        </div>

                        <p class="font-body text-stone-200 leading-relaxed mb-4">
                            <?= esc(substr($story['story'], 0, 120)) ?>...
                        </p>

                        <div class="text-xs text-stone-400 font-body">
                            <i class="fas fa-calendar mr-1"></i>
                            Program Graduate <?= date('Y', strtotime($story['created_at'] ?? 'now')) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-12 animate-fade-in-up" style="animation-delay: 0.4s;">
                <a href="<?= base_url($language . '/success-stories') ?>" 
                   class="inline-flex items-center bg-stone-800 border-2 border-stone-700 text-stone-100 px-8 py-4 rounded-xl font-heading font-semibold hover:border-amber-500 hover:text-amber-400 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-1">
                    <i class="fas fa-arrow-right mr-2"></i>
                    View All Success Stories
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>



<?= $this->endSection() ?>