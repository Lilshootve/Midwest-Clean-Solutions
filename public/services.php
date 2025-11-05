<?php
require_once __DIR__ . '/../inc/config.php';
require_once __DIR__ . '/../inc/services-data.php';

$config = require __DIR__ . '/../inc/config.php';
require __DIR__ . '/../inc/head.php';
require __DIR__ . '/../inc/header.php';
?>

<section class="py-16 md:py-24 bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h1 class="text-4xl md:text-5xl font-bold text-[var(--ink)] mb-4">Our Services</h1>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Professional cleaning solutions tailored to your needs. All services include our satisfaction guarantee.
      </p>
    </div>

    <div class="space-y-16">
      <?php foreach ($services as $category => $items): ?>
      <div>
        <h2 class="text-2xl md:text-3xl font-bold text-[var(--ink)] mb-6"><?php echo htmlspecialchars($category); ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php foreach ($items as $service): ?>
          <div class="bg-white rounded-2xl shadow-sm p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
            <h3 class="text-lg font-semibold text-[var(--ink)] mb-2"><?php echo htmlspecialchars($service[0]); ?></h3>
            <p class="text-xl font-bold text-[var(--blue)] mb-2"><?php echo htmlspecialchars($service[1]); ?></p>
            <a href="/contact.php" class="text-sm text-[var(--aqua)] hover:text-[var(--blue)] font-medium">Get Quote →</a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-12 p-6 bg-[var(--ice)] rounded-lg">
      <p class="text-sm text-gray-700 text-center">
        <strong>Pricing Disclaimer:</strong> All prices are estimates based on typical Southeastern Wisconsin market rates. 
        Final quotes depend on property size, condition, accessibility, and service frequency. 
        Recurring clients receive preferred rates. Contact us for a personalized quote.
      </p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../inc/footer.php'; ?>

