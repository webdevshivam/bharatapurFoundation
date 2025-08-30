<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<section class="hero-section">
    <div class="container">
        <h1 class="mb-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['beneficiaries_title'] ?></h1>
        <p class="lead text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['beneficiaries_subtitle'] ?> - <?= $translations['beneficiaries_description'] ?></p>
    </div>
</section>

<!-- Search and Filter Section -->
<section class="py-5 bg-soft">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <form method="GET" action="<?= base_url('beneficiaries') ?>" class="row g-3" id="searchForm">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="fas fa-search text-muted"></i>
                                    </span>
                                    <input type="text" class="form-control border-0 bg-light" name="search"
                                        placeholder="Search by name, course, or university..."
                                        value="<?= esc($search ?? '') ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-grid gap-2 d-md-flex">
                                    <button type="submit" class="btn btn-primary flex-fill">
                                        <i class="fas fa-search me-2"></i> <?= $translations['search'] ?>
                                    </button>
                                    <?php if (!empty($search)): ?>
                                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-outline-secondary">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php if (!empty($search)): ?>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                        <i class="fas fa-info-circle me-2"></i>
                        <?= $translations['showing_results_for'] ?> "<strong><?= esc($search) ?></strong>"
                        <?php if (isset($total_results)): ?>
                            - <?= $total_results ?> <?= $translations['student_found'] ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Beneficiaries Grid -->
<section class="section-padding">
    <div class="container">
        <div id="beneficiariesContainer">
            <?php if (!empty($pursuing_beneficiaries) || !empty($passout_beneficiaries)): ?>

                <!-- Currently Pursuing Students -->
                <?php if (!empty($pursuing_beneficiaries)): ?>
                    <div class="mb-5">
                        <div class="text-center mb-4">
                            <h2 class="section-title text-primary font-display <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                                <i class="fas fa-book-open me-2"></i><?= $translations['currently_pursuing'] ?>
                            </h2>
                            <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['students_pursuing_description'] ?></p>
                            <hr class="w-25 mx-auto">
                        </div>
                        <div class="row" id="pursuingGrid">
                            <?php foreach ($pursuing_beneficiaries as $beneficiary): ?>
                                <div class="col-lg-6 col-xl-4 mb-4 beneficiary-card">
                                    <div class="card h-100 border-0 shadow-lg">
                                        <div class="card-header text-center bg-light py-3 position-relative">
                                            <!-- Status Badge - Top Right -->
                                            <span class="badge bg-info position-absolute top-0 end-0 m-2" style="font-size: 0.7rem;">
                                                <i class="fas fa-book me-1"></i><?= $translations['studying'] ?>
                                            </span>

                                            <div class="feature-icon mx-auto mb-2" style="width: 55px; height: 55px; font-size: 1.4rem; background: var(--gradient-soft); color: var(--primary-color); overflow: hidden; border-radius: 50%;">
                                                <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                                                    <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>"
                                                         alt="<?= esc($beneficiary['name']) ?>"
                                                         style="width: 100%; height: 100%; object-fit: cover;">
                                                <?php else: ?>
                                                    <i class="fas fa-user-graduate"></i>
                                                <?php endif; ?>
                                            </div>
                                            <h6 class="mb-0 font-display text-dark fw-bold" style="font-size: 1rem;">
                                                <?= esc($beneficiary['name']) ?>
                                            </h6>
                                        </div>
                                        <?php
                                        // Include the card body content here
                                        include('beneficiary_card_body.php');
                                        ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Passed Out Students -->
                <?php if (!empty($passout_beneficiaries)): ?>
                    <div class="mb-5">
                        <div class="text-center mb-4">
                            <h2 class="section-title text-success font-display <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                                <i class="fas fa-graduation-cap me-2"></i><?= $translations['passed_out'] ?>
                            </h2>
                            <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['students_passed_out_description'] ?></p>
                            <hr class="w-25 mx-auto">
                        </div>
                        <div class="row" id="passoutGrid">
                            <?php foreach ($passout_beneficiaries as $beneficiary): ?>
                                <div class="col-lg-6 col-xl-4 mb-4 beneficiary-card">
                                    <div class="card h-100 border-0 shadow-lg">
                                        <div class="card-header text-center bg-light py-3 position-relative">
                                            <!-- Status Badge - Top Right -->
                                            <span class="badge bg-success position-absolute top-0 end-0 m-2" style="font-size: 0.7rem;">
                                                <i class="fas fa-graduation-cap me-1"></i><?= $translations['alumni'] ?>
                                            </span>

                                            <div class="feature-icon mx-auto mb-2" style="width: 55px; height: 55px; font-size: 1.4rem; background: var(--gradient-soft); color: var(--success-color); overflow: hidden; border-radius: 50%;">
                                                <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                                                    <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>"
                                                         alt="<?= esc($beneficiary['name']) ?>"
                                                         style="width: 100%; height: 100%; object-fit: cover;">
                                                <?php else: ?>
                                                    <i class="fas fa-graduation-cap"></i>
                                                <?php endif; ?>
                                            </div>
                                            <h6 class="mb-0 font-display text-dark fw-bold" style="font-size: 1rem;">
                                                <?= esc($beneficiary['name']) ?>
                                            </h6>
                                        </div>
                                        <?php
                                        // Include the card body content here
                                        include('beneficiary_card_body.php');
                                        ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

            <?php else: ?>
                <div class="text-center py-5">
                    <div class="feature-icon mx-auto mb-4" style="width: 120px; height: 120px; font-size: 4rem; background: var(--gradient-soft); color: var(--text-light);">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-muted mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                        <?= !empty($search) ? $translations['no_results_found'] : $translations['no_beneficiaries'] ?>
                    </h3>
                    <p class="text-muted mb-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                        <?= !empty($search) ?
                            $translations['try_adjusting_search'] :
                            $translations['no_beneficiaries_yet'] ?>
                    </p>
                    <?php if (!empty($search)): ?>
                        <a href="<?= base_url('beneficiaries') ?>" class="btn btn-primary">
                            <i class="fas fa-list me-2"></i> <?= $translations['view_all_beneficiaries'] ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Beneficiary Details Modal -->
