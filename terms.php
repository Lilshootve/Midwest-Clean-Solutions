<?php
require_once __DIR__ . '/inc/config.php';

$config = require __DIR__ . '/inc/config.php';
require __DIR__ . '/inc/head.php';
require __DIR__ . '/inc/header.php';
?>

<section class="py-16 md:py-24 bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
    <h1 class="text-4xl md:text-5xl font-bold text-[var(--ink)] mb-8">Terms of Service</h1>
    <div class="prose prose-lg max-w-none">
      <p class="text-gray-700 mb-4">
        Last updated: <?php echo date('F j, Y'); ?>
      </p>
      <p class="text-gray-700 mb-4">
        Please read these Terms of Service ("Terms") carefully before using the services 
        provided by <?php echo htmlspecialchars($config['name']); ?> ("we," "our," or "us").
      </p>
      <h2 class="text-2xl font-bold text-[var(--ink)] mt-8 mb-4">Services</h2>
      <p class="text-gray-700 mb-4">
        We provide professional cleaning services for residential and commercial properties. 
        All services are subject to availability and scheduling.
      </p>
      <h2 class="text-2xl font-bold text-[var(--ink)] mt-8 mb-4">Pricing and Payment</h2>
      <p class="text-gray-700 mb-4">
        Pricing is based on property size, condition, and service requirements. 
        Final pricing will be confirmed prior to service. Payment terms will be 
        specified in your service agreement.
      </p>
      <h2 class="text-2xl font-bold text-[var(--ink)] mt-8 mb-4">Cancellation Policy</h2>
      <p class="text-gray-700 mb-4">
        We require 24-hour notice for cancellations or rescheduling. Cancellations 
        made with less than 24 hours' notice may be subject to a cancellation fee.
      </p>
      <h2 class="text-2xl font-bold text-[var(--ink)] mt-8 mb-4">Limitation of Liability</h2>
      <p class="text-gray-700 mb-4">
        We are fully insured and will address any damage claims promptly. Our liability 
        is limited to the cost of the service provided.
      </p>
      <h2 class="text-2xl font-bold text-[var(--ink)] mt-8 mb-4">Contact Us</h2>
      <p class="text-gray-700">
        If you have questions about these Terms, please contact us at 
        <a href="mailto:<?php echo htmlspecialchars($config['email']); ?>" class="text-[var(--blue)] hover:text-[var(--aqua)]">
          <?php echo htmlspecialchars($config['email']); ?>
        </a>.
      </p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

