
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative min-h-[70vh] bg-gradient-to-br from-gray-50 via-white to-blue-50 flex items-center overflow-hidden -mt-16 pt-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-5xl mx-auto">
            <h1 class="font-bold text-5xl md:text-6xl lg:text-7xl text-gray-900 leading-tight mb-8">
                Our 
                <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">
                    Team
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 leading-relaxed mb-12 max-w-4xl mx-auto">
                Meet the dedicated individuals behind our mission to transform lives through education.
            </p>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Founders & Leadership Team
            </h2>
            <p class="font-accent text-lg text-gray-600 max-w-3xl mx-auto">
                Information about our team will be updated soon. For complete details, visit our official website.
            </p>
        </div>

        <div class="text-center">
            <a href="https://nayantaratrust.com/" target="_blank" 
               class="inline-flex items-center bg-blue-600 text-white px-8 py-4 rounded-xl font-heading font-semibold hover:bg-blue-700 transition-all duration-200 shadow-lg hover:shadow-xl">
                <i class="fas fa-external-link-alt mr-2"></i>
                Visit Official Website
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