<div class="modal fade" id="beneficiaryModal" tabindex="-1" aria-labelledby="beneficiaryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="beneficiaryModalLabel">
                    <i class="fas fa-user-graduate me-2"></i><?= $translations['beneficiary_details'] ?>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalContent">
                <!-- Content will be populated by JavaScript -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $translations['close'] ?></button>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<section class="bg-soft" style="padding: 80px 0;">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-primary font-display <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['support_our_mission'] ?></h2>
                <p class="lead text-muted mb-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['support_mission_description'] ?></p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="<?= base_url('success-stories') ?>" class="btn btn-primary btn-lg w-100">
                            <i class="fas fa-star me-2"></i> <?= $translations['read_success_stories'] ?>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="<?= base_url($language ?? 'en') ?>" class="btn btn-outline-primary btn-lg w-100">
                            <i class="fas fa-home me-2"></i> <?= $translations['back_to_home'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Card hover effects */
.beneficiary-card .card {
    transition: all 0.3s ease;
    border-radius: 12px;
}

.beneficiary-card .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
}

/* Button hover effects */
.beneficiary-card .btn {
    transition: all 0.2s ease;
}

.beneficiary-card .btn:hover {
    transform: scale(1.05);
}

/* Institution title truncation */
.beneficiary-card .card-body p[title] {
    cursor: help;
}

/* Status badge improvements */
.badge {
    font-weight: 500;
    letter-spacing: 0.5px;
}

/* Mobile improvements */
@media (max-width: 768px) {
    .beneficiary-card .card-header {
        padding: 1rem !important;
    }

    .beneficiary-card .card-body {
        padding: 1rem !important;
    }

    .beneficiary-card .d-flex.gap-2 {
        flex-direction: column;
        gap: 0.5rem !important;
    }

    .beneficiary-card .d-flex.gap-1 {
        justify-content: center;
    }
}

/* Modal improvements */
.modal-dialog {
    margin: 1rem;
}

@media (max-width: 576px) {
    .modal-dialog {
        margin: 0.5rem;
    }

    .modal-body .row .col-md-7,
    .modal-body .row .col-md-5 {
        margin-bottom: 1rem;
    }
}

