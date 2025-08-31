<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative min-h-[70vh] bg-gradient-to-br from-stone-800 via-stone-900 to-stone-800 flex items-center overflow-hidden">
    <!-- Golden Particles Background -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-2 h-2 bg-amber-400 rounded-full animate-pulse"></div>
        <div class="absolute top-60 right-20 w-3 h-3 bg-yellow-300 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-40 left-40 w-2 h-2 bg-amber-500 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 right-40 w-4 h-4 bg-yellow-400 rounded-full animate-bounce" style="animation-delay: 0.5s;"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-5xl mx-auto py-20">
            <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-stone-100 leading-tight mb-8">
                Our 
                <span class="bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500 bg-clip-text text-transparent">
                    Beneficiaries
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-stone-300 leading-relaxed mb-12 max-w-4xl mx-auto font-body">
                Meet the inspiring students whose lives we've transformed through education and skill development programs.
            </p>
        </div>
    </div>
</section>

<!-- Filter & Search Section -->
<section class="py-8 bg-stone-900 border-b border-stone-700 shadow-sm">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8 items-center justify-between">
            <!-- Filter Buttons -->
            <div class="flex flex-wrap gap-4 justify-center lg:justify-start">
                <button onclick="filterBeneficiaries('all')" 
                        class="filter-btn active bg-amber-500 text-stone-900 px-8 py-4 rounded-2xl font-bold hover:bg-amber-400 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <i class="fas fa-users mr-2"></i>
                    All Students
                </button>
                <button onclick="filterBeneficiaries('active')" 
                        class="filter-btn bg-stone-700 text-stone-200 px-8 py-4 rounded-2xl font-bold hover:bg-stone-600 hover:shadow-lg transition-all duration-200 transform hover:-translate-y-1">
                    <i class="fas fa-user-graduate mr-2"></i>
                    Active
                </button>
                <button onclick="filterBeneficiaries('graduate')" 
                        class="filter-btn bg-stone-700 text-stone-200 px-8 py-4 rounded-2xl font-bold hover:bg-stone-600 hover:shadow-lg transition-all duration-200 transform hover:-translate-y-1">
                    <i class="fas fa-medal mr-2"></i>
                    Graduates
                </button>
            </div>

            <!-- Search Box -->
            <div class="relative w-full lg:w-auto">
                <input type="text" id="searchInput" placeholder="Search students by name, course, or institution..." 
                       class="bg-stone-800 border-2 border-stone-700 rounded-2xl px-6 py-4 pl-14 font-medium focus:outline-none focus:ring-4 focus:ring-amber-500/30 focus:border-amber-500 w-full lg:w-80 transition-all duration-200 text-stone-200 placeholder-stone-400">
                <i class="fas fa-search absolute left-5 top-1/2 transform -translate-y-1/2 text-stone-400"></i>
            </div>
        </div>
    </div>
</section>

<!-- Students Grid -->
<section class="py-20 section-dark">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (!empty($beneficiaries) && is_array($beneficiaries)): ?>
            <div id="beneficiariesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <?php foreach ($beneficiaries as $index => $beneficiary): ?>
                    <article class="beneficiary-card group foundation-card hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" 
                             style="animation: fadeInUp 0.6s ease-out <?= $index * 0.1 ?>s both;"
                             data-status="<?= $beneficiary['is_passout'] ? 'graduate' : 'active' ?>"
                             data-name="<?= strtolower(esc($beneficiary['name'] ?? '')) ?>"
                             data-course="<?= strtolower(esc($beneficiary['course'] ?? '')) ?>"
                             data-institution="<?= strtolower(esc($beneficiary['institution'] ?? '')) ?>">

                        <!-- Card Header -->
                        <div class="relative p-6 bg-gradient-to-br from-stone-700 to-stone-800 border-b border-stone-600">
                            <div class="flex flex-col items-center text-center">
                                <!-- Profile Image -->
                                <div class="w-24 h-24 rounded-3xl overflow-hidden bg-stone-700 flex-shrink-0 ring-4 ring-stone-800 shadow-lg mb-4">
                                    <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                                        <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>"
                                             alt="<?= esc($beneficiary['name'] ?? 'Student') ?>" 
                                             class="w-full h-full object-cover">
                                    <?php else: ?>
                                        <div class="w-full h-full bg-gradient-to-br from-amber-400 to-yellow-400 flex items-center justify-center">
                                            <i class="fas fa-user-graduate text-stone-800 text-3xl"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Student Info -->
                                <h3 class="text-xl font-bold text-stone-100 mb-2 font-heading"><?= esc($beneficiary['name'] ?? 'Student Name') ?></h3>
                                <p class="text-amber-400 font-semibold mb-3 font-body"><?= esc($beneficiary['course'] ?? 'Course') ?></p>
                                <span class="inline-flex items-center bg-stone-700 text-amber-400 px-4 py-2 rounded-full text-sm font-medium">
                                    <i class="fas fa-<?= $beneficiary['is_passout'] ? 'medal' : 'graduation-cap' ?> mr-2"></i>
                                    <?= $beneficiary['is_passout'] ? 'Graduate' : 'Active Student' ?>
                                </span>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-6 bg-stone-800">
                            <div class="space-y-4">
                                <!-- Institution -->
                                <?php if (!empty($beneficiary['institution'])): ?>
                                    <div class="mt-4 professional-institution-card">
                                        <div class="institution-content">
                                            <div class="institution-badge ai-badge">
                                                <i class="fas fa-robot text-amber-400"></i>
                                                Professional Institute
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <p class="text-sm font-semibold text-amber-400 mb-1 font-heading">Institution</p>
                                                    <p class="text-stone-100 font-medium font-body"><?= esc($beneficiary['institution']) ?></p>
                                                </div>
                                                <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-xl flex items-center justify-center">
                                                    <i class="fas fa-university text-xl text-stone-800"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- Location & Year -->
                                <div class="grid grid-cols-2 gap-3 pt-4">
                                    <?php if (!empty($beneficiary['city'])): ?>
                                        <div class="bg-gradient-to-br from-amber-500/10 to-yellow-400/10 rounded-xl p-3 border border-stone-700">
                                            <div class="flex items-center text-amber-400">
                                                <i class="fas fa-map-marker-alt mr-2 text-amber-400"></i>
                                                <span class="text-sm font-medium font-body"><?= esc($beneficiary['city']) ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($beneficiary['year'])): ?>
                                        <div class="bg-gradient-to-br from-yellow-500/10 to-amber-400/10 rounded-xl p-3 border border-stone-700">
                                            <div class="flex items-center text-yellow-400">
                                                <i class="fas fa-calendar mr-2 text-yellow-400"></i>
                                                <span class="text-sm font-medium font-body"><?= esc($beneficiary['year']) ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Company (if graduate) -->
                                <?php if ($beneficiary['is_passout'] && !empty($beneficiary['company_name'])): ?>
                                    <div class="bg-gradient-to-br from-green-500/10 to-emerald-500/10 rounded-2xl p-4 border-l-4 border-green-500 border border-stone-700">
                                        <h4 class="text-sm font-semibold text-green-400 mb-2 flex items-center font-heading">
                                            <i class="fas fa-building text-green-500 mr-2"></i>
                                            Current Company
                                        </h4>
                                        <p class="text-green-300 text-sm font-medium font-body">
                                            <?= esc($beneficiary['company_name']) ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Card Footer -->
                            <div class="flex items-center justify-end mt-6 pt-6 border-t border-stone-700">
                                <button onclick="viewBeneficiary(<?= htmlspecialchars(json_encode([
                                    'name' => $beneficiary['name'] ?? '',
                                    'course' => $beneficiary['course'] ?? '',
                                    'institution' => $beneficiary['institution'] ?? '',
                                    'city' => $beneficiary['city'] ?? '',
                                    'state' => $beneficiary['state'] ?? '',
                                    'year' => $beneficiary['year'] ?? '',
                                    'age' => $beneficiary['age'] ?? '',
                                    'education_level' => $beneficiary['education_level'] ?? '',
                                    'phone' => $beneficiary['phone'] ?? '',
                                    'email' => $beneficiary['email'] ?? '',
                                    'company_name' => $beneficiary['company_name'] ?? '',
                                    'linkedin_url' => $beneficiary['linkedin_url'] ?? '',
                                    'company_link' => $beneficiary['company_link'] ?? '',
                                    'family_background' => $beneficiary['family_background'] ?? '',
                                    'academic_achievements' => $beneficiary['academic_achievements'] ?? '',
                                    'career_goals' => $beneficiary['career_goals'] ?? '',
                                    'is_passout' => $beneficiary['is_passout'] ? true : false,
                                    'status' => $beneficiary['status'] ?? '',
                                    'image' => !empty($beneficiary['image']) ? base_url('uploads/beneficiaries/' . $beneficiary['image']) : ''
                                ]), ENT_QUOTES) ?>)"
                                        class="text-amber-400 hover:text-amber-300 font-medium text-sm flex items-center group transition-all duration-200">
                                    View Profile
                                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                                </button>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-20">
                <div class="w-32 h-32 bg-stone-700 rounded-full flex items-center justify-center mx-auto mb-8 shadow-lg">
                    <i class="fas fa-search text-stone-400 text-4xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-stone-100 mb-6 font-heading">No Students Found</h3>
                <p class="text-stone-300 max-w-md mx-auto text-lg font-body">
                    Try adjusting your search criteria or filter options to find the students you're looking for.
                </p>
            </div>
        <?php else: ?>
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="w-32 h-32 bg-stone-700 rounded-full flex items-center justify-center mx-auto mb-8 shadow-lg">
                    <i class="fas fa-graduation-cap text-amber-400 text-4xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-stone-100 mb-6 font-heading">Students Coming Soon</h3>
                <p class="text-stone-300 max-w-md mx-auto text-lg font-body">
                    We're currently onboarding amazing students. Check back soon to meet our future leaders!
                </p>
                <a href="<?= base_url(($language ?? 'en')) ?>" 
                   class="inline-flex items-center bg-amber-500 text-stone-900 px-8 py-4 rounded-2xl font-bold hover:bg-amber-400 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 mt-8">
                    <i class="fas fa-home mr-2"></i>
                    Back to Home
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Student Detail Modal -->
<div id="studentModal" class="fixed inset-0 bg-black/70 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-stone-800 rounded-3xl shadow-2xl max-w-3xl w-full max-h-[90vh] overflow-hidden">
            <!-- Modal Header -->
            <div id="modalHeader" class="bg-gradient-to-r from-amber-500 to-yellow-500 text-stone-900 p-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-6">
                        <div id="modalImage" class="w-20 h-20 rounded-3xl overflow-hidden bg-stone-700 flex-shrink-0 shadow-lg">
                            <div class="w-full h-full bg-stone-700 flex items-center justify-center">
                                <i class="fas fa-user-graduate text-stone-200 text-2xl"></i>
                            </div>
                        </div>
                        <div>
                            <h2 id="modalName" class="text-3xl font-bold mb-2 font-heading text-stone-100"></h2>
                            <p id="modalCourse" class="text-stone-200 text-lg font-body"></p>
                        </div>
                    </div>
                    <button onclick="closeStudentModal()" class="text-stone-200 hover:text-stone-100 transition-colors duration-200 p-2">
                        <i class="fas fa-times text-3xl"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Content -->
            <div class="p-8 overflow-y-auto max-h-[70vh] bg-stone-800">
                <div class="space-y-8">
                    <!-- Personal Information -->
                    <div>
                        <h3 class="text-2xl font-bold text-stone-100 mb-4 flex items-center font-heading">
                            <i class="fas fa-user text-amber-400 mr-3"></i>
                            Personal Information
                        </h3>
                        <div class="bg-stone-700 rounded-2xl p-6 space-y-4 border border-stone-700">
                            <div id="modalAgeDiv" class="flex items-center justify-between py-2">
                                <span class="text-stone-300 font-medium">Age:</span>
                                <span id="modalAge" class="font-semibold text-stone-100"></span>
                            </div>
                            <div id="modalEducationLevelDiv" class="flex items-center justify-between py-2">
                                <span class="text-stone-300 font-medium">Education Level:</span>
                                <span id="modalEducationLevel" class="font-semibold text-stone-100"></span>
                            </div>
                            <div id="modalLocationDiv" class="flex items-center justify-between py-2">
                                <span class="text-stone-300 font-medium">Location:</span>
                                <span id="modalLocation" class="font-semibold text-stone-100"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Academic Information -->
                    <div>
                        <h3 class="text-2xl font-bold text-stone-100 mb-4 flex items-center font-heading">
                            <i class="fas fa-university text-amber-400 mr-3"></i>
                            Academic Information
                        </h3>
                        <div class="bg-stone-700 rounded-2xl p-6 space-y-4 border border-stone-700">
                            <div class="flex items-center justify-between py-2">
                                <span class="text-stone-300 font-medium">Course:</span>
                                <span id="modalCourseDetail" class="font-semibold text-stone-100"></span>
                            </div>
                            <div class="flex items-center justify-between py-2">
                                <span class="text-stone-300 font-medium">Institution:</span>
                                <span id="modalInstitution" class="font-semibold text-stone-100"></span>
                            </div>
                            <div id="modalYearDiv" class="flex items-center justify-between py-2">
                                <span class="text-stone-300 font-medium">Year:</span>
                                <span id="modalYear" class="font-semibold text-stone-100"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div id="modalContactDiv">
                        <h3 class="text-2xl font-bold text-stone-100 mb-4 flex items-center font-heading">
                            <i class="fas fa-address-book text-yellow-400 mr-3"></i>
                            Contact Information
                        </h3>
                        <div class="bg-stone-700 rounded-2xl p-6 space-y-4 border border-stone-700">
                            <div id="modalPhoneDiv" class="flex items-center justify-between py-2">
                                <span class="text-stone-300 font-medium">Phone:</span>
                                <a id="modalPhone" href="#" class="font-semibold text-amber-400 hover:text-amber-300"></a>
                            </div>
                            <div id="modalEmailDiv" class="flex items-center justify-between py-2">
                                <span class="text-stone-300 font-medium">Email:</span>
                                <a id="modalEmail" href="#" class="font-semibold text-amber-400 hover:text-amber-300"></a>
                            </div>
                            <div id="modalLinkedInDiv" class="flex items-center justify-between py-2">
                                <span class="text-stone-300 font-medium">LinkedIn:</span>
                                <a id="modalLinkedIn" href="#" target="_blank" class="font-semibold text-blue-400 hover:text-blue-300 flex items-center">
                                    <span class="mr-2">View Profile</span>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Professional Information (if graduate) -->
                    <div id="modalCompanyDiv" class="hidden">
                        <h3 class="text-2xl font-bold text-green-400 mb-4 flex items-center font-heading">
                            <i class="fas fa-building text-green-500 mr-3"></i>
                            Professional Information
                        </h3>
                        <div class="bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-2xl p-6 space-y-4 border border-stone-700">
                            <div class="flex items-center justify-between py-2">
                                <span class="text-green-300 font-medium">Current Company:</span>
                                <span id="modalCompany" class="font-semibold text-green-200"></span>
                            </div>
                            <div id="modalCompanyLinkDiv" class="flex items-center justify-between py-2">
                                <span class="text-green-300 font-medium">Company Website:</span>
                                <a id="modalCompanyLink" href="#" target="_blank" class="font-semibold text-green-400 hover:text-green-300 flex items-center">
                                    <span class="mr-2">Visit Website</span>
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Family Background -->
                    <div id="modalFamilyDiv" class="hidden">
                        <h3 class="text-2xl font-bold text-stone-100 mb-4 flex items-center font-heading">
                            <i class="fas fa-home text-yellow-500 mr-3"></i>
                            Family Background
                        </h3>
                        <div class="bg-gradient-to-br from-yellow-500/20 to-amber-500/20 rounded-2xl p-6 border border-stone-700">
                            <p id="modalFamily" class="text-stone-200 leading-relaxed"></p>
                        </div>
                    </div>

                    <!-- Academic Achievements -->
                    <div id="modalAchievementsDiv" class="hidden">
                        <h3 class="text-2xl font-bold text-stone-100 mb-4 flex items-center font-heading">
                            <i class="fas fa-trophy text-amber-400 mr-3"></i>
                            Academic Achievements
                        </h3>
                        <div class="bg-gradient-to-br from-amber-500/20 to-yellow-400/20 rounded-2xl p-6 border border-stone-700">
                            <p id="modalAchievements" class="text-stone-200 leading-relaxed"></p>
                        </div>
                    </div>

                    <!-- Career Goals -->
                    <div id="modalGoalsDiv" class="hidden">
                        <h3 class="text-2xl font-bold text-stone-100 mb-4 flex items-center font-heading">
                            <i class="fas fa-bullseye text-green-500 mr-3"></i>
                            Career Goals
                        </h3>
                        <div class="bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-2xl p-6 border border-stone-700">
                            <p id="modalGoals" class="text-stone-200 leading-relaxed"></p>
                        </div>
                    </div>

                    <!-- Status Badge -->
                    <div class="bg-gradient-to-br from-blue-500/20 to-indigo-500/20 rounded-2xl p-6 text-center border border-stone-700">
                        <span id="modalStatus" class="inline-flex items-center px-6 py-3 rounded-full font-semibold text-lg"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
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

