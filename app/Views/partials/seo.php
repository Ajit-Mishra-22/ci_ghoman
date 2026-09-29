<?php
/**
 * SEO meta head fragment.
 *
 * Expects an $seo array built by \Config\Seo::for('key'). Included by the
 * app layout via $this->include('partials/seo').
 *
 * @var array<string, mixed> $seo
 */
?>
<title><?= esc($seo['title']) ?></title>
<meta name="description" content="<?= esc($seo['description']) ?>" />
<meta name="keywords" content="<?= esc(is_array($seo['keywords']) ? implode(', ', $seo['keywords']) : $seo['keywords']) ?>" />
<meta name="robots" content="<?= esc($seo['robots']) ?>" />
<meta name="author" content="<?= esc($seo['siteName']) ?>" />
<link rel="canonical" href="<?= esc($seo['canonical']) ?>" />

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="<?= esc($seo['siteName']) ?>" />
<meta property="og:type" content="<?= esc($seo['type']) ?>" />
<meta property="og:title" content="<?= esc($seo['title']) ?>" />
<meta property="og:description" content="<?= esc($seo['description']) ?>" />
<meta property="og:url" content="<?= esc($seo['canonical']) ?>" />
<meta property="og:image" content="<?= esc($seo['image']) ?>" />
<meta property="og:image:alt" content="<?= esc($seo['title']) ?>" />
<meta property="og:locale" content="<?= esc($seo['ogLocale']) ?>" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="<?= esc($seo['twitterSite']) ?>" />
<meta name="twitter:title" content="<?= esc($seo['title']) ?>" />
<meta name="twitter:description" content="<?= esc($seo['description']) ?>" />
<meta name="twitter:image" content="<?= esc($seo['image']) ?>" />

<!-- Icons & theme -->
<link rel="icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>" />
<link rel="apple-touch-icon" href="<?= base_url('logo.png') ?>" />
<meta name="theme-color" content="<?= esc($seo['themeColor']) ?>" />

<?= seo_json_ld($seo) ?>
