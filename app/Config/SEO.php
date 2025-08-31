
<?php

namespace App\Config;

use CodeIgniter\Config\BaseConfig;

class SEO extends BaseConfig
{
    /**
     * Default meta tags for all pages
     */
    public $defaultMeta = [
        'charset' => 'UTF-8',
        'viewport' => 'width=device-width, initial-scale=1.0',
        'robots' => 'index, follow',
        'language' => 'en',
        'revisit-after' => '1 days',
        'distribution' => 'Global',
        'rating' => 'General',
        'author' => 'Bharatpur Foundation'
    ];

    /**
     * Site-wide SEO configuration
     */
    public $siteConfig = [
        'site_name' => 'Bharatpur Foundation',
        'site_url' => 'https://your-domain.com',
        'default_title' => 'Bharatpur Foundation - Transforming Students into Professionals',
        'default_description' => 'Bharatpur Foundation is a leading educational NGO transforming underprivileged students into job-ready professionals through comprehensive education, mentoring, and career placement programs.',
        'default_keywords' => 'bharatpur foundation, nayantar memorial charitable trust, educational NGO, student scholarship, career placement, professional development, mentorship program, underprivileged students, job training, skill development, educational transformation',
        'default_image' => '/assets/images/bharatpur-foundation-og.jpg',
        'twitter_handle' => '@bharatpurfound',
        'facebook_page' => 'bharatpurfoundation'
    ];

    /**
     * Language-specific SEO configurations
     */
    public $languageConfig = [
        'en' => [
            'locale' => 'en_US',
            'direction' => 'ltr',
            'charset' => 'UTF-8'
        ],
        'hi' => [
            'locale' => 'hi_IN',
            'direction' => 'ltr',
            'charset' => 'UTF-8'
        ]
    ];

    /**
     * Competitive keywords for ranking against "nayantara memorial charitable trust"
     */
    public $competitiveKeywords = [
        'en' => [
            'primary' => 'nayantara memorial charitable trust, bharatpur foundation, educational NGO India, student scholarship program, career placement NGO',
            'secondary' => 'underprivileged student support, professional development program, educational transformation, job training NGO, mentorship program India',
            'long_tail' => 'best educational NGO for underprivileged students, student career placement support India, comprehensive educational support program, NGO transforming students into professionals'
        ],
        'hi' => [
            'primary' => 'नयनतारा मेमोरियल चैरिटेबल ट्रस्ट, भरतपुर फाउंडेशन, शैक्षणिक एनजीओ भारत, छात्र छात्रवृत्ति कार्यक्रम, करियर प्लेसमेंट एनजीओ',
            'secondary' => 'वंचित छात्र सहायता, व्यावसायिक विकास कार्यक्रम, शैक्षणिक परिवर्तन, नौकरी प्रशिक्षण एनजीओ, मेंटरशिप प्रोग्राम भारत',
            'long_tail' => 'वंचित छात्रों के लिए सबसे अच्छा शैक्षणिक एनजीओ, छात्र करियर प्लेसमेंट सहायता भारत, व्यापक शैक्षणिक सहायता कार्यक्रम, छात्रों को पेशेवरों में बदलने वाला एनजीओ'
        ]
    ];

    /**
     * Page-specific SEO templates
     */
    public $pageTemplates = [
        'home' => [
            'title_template' => '{site_name} - {tagline}',
            'description_template' => '{site_name} is transforming underprivileged students into job-ready professionals. {stats} success rate with comprehensive education, mentoring, and career placement.',
            'focus_keywords' => ['educational NGO', 'student transformation', 'career placement', 'professional development']
        ],
        'beneficiaries' => [
            'title_template' => 'Our Students & Beneficiaries - {site_name}',
            'description_template' => 'Meet our amazing students at {site_name}. Discover inspiring stories of transformation from underprivileged backgrounds to successful careers.',
            'focus_keywords' => ['students', 'beneficiaries', 'educational support', 'student profiles']
        ],
        'success_stories' => [
            'title_template' => 'Success Stories - Alumni Achievements - {site_name}',
            'description_template' => 'Inspiring success stories from {site_name} alumni. Read how our students secured well-paying jobs in top companies through our programs.',
            'focus_keywords' => ['success stories', 'alumni achievements', 'career success', 'job placement']
        ],
        'join_us' => [
            'title_template' => 'Join Our Mission - {site_name}',
            'description_template' => 'Join {site_name} as a student, volunteer, or donor. Apply for scholarships, become a mentor, or support our educational transformation mission.',
            'focus_keywords' => ['join foundation', 'student application', 'volunteer', 'donate', 'mentorship']
        ]
    ];
}