.section-dark {
    background-color: #292524; /* Dark Gray */
}

.foundation-card {
    background-color: #292524; /* Dark Gray */
    border: 1px solid #3f3f3f; /* Darker Gray Border */
    border-radius: 1.5rem; /* rounded-3xl */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Enhanced Shadow */
    overflow: hidden;
    transition: all 0.3s ease-in-out;
}

.foundation-card:hover {
    transform: translateY(-10px); /* hover:-translate-y-2 */
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.3); /* hover:shadow-2xl */
}

.professional-institution-card {
    background: linear-gradient(to right, rgba(255, 184, 0, 0.1), rgba(255, 184, 0, 0.15)); /* Golden gradient */
    border-radius: 1rem; /* rounded-xl */
    padding: 1rem; /* p-4 */
    border-left: 4px solid #ffb800; /* border-l-4 border-amber-400 */
    border-image: linear-gradient(to bottom, #ffb800, #facc15) 1; /* Golden border */
}

.institution-content {
    display: flex;
    flex-direction: column;
    gap: 0.75rem; /* space-y-3 */
}

.institution-badge {
    display: inline-flex;
    align-items: center;
    background-color: rgba(255, 184, 0, 0.1); /* Semi-transparent golden */
    color: #ffb800; /* Golden */
    padding: 0.5rem 1rem; /* px-4 py-2 */
    border-radius: 9999px; /* rounded-full */
    font-size: 0.875rem; /* text-sm */
    font-weight: 600; /* font-semibold */
    font-family: 'Heading Font', sans-serif; /* font-heading */
    border: 1px solid rgba(255, 184, 0, 0.3); /* Faint golden border */
}

.institution-badge i {
    margin-right: 0.5rem; /* mr-2 */
}

.ai-badge {
    background: linear-gradient(90deg, rgba(139, 92, 246, 0.1), rgba(124, 58, 237, 0.1)); /* Purple gradient */
    color: #ffb800; /* Golden */
    font-weight: bold;
}

.btn-bharatpur-primary {
    width: 100%;
    background: linear-gradient(90deg, #ffb800, #facc15); /* Golden gradient */
    color: #292524; /* Dark Gray Text */
    font-weight: 700; /* font-bold */
    padding: 0.75rem 1.5rem; /* py-3 px-6 */
    border-radius: 1rem; /* rounded-xl */
    transition: all 0.3s ease-in-out;
    transform: scale(1.05); /* transform: scale-105 */
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-family: 'Heading Font', sans-serif; /* font-heading */
}

.btn-bharatpur-primary:hover {
    filter: brightness(1.1); /* Hover effect */
}

.btn-bharatpur-primary i {
    margin-right: 0.5rem; /* mr-2 */
}

/* Font Definitions (Example - replace with actual font imports) */
/* Assuming you have imported these fonts in your main layout */
/*
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@400;600&display=swap');
*/

.font-heading {
    font-family: 'Poppins', sans-serif; /* Example heading font */
}

.font-body {
    font-family: 'Inter', sans-serif; /* Example body font */
}

/* Override default Tailwind fonts if necessary */
body {
    font-family: 'Inter', sans-serif; /* Set default body font */
}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Poppins', sans-serif; /* Set default heading font */
}
</style>

<script>
// Filter functionality
function filterBeneficiaries(filter) {
    const cards = document.querySelectorAll('.beneficiary-card');
    const filterBtns = document.querySelectorAll('.filter-btn');

    // Update active button
    filterBtns.forEach(btn => {
        btn.classList.remove('active', 'bg-amber-500', 'text-stone-900');
        btn.classList.add('bg-stone-700', 'text-stone-200');
    });
    event.target.classList.add('active', 'bg-amber-500', 'text-stone-900');
    event.target.classList.remove('bg-stone-700', 'text-stone-200');

    let visibleCount = 0;

    cards.forEach(card => {
        const status = card.dataset.status;
        let shouldShow = false;

        if (filter === 'all') {
            shouldShow = true;
        } else if (filter === 'active' && status === 'active') {
            shouldShow = true;
        } else if (filter === 'graduate' && status === 'graduate') {
            shouldShow = true;
        }

        if (shouldShow) {
            card.style.display = 'block';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });

    // Show/hide no results message
    const noResults = document.getElementById('noResults');
    if (visibleCount === 0) {
        noResults.classList.remove('hidden');
    } else {
        noResults.classList.add('hidden');
    }
}

// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const cards = document.querySelectorAll('.beneficiary-card');
    let visibleCount = 0;

    cards.forEach(card => {
        const name = card.dataset.name || '';
        const course = card.dataset.course || '';
        const institution = card.dataset.institution || '';

        if (name.includes(searchTerm) || course.includes(searchTerm) || institution.includes(searchTerm)) {
            card.style.display = 'block';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });

    // Show/hide no results message
    const noResults = document.getElementById('noResults');
    if (visibleCount === 0 && searchTerm !== '') {
        noResults.classList.remove('hidden');
    } else {
        noResults.classList.add('hidden');
    }
});

// Modal functions
function viewBeneficiary(beneficiaryData) {
    const data = beneficiaryData;

    // Basic Information
    document.getElementById('modalName').textContent = data.name || 'Student Name';
    document.getElementById('modalCourse').textContent = data.course || 'Course';
    document.getElementById('modalCourseDetail').textContent = data.course || 'Not specified';
    document.getElementById('modalInstitution').textContent = data.institution || 'Not specified';

    // Handle image
    const modalImage = document.getElementById('modalImage');
    if (data.image) {
        modalImage.innerHTML = `<img src="${data.image}" alt="${data.name}" class="w-full h-full object-cover">`;
    } else {
        modalImage.innerHTML = '<div class="w-full h-full bg-stone-700 flex items-center justify-center"><i class="fas fa-user-graduate text-stone-200 text-2xl"></i></div>';
    }

    // Personal Information
    const ageDiv = document.getElementById('modalAgeDiv');
    const educationLevelDiv = document.getElementById('modalEducationLevelDiv');

    if (data.age) {
        document.getElementById('modalAge').textContent = data.age + ' years old';
        ageDiv.style.display = 'flex';
    } else {
        ageDiv.style.display = 'none';
    }

    if (data.education_level) {
        document.getElementById('modalEducationLevel').textContent = data.education_level;
        educationLevelDiv.style.display = 'flex';
    } else {
        educationLevelDiv.style.display = 'none';
    }

    // Location
    const locationDiv = document.getElementById('modalLocationDiv');
    const location = [data.city, data.state].filter(Boolean).join(', ');
    if (location) {
        document.getElementById('modalLocation').textContent = location;
        locationDiv.style.display = 'flex';
    } else {
        locationDiv.style.display = 'none';
    }

    // Academic year
    const yearDiv = document.getElementById('modalYearDiv');
    if (data.year) {
        document.getElementById('modalYear').textContent = data.year;
        yearDiv.style.display = 'flex';
    } else {
        yearDiv.style.display = 'none';
    }

    // Contact Information
    const contactDiv = document.getElementById('modalContactDiv');
    const phoneDiv = document.getElementById('modalPhoneDiv');
    const emailDiv = document.getElementById('modalEmailDiv');
    const linkedInDiv = document.getElementById('modalLinkedInDiv');

    let hasContact = false;

    if (data.phone) {
        const phoneLink = document.getElementById('modalPhone');
        phoneLink.textContent = data.phone;
        phoneLink.href = `tel:${data.phone}`;
        phoneDiv.style.display = 'flex';
        hasContact = true;
    } else {
        phoneDiv.style.display = 'none';
    }

    if (data.email) {
        const emailLink = document.getElementById('modalEmail');
        emailLink.textContent = data.email;
        emailLink.href = `mailto:${data.email}`;
        emailDiv.style.display = 'flex';
        hasContact = true;
    } else {
        emailDiv.style.display = 'none';
    }

    if (data.linkedin_url) {
        const linkedInLink = document.getElementById('modalLinkedIn');
        linkedInLink.href = data.linkedin_url;
        linkedInDiv.style.display = 'flex';
        hasContact = true;
    } else {
        linkedInDiv.style.display = 'none';
    }

    if (hasContact) {
        contactDiv.classList.remove('hidden');
    } else {
        contactDiv.classList.add('hidden');
    }

    // Professional Information
    const companyDiv = document.getElementById('modalCompanyDiv');
    const companyLinkDiv = document.getElementById('modalCompanyLinkDiv');

    if (data.company_name && data.is_passout) {
        document.getElementById('modalCompany').textContent = data.company_name;

        if (data.company_link) {
            const companyLink = document.getElementById('modalCompanyLink');
            companyLink.href = data.company_link;
            companyLinkDiv.style.display = 'flex';
        } else {
            companyLinkDiv.style.display = 'none';
        }

        companyDiv.classList.remove('hidden');
    } else {
        companyDiv.classList.add('hidden');
    }

    // Family Background
    const familyDiv = document.getElementById('modalFamilyDiv');
    if (data.family_background && data.family_background.trim()) {
        document.getElementById('modalFamily').innerHTML = data.family_background.replace(/\n/g, '<br>');
        familyDiv.classList.remove('hidden');
    } else {
        familyDiv.classList.add('hidden');
    }

    // Academic Achievements
    const achievementsDiv = document.getElementById('modalAchievementsDiv');
    if (data.academic_achievements && data.academic_achievements.trim()) {
        document.getElementById('modalAchievements').innerHTML = data.academic_achievements.replace(/\n/g, '<br>');
        achievementsDiv.classList.remove('hidden');
    } else {
        achievementsDiv.classList.add('hidden');
    }

    // Career Goals
    const goalsDiv = document.getElementById('modalGoalsDiv');
    if (data.career_goals && data.career_goals.trim()) {
        document.getElementById('modalGoals').innerHTML = data.career_goals.replace(/\n/g, '<br>');
        goalsDiv.classList.remove('hidden');
    } else {
        goalsDiv.classList.add('hidden');
    }

    // Update status and header colors
    const modalStatus = document.getElementById('modalStatus');
    const modalHeader = document.getElementById('modalHeader');

    if (data.is_passout) {
        modalStatus.className = 'inline-flex items-center bg-green-100 text-green-800 px-6 py-3 rounded-full font-semibold text-lg';
        modalStatus.innerHTML = '<i class="fas fa-medal mr-2"></i>Graduate';
        modalHeader.className = 'bg-gradient-to-r from-green-500 to-emerald-500 text-stone-900 p-8';
    } else {
        modalStatus.className = 'inline-flex items-center bg-amber-100 text-amber-800 px-6 py-3 rounded-full font-semibold text-lg';
        modalStatus.innerHTML = '<i class="fas fa-graduation-cap mr-2"></i>Active Student';
        modalHeader.className = 'bg-gradient-to-r from-amber-500 to-yellow-500 text-stone-900 p-8';
    }

    document.getElementById('studentModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeStudentModal() {
    document.getElementById('studentModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal on outside click
document.getElementById('studentModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeStudentModal();
    }
});

// Close modal on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeStudentModal();
    }
});
</script>

<?= $this->endSection() ?>