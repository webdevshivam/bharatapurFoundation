
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative min-h-[60vh] bg-gradient-to-br from-primary-50 via-white to-accent-50 flex items-center overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #0ea5e9 2px, transparent 2px), radial-gradient(circle at 75% 75%, #f59e0b 1px, transparent 1px); background-size: 50px 50px, 30px 30px;"></div>
    </div>

    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-primary-100 rounded-full animate-bounce-subtle opacity-60"></div>
    <div class="absolute top-40 right-20 w-16 h-16 bg-accent-100 rounded-full animate-bounce-subtle opacity-60" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-40 left-20 w-12 h-12 bg-primary-200 rounded-full animate-bounce-subtle opacity-60" style="animation-delay: 2s;"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto animate-fade-in-up">
            <!-- Trust Badge -->
            <div class="inline-flex items-center bg-primary-100 text-primary-800 px-4 py-2 rounded-full font-accent font-medium text-sm mb-6">
                <i class="fas fa-graduation-cap mr-2"></i>
                Active Students • Bright Futures
            </div>

            <!-- Main Headline -->
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                Meet Our Amazing 
                <span class="bg-gradient-to-r from-primary-600 to-accent-500 bg-clip-text text-transparent">
                    Students
                </span>
            </h1>

            <!-- Supporting Text -->
            <p class="font-accent text-lg md:text-xl text-gray-600 leading-relaxed mb-8 max-w-3xl mx-auto">
                Dedicated individuals pursuing their dreams through education. Each student represents hope, determination, and the transformative power of opportunity.
            </p>

            <!-- Quick Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl mx-auto">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg border border-primary-100">
                    <div class="font-display text-xl md:text-2xl font-bold text-primary-600"><?= $total_beneficiaries ?? count($beneficiaries) ?></div>
                    <div class="font-accent text-xs text-gray-600">Total Students</div>
                </div>
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg border border-accent-100">
                    <div class="font-display text-xl md:text-2xl font-bold text-accent-600"><?= $active_students ?? '0' ?></div>
                    <div class="font-accent text-xs text-gray-600">Active Students</div>
                </div>
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg border border-emerald-100">
                    <div class="font-display text-xl md:text-2xl font-bold text-emerald-600"><?= $graduates ?? '0' ?></div>
                    <div class="font-accent text-xs text-gray-600">Graduates</div>
                </div>
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg border border-purple-100">
                    <div class="font-display text-xl md:text-2xl font-bold text-purple-600"><?= $institutions ?? '10+' ?></div>
                    <div class="font-accent text-xs text-gray-600">Institutions</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-12 bg-white border-b border-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row gap-6 items-center justify-between">
            <div class="flex flex-wrap gap-3">
                <button onclick="filterBeneficiaries('all')" 
                        class="filter-btn active bg-primary-600 text-white px-6 py-3 rounded-xl font-heading font-semibold hover:bg-primary-700 transition-all duration-200 shadow-md">
                    <i class="fas fa-users mr-2"></i>
                    All Students
                </button>
                <button onclick="filterBeneficiaries('active')" 
                        class="filter-btn bg-gray-100 text-gray-700 px-6 py-3 rounded-xl font-heading font-semibold hover:bg-gray-200 transition-all duration-200">
                    <i class="fas fa-user-graduate mr-2"></i>
                    Active
                </button>
                <button onclick="filterBeneficiaries('graduate')" 
                        class="filter-btn bg-gray-100 text-gray-700 px-6 py-3 rounded-xl font-heading font-semibold hover:bg-gray-200 transition-all duration-200">
                    <i class="fas fa-medal mr-2"></i>
                    Graduates
                </button>
            </div>
            
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" id="searchInput" placeholder="Search students..." 
                           class="bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 pl-10 font-accent focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent w-64">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Students Grid -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (!empty($beneficiaries)): ?>
            <div id="beneficiariesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($beneficiaries as $index => $beneficiary): ?>
                    <article class="beneficiary-card group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 overflow-hidden animate-fade-in-up" 
                             style="animation-delay: <?= $index * 0.1 ?>s;"
                             data-status="<?= $beneficiary['is_passout'] ? 'graduate' : 'active' ?>"
                             data-name="<?= strtolower(esc($beneficiary['name'])) ?>"
                             data-course="<?= strtolower(esc($beneficiary['course'])) ?>"
                             data-institution="<?= strtolower(esc($beneficiary['institution'])) ?>">
                        
                        <!-- Card Header -->
                        <div class="relative p-6 bg-gradient-to-br from-<?= $beneficiary['is_passout'] ? 'emerald' : 'primary' ?>-50 to-<?= $beneficiary['is_passout'] ? 'green' : 'accent' ?>-50 border-b border-<?= $beneficiary['is_passout'] ? 'emerald' : 'primary' ?>-100">
                            <div class="flex items-center space-x-4">
                                <div class="w-20 h-20 rounded-2xl overflow-hidden bg-<?= $beneficiary['is_passout'] ? 'emerald' : 'primary' ?>-100 flex-shrink-0 ring-4 ring-white shadow-lg">
                                    <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                                        <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>"
                                             alt="<?= esc($beneficiary['name']) ?>" 
                                             class="w-full h-full object-cover">
                                    <?php else: ?>
                                        <div class="w-full h-full bg-gradient-to-br from-<?= $beneficiary['is_passout'] ? 'emerald' : 'primary' ?>-200 to-<?= $beneficiary['is_passout'] ? 'green' : 'accent' ?>-200 flex items-center justify-center">
                                            <i class="fas fa-user-graduate text-<?= $beneficiary['is_passout'] ? 'emerald' : 'primary' ?>-700 text-2xl"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-heading text-xl font-bold text-gray-900 mb-1"><?= esc($beneficiary['name']) ?></h3>
                                    <p class="font-accent text-<?= $beneficiary['is_passout'] ? 'emerald' : 'primary' ?>-700 font-semibold mb-2"><?= esc($beneficiary['course']) ?></p>
                                    <span class="inline-flex items-center bg-<?= $beneficiary['is_passout'] ? 'emerald' : 'primary' ?>-100 text-<?= $beneficiary['is_passout'] ? 'emerald' : 'primary' ?>-800 px-3 py-1 rounded-full text-xs font-accent font-medium">
                                        <i class="fas fa-<?= $beneficiary['is_passout'] ? 'medal' : 'graduation-cap' ?> mr-1"></i>
                                        <?= $beneficiary['is_passout'] ? 'Graduate' : 'Active Student' ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-6">
                            <div class="space-y-4">
                                <!-- Institution -->
                                <div class="bg-gray-50 rounded-xl p-4 border-l-4 border-<?= $beneficiary['is_passout'] ? 'emerald' : 'primary' ?>-400">
                                    <h4 class="font-heading text-sm font-semibold text-gray-700 mb-2 flex items-center">
                                        <i class="fas fa-university text-<?= $beneficiary['is_passout'] ? 'emerald' : 'primary' ?>-500 mr-2"></i>
                                        Institution
                                    </h4>
                                    <p class="font-accent text-gray-600 text-sm leading-relaxed">
                                        <?= esc($beneficiary['institution']) ?>
                                    </p>
                                </div>

                                <!-- Location & Details -->
                                <div class="grid grid-cols-2 gap-3">
                                    <?php if (!empty($beneficiary['city'])): ?>
                                        <div class="bg-blue-50 rounded-lg p-3">
                                            <div class="flex items-center text-blue-700">
                                                <i class="fas fa-map-marker-alt mr-2 text-blue-500"></i>
                                                <span class="font-accent text-sm font-medium"><?= esc($beneficiary['city']) ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if (!empty($beneficiary['year'])): ?>
                                        <div class="bg-purple-50 rounded-lg p-3">
                                            <div class="flex items-center text-purple-700">
                                                <i class="fas fa-calendar mr-2 text-purple-500"></i>
                                                <span class="font-accent text-sm font-medium"><?= esc($beneficiary['year']) ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Company (if graduate) -->
                                <?php if ($beneficiary['is_passout'] && !empty($beneficiary['company_name'])): ?>
                                    <div class="bg-emerald-50 rounded-xl p-4 border-l-4 border-emerald-400">
                                        <h4 class="font-heading text-sm font-semibold text-emerald-800 mb-2 flex items-center">
                                            <i class="fas fa-building text-emerald-600 mr-2"></i>
                                            Current Company
                                        </h4>
                                        <p class="font-accent text-emerald-700 text-sm font-medium">
                                            <?= esc($beneficiary['company_name']) ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Footer -->
                            <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-accent">
                                    <i class="fas fa-user-plus mr-1"></i>
                                    Joined <?= date('M Y', strtotime($beneficiary['created_at'] ?? 'now')) ?>
                                </span>
                                <button onclick="viewBeneficiary('<?= esc($beneficiary['name']) ?>', '<?= esc($beneficiary['course']) ?>', '<?= esc($beneficiary['institution']) ?>', '<?= esc($beneficiary['city'] ?? '') ?>', '<?= esc($beneficiary['year'] ?? '') ?>', '<?= esc($beneficiary['company_name'] ?? '') ?>', <?= $beneficiary['is_passout'] ? 'true' : 'false' ?>, '<?= !empty($beneficiary['image']) ? base_url('uploads/beneficiaries/' . $beneficiary['image']) : '' ?>')"
                                        class="text-<?= $beneficiary['is_passout'] ? 'emerald' : 'primary' ?>-600 hover:text-<?= $beneficiary['is_passout'] ? 'emerald' : 'primary' ?>-700 font-accent font-medium text-sm flex items-center group">
                                    View Profile
                                    <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform duration-200"></i>
                                </button>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-20">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-search text-gray-400 text-3xl"></i>
                </div>
                <h3 class="font-heading text-2xl font-bold text-gray-900 mb-4">No Students Found</h3>
                <p class="font-accent text-gray-600 max-w-md mx-auto">
                    Try adjusting your search criteria or filter options.
                </p>
            </div>
        <?php else: ?>
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-graduation-cap text-primary-500 text-3xl"></i>
                </div>
                <h3 class="font-heading text-2xl font-bold text-gray-900 mb-4">Students Coming Soon</h3>
                <p class="font-accent text-gray-600 max-w-md mx-auto">
                    We're currently onboarding amazing students. Check back soon to meet them!
                </p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Student Detail Modal -->
