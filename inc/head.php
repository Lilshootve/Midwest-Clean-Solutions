<?php
$config = require __DIR__ . '/config.php';
$currentPage = basename($_SERVER['PHP_SELF'], '.php');

// Función para codificar la URL correctamente (solo el nombre del archivo)
if (!function_exists('encodeImageUrl')) {
  function encodeImageUrl($path) {
    // Separar directorio y nombre de archivo
    $lastSlash = strrpos($path, '/');
    if ($lastSlash !== false) {
      $directory = substr($path, 0, $lastSlash);
      $filename = substr($path, $lastSlash + 1);
      // Codificar solo el nombre del archivo (maneja espacios y otros caracteres especiales)
      $encodedFilename = rawurlencode($filename);
      return $directory . '/' . $encodedFilename;
    }
    // Si no hay directorio, solo codificar el nombre
    return rawurlencode($path);
  }
}

$pageTitles = [
  'index' => 'Home',
  'services' => 'Services',
  'pricing' => 'Pricing',
  'about' => 'About Us',
  'contact' => 'Contact Us',
  'service-areas' => 'Service Areas',
  'privacy' => 'Privacy Policy',
  'terms' => 'Terms of Service',
];

$pageDescriptions = [
  'index' => 'Professional residential & commercial cleaning services in ' . $config['serviceArea'] . '. Licensed, insured, and background-checked staff.',
  'services' => 'Comprehensive cleaning services from ' . $config['name'] . '. Residential, commercial, post-construction, and specialized cleaning solutions.',
  'pricing' => 'Transparent pricing for all cleaning services from ' . $config['name'] . '. Residential, commercial, and specialized cleaning rates.',
  'about' => 'Learn about ' . $config['name'] . ' - licensed, insured, and committed to providing exceptional cleaning services.',
  'contact' => 'Get a free quote from ' . $config['name'] . '. Contact us by phone, email, or fill out our quote form.',
  'service-areas' => $config['name'] . ' serves ' . $config['serviceArea'] . ' and surrounding communities.',
  'privacy' => 'Privacy Policy for ' . $config['name'],
  'terms' => 'Terms of Service for ' . $config['name'],
];

$title = ($pageTitles[$currentPage] ?? 'Home') . ' | ' . $config['name'];
$description = $pageDescriptions[$currentPage] ?? $pageDescriptions['index'];
$canonical = $config['siteUrl'] . '/' . ($currentPage === 'index' ? '' : $currentPage . '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
  <meta name="keywords" content="cleaning services, residential cleaning, commercial cleaning, Milwaukee, Waukesha, Pewaukee">
  <meta name="author" content="<?php echo htmlspecialchars($config['name']); ?>">
  
  <title><?php echo htmlspecialchars($title); ?></title>
  
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($description); ?>">
  <?php 
  if (isset($config['logo']) && file_exists(__DIR__ . '/../' . $config['logo'])) {
    $ogImage = $config['siteUrl'] . '/' . encodeImageUrl($config['logo']);
  } else {
    $ogImage = $config['siteUrl'] . '/assets/img/og-home.jpg';
  }
  ?>
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo htmlspecialchars($canonical); ?>">
  <meta property="twitter:title" content="<?php echo htmlspecialchars($title); ?>">
  <meta property="twitter:description" content="<?php echo htmlspecialchars($description); ?>">
  <meta property="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  
  <!-- Preconnect to Tailwind CDN -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  
  <!-- Favicon -->
  <?php if (isset($config['logoSmall']) && file_exists(__DIR__ . '/../' . $config['logoSmall'])): ?>
    <link rel="icon" type="image/png" href="<?php echo htmlspecialchars(encodeImageUrl($config['logoSmall'])); ?>">
  <?php else: ?>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
  <?php endif; ?>
  
  <?php
  require_once __DIR__ . '/schema.php';
  echo renderSchema($localBusinessSchema);
  if (isset($serviceSchemas)) {
    foreach ($serviceSchemas as $schema) {
      echo renderSchema($schema);
    }
  }
  ?>
</head>
<body class="bg-white text-slate-900 antialiased">