/* Hindi font specific styles */
.lang-hi {
    font-family: 'Noto Sans Devanagari', sans-serif; /* Example: You might need to include this font */
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Define translations for JavaScript
        const translations = {
            alumni: '<?= $translations['alumni'] ?>',
            active_student: '<?= $translations['active_student'] ?>',
            studying: '<?= $translations['studying'] ?>',
            academic_profile: '<?= $translations['academic_profile'] ?>',
            level: '<?= $translations['level'] ?>',
            course: '<?= $translations['course'] ?>',
            institution: '<?= $translations['institution'] ?>',
            contact_status: '<?= $translations['contact_status'] ?>',
            family_background: '<?= $translations['family_background'] ?>',
            academic_achievements: '<?= $translations['academic_achievements'] ?>',
            career_goals: '<?= $translations['career_goals'] ?>',
            quick_actions: '<?= $translations['quick_actions'] ?>',
            send_email: '<?= $translations['send_email'] ?>',
            linkedin_profile: '<?= $translations['linkedin_profile'] ?>',
            company_link: '<?= $translations['company_link'] ?>'
        };

        const modal = new bootstrap.Modal(document.getElementById('beneficiaryModal'));
        const modalContent = document.getElementById('modalContent');

        // Handle read more buttons
        document.addEventListener('click', function(e) {
            if (e.target.closest('.read-more-btn')) {
                const btn = e.target.closest('.read-more-btn');
                const data = btn.dataset;

                const content = generateModalContent(data);
                modalContent.innerHTML = content;
                modal.show();
            }
        });

        function generateModalContent(data) {
            let html = `
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <div class="feature-icon mx-auto mb-3" style="width: 80px; height: 80px; font-size: 2.5rem; background: var(--gradient-soft); color: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <h4 class="text-dark mb-0 fw-bold <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">${data.beneficiaryName}</h4>
                        <span class="badge bg-primary px-3 py-2 fs-6">${data.beneficiaryStatus === 'active' ? translations.active_student : translations.alumni}</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body">
                            <h6 class="text-primary mb-3 fw-bold d-flex align-items-center <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                                <i class="fas fa-graduation-cap me-2"></i>${translations.academic_profile}
                            </h6>
                            <div class="mb-3 p-3 bg-white rounded border-start border-4 border-primary">
                                <div class="row">
                                    <div class="col-4"><strong class="text-dark <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">${translations.level}:</strong></div>
                                    <div class="col-8"><span class="badge bg-info">${data.beneficiaryEducation}</span></div>
                                </div>
                            </div>
                            <div class="mb-3 p-3 bg-white rounded border-start border-4 border-info">
                                <div class="row">
                                    <div class="col-4"><strong class="text-dark <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">${translations.course}:</strong></div>
                                    <div class="col-8"><span class="text-muted">${data.beneficiaryCourse}</span></div>
                                </div>
                            </div>
                            <div class="mb-3 p-3 bg-white rounded border-start border-4 border-success">
                                <div class="row">
                                    <div class="col-4"><strong class="text-dark <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">${translations.institution}:</strong></div>
                                    <div class="col-8"><span class="text-muted">${data.beneficiaryInstitution}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body">
                            <h6 class="text-primary mb-3 fw-bold d-flex align-items-center <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                                <i class="fas fa-address-book me-2"></i>${translations.contact_status}
                            </h6>
                            ${data.beneficiaryPhone ? `
                                <div class="mb-3 d-flex align-items-center">
                                    <i class="fas fa-phone text-success me-3"></i>
                                    <a href="tel:${data.beneficiaryPhone}" class="text-decoration-none text-dark">${data.beneficiaryPhone}</a>
                                </div>
                            ` : ''}
                            ${data.beneficiaryEmail ? `
                                <div class="mb-3 d-flex align-items-center">
                                    <i class="fas fa-envelope text-primary me-3"></i>
                                    <a href="mailto:${data.beneficiaryEmail}" class="text-decoration-none text-dark text-break">${data.beneficiaryEmail}</a>
                                </div>
                            ` : ''}
                            ${data.beneficiaryCompanyName ? `
                                <div class="mb-3 d-flex align-items-center">
                                    <i class="fas fa-building text-warning me-3"></i>
                                    <span class="text-dark">${data.beneficiaryCompanyName}</span>
                                </div>
                            ` : ''}
                            ${(data.beneficiaryCity || data.beneficiaryState) ? `
                                <div class="mb-3 d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt text-danger me-3"></i>
                                    <span class="text-dark">${[data.beneficiaryCity, data.beneficiaryState].filter(Boolean).join(', ')}</span>
                                </div>
                            ` : ''}
                        </div>
                    </div>
                </div>
            </div>

            ${data.beneficiaryFamily || data.beneficiaryAchievements || data.beneficiaryGoals ? `
                <hr class="my-4">
                <div class="row">
                    ${data.beneficiaryFamily ? `
                        <div class="col-12 mb-4">
                            <h6 class="text-primary mb-2 fw-bold <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><i class="fas fa-home me-2"></i>${translations.family_background}</h6>
                            <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">${data.beneficiaryFamily.replace(/\\n/g, '<br>')}</p>
                        </div>
                    ` : ''}

                    ${data.beneficiaryAchievements ? `
                        <div class="col-12 mb-4">
                            <h6 class="text-primary mb-2 fw-bold <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><i class="fas fa-trophy me-2"></i>${translations.academic_achievements}</h6>
                            <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">${data.beneficiaryAchievements.replace(/\\n/g, '<br>')}</p>
                        </div>
                    ` : ''}

                    ${data.beneficiaryGoals ? `
                        <div class="col-12 mb-4">
                            <h6 class="text-primary mb-2 fw-bold <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><i class="fas fa-bullseye me-2"></i>${translations.career_goals}</h6>
                            <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">${data.beneficiaryGoals.replace(/\\n/g, '<br>')}</p>
                        </div>
                    ` : ''}
                </div>
            ` : ''}

            ${data.beneficiaryLinkedin || data.beneficiaryCompany || data.beneficiaryEmail ? `
                <hr class="my-4">
                <div class="row">
                    <div class="col-12">
                        <h6 class="text-primary mb-3 fw-bold <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><i class="fas fa-link me-2"></i>${translations.quick_actions}</h6>
                        <div class="d-flex gap-2 flex-wrap">
                            ${data.beneficiaryEmail ? `
                                <a href="mailto:${data.beneficiaryEmail}" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-envelope me-1"></i>${translations.send_email}
                                </a>
                            ` : ''}
                            ${data.beneficiaryLinkedin ? `
                                <a href="${data.beneficiaryLinkedin}" target="_blank" class="btn btn-outline-info btn-sm">
                                    <i class="fab fa-linkedin me-1"></i>${translations.linkedin_profile}
                                </a>
                            ` : ''}
                            ${data.beneficiaryCompany ? `
                                <a href="${data.beneficiaryCompany}" target="_blank" class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-building me-1"></i>${translations.company_link}
                                </a>
                            ` : ''}
                        </div>
                    </div>
                </div>
            ` : ''}
        `;

            return html;
        }

        // Handle load more functionality
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        const loadingSpinner = document.getElementById('loadingSpinner');
        const beneficiariesGrid = document.getElementById('beneficiariesGrid');

        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                const page = this.getAttribute('data-page');
                const search = this.getAttribute('data-search');

                loadMoreBtn.classList.add('d-none');
                loadingSpinner.classList.remove('d-none');

                fetch(`<?= base_url('beneficiaries/load-more') ?>?page=${page}&search=${encodeURIComponent(search)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.success && data.html) {
                            beneficiariesGrid.insertAdjacentHTML('beforeend', data.html);
                            loadMoreBtn.setAttribute('data-page', parseInt(page) + 1);

                            if (!data.has_more) {
                                loadMoreBtn.remove();
                                loadingSpinner.innerHTML = '<p class="text-muted"><?= $translations['all_students_loaded'] ?></p>';
                            } else {
                                loadMoreBtn.classList.remove('d-none');
                            }
                        } else {
                            loadMoreBtn.innerHTML = '<i class="fas fa-exclamation-triangle me-2"></i><?= $translations['error_loading_more'] ?>';
                            loadMoreBtn.classList.add('btn-danger');
                        }
                        loadingSpinner.classList.add('d-none');
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        loadMoreBtn.innerHTML = '<i class="fas fa-exclamation-triangle me-2"></i><?= $translations['error_loading_more'] ?>';
                        loadMoreBtn.classList.add('btn-danger');
                        loadingSpinner.classList.add('d-none');
                    });
            });
        }
    });
</script>

<?= $this->endSection() ?>