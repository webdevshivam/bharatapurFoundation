
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "NGO",
            "@id": "<?= base_url() ?>#organization",
            "name": "<?= $translate('site_title', 'Bharatpur Foundation') ?>",
            "alternateName": "Nayantar Memorial Charitable Trust",
            "url": "<?= base_url() ?>",
            "logo": {
                "@type": "ImageObject",
                "url": "<?= base_url('assets/images/bharatpur-logo.png') ?>",
                "width": 200,
                "height": 60
            },
            "description": "<?= $translate('hero_description', 'Educational NGO transforming underprivileged students into job-ready professionals through comprehensive education, mentoring, and career placement programs.') ?>",
            "foundingDate": "2020",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Mumbai",
                "addressRegion": "Maharashtra",
                "addressCountry": "IN"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-98765-43210",
                "contactType": "customer service",
                "email": "info@nayantar.org",
                "availableLanguage": ["en", "hi"]
            },
            "sameAs": [
                "https://www.facebook.com/bharatpurfoundation",
                "https://www.twitter.com/bharatpurfound",
                "https://www.linkedin.com/company/bharatpur-foundation",
                "https://www.instagram.com/bharatpurfoundation"
            ],
            "areaServed": {
                "@type": "Country",
                "name": "India"
            },
            "knows": [
                {
                    "@type": "Thing",
                    "name": "Education",
                    "description": "Quality education for underprivileged students"
                },
                {
                    "@type": "Thing", 
                    "name": "Career Development",
                    "description": "Professional development and job placement"
                },
                {
                    "@type": "Thing",
                    "name": "Mentorship",
                    "description": "Industry mentorship and guidance"
                }
            ]
        },
        {
            "@type": "WebSite",
            "@id": "<?= base_url() ?>#website",
            "url": "<?= base_url() ?>",
            "name": "<?= $translate('site_title', 'Bharatpur Foundation') ?>",
            "description": "<?= $translate('hero_description', 'Educational NGO transforming students into professionals') ?>",
            "publisher": {
                "@id": "<?= base_url() ?>#organization"
            },
            "inLanguage": ["en-US", "hi-IN"],
            "potentialAction": {
                "@type": "SearchAction",
                "target": "<?= base_url() ?>?s={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        },
        {
            "@type": "WebPage",
            "@id": "<?= current_url() ?>#webpage",
            "url": "<?= current_url() ?>",
            "name": "<?= isset($title) ? $title : $translate('site_title', 'Bharatpur Foundation') ?>",
            "description": "<?= isset($meta_description) ? $meta_description : $translate('hero_description', 'Educational NGO transforming students into professionals') ?>",
            "isPartOf": {
                "@id": "<?= base_url() ?>#website"
            },
            "about": {
                "@id": "<?= base_url() ?>#organization"
            },
            "inLanguage": "<?= $language === 'hi' ? 'hi-IN' : 'en-US' ?>"
        }
    ]
}
</script>
