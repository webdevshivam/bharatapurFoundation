<?php

namespace App\Controllers;

use App\Models\BeneficiaryModel;
use App\Models\SuccessStoryModel;

class Home extends BaseController
{
    private $language = 'en';

    public function __construct()
    {
        helper('translation');
    }

    // This will now use the smart_translate helper function
        // which combines manual translations with Google Translate fallback
        return [];
    }

    private function setLanguage($lang)
    {
        $this->language = in_array($lang, ['en', 'hi']) ? $lang : 'en';
        return $this->language;
    }

    private function translate($key, $fallback = null)
    {
        return smart_translate($key, $this->language, $fallback);
    }

    public function index($lang = 'en')
    {
        $language = $this->setLanguage($lang);

        $successStoryModel = new SuccessStoryModel();
        $beneficiaryModel = new BeneficiaryModel();

        // Optimize queries for home page - limit success stories and cache counts
        // Get success stories with translations
        $stories = $successStoryModel->getPublishedStories(3);
        if ($language === 'hi' && !empty($stories)) {
            foreach ($stories as &$story) {
                $story['title'] = translate_dynamic_content($story['title'], 'hi');
                $story['content'] = translate_dynamic_content($story['content'], 'hi');
                $story['description'] = translate_dynamic_content($story['description'], 'hi');
            }
        }

        $data = [
            'success_stories' => $stories,
            'total_beneficiaries' => $beneficiaryModel->countAll(),
            'active_beneficiaries' => $beneficiaryModel->where('status', 'active')->countAllResults(),
            'language' => $language,
            'translate' => function($key, $fallback = null) use ($language) {
                return smart_translate($key, $language, $fallback);
            },
            'title' => $this->translate('site_title'),
            'page_title' => 'Home',
            'meta_description' => $language === 'hi' ? 
                google_translate('Bharatpur Foundation - Transforming underprivileged students into job-ready professionals. 95% employment rate, 500+ students supported. Quality education, personal mentoring & career placement.', 'hi', 'en') :
                'Bharatpur Foundation - Transforming underprivileged students into job-ready professionals. 95% employment rate, 500+ students supported. Quality education, personal mentoring & career placement.',
            'meta_keywords' => $language === 'hi' ? 
                google_translate('bharatpur foundation, nayantar memorial charitable trust, student education, career placement, professional development, scholarship program, educational NGO, underprivileged students, job training, mentorship program', 'hi', 'en') :
                'bharatpur foundation, nayantar memorial charitable trust, student education, career placement, professional development, scholarship program, educational NGO, underprivileged students, job training, mentorship program'
        ];

        return view('frontend/home', $data);
    }

    public function beneficiaries($lang = 'en')
    {
        $language = $this->setLanguage($lang);

        $beneficiaryModel = new \App\Models\BeneficiaryModel();

        // Get search parameter
        $search = $this->request->getGet('search') ?? '';

        // Get all beneficiaries and combine them
        $pursuing_beneficiaries = $beneficiaryModel->getBeneficiariesByStatus(false, null, null, $search);
        $passout_beneficiaries = $beneficiaryModel->getBeneficiariesByStatus(true, null, null, $search);

        // Combine all beneficiaries for the main display
        $beneficiaries = array_merge($pursuing_beneficiaries ?? [], $passout_beneficiaries ?? []);

        // Calculate stats
        $total_beneficiaries = $beneficiaryModel->countAll();
        $active_students = $beneficiaryModel->where('is_passout', 0)->where('status', 'active')->countAllResults();
        $graduates = $beneficiaryModel->where('is_passout', 1)->where('status', 'active')->countAllResults();
        $total_results = count($beneficiaries);

        // Translate beneficiaries data if in Hindi
        if ($language === 'hi' && !empty($beneficiaries)) {
            foreach ($beneficiaries as &$beneficiary) {
                $beneficiary['course'] = translate_dynamic_content($beneficiary['course'], 'hi');
                $beneficiary['institution'] = translate_dynamic_content($beneficiary['institution'], 'hi');
                $beneficiary['education_level'] = translate_dynamic_content($beneficiary['education_level'], 'hi');
                if (!empty($beneficiary['family_background'])) {
                    $beneficiary['family_background'] = translate_dynamic_content($beneficiary['family_background'], 'hi');
                }
                if (!empty($beneficiary['academic_achievements'])) {
                    $beneficiary['academic_achievements'] = translate_dynamic_content($beneficiary['academic_achievements'], 'hi');
                }
                if (!empty($beneficiary['career_goals'])) {
                    $beneficiary['career_goals'] = translate_dynamic_content($beneficiary['career_goals'], 'hi');
                }
            }
        }

        $data = [
            'title' => smart_translate('page_title', $language, 'Beneficiaries'),
            'beneficiaries' => $beneficiaries,
            'pursuing_beneficiaries' => $pursuing_beneficiaries,
            'passout_beneficiaries' => $passout_beneficiaries,
            'total_beneficiaries' => $total_beneficiaries,
            'active_students' => $active_students,
            'graduates' => $graduates,
            'institutions' => '10+',
            'search' => $search ?? '',
            'total_results' => $total_results,
            'language' => $language,
            'translate' => function($key, $fallback = null) use ($language) {
                return smart_translate($key, $language, $fallback);
            },
            'page_title' => 'Our Students & Beneficiaries',
            'meta_description' => $language === 'hi' ? 
                google_translate('Meet our amazing students and beneficiaries at Bharatpur Foundation. Discover inspiring stories of transformation from underprivileged backgrounds to successful careers through education.', 'hi', 'en') :
                'Meet our amazing students and beneficiaries at Bharatpur Foundation. Discover inspiring stories of transformation from underprivileged backgrounds to successful careers through education.',
            'meta_keywords' => $language === 'hi' ? 
                google_translate('bharatpur foundation students, beneficiaries, student profiles, educational transformation, success stories, scholarship recipients, career development, professional growth', 'hi', 'en') :
                'bharatpur foundation students, beneficiaries, student profiles, educational transformation, success stories, scholarship recipients, career development, professional growth'
        ];

        return view('frontend/beneficiaries', $data);
    }


    public function success_stories($lang = 'en')
    {
        $language = $this->setLanguage($lang);

        $successStoryModel = new \App\Models\SuccessStoryModel();

        // First check if table exists and has data
        $total_count = $successStoryModel->countAll();
        log_message('debug', 'Total success stories in database: ' . $total_count);

        // Try different approaches to get stories
        if ($total_count == 0) {
            $stories = [];
        } else {
            // Try to get all stories first
            $stories = $successStoryModel->findAll();

            // If no stories, check if status filtering is the issue
            if (empty($stories)) {
                $stories = $successStoryModel->where('status', 'active')->findAll();
            }
        }

        // Debug: log the count of stories found
        log_message('debug', 'Success stories found: ' . count($stories));

        // Translate stories content if in Hindi
        if ($language === 'hi' && !empty($stories)) {
            foreach ($stories as &$story) {
                $story['title'] = translate_dynamic_content($story['title'], 'hi');
                $story['content'] = translate_dynamic_content($story['content'], 'hi');
                $story['description'] = translate_dynamic_content($story['description'], 'hi');
            }
        }

        $data = [
            'title' => smart_translate('success_stories_title', $language, 'Success Stories'),
            'stories' => $stories,
            'language' => $language,
            'translate' => function($key, $fallback = null) use ($language) {
                return smart_translate($key, $language, $fallback);
            },
            'page_title' => 'Success Stories - Alumni Achievements',
            'meta_description' => $language === 'hi' ? 
                google_translate('Inspiring success stories from Bharatpur Foundation alumni. Read how our students transformed their lives through education and secured well-paying jobs in top companies.', 'hi', 'en') :
                'Inspiring success stories from Bharatpur Foundation alumni. Read how our students transformed their lives through education and secured well-paying jobs in top companies.',
            'meta_keywords' => $language === 'hi' ? 
                google_translate('bharatpur foundation success stories, alumni achievements, student transformation, career success, educational impact, job placement, professional development, inspiring stories', 'hi', 'en') :
                'bharatpur foundation success stories, alumni achievements, student transformation, career success, educational impact, job placement, professional development, inspiring stories'
        ];

        return view('frontend/success_stories', $data);
    }

    public function ngo_works($lang = 'en')
    {
        $this->setLanguage($lang);

        helper('text');
        $model = new \App\Models\NgoWorkModel();
        $data = [
            'ngo_works' => $model->getPublishedWorks(),
            'language' => $this->language,
            'translations' => $this->translations[$this->language],
            'title' => $this->translate('nav_our_works')
        ];

        return view('frontend/ngo_works', $data);
    }

    public function founders_members($lang = 'en')
    {
        $language = $this->setLanguage($lang);

        

        $data = [
            'title' => smart_translate('founders_title', $language, 'Founders & Members'),
            'language' => $language,
            'translate' => function($key, $fallback = null) use ($language) {
                return smart_translate($key, $language, $fallback);
            },
            'page_title' => 'Founders & Team Members',
            'meta_description' => $language === 'hi' ? 
                google_translate('Meet the dedicated founders and team members of Bharatpur Foundation. Learn about our leadership, vision, and the passionate individuals driving educational transformation.', 'hi', 'en') :
                'Meet the dedicated founders and team members of Bharatpur Foundation. Learn about our leadership, vision, and the passionate individuals driving educational transformation.',
            'meta_keywords' => $language === 'hi' ? 
                google_translate('bharatpur foundation founders, team members, leadership, foundation management, educational leaders, charity founders, NGO team, nayantar trust leadership', 'hi', 'en') :
                'bharatpur foundation founders, team members, leadership, foundation management, educational leaders, charity founders, NGO team, nayantar trust leadership'
        ];

        return view('frontend/founders_members', $data);
    }

    public function join_us($lang = 'en')
    {
        $language = $this->setLanguage($lang);

        

        $data = [
            'title' => smart_translate('join_title', $language, 'Join Us'),
            'language' => $language,
            'translate' => function($key, $fallback = null) use ($language) {
                return smart_translate($key, $language, $fallback);
            },
            'page_title' => 'Join Us - Student, Volunteer & Donor Applications',
            'meta_description' => $language === 'hi' ? 
                google_translate('Join Bharatpur Foundation as a student, volunteer, or donor. Apply for educational scholarships, become a mentor, or support our mission to transform underprivileged students into professionals.', 'hi', 'en') :
                'Join Bharatpur Foundation as a student, volunteer, or donor. Apply for educational scholarships, become a mentor, or support our mission to transform underprivileged students into professionals.',
            'meta_keywords' => $language === 'hi' ? 
                google_translate('join bharatpur foundation, student application, volunteer registration, donor support, educational scholarship, mentorship program, charity donation, NGO volunteer', 'hi', 'en') :
                'join bharatpur foundation, student application, volunteer registration, donor support, educational scholarship, mentorship program, charity donation, NGO volunteer'
        ];

        return view('frontend/join_us', $data);
    }

    public function media()
    {
        $language = $this->request->getVar('language') ?? 'en';

        $data = [
            'language' => $language,
            'page_title' => 'Media Coverage & News',
            'meta_description' => 'Latest media coverage and news about Bharatpur Foundation. Read press releases, news articles, and media mentions about our educational initiatives and student achievements.',
            'meta_keywords' => 'bharatpur foundation media, news coverage, press releases, educational news, charity news, NGO media, foundation updates, student achievements news'
        ];

        return view('frontend/media', $data);
    }

    public function loadMoreBeneficiaries()
    {
        $beneficiaryModel = new BeneficiaryModel();
        $search = $this->request->getGet('search');
        $perPage = 9;
        $currentPage = (int)($this->request->getGet('page') ?? 1);
        $offset = ($currentPage - 1) * $perPage;

        $beneficiaries = $beneficiaryModel->getActiveBeneficiaries($perPage, $offset, $search);
        $total = $beneficiaryModel->countActiveBeneficiaries($search);
        $hasMore = ($offset + $perPage) < $total;

        if (empty($beneficiaries)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'No more beneficiaries found'
            ]);
        }

        // Generate HTML for new beneficiaries
        $html = '';
        foreach ($beneficiaries as $beneficiary) {
            $html .= $this->generateBeneficiaryCard($beneficiary);
        }

        return $this->response->setJSON([
            'success' => true,
            'html' => $html,
            'has_more' => $hasMore
        ]);
    }

    private function generateBeneficiaryCard($beneficiary)
    {
        ob_start();
?>
        <div class="col-lg-6 col-xl-4 mb-4 beneficiary-card">
            <div class="card h-100 border-0 shadow-lg">
                <div class="card-header text-center bg-light py-2">
                    <div class="feature-icon mx-auto mb-2" style="width: 60px; height: 60px; font-size: 1.5rem; background: var(--gradient-soft); color: var(--primary-color); overflow: hidden; border-radius: 50%;">
                        <?php if (!empty($beneficiary['image']) && file_exists(WRITEPATH . 'uploads/beneficiaries/' . $beneficiary['image'])): ?>
                            <img src="<?= base_url('uploads/beneficiaries/' . $beneficiary['image']) ?>"
                                alt="<?= esc($beneficiary['name']) ?>"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        <?php else: ?>
                            <i class="fas fa-user-graduate"></i>
                        <?php endif; ?>
                    </div>
                    <h6 class="mb-1 font-display text-dark">
                        <?= esc($beneficiary['name']) ?>
                    </h6>
                    <?php if (!empty($beneficiary['age'])): ?>
                        <p class="text-muted small mb-1" style="font-size: 0.75rem;"><?= esc($beneficiary['age']) ?> years old</p>
                    <?php endif; ?>

                    <span class="badge bg-success px-2 py-1 small">
                        <?= esc(ucfirst($beneficiary['status'])) ?>
                    </span>
                </div>
                <div class="card-body p-4">
                    <!-- Course & University -->
                    <div class="mb-3">
                        <h6 class="text-primary mb-2 fw-bold">
                            <i class="fas fa-graduation-cap me-2"></i>Course & University
                        </h6>
                        <p class="mb-1 text-dark fw-semibold"><?= esc($beneficiary['course']) ?></p>
                        <p class="text-muted small mb-0"><?= esc($beneficiary['institution']) ?></p>
                    </div>

                    <!-- Education Level -->
                    <div class="mb-3">
                        <h6 class="text-primary mb-2 fw-bold">
                            <i class="fas fa-certificate me-2"></i>Education Level
                        </h6>
                        <p class="mb-0 text-dark"><?= esc($beneficiary['education_level']) ?></p>
                    </div>

                    <!-- Contact -->
                    <?php if (!empty($beneficiary['phone'])): ?>
                        <div class="mb-3">
                            <h6 class="text-primary mb-2 fw-bold">
                                <i class="fas fa-phone me-2"></i>Contact
                            </h6>
                            <p class="mb-0">
                                <a href="tel:<?= esc($beneficiary['phone']) ?>" class="text-dark text-decoration-none fw-semibold">
                                    <?= esc($beneficiary['phone']) ?>
                                </a>
                            </p>
                        </div>
                    <?php endif; ?>

                    <!-- Contact Information -->
                    <?php if (!empty($beneficiary['phone']) || !empty($beneficiary['email'])): ?>
                        <div class="mb-4">
                            <h6 class="text-primary mb-2 fw-bold">
                                <i class="fas fa-address-book me-2"></i>Contact Information
                            </h6>
                            <?php if (!empty($beneficiary['phone'])): ?>
                                <p class="mb-1 small text-dark">
                                    <i class="fas fa-phone me-2 text-muted"></i>
                                    <a href="tel:<?= esc($beneficiary['phone']) ?>" class="text-dark text-decoration-none">
                                        <?= esc($beneficiary['phone']) ?>
                                    </a>
                                </p>
                            <?php endif; ?>
                            <?php if (!empty($beneficiary['email'])): ?>
                                <p class="mb-0 small text-dark">
                                    <i class="fas fa-envelope me-2 text-muted"></i>
                                    <a href="mailto:<?= esc($beneficiary['email']) ?>" class="text-dark text-decoration-none">
                                        <?= esc($beneficiary['email']) ?>
                                    </a>
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Action Buttons -->
                    <div class="mb-3">
                        <div class="row g-2">
                            <?php if (!empty($beneficiary['email'])): ?>
                                <div class="col-6">
                                    <a href="mailto:<?= esc($beneficiary['email']) ?>" class="btn btn-outline-primary btn-sm w-100">
                                        <i class="fas fa-envelope me-1"></i>Email
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($beneficiary['linkedin_url'])): ?>
                                <div class="col-6">
                                    <a href="<?= esc($beneficiary['linkedin_url']) ?>" target="_blank" class="btn btn-outline-info btn-sm w-100">
                                        <i class="fab fa-linkedin me-1"></i>LinkedIn
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Read More Button -->
                    <div class="text-center">
                        <button class="btn btn-primary btn-sm read-more-btn"
                            data-beneficiary-id="<?= $beneficiary['id'] ?>"
                            data-beneficiary-name="<?= esc($beneficiary['name']) ?>"
                            data-beneficiary-age="<?= esc($beneficiary['age'] ?? '') ?>"
                            data-beneficiary-education="<?= esc($beneficiary['education_level']) ?>"
                            data-beneficiary-course="<?= esc($beneficiary['course']) ?>"
                            data-beneficiary-institution="<?= esc($beneficiary['institution']) ?>"
                            data-beneficiary-city="<?= esc($beneficiary['city'] ?? '') ?>"
                            data-beneficiary-state="<?= esc($beneficiary['state'] ?? '') ?>"
                            data-beneficiary-phone="<?= esc($beneficiary['phone'] ?? '') ?>"
                            data-beneficiary-email="<?= esc($beneficiary['email'] ?? '') ?>"
                            data-beneficiary-linkedin="<?= esc($beneficiary['linkedin_url'] ?? '') ?>"
                            data-beneficiary-company-name="<?= esc($beneficiary['company_name'] ?? '') ?>"
                            data-beneficiary-family="<?= esc($beneficiary['family_background'] ?? '') ?>"
                            data-beneficiary-achievements="<?= esc($beneficiary['academic_achievements'] ?? '') ?>"
                            data-beneficiary-goals="<?= esc($beneficiary['career_goals'] ?? '') ?>"
                            data-beneficiary-company="<?= esc($beneficiary['company_link'] ?? '') ?>"
                            data-beneficiary-status="<?= esc($beneficiary['status']) ?>">
                            <i class="fas fa-info-circle me-1"></i>Read More
                        </button>
                    </div>
                </div>
            </div>
        </div>
<?php
        return ob_get_clean();
    }

    public function serveBeneficiaryImage($filename)
    {
        $filepath = WRITEPATH . 'uploads/beneficiaries/' . $filename;

        if (!file_exists($filepath)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Image not found');
        }

        $mime = mime_content_type($filepath);

        return $this->response
            ->setHeader('Content-Type', $mime)
            ->setHeader('Content-Length', filesize($filepath))
            ->setBody(file_get_contents($filepath));
    }
}