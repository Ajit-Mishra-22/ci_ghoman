<?php

namespace App\Controllers;

use Config\Seo;

/**
 * Generates an XML sitemap from the page keys defined in Config\Seo.
 *
 * Register a route such as:  $routes->get('sitemap.xml', 'Sitemap::index');
 */
class Sitemap extends BaseController
{
    public function index()
    {
        /** @var Seo $config */
        $config = config(Seo::class);

        $today = date('Y-m-d');

        $xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($config->pages as $page) {
            $loc        = rtrim(site_url($page['path'] ?? '/'), '/');
            $lastmod    = $page['lastmod'] ?? $today;
            $changefreq = $page['changefreq'] ?? 'weekly';
            $priority   = $page['priority'] ?? '0.80';

            $xml .= "  <url>\n";
            $xml .= '    <loc>' . esc($loc) . "</loc>\n";
            $xml .= '    <lastmod>' . esc($lastmod) . "</lastmod>\n";
            $xml .= '    <changefreq>' . esc($changefreq) . "</changefreq>\n";
            $xml .= '    <priority>' . esc($priority) . "</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>' . "\n";

        return $this->response
            ->setContentType('application/xml; charset=UTF-8')
            ->setBody($xml);
    }
}
