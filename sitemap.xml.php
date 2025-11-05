<?php
header('Content-Type: application/xml; charset=utf-8');

$config = require __DIR__ . '/inc/config.php';
$baseUrl = $config['siteUrl'];

$pages = [
  ['url' => '', 'priority' => '1.0', 'changefreq' => 'monthly'],
  ['url' => 'services.php', 'priority' => '0.9', 'changefreq' => 'monthly'],
  ['url' => 'pricing.php', 'priority' => '0.9', 'changefreq' => 'monthly'],
  ['url' => 'contact.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
  ['url' => 'about.php', 'priority' => '0.7', 'changefreq' => 'monthly'],
  ['url' => 'service-areas.php', 'priority' => '0.7', 'changefreq' => 'monthly'],
  ['url' => 'privacy.php', 'priority' => '0.3', 'changefreq' => 'yearly'],
  ['url' => 'terms.php', 'priority' => '0.3', 'changefreq' => 'yearly'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($pages as $page) {
  $url = $baseUrl . '/' . $page['url'];
  $lastmod = date('Y-m-d');
  
  echo '  <url>' . "\n";
  echo '    <loc>' . htmlspecialchars($url) . '</loc>' . "\n";
  echo '    <lastmod>' . $lastmod . '</lastmod>' . "\n";
  echo '    <changefreq>' . $page['changefreq'] . '</changefreq>' . "\n";
  echo '    <priority>' . $page['priority'] . '</priority>' . "\n";
  echo '  </url>' . "\n";
}

echo '</urlset>';

