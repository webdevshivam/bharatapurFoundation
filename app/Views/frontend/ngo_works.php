<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center min-vh-100 py-5">
            <div class="col-lg-8 mx-auto text-center">
                <div class="mb-4">
                    <span class="badge bg-primary-light text-primary px-4 py-2 rounded-pill fs-6 mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['our_comprehensive_approach'] ?? 'Our Comprehensive Approach' ?></span>
                    <h1 class="display-3 fw-bold mb-4 text-gradient <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['beyond_financial_aid'] ?? 'Beyond Financial Aid' ?></h1>
                    <p class="lead fs-4 mb-5 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['beyond_financial_aid_description'] ?? 'We don\'t just provide monetary support. We create professionals through education, mentoring, and career development - real empowerment at the ground level to uplift society.' ?></p>
                </div>

                <!-- Three Pillars -->
                <div class="row g-4 mb-5">
                    <div class="col-md-4">
                        <div class="feature-icon mx-auto mb-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4 class="fw-bold mb-2 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['quality_education'] ?? 'Quality Education' ?></h4>
                        <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['quality_education_description'] ?? 'Comprehensive academic support with modern learning methodologies'?></p>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-icon mx-auto mb-3" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="fw-bold mb-2 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['personal_mentoring'] ?? 'Personal Mentoring' ?></h4>
                        <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['personal_mentoring_description'] ?? 'One-on-one guidance from industry professionals and experts'?></p>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-icon mx-auto mb-3" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h4 class="fw-bold mb-2 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['career_development'] ?? 'Career Development' ?></h4>
                        <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['career_development_description'] ?? 'Professional training and employment assistance for sustainable futures'?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Philosophy Section -->
<section class="section-padding bg-soft">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['our_philosophy'] ?? 'Our Philosophy' ?></span>
                <h2 class="section-title font-display mb-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['real_empowerment_not_just_aid'] ?? 'Real Empowerment, Not Just Aid' ?></h2>
                <p class="lead mb-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['real_empowerment_description'] ?? 'Most NGOs in the education sector only offer monetary help. We go beyond - we create professionals.' ?></p>

                <div class="empowerment-features">
                    <div class="d-flex align-items-start mb-4">
                        <div class="icon-box bg-primary text-white rounded-3 p-3 me-4 flex-shrink-0">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['holistic_development'] ?? 'Holistic Development' ?></h5>
                            <p class="text-muted mb-0 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['holistic_development_description'] ?? 'We focus on intellectual, emotional, and professional growth of every individual.' ?></p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="icon-box bg-success text-white rounded-3 p-3 me-4 flex-shrink-0">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['industry_connections'] ?? 'Industry Connections' ?></h5>
                            <p class="text-muted mb-0 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['industry_connections_description'] ?? 'Direct partnerships with companies and professionals for real-world exposure.' ?></p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="icon-box bg-warning text-white rounded-3 p-3 me-4 flex-shrink-0">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['sustainable_impact'] ?? 'Sustainable Impact' ?></h5>
                            <p class="text-muted mb-0 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['sustainable_impact_description'] ?? 'Creating self-reliant professionals who can contribute back to society.' ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="empowerment-stats">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="stat-card text-center p-4 rounded-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                                <div class="stat-number fs-1 fw-bold mb-2">95%</div>
                                <div class="stat-label <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['employment_rate'] ?? 'Employment Rate' ?></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card text-center p-4 rounded-4" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white;">
                                <div class="stat-number fs-1 fw-bold mb-2">3+</div>
                                <div class="stat-label <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['years_of_mentoring'] ?? 'Years of Mentoring' ?></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card text-center p-4 rounded-4" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white;">
                                <div class="stat-number fs-1 fw-bold mb-2">50+</div>
                                <div class="stat-label <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['industry_partners'] ?? 'Industry Partners' ?></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card text-center p-4 rounded-4" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); color: white;">
                                <div class="stat-number fs-1 fw-bold mb-2">95%</div>
                                <div class="stat-label <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['success_rate'] ?? 'Success Rate' ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Comprehensive Programs -->
<section class="section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['comprehensive_programs'] ?? 'Comprehensive Programs' ?></span>
                <h2 class="section-title font-display mb-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['education_mentoring_employment'] ?? 'Education + Mentoring + Employment' ?></h2>
                <p class="lead text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['comprehensive_programs_description'] ?? 'The first of its kind comprehensive approach that transforms students into industry-ready professionals'?></p>
            </div>
        </div>

        <div class="row g-5">
            <!-- Education Program -->
            <div class="col-lg-4">
                <div class="program-card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 20px;">
                    <div class="card-body p-5">
                        <div class="program-icon mb-4">
                            <i class="fas fa-book-open fa-3x"></i>
                        </div>
                        <h3 class="card-title font-display mb-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['quality_education_program_title'] ?? 'Quality Education' ?></h3>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle me-3"></i>
                                <span class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['full_academic_fee_coverage'] ?? 'Full academic fee coverage' ?></span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle me-3"></i>
                                <span class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['modern_learning_resources'] ?? 'Modern learning resources' ?></span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle me-3"></i>
                                <span class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['skill_development_workshops'] ?? 'Skill development workshops' ?></span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle me-3"></i>
                                <span class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['language_proficiency_training'] ?? 'Language proficiency training' ?></span>
                            </li>
                        </ul>
                        <div class="program-outcome">
                            <small class="opacity-75 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['outcome_strong_academic_foundation'] ?? 'Outcome: Strong Academic Foundation' ?></small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mentoring Program -->
            <div class="col-lg-4">
                <div class="program-card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, #f093fb 0%, #f5576c 100%); color: white; border-radius: 20px;">
                    <div class="card-body p-5">
                        <div class="program-icon mb-4">
                            <i class="fas fa-user-tie fa-3x"></i>
                        </div>
                        <h3 class="card-title font-display mb-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['personal_mentoring_program_title'] ?? 'Personal Mentoring' ?></h3>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle me-3"></i>
                                <span class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['one_on_one_industry_mentors'] ?? '1-on-1 industry mentors' ?></span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle me-3"></i>
                                <span class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['regular_progress_tracking'] ?? 'Regular progress tracking' ?></span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle me-3"></i>
                                <span class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['personality_development'] ?? 'Personality development' ?></span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle me-3"></i>
                                <span class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['career_guidance_sessions'] ?? 'Career guidance sessions' ?></span>
                            </li>
                        </ul>
                        <div class="program-outcome">
                            <small class="opacity-75 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['outcome_industry_ready_mindset'] ?? 'Outcome: Industry-Ready Mindset' ?></small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Employment Program -->
            <div class="col-lg-4">
                <div class="program-card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, #4facfe 0%, #00f2fe 100%); color: white; border-radius: 20px;">
                    <div class="card-body p-5">
                        <div class="program-icon mb-4">
                            <i class="fas fa-briefcase fa-3x"></i>
                        </div>
                        <h3 class="card-title font-display mb-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['employment_support_program_title'] ?? 'Employment Support' ?></h3>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle me-3"></i>
                                <span class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['job_placement_assistance'] ?? 'Job placement assistance' ?></span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle me-3"></i>
                                <span class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['interview_preparation'] ?? 'Interview preparation' ?></span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle me-3"></i>
                                <span class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['resume_building_workshops'] ?? 'Resume building workshops' ?></span>
                            </li>
                            <li class="mb-3 d-flex align-items-center">
                                <i class="fas fa-check-circle me-3"></i>
                                <span class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['industry_networking_events'] ?? 'Industry networking events' ?></span>
                            </li>
                        </ul>
                        <div class="program-outcome">
                            <small class="opacity-75 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['outcome_sustainable_employment'] ?? 'Outcome: Sustainable Employment' ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Journey -->
<section class="section-padding bg-soft">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['success_journey'] ?? 'Success Journey' ?></span>
                <h2 class="section-title font-display mb-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['from_student_to_professional'] ?? 'From Student to Professional' ?></h2>
                <p class="lead text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['success_journey_description'] ?? 'Follow the journey of our beneficiaries as they transform into industry professionals'?></p>
            </div>
        </div>

        <div class="journey-timeline">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="journey-step text-center">
                        <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold;">1</div>
                        <h5 class="fw-bold mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['academic_excellence'] ?? 'Academic Excellence' ?></h5>
                        <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['academic_excellence_description'] ?? 'Strong educational foundation with modern learning approaches'?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="journey-step text-center">
                        <div class="step-number bg-success text-white rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold;">2</div>
                        <h5 class="fw-bold mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['skill_development'] ?? 'Skill Development' ?></h5>
                        <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['skill_development_description'] ?? 'Industry-relevant skills through practical workshops and training'?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="journey-step text-center">
                        <div class="step-number bg-warning text-white rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold;">3</div>
                        <h5 class="fw-bold mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['professional_readiness'] ?? 'Professional Readiness' ?></h5>
                        <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['professional_readiness_description'] ?? 'Interview skills, communication, and workplace etiquette training'?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="journey-step text-center">
                        <div class="step-number bg-info text-white rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold;">4</div>
                        <h5 class="fw-bold mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['career_launch'] ?? 'Career Launch' ?></h5>
                        <p class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['career_launch_description'] ?? 'Job placement and ongoing professional support'?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Works Grid -->
<?php if (!empty($ngo_works)): ?>
<section class="section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['our_impact'] ?? 'Our Impact' ?></span>
                <h2 class="section-title font-display mb-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['real_stories_real_transformation'] ?? 'Real Stories, Real Transformation' ?></h2>
                <p class="lead text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['real_stories_description'] ?? 'See how we\'re creating professionals, not just providing aid'?></p>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="row mb-4">
            <div class="col-md-6 mx-auto">
                <select class="form-select form-select-lg <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>" id="categoryFilter">
                    <option value="" class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['all_impact_areas'] ?? 'All Impact Areas' ?></option>
                    <option value="Education" class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['education_support'] ?? 'Education Support' ?></option>
                    <option value="Healthcare" class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['healthcare_initiatives'] ?? 'Healthcare Initiatives' ?></option>
                    <option value="Environment" class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['environmental_projects'] ?? 'Environmental Projects' ?></option>
                    <option value="Community Service" class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['community_development'] ?? 'Community Development' ?></option>
                    <option value="Women Empowerment" class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['women_empowerment'] ?? 'Women Empowerment' ?></option>
                    <option value="Child Welfare" class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['child_welfare'] ?? 'Child Welfare' ?></option>
                    <option value="Disaster Relief" class="<?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['emergency_relief'] ?? 'Emergency Relief' ?></option>
                </select>
            </div>
        </div>

        <div class="row g-4" id="ngoWorksContainer">
            <?php foreach ($ngo_works as $work): ?>
                <div class="col-lg-6 col-xl-4 mb-4 ngo-work-card" data-category="<?= esc($work['category']) ?>">
                    <div class="card h-100 border-0 shadow-lg work-card">
                        <?php if (!empty($work['images'])): ?>
                            <?php $images = json_decode($work['images'], true); ?>
                            <?php if ($images && !empty($images[0])): ?>
                                <img src="<?= base_url('uploads/ngo_works/' . $images[0]) ?>"
                                     class="card-img-top" alt="<?= esc($work['title']) ?>"
                                     style="height: 250px; object-fit: cover;">
                            <?php endif; ?>
                        <?php endif; ?>

                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-primary px-3 py-2 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= esc($work['category']) ?></span>
                                <?php if (!empty($work['beneficiaries_count'])): ?>
                                    <small class="text-muted">
                                        <i class="fas fa-users me-1"></i> <?= number_format($work['beneficiaries_count']) ?> <?= $translations['beneficiaries'] ?? 'beneficiaries' ?>
                                    </small>
                                <?php endif; ?>
                            </div>

                            <h5 class="card-title font-display mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= esc($work['title']) ?></h5>
                            <p class="card-text text-muted mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= esc(character_limiter($work['description'], 100)) ?></p>

                            <div class="work-details">
                                <?php if (!empty($work['location'])): ?>
                                    <div class="detail-item mb-2">
                                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                        <span class="text-muted <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= esc($work['location']) ?></span>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($work['date_completed'])): ?>
                                    <div class="detail-item mb-2">
                                        <i class="fas fa-calendar-check text-success me-2"></i>
                                        <span class="text-muted"><?= date('M Y', strtotime($work['date_completed'])) ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php else: ?>
<section class="section-padding">
    <div class="container">
        <div class="text-center py-5">
            <i class="fas fa-heart fa-4x text-primary mb-4"></i>
            <h4 class="mb-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['our_transformation_stories_coming_soon'] ?? 'Our Transformation Stories Coming Soon' ?></h4>
            <p class="lead text-muted mb-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['check_back_soon'] ?? 'We\'re documenting our comprehensive approach to student empowerment. Check back soon to see real stories of education, mentoring, and career success.' ?></p>
            <a href="<?= base_url($language ?? 'en') . '/beneficiaries' ?>" class="btn btn-primary btn-lg <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                <i class="fas fa-users me-2"></i> <?= $translations['meet_our_current_beneficiaries'] ?? 'Meet Our Current Beneficiaries' ?>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Call to Action -->
<section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%); color: white;">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="font-display mb-4 display-5 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['join_the_revolution_in_education'] ?? 'Join the Revolution in Education' ?></h2>
                <p class="lead mb-5 fs-4 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= $translations['be_part_of_the_first_ngo'] ?? 'Be part of the first NGO that creates professionals, not just provides aid. Help us empower the next generation with education, mentoring, and career opportunities.' ?></p>

                <div class="row justify-content-center g-3">
                    <div class="col-md-4">
                        <a href="<?= base_url($language ?? 'en') . '/beneficiaries' ?>" class="btn btn-light btn-lg w-100 py-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                            <i class="fas fa-graduation-cap me-2"></i> <?= $translations['support_education'] ?? 'Support Education' ?>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url($language ?? 'en') . '/success-stories' ?>" class="btn btn-outline-light btn-lg w-100 py-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                            <i class="fas fa-user-tie me-2"></i> <?= $translations['become_a_mentor'] ?? 'Become a Mentor' ?>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-outline-light btn-lg w-100 py-3 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                            <i class="fas fa-handshake me-2"></i> <?= $translations['partner_with_us'] ?? 'Partner With Us' ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Filter functionality
document.getElementById('categoryFilter').addEventListener('change', function() {
    const selectedCategory = this.value;
    const workCards = document.querySelectorAll('.ngo-work-card');

    workCards.forEach(card => {
        if (selectedCategory === '' || card.dataset.category === selectedCategory) {
            card.style.display = 'block';
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        } else {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.display = 'none';
            }, 300);
        }
    });
});

// Add transition styles
document.querySelectorAll('.ngo-work-card').forEach(card => {
    card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
});

// Work card hover effects
document.querySelectorAll('.work-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-10px)';
        this.style.boxShadow = '0 20px 40px rgba(0,0,0,0.1)';
    });

    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.1)';
    });
});
</script>

<style>
.work-card {
    transition: all 0.3s ease;
    border-radius: 15px;
    overflow: hidden;
}

.program-card {
    transition: all 0.3s ease;
}

.program-card:hover {
    transform: translateY(-10px);
}

.stat-card {
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: scale(1.05);
}

.journey-step {
    transition: all 0.3s ease;
}

.journey-step:hover {
    transform: translateY(-5px);
}

.empowerment-features .icon-box {
    transition: all 0.3s ease;
}

.empowerment-features .d-flex:hover .icon-box {
    transform: scale(1.1);
}

/* Hindi font styles if needed */
.lang-hi {
    font-family: 'Noto Sans Devanagari', sans-serif; /* Example font, ensure it's loaded */
}
</style>

<?= $this->endSection() ?>