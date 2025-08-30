<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<style>
.profile-photo-container {
    width: 80px;
    height: 80px;
    border-radius: 12px;
    overflow: hidden;
    border: 3px solid rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
}

.profile-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center top;
}

.profile-photo-placeholder {
    color: rgba(255, 255, 255, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}

.card-header {
    border-bottom: none !important;
}

/* Hindi font support */
.lang-hi {
    font-family: 'Noto Sans Devanagari', 'Devanagari', 'Hindi', serif;
}
</style>

<!-- Page Header -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="font-display mb-4"><?= $translations['success_stories_title'] ?></h1>
                <p class="lead mb-0"><?= $translations['success_stories_subtitle'] ?> - <?= $translations['success_stories_description'] ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="section-padding">
    <div class="container">
        <?php if (!empty($stories)): ?>
        <div class="row">
            <?php foreach($stories as $story): ?>
            <div class="col-lg-6 mb-5">
                <div class="card h-100 border-0 shadow-lg">
                    <div class="card-header" style="background: var(--gradient-primary); color: white; position: relative; padding: 20px;">
                        <div class="d-flex align-items-center">
                            <?php if (!empty($story['image'])): ?>
                            <div class="profile-photo-container me-3">
                                <img src="<?= base_url('uploads/success_stories/' . $story['image']) ?>" 
                                     class="profile-photo" alt="<?= esc($story['name']) ?>">
                            </div>
                            <?php else: ?>
                            <div class="profile-photo-container me-3">
                                <div class="profile-photo-placeholder">
                                    <i class="fas fa-user fa-2x"></i>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="flex-grow-1">
                                <h4 class="mb-1 <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>"><?= esc($story['name']) ?></h4>
                                <h6 class="text-light mb-0">
                                    <i class="fas fa-briefcase"></i> <?= esc($story['current_position']) ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                        <div class="mb-4">
                            <p class="card-text"><?= nl2br(esc($story['story'])) ?></p>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="text-primary">Company</h6>
                                <p class="mb-0">
                                    <i class="fas fa-building text-success"></i> 
                                    <?php if (!empty($story['company_link'])): ?>
                                        <a href="<?= esc($story['company_link']) ?>" target="_blank" class="text-decoration-none">
                                            <?= esc($story['company']) ?>
                                        </a>
                                    <?php else: ?>
                                        <?= esc($story['company']) ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-primary">Education</h6>
                                <p class="mb-0">
                                    <i class="fas fa-graduation-cap text-info"></i> 
                                    <?= esc($story['education']) ?>
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="text-primary">Location</h6>
                                <p class="mb-0">
                                    <i class="fas fa-map-marker-alt text-warning"></i> 
                                    <?= esc($story['city'] . ', ' . $story['state']) ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-primary">Age</h6>
                                <p class="mb-0">
                                    <i class="fas fa-calendar text-secondary"></i> 
                                    <?= esc($story['age']) ?> years old
                                </p>
                            </div>
                        </div>

                        <?php if (!empty($story['achievements'])): ?>
                        <div class="row mb-3">
                            <div class="col-12">
                                <h6 class="text-primary">Achievements</h6>
                                <p class="mb-0">
                                    <i class="fas fa-trophy text-warning"></i> 
                                    <?= nl2br(esc($story['achievements'])) ?>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($story['linkedin_url'])): ?>
                        <div class="text-center mt-3">
                            <a href="<?= esc($story['linkedin_url']) ?>" target="_blank" class="btn btn-primary btn-sm">
                                <i class="fab fa-linkedin"></i> Connect on LinkedIn
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer bg-light">
                        <small class="text-muted">
                            <i class="fas fa-clock"></i> 
                            Published on <?= date('F j, Y', strtotime($story['created_at'])) ?>
                        </small>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="col-12 text-center">
            <div class="alert alert-info <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                <i class="fas fa-info-circle me-2"></i>
                <?= $translations['no_stories'] ?>
            </div>
            <a href="<?= base_url($language ?? 'en') ?>" class="btn btn-bharatpur-primary <?= ($language ?? 'en') === 'hi' ? 'lang-hi' : '' ?>">
                <i class="fas fa-home me-2"></i><?= $translations['back_to_home'] ?>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>

<?= $this->endSection() ?>