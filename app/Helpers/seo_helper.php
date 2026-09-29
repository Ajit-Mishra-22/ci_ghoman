<?php

use Config\Seo;

if (! function_exists('seo_json_ld')) {
    /**
     * Build Schema.org JSON-LD (a @graph of WebSite + LocalBusiness/
     * ProfessionalService) as a ready-to-print <script> tag.
     *
     * Reads organization + social details from the Seo config so business
     * info lives in one place.
     *
     * @param array<string, mixed> $seo Render-ready SEO array from Seo::for()
     */
    function seo_json_ld(array $seo): string
    {
        /** @var Seo $config */
        $config = config(Seo::class);
        $org    = $config->organization;

        $website = [
            '@type'       => 'WebSite',
            '@id'         => rtrim(site_url('/'), '/') . '/#website',
            'url'         => site_url('/'),
            'name'        => $seo['siteName'],
            'description' => $seo['description'],
            'inLanguage'  => $config->ogLocale,
        ];

        $business = [
            '@type'           => $org['type'] ?? 'ProfessionalService',
            '@id'             => rtrim(site_url('/'), '/') . '/#organization',
            'name'            => $org['name'],
            'url'             => site_url('/'),
            'logo'            => base_url($org['logo']),
            'image'           => $seo['image'],
            'description'     => $seo['description'],
            'email'           => $org['email'],
            'telephone'       => $org['phone'],
            'priceRange'      => $org['priceRange'] ?? '$$',
            'address'         => array_merge(
                ['@type' => 'PostalAddress'],
                $org['address']
            ),
            'areaServed'      => $org['areaServed'] ?? [],
            'sameAs'          => $config->socials,
            'knowsAbout'      => $seo['keywords'],
            'contactPoint'    => [
                [
                    '@type'           => 'ContactPoint',
                    'telephone'       => $org['phone'],
                    'email'           => $org['email'],
                    'contactType'     => 'sales',
                    'areaServed'      => $org['areaServed'] ?? [],
                    'availableLanguage' => ['English'],
                ],
            ],
        ];

        $graph = [
            $website,
            $business,
        ];

        $payload = [
            '@context' => 'https://schema.org',
            '@graph'   => $graph,
        ];

        $json = json_encode(
            $payload,
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
        );

        return '<script type="application/ld+json">' . $json . '</script>';
    }
}
