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
      <h1 class="text-4xl md:text-5xl font-bold text-[var(--ink)] mb-4">Pricing</h1>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Transparent pricing for all our services. All prices are estimates—contact us for a personalized quote.
      </p>
    </div>

    <div class="space-y-16">
      <?php foreach ($services as $category => $items): ?>
      <div class="bg-white rounded-2xl shadow-sm p-6 md:p-8">
        <h2 class="text-2xl md:text-3xl font-bold text-[var(--ink)] mb-6"><?php echo htmlspecialchars($category); ?></h2>
        <div class="space-y-3">
          <?php foreach ($items as $service): ?>
          <div class="flex justify-between items-center py-3 border-b border-gray-100 last:border-0">
            <span class="text-gray-800"><?php echo htmlspecialchars($service[0]); ?></span>
            <span class="font-semibold text-[var(--blue)]"><?php echo htmlspecialchars($service[1]); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-12 space-y-6">
      <div class="p-6 bg-[var(--ice)] rounded-lg">
        <h3 class="font-bold text-lg mb-3 text-[var(--ink)]">What Affects Price?</h3>
        <ul class="space-y-2 text-gray-700">
          <li>• Property size and square footage</li>
          <li>• Current condition and level of cleaning needed</li>
          <li>• Accessibility and special requirements</li>
          <li>• Service frequency (one-time vs. recurring)</li>
          <li>• Additional services or add-ons</li>
        </ul>
      </div>

      <div class="p-6 bg-[var(--blue)] bg-opacity-5 rounded-lg">
        <p class="text-sm text-gray-700">
          <strong>Pricing Disclaimer:</strong> Ranges reflect typical jobs in SE Wisconsin; final quote varies by size, condition, access, frequency; recurring clients receive preferred rates.
        </p>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../inc/footer.php'; ?>