<div id="studentModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-3xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-hidden">
            <!-- Modal Header -->
            <div id="modalHeader" class="bg-gradient-to-r from-primary-500 to-accent-500 text-white p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div id="modalImage" class="w-16 h-16 rounded-2xl overflow-hidden bg-white/20 flex-shrink-0">
                            <div class="w-full h-full bg-white/30 flex items-center justify-center">
                                <i class="fas fa-user-graduate text-white text-xl"></i>
                            </div>
                        </div>
                        <div>
                            <h2 id="modalName" class="font-heading text-2xl font-bold"></h2>
                            <p id="modalCourse" class="font-accent text-white/90"></p>
                        </div>
                    </div>
                    <button onclick="closeStudentModal()" class="text-white hover:text-gray-200 transition-colors duration-200">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Content -->
            <div class="p-6 overflow-y-auto max-h-[60vh]">
                <div class="space-y-6">
                    <div>
                        <h3 class="font-heading text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-university text-primary-500 mr-2"></i>
                            Academic Information
                        </h3>
                        <div class="bg-gray-50 rounded-xl p-4 space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="font-accent text-gray-600">Institution:</span>
                                <span id="modalInstitution" class="font-accent font-medium text-gray-900"></span>
                            </div>
                            <div id="modalYearDiv" class="flex items-center justify-between">
                                <span class="font-accent text-gray-600">Year:</span>
                                <span id="modalYear" class="font-accent font-medium text-gray-900"></span>
                            </div>
                            <div id="modalLocationDiv" class="flex items-center justify-between">
                                <span class="font-accent text-gray-600">Location:</span>
                                <span id="modalLocation" class="font-accent font-medium text-gray-900"></span>
                            </div>
                        </div>
                    </div>

                    <div id="modalCompanyDiv" class="hidden">
                        <h3 class="font-heading text-lg font-semibold text-emerald-800 mb-3 flex items-center">
                            <i class="fas fa-building text-emerald-600 mr-2"></i>
                            Professional Information
                        </h3>
                        <div class="bg-emerald-50 rounded-xl p-4">
                            <div class="flex items-center justify-between">
                                <span class="font-accent text-emerald-700">Current Company:</span>
                                <span id="modalCompany" class="font-accent font-medium text-emerald-900"></span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-blue-50 rounded-xl p-4">
                        <div class="flex items-center justify-center">
                            <span id="modalStatus" class="inline-flex items-center px-4 py-2 rounded-full font-accent font-medium"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-br from-primary-600 via-primary-700 to-accent-600 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 30% 40%, #ffffff 2px, transparent 2px), radial-gradient(circle at 70% 60%, #ffffff 1px, transparent 1px); background-size: 80px 80px, 60px 60px;"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto animate-fade-in-up">
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Support Our Students' Dreams
            </h2>
            <p class="font-accent text-lg md:text-xl text-white/90 leading-relaxed mb-10">
                Every contribution helps a student achieve their potential and build a brighter future for themselves and their families.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="#donate" 
                   class="bg-white text-primary-700 px-10 py-4 rounded-xl font-heading font-bold hover:bg-gray-50 transition-all duration-200 shadow-xl hover:shadow-2xl transform hover:-translate-y-1 flex items-center justify-center">
                    <i class="fas fa-heart mr-2"></i>
                    Sponsor a Student
                </a>
                <a href="<?= base_url(($language ?? 'en') . '/success-stories') ?>" 
                   class="bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white px-10 py-4 rounded-xl font-heading font-bold hover:bg-white/20 hover:border-white/50 transition-all duration-200 flex items-center justify-center">
                    <i class="fas fa-star mr-2"></i>
                    View Success Stories
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Filter functionality
function filterBeneficiaries(filter) {
    const cards = document.querySelectorAll('.beneficiary-card');
    const filterBtns = document.querySelectorAll('.filter-btn');
    
    // Update active button
    filterBtns.forEach(btn => {
        btn.classList.remove('active', 'bg-primary-600', 'text-white');
        btn.classList.add('bg-gray-100', 'text-gray-700');
    });
    event.target.classList.add('active', 'bg-primary-600', 'text-white');
    event.target.classList.remove('bg-gray-100', 'text-gray-700');
    
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
        const name = card.dataset.name;
        const course = card.dataset.course;
        const institution = card.dataset.institution;
        
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
function viewBeneficiary(name, course, institution, city, year, company, isGraduate, image) {
    document.getElementById('modalName').textContent = name;
    document.getElementById('modalCourse').textContent = course;
    document.getElementById('modalInstitution').textContent = institution;
    
    // Handle image
    const modalImage = document.getElementById('modalImage');
    if (image) {
        modalImage.innerHTML = `<img src="${image}" alt="${name}" class="w-full h-full object-cover">`;
    } else {
        modalImage.innerHTML = '<div class="w-full h-full bg-white/30 flex items-center justify-center"><i class="fas fa-user-graduate text-white text-xl"></i></div>';
    }
    
    // Handle optional fields
    const yearDiv = document.getElementById('modalYearDiv');
    const locationDiv = document.getElementById('modalLocationDiv');
    const companyDiv = document.getElementById('modalCompanyDiv');
    
    if (year) {
        document.getElementById('modalYear').textContent = year;
        yearDiv.style.display = 'flex';
    } else {
        yearDiv.style.display = 'none';
    }
    
    if (city) {
        document.getElementById('modalLocation').textContent = city;
        locationDiv.style.display = 'flex';
    } else {
        locationDiv.style.display = 'none';
    }
    
    if (company && isGraduate) {
        document.getElementById('modalCompany').textContent = company;
        companyDiv.classList.remove('hidden');
    } else {
        companyDiv.classList.add('hidden');
    }
    
    // Update status and header colors
    const modalStatus = document.getElementById('modalStatus');
    const modalHeader = document.getElementById('modalHeader');
    
    if (isGraduate) {
        modalStatus.className = 'inline-flex items-center bg-emerald-100 text-emerald-800 px-4 py-2 rounded-full font-accent font-medium';
        modalStatus.innerHTML = '<i class="fas fa-medal mr-2"></i>Graduate';
        modalHeader.className = 'bg-gradient-to-r from-emerald-500 to-green-500 text-white p-6';
    } else {
        modalStatus.className = 'inline-flex items-center bg-primary-100 text-primary-800 px-4 py-2 rounded-full font-accent font-medium';
        modalStatus.innerHTML = '<i class="fas fa-graduation-cap mr-2"></i>Active Student';
        modalHeader.className = 'bg-gradient-to-r from-primary-500 to-accent-500 text-white p-6';
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
