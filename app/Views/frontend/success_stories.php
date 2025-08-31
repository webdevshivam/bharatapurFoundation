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
                Success 
                <span class="bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500 bg-clip-text text-transparent">
                    Stories
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-stone-300 leading-relaxed mb-12 max-w-4xl mx-auto font-body">
                Inspiring journeys of transformation, growth, and achievement from our community.
            </p>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<section class="py-20 section-dark">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($stories as $index => $story): ?>
                <div class="success-card-professional-dark group" 
                     style="animation: fadeInUp 0.6s ease-out <?= $index * 0.1 ?>s both;">

                    <!-- Story Image -->
                    <div class="relative h-64 bg-gradient-to-br from-emerald-100 to-teal-100 overflow-hidden">
                        <?php if (!empty($story['image']) && file_exists(WRITEPATH . 'uploads/success_stories/' . $story['image'])): ?>
                            <img src="<?= base_url('uploads/success_stories/' . $story['image']) ?>"
                                 alt="<?= esc($story['title'] ?? 'Success Story') ?>" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <?php else: ?>
                            <div class="w-full h-full bg-gradient-to-br from-emerald-200 to-teal-200 flex items-center justify-center">
                                <i class="fas fa-star text-emerald-600 text-6xl"></i>
                            </div>
                        <?php endif; ?>

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>

                        <!-- Success Badge -->
                        <div class="absolute top-4 right-4 bg-emerald-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                            <i class="fas fa-trophy mr-1"></i>
                            Success Story
                        </div>
                    </div>

                    <!-- Story Content -->
                    <div class="p-6 bg-stone-800">
                        <div class="space-y-4">
                            <!-- Title -->
                            <h3 class="font-heading text-xl font-bold text-stone-100 mb-2 group-hover:text-amber-400 transition-colors duration-200">
                                <?= esc($story['name'] ?? 'Inspiring Journey') ?>
                            </h3>

                            <!-- Excerpt -->
                            <p class="text-stone-300 leading-relaxed mb-6 font-body">
                                <?= esc(substr($story['story'] ?? 'An inspiring story of transformation and success through education and determination.', 0, 150)) ?>...
                            </p>

                            <!-- Position & Company -->
                            <?php if (!empty($story['current_position']) || !empty($story['company'])): ?>
                                <div class="bg-stone-700 rounded-xl p-3 border border-stone-600">
                                    <?php if (!empty($story['current_position'])): ?>
                                        <p class="text-amber-400 font-semibold text-sm">
                                            <i class="fas fa-briefcase mr-1"></i>
                                            <?= esc($story['current_position']) ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if (!empty($story['company'])): ?>
                                        <p class="text-amber-300 text-sm">
                                            <i class="fas fa-building mr-1"></i>
                                            <?= esc($story['company']) ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <!-- Meta Info -->
                            <div class="flex items-center space-x-4 text-sm text-stone-400">
                                <span class="flex items-center">
                                    <i class="fas fa-calendar mr-1"></i>
                                    <?= date('M j, Y', strtotime($story['created_at'] ?? 'now')) ?>
                                </span>
                                <?php if (!empty($story['education'])): ?>
                                    <span class="flex items-center">
                                        <i class="fas fa-graduation-cap mr-1"></i>
                                        <?= esc($story['education']) ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Read More Button -->
                        <div class="mt-6 pt-4 border-t border-stone-700">
                            <button onclick="viewStory(<?= htmlspecialchars(json_encode($story['name'] ?? ''), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode($story['story'] ?? ''), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode($story['name'] ?? ''), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode(date('M j, Y', strtotime($story['created_at'] ?? 'now'))), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode(!empty($story['image']) ? base_url('uploads/success_stories/' . $story['image']) : ''), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode($story['current_position'] ?? ''), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode($story['company'] ?? ''), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode($story['linkedin_url'] ?? ''), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode($story['company_link'] ?? ''), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode($story['education'] ?? ''), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode($story['city'] ?? ''), ENT_QUOTES) ?>, <?= htmlspecialchars(json_encode($story['state'] ?? ''), ENT_QUOTES) ?>)" class="w-full btn-bharatpur-primary inline-flex items-center justify-center">
                                Read Full Story
                                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Story Detail Modal -->
<div id="storyModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-stone-800 rounded-3xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-amber-500 to-yellow-500 text-stone-900 p-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-6">
                        <div id="storyModalImage" class="w-20 h-20 rounded-3xl overflow-hidden bg-white/20 flex-shrink-0 shadow-lg">
                            <div class="w-full h-full bg-white/30 flex items-center justify-center">
                                <i class="fas fa-star text-white text-2xl"></i>
                            </div>
                        </div>
                        <div>
                            <h2 id="storyModalTitle" class="text-3xl font-bold text-stone-900 mb-2"></h2>
                            <p id="storyModalStudent" class="text-stone-800 text-lg"></p>
                        </div>
                    </div>
                    <button onclick="closeStoryModal()" class="text-stone-700 hover:text-stone-900 transition-colors duration-200 p-2">
                        <i class="fas fa-times text-3xl"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Content -->
            <div class="p-8 overflow-y-auto max-h-[60vh]">
                <div class="space-y-6">
                    <!-- Professional Info -->
                    <div id="storyModalProfessional" class="bg-stone-700 rounded-2xl p-6 border border-stone-600 hidden">
                        <h3 class="text-lg font-bold text-amber-400 mb-4">Professional Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div id="storyModalPosition" class="hidden">
                                <p class="text-amber-400 font-semibold"><i class="fas fa-briefcase mr-2"></i>Position</p>
                                <p id="storyModalPositionText" class="text-stone-300"></p>
                            </div>
                            <div id="storyModalCompany" class="hidden">
                                <p class="text-amber-400 font-semibold"><i class="fas fa-building mr-2"></i>Company</p>
                                <p id="storyModalCompanyText" class="text-stone-300"></p>
                            </div>
                            <div id="storyModalEducation" class="hidden">
                                <p class="text-amber-400 font-semibold"><i class="fas fa-graduation-cap mr-2"></i>Education</p>
                                <p id="storyModalEducationText" class="text-stone-300"></p>
                            </div>
                            <div id="storyModalLocation" class="hidden">
                                <p class="text-amber-400 font-semibold"><i class="fas fa-map-marker-alt mr-2"></i>Location</p>
                                <p id="storyModalLocationText" class="text-stone-300"></p>
                            </div>
                        </div>
                        <!-- Links -->
                        <div id="storyModalLinks" class="mt-4 flex space-x-4 hidden">
                            <a id="storyModalLinkedIn" href="#" target="_blank" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors hidden">
                                <i class="fab fa-linkedin mr-2"></i>LinkedIn
                            </a>
                            <a id="storyModalCompanyLink" href="#" target="_blank" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors hidden">
                                <i class="fas fa-external-link-alt mr-2"></i>Company Website
                            </a>
                        </div>
                    </div>

                    <!-- Full Story Content -->
                    <div>
                        <h3 class="text-xl font-bold text-stone-100 mb-4">Success Story</h3>
                        <div id="storyModalContent" class="prose prose-lg max-w-none text-stone-300 leading-relaxed">
                            <!-- Story content will be inserted here -->
                        </div>
                    </div>

                    <div class="bg-stone-700 rounded-2xl p-6 border border-stone-600">
                        <div class="flex items-center justify-center">
                            <span id="storyModalDate" class="text-amber-400 font-medium"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
/* Existing styles */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* New styles for dark theme */
.section-dark {
    background-color: #292524; /* Dark Gray */
    color: #fcd34d; /* Golden */
}

.success-card-professional-dark {
    background-color: #292524; /* Dark Gray */
    border-radius: 1.5rem; /* 24px */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4); /* Deeper shadow for dark theme */
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.success-card-professional-dark:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.5);
}

.btn-bharatpur-primary {
    background-color: #ffb800; /* Golden */
    color: #292524; /* Dark Gray Text */
    font-weight: bold;
    padding: 12px 24px;
    border-radius: 12px; /* Rounded corners */
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.btn-bharatpur-primary:hover {
    background-color: #e6a400; /* Darker Golden */
    color: #ffffff; /* White text on hover */
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 184, 0, 0.4);
}

/* Font styles */
.font-display {
    font-family: 'Poppins', sans-serif; /* Example font */
}

.font-body {
    font-family: 'Open Sans', sans-serif; /* Example font */
}

.font-heading {
    font-family: 'Montserrat', sans-serif; /* Example font */
}

/* Specific element overrides for dark theme */
.text-stone-100 { color: #f5f5f5; }
.text-stone-300 { color: #d4d4d4; }
.text-stone-400 { color: #a3a3a3; }
.text-stone-600 { color: #525252; }
.text-stone-700 { color: #404040; }
.text-stone-800 { color: #292524; }
.text-stone-900 { color: #171717; }
.bg-stone-800 { background-color: #292524; }
.bg-stone-700 { background-color: #404040; }

.text-amber-300 { color: #fdbb2d; }
.text-amber-400 { color: #ffb800; }
.text-amber-500 { color: #ffa700; }
.bg-amber-400 { background-color: #ffb800; }
.bg-amber-500 { background-color: #ffa700; }

.text-yellow-300 { color: #fde047; }
.text-yellow-400 { color: #facc15; }
.bg-yellow-300 { background-color: #fde047; }
.bg-yellow-400 { background-color: #facc15; }

.text-emerald-100 { color: #d9f7ee; }
.text-emerald-200 { color: #b8ecd8; }
.text-emerald-500 { color: #10b981; }
.text-emerald-600 { color: #047857; }
.text-emerald-700 { color: #065f46; }
.text-emerald-800 { color: #047857; }
.bg-emerald-50 { background-color: #ecfdf5; }
.bg-emerald-100 { background-color: #d9f7ee; }
.bg-emerald-200 { background-color: #b8ecd8; }
.bg-emerald-500 { background-color: #10b981; }

.text-teal-100 { color: #cffafe; }
.text-teal-200 { color: #a5f3fc; }
.text-teal-500 { color: #2dd4bf; }
.text-teal-600 { color: #0891b2; }
.bg-teal-50 { background-color: #f0f9ff; }
.bg-teal-100 { background-color: #cffafe; }
.bg-teal-200 { background-color: #a5f3fc; }
.bg-teal-500 { background-color: #2dd4bf; }

.text-gray-900 { color: #111827; }
.text-gray-600 { color: #4b5563; }
.text-gray-500 { color: #6b7280; }
.text-gray-100 { color: #f3f4f6; }
.bg-gray-100 { background-color: #f3f4f6; }
.border-gray-100 { border-color: #f3f4f6; }

/* Tailwind Prose overrides for dark theme */
.prose {
    --tw-prose-body: #d4d4d4; /* stone-300 */
    --tw-prose-headings: #f5f5f5; /* stone-100 */
    --tw-prose-links: #ffb800; /* amber-400 */
    --tw-prose-bold: #f5f5f5; /* stone-100 */
    --tw-prose-bullets: #ffb800; /* amber-400 */
    --tw-prose-counters: #ffb800; /* amber-400 */
    --tw-prose-hr: #404040; /* stone-600 */
    --tw-prose-quotes: #a3a3a3; /* stone-400 */
    --tw-prose-quote-borders: #404040; /* stone-600 */
    --tw-prose-captions: #a3a3a3; /* stone-400 */
    --tw-prose-code: #fdbb2d; /* amber-300 */
    --tw-prose-pre-bg: #404040; /* stone-700 */
    --tw-prose-th-borders: #404040; /* stone-600 */
    --tw-prose-td-borders: #404040; /* stone-600 */
}

.prose-lg {
    --tw-prose-body: #d4d4d4;
    --tw-prose-headings: #f5f5f5;
    --tw-prose-links: #ffb800;
    --tw-prose-bold: #f5f5f5;
    --tw-prose-bullets: #ffb800;
    --tw-prose-counters: #ffb800;
    --tw-prose-hr: #404040;
    --tw-prose-quotes: #a3a3a3;
    --tw-prose-quote-borders: #404040;
    --tw-prose-captions: #a3a3a3;
    --tw-prose-code: #fdbb2d;
    --tw-prose-pre-bg: #404040;
    --tw-prose-th-borders: #404040;
    --tw-prose-td-borders: #404040;
}
</style>

<script>
// Story modal functions
function viewStory(title, content, studentName, date, image, position, company, linkedinUrl, companyLink, education, city, state) {
    document.getElementById('storyModalTitle').textContent = title || 'Success Story';
    document.getElementById('storyModalStudent').textContent = studentName ? `by ${studentName}` : '';

    // Display full story content
    const fullContent = content || 'An inspiring story of transformation and success.';
    document.getElementById('storyModalContent').innerHTML = fullContent.replace(/\n/g, '<br><br>');

    document.getElementById('storyModalDate').textContent = `Published on ${date}`;

    // Handle image
    const storyModalImage = document.getElementById('storyModalImage');
    if (image) {
        storyModalImage.innerHTML = `<img src="${image}" alt="${title}" class="w-full h-full object-cover">`;
    } else {
        storyModalImage.innerHTML = '<div class="w-full h-full bg-white/30 flex items-center justify-center"><i class="fas fa-star text-white text-2xl"></i></div>';
    }

    // Handle professional details
    const professionalSection = document.getElementById('storyModalProfessional');
    let hasInfo = false;

    // Position
    if (position) {
        document.getElementById('storyModalPosition').classList.remove('hidden');
        document.getElementById('storyModalPositionText').textContent = position;
        hasInfo = true;
    } else {
        document.getElementById('storyModalPosition').classList.add('hidden');
    }

    // Company
    if (company) {
        document.getElementById('storyModalCompany').classList.remove('hidden');
        document.getElementById('storyModalCompanyText').textContent = company;
        hasInfo = true;
    } else {
        document.getElementById('storyModalCompany').classList.add('hidden');
    }

    // Education
    if (education) {
        document.getElementById('storyModalEducation').classList.remove('hidden');
        document.getElementById('storyModalEducationText').textContent = education;
        hasInfo = true;
    } else {
        document.getElementById('storyModalEducation').classList.add('hidden');
    }

    // Location
    if (city || state) {
        document.getElementById('storyModalLocation').classList.remove('hidden');
        const location = [city, state].filter(Boolean).join(', ');
        document.getElementById('storyModalLocationText').textContent = location;
        hasInfo = true;
    } else {
        document.getElementById('storyModalLocation').classList.add('hidden');
    }

    // Links
    const linksSection = document.getElementById('storyModalLinks');
    let hasLinks = false;

    if (linkedinUrl) {
        document.getElementById('storyModalLinkedIn').classList.remove('hidden');
        document.getElementById('storyModalLinkedIn').href = linkedinUrl;
        hasLinks = true;
    } else {
        document.getElementById('storyModalLinkedIn').classList.add('hidden');
    }

    if (companyLink) {
        document.getElementById('storyModalCompanyLink').classList.remove('hidden');
        document.getElementById('storyModalCompanyLink').href = companyLink;
        hasLinks = true;
    } else {
        document.getElementById('storyModalCompanyLink').classList.add('hidden');
    }

    if (hasLinks) {
        linksSection.classList.remove('hidden');
    } else {
        linksSection.classList.add('hidden');
    }

    if (hasInfo) {
        professionalSection.classList.remove('hidden');
    } else {
        professionalSection.classList.add('hidden');
    }

    document.getElementById('storyModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeStoryModal() {
    document.getElementById('storyModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal on outside click
document.getElementById('storyModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeStoryModal();
    }
});

// Close modal on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeStoryModal();
    }
});
</script>

<?= $this->endSection() ?>