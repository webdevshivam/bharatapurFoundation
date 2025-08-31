
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative min-h-[70vh] bg-gradient-to-br from-blue-50 via-white to-indigo-50 flex items-center overflow-hidden -mt-16 pt-16">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #3b82f6 2px, transparent 2px), radial-gradient(circle at 75% 75%, #6366f1 1px, transparent 1px); background-size: 50px 50px, 30px 30px;"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-5xl mx-auto">
            <!-- Trust Badge -->
            <div class="inline-flex items-center bg-blue-100 text-blue-800 px-6 py-3 rounded-full font-medium text-sm mb-8 shadow-lg">
                <i class="fas fa-handshake mr-2"></i>
                Join Our Mission • Make a Difference
            </div>

            <!-- Main Headline -->
            <h1 class="font-bold text-5xl md:text-6xl lg:text-7xl text-gray-900 leading-tight mb-8">
                Join 
                <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">
                    Our Mission
                </span>
            </h1>

            <!-- Supporting Text -->
            <p class="text-xl md:text-2xl text-gray-600 leading-relaxed mb-12 max-w-4xl mx-auto">
                Be part of transforming underprivileged students into job-ready professionals. Together, we can create lasting change through education and empowerment.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="<?= base_url(($language ?? 'en') . '/volunteering') ?>" 
                   class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-10 py-5 rounded-xl font-heading font-semibold hover:from-blue-700 hover:to-blue-800 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center text-lg">
                    <i class="fas fa-heart mr-3"></i>
                    Volunteer With Us
                </a>
                <a href="https://nayantaratrust.com/" target="_blank" 
                   class="bg-white border-2 border-gray-200 text-gray-700 px-10 py-5 rounded-xl font-heading font-semibold hover:border-blue-300 hover:text-blue-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-1 flex items-center justify-center text-lg">
                    <i class="fas fa-donate mr-3"></i>
                    Donate Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Ways to Join Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                Ways to Make a Difference
            </h2>
            <p class="font-accent text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Choose how you'd like to contribute to our mission of transforming lives through education
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Volunteer -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-100">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-heart text-white text-2xl"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-gray-900 mb-4">Volunteer</h3>
                <p class="font-accent text-gray-600 mb-6 leading-relaxed">
                    Share your skills and time to mentor students, conduct workshops, or support our programs.
                </p>
                <a href="<?= base_url(($language ?? 'en') . '/volunteering') ?>" 
                   class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-blue-700 transition-all duration-200">
                    Start Volunteering
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Donate -->
            <div class="bg-gradient-to-br from-emerald-50 to-green-50 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-emerald-100">
                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-700 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-donate text-white text-2xl"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-gray-900 mb-4">Donate</h3>
                <p class="font-accent text-gray-600 mb-6 leading-relaxed">
                    Support student education fees, learning materials, and program operations with your generous contributions.
                </p>
                <a href="https://nayantaratrust.com/" target="_blank" 
                   class="inline-flex items-center bg-emerald-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-emerald-700 transition-all duration-200">
                    Donate Now
                    <i class="fas fa-external-link-alt ml-2"></i>
                </a>
            </div>

            <!-- Partner -->
            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-purple-100">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-handshake text-white text-2xl"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-gray-900 mb-4">Partner</h3>
                <p class="font-accent text-gray-600 mb-6 leading-relaxed">
                    Join as an institutional partner to provide internships, jobs, or educational resources to our students.
                </p>
                <a href="mailto:info@nayantar.org" 
                   class="inline-flex items-center bg-purple-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-purple-700 transition-all duration-200">
                    Get in Touch
                    <i class="fas fa-envelope ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
