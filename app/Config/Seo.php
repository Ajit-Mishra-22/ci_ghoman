<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Central SEO configuration.
 *
 * All page metadata lives here so it can be maintained in one place.
 * Use Seo::for('home') / Seo::for('contact') to get the merged metadata
 * for a page, which is then rendered by the views/partials/seo.php view.
 */
class Seo extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Site-wide defaults
     * --------------------------------------------------------------------------
     */
    public string $siteName = 'Ghoman IT Solutions';

    public string $defaultTitle = 'Ghoman IT Solutions — Custom Software, AI & Cloud Services';

    public string $defaultDescription = 'Ghoman IT Solutions builds custom software, AI & machine learning, cloud infrastructure, cybersecurity, data analytics and managed web hosting that help businesses grow faster.';

    /** @var list<string> */
    public array $defaultKeywords = [
        'IT solutions',
        'custom software development',
        'AI and machine learning',
        'cloud infrastructure',
        'cybersecurity services',
        'data analytics',
        'web hosting',
        'mobile app development',
        'SEO optimization',
        'Ghoman IT',
    ];

    /** Image (relative to public/) used for Open Graph / Twitter preview. */
    public string $defaultImage = 'hero-bg.jpeg';

    public string $twitterSite = '@ghoman_ca';

    /** Browser theme color (matches the site accent). */
    public string $themeColor = '#00bfa5';

    public string $ogLocale = 'en_CA';

    public string $defaultRobots = 'index, follow, max-image-preview:large';

    /**
     * --------------------------------------------------------------------------
     * Per-page metadata
     * --------------------------------------------------------------------------
     *
     * Keyed by a short page key. Values merge over the site defaults.
     * Supported keys: title, description, keywords, image, path, type,
     * robots, changefreq, priority, lastmod.
     *
     * @var array<string, array<string, mixed>>
     */
    public array $pages = [
        'home' => [
            'title'       => 'Ghoman IT Solutions — Custom Software, AI & Cloud Services',
            'description' => 'Ghoman IT Solutions delivers custom software, AI & machine learning, cloud infrastructure, cybersecurity, analytics and web hosting. Innovative, SEO-friendly platforms built to help you lead.',
            'path'        => '/',
            'type'        => 'website',
            'changefreq'  => 'weekly',
            'priority'    => '1.00',
        ],
        'about' => [
            'title'       => 'About Us | Ghoman IT Solutions',
            'description' => 'Learn about Ghoman IT Solutions and our client-focused approach to software, AI, cloud infrastructure, cybersecurity, analytics, and digital services.',
            'path'        => '/about-us',
            'type'        => 'website',
            'changefreq'  => 'monthly',
            'priority'    => '0.70',
        ],
        'careers' => [
            'title'       => 'Careers | Ghoman IT Solutions',
            'description' => 'Explore career opportunities with Ghoman IT Solutions and contact our team to express your interest.',
            'path'        => '/careers',
            'type'        => 'website',
            'changefreq'  => 'monthly',
            'priority'    => '0.60',
        ],
        'services' => [
            'title'       => 'IT Services | Ghoman IT Solutions',
            'description' => 'Explore AI and machine learning, cloud infrastructure, cybersecurity, data analytics and web hosting services from Ghoman IT Solutions.',
            'path'        => '/services',
            'type'        => 'website',
            'changefreq'  => 'monthly',
            'priority'    => '0.90',
        ],
        'privacy' => [
            'title'       => 'Privacy Policy | Ghoman IT Solutions',
            'description' => 'Learn how Ghoman IT Solutions handles information submitted through this website and how to contact us with privacy questions.',
            'path'        => '/privacy-policy',
            'type'        => 'website',
            'changefreq'  => 'yearly',
            'priority'    => '0.30',
        ],
        'terms' => [
            'title'       => 'Terms and Conditions | Ghoman IT Solutions',
            'description' => 'Read the terms and conditions for using the Ghoman IT Solutions website.',
            'path'        => '/terms-and-conditions',
            'type'        => 'website',
            'changefreq'  => 'yearly',
            'priority'    => '0.30',
        ],
        'contact' => [
            'title'       => 'Contact Ghoman IT Solutions | Get a Free Project Quote',
            'description' => 'Talk to Ghoman IT Solutions about your next project. Request a free quote for custom software, AI, cloud, cybersecurity and web hosting. Canada: +1 (587) 736-2288.',
            'path'        => '/contact',
            'type'        => 'website',
            'image'       => 'logob.png',
            'changefreq'  => 'monthly',
            'priority'    => '0.80',
        ],
    ];

    /**
     * --------------------------------------------------------------------------
     * Organization / LocalBusiness structured data (Schema.org)
     * --------------------------------------------------------------------------
     */
    public array $organization = [
        'name'    => 'Ghoman IT Solutions',
        'type'    => 'ProfessionalService',
        'email'   => 'hello@ghoman.ca',
        'phone'   => '+15877362288',
        'logo'    => 'logow1.png',
        'priceRange' => '$$',
        'address' => [
            'streetAddress'   => '2836 36 Ave NW',
            'addressLocality' => 'Edmonton',
            'addressRegion'   => 'AB',
            'postalCode'      => 'T6T 0H7',
            'addressCountry'  => 'CA',
        ],
        'areaServed' => ['CA', 'US', 'IN'],
    ];

    /** @var list<string> Canonical social profile URLs for Entity/Schema.org sameAs. */
    public array $socials = [
        'https://www.facebook.com/share/19AgdebvQK/?mibextid=wwXIfr',
        'https://www.instagram.com/ghoman.ca',
    ];

    /**
     * Merge per-page metadata over the site defaults and return a flat,
     * render-ready array. Absolute URLs are built from the configured base URL.
     *
     * @return array<string, mixed>
     */
    public static function for(string $key = 'home'): array
    {
        $config = config(self::class);
        $page   = $config->pages[$key] ?? [];

        $image = $page['image'] ?? $config->defaultImage;

        return [
            'key'         => $key,
            'siteName'    => $config->siteName,
            'title'       => $page['title'] ?? $config->defaultTitle,
            'description' => $page['description'] ?? $config->defaultDescription,
            'keywords'    => $page['keywords'] ?? $config->defaultKeywords,
            'canonical'   => rtrim(site_url($page['path'] ?? '/'), '/'),
            'image'       => base_url($image),
            'twitterSite' => $config->twitterSite,
            'themeColor'  => $config->themeColor,
            'ogLocale'    => $config->ogLocale,
            'type'        => $page['type'] ?? 'website',
            'robots'      => $page['robots'] ?? $config->defaultRobots,
        ];
    }
}
