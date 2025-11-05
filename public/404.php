<?php
http_response_code(404);
require_once __DIR__ . '/../inc/config.php';

$config = require __DIR__ . '/../inc/config.php';
require __DIR__ . '/../inc/head.php';
require __DIR__ . '/../inc/header.php';
?>

<section class="py-16 md:py-24 bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h1 class="text-6xl font-bold text-[var(--ink)] mb-4">404</h1>
    <h2 class="text-3xl font-bold text-[var(--ink)] mb-4">Page Not Found</h2>
    <p class="text-lg text-gray-600 mb-8">The page you're looking for doesn't exist.</p>
    <a href="/" class="px-8 py-3 bg-[var(--blue)] text-white rounded-lg font-semibold hover:bg-opacity-90 transition-all shadow-lg">
      Go Home
    </a>
  </div>
</section>

<?php require __DIR__ . '/../inc/footer.php'; ?>

