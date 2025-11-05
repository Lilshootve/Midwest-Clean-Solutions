<?php
require_once __DIR__ . '/../inc/config.php';

$config = require __DIR__ . '/../inc/config.php';
require __DIR__ . '/../inc/head.php';
require __DIR__ . '/../inc/header.php';
?>

<section class="py-16 md:py-24 bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
    <h1 class="text-4xl md:text-5xl font-bold text-[var(--ink)] mb-8">Privacy Policy</h1>
    <div class="prose prose-lg max-w-none">
      <p class="text-gray-700 mb-4">
        Last updated: <?php echo date('F j, Y'); ?>
      </p>
      <p class="text-gray-700 mb-4">
        <?php echo htmlspecialchars($config['name']); ?> ("we," "our," or "us") is committed to protecting your privacy. 
        This Privacy Policy explains how we collect, use, and safeguard your information 
        when you visit our website or use our services.
      </p>
      <h2 class="text-2xl font-bold text-[var(--ink)] mt-8 mb-4">Information We Collect</h2>
      <p class="text-gray-700 mb-4">
        We collect information you provide directly to us, including:
      </p>
      <ul class="list-disc list-inside text-gray-700 mb-4 space-y-2">
        <li>Name and contact information (email, phone, address)</li>
        <li>Property information and service preferences</li>
        <li>Payment information (processed securely through third-party providers)</li>
        <li>Communications and correspondence</li>
      </ul>
      <h2 class="text-2xl font-bold text-[var(--ink)] mt-8 mb-4">How We Use Your Information</h2>
      <p class="text-gray-700 mb-4">
        We use the information we collect to:
      </p>
      <ul class="list-disc list-inside text-gray-700 mb-4 space-y-2">
        <li>Provide, maintain, and improve our services</li>
        <li>Process transactions and send related information</li>
        <li>Send you quotes, confirmations, and updates</li>
        <li>Respond to your comments and questions</li>
        <li>Comply with legal obligations</li>
      </ul>
      <h2 class="text-2xl font-bold text-[var(--ink)] mt-8 mb-4">Contact Us</h2>
      <p class="text-gray-700">
        If you have questions about this Privacy Policy, please contact us at 
        <a href="mailto:<?php echo htmlspecialchars($config['email']); ?>" class="text-[var(--blue)] hover:text-[var(--aqua)]">
          <?php echo htmlspecialchars($config['email']); ?>
        </a>.
      </p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../inc/footer.php'; ?>

