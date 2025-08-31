
<?php

if (!function_exists('google_translate')) {
    function google_translate($text, $target_lang = 'hi', $source_lang = 'en')
    {
        // Skip translation if text is empty or already in target language
        if (empty($text) || $source_lang === $target_lang) {
            return $text;
        }

        // Simple cache to avoid repeated API calls
        $cache_key = md5($text . $target_lang . $source_lang);
        $cache_file = WRITEPATH . 'cache/translations/' . $cache_key . '.txt';
        
        // Create cache directory if it doesn't exist
        if (!is_dir(WRITEPATH . 'cache/translations/')) {
            mkdir(WRITEPATH . 'cache/translations/', 0755, true);
        }

        // Return cached translation if exists
        if (file_exists($cache_file)) {
            return file_get_contents($cache_file);
        }

        try {
            // Use Google Translate via libre-translate or direct API
            $url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=" . $source_lang . "&tl=" . $target_lang . "&dt=t&q=" . urlencode($text);
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode === 200 && $response) {
                $data = json_decode($response, true);
                if (isset($data[0][0][0])) {
                    $translated = $data[0][0][0];
                    
                    // Cache the translation
                    file_put_contents($cache_file, $translated);
                    
                    return $translated;
                }
            }
        } catch (Exception $e) {
            log_message('error', 'Google Translate Error: ' . $e->getMessage());
        }

        // Return original text if translation fails
        return $text;
    }
}

if (!function_exists('smart_translate')) {
    function smart_translate($key, $lang = 'en', $fallback_text = null)
    {
        // Get CodeIgniter instance
        $controller = service('request')->getLocale();
        
        // Static translations array (your existing translations)
        $translations = [
            'en' => [
                'site_title' => 'Bharatpur Foundation',
                'hero_title' => 'Bharatpur Foundation',
                'hero_tagline' => 'Transforming Students into Professionals',
                'hero_description' => 'Beyond financial aid - we create careers through education, mentoring, and professional development.',
                'quality_education' => 'Quality Education',
                'complete_academic_support' => 'Complete academic support',
                'personal_mentoring' => 'Personal Mentoring',
                'industry_guidance' => 'Industry guidance',
                'career_development' => 'Career Development',
                'job_placement_support' => 'Job placement support',
                'our_approach' => 'Our Approach',
                'support_students' => 'Support Students',
                'nav_home' => 'Home',
                'nav_beneficiaries' => 'Beneficiaries',
                'nav_success_stories' => 'Success Stories',
                'nav_our_works' => 'Our Works',
                'our_difference' => 'Our Difference',
                'creating_professionals' => 'Creating Professionals, Not Just Providing Aid',
                'professionals_description' => 'Most NGOs only offer monetary help. We create complete professionals through Education + Mentoring + Career Placement.',
                'holistic_development' => 'Holistic Development',
                'mind_skills_career' => 'Mind + Skills + Career',
                'industry_ready' => 'Industry Ready',
                'real_world_skills' => 'Real-World Skills',
                'meet_beneficiaries' => 'Meet Beneficiaries',
                'our_three_pillars' => 'Our Three Pillars',
                'complete_transformation' => 'Complete Transformation Journey',
                'transformation_description' => 'The first NGO to offer comprehensive empowerment through our unique three-pillar approach',
                'real_impact' => 'Real Impact, Real Results',
                'impact_description' => 'Numbers that prove our comprehensive approach works',
                'students_transformed' => 'Students Transformed',
                'into_professionals' => 'Into industry professionals',
                'employment_rate' => 'Employment Rate',
                'in_chosen_fields' => 'In their chosen fields',
                'industry_mentors' => 'Industry Mentors',
                'professional_guidance' => 'Professional guidance',
                'average_salary' => 'Average Starting Salary',
                'sustainable_livelihoods' => 'Sustainable livelihoods',
                'how_we_work' => 'How We Work',
                'empowerment_process' => 'Comprehensive Empowerment Process',
                'process_description' => 'Our systematic approach to creating professionals, not just providing aid',
                'professional_success' => 'Professional Success',
                'from_students' => 'From Students to Professionals',
                'success_description' => 'Real stories of transformation through our comprehensive approach',
                'view_all_stories' => 'View All Success Stories',
                'education_revolution' => 'Join the Education Revolution',
                'revolution_description' => 'Help us transform students into industry professionals through our unique approach.',
                'become_mentor' => 'Become Mentor',
                'page_title' => 'Beneficiaries',
                'beneficiaries_title' => 'Our Beneficiaries',
                'beneficiaries_subtitle' => 'Students on their journey to success',
                'beneficiaries_description' => 'Meet the amazing students who are part of our comprehensive empowerment program.',
                'age' => 'Age',
                'years_old' => 'years old',
                'course' => 'Course',
                'contact' => 'Contact',
                'email' => 'Email',
                'phone' => 'Phone',
                'no_beneficiaries' => 'No beneficiaries available at the moment.',
                'back_to_home' => 'Back to Home',
                'search' => 'Search',
                'join_title' => 'Join Our Mission',
                'join_subtitle' => 'Be part of the change',
                'join_description' => 'Help us transform students into industry professionals through our unique approach.',
                'success_stories_title' => 'Success Stories',
                'success_stories_subtitle' => 'Real transformations, Real impact',
                'success_stories_description' => 'Discover inspiring journeys of students who transformed their lives through our comprehensive empowerment program.',
                'read_more' => 'Read More',
                'no_stories' => 'No success stories available at the moment.',
                'founders_title' => 'Our Founders',
                'founders_subtitle' => 'Meet the visionary leaders',
                'founders_description' => 'The passionate individuals who founded Bharatpur Foundation to transform lives through education.'
            ]
        ];

        // Check if manual translation exists
        if (isset($translations[$lang][$key])) {
            return $translations[$lang][$key];
        }

        // If manual translation doesn't exist, use Google Translate
        $text_to_translate = $fallback_text ?? ($translations['en'][$key] ?? $key);
        
        if ($lang === 'hi' && $lang !== 'en') {
            return google_translate($text_to_translate, 'hi', 'en');
        }

        return $text_to_translate;
    }
}

if (!function_exists('translate_dynamic_content')) {
    function translate_dynamic_content($content, $target_lang = 'hi')
    {
        if (empty($content) || $target_lang === 'en') {
            return $content;
        }

        return google_translate($content, $target_lang, 'en');
    }
}
