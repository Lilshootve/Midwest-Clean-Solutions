<?php
require_once __DIR__ . '/inc/config.php';

$config = require __DIR__ . '/inc/config.php';
require __DIR__ . '/inc/head.php';
require __DIR__ . '/inc/header.php';

$serviceAreas = [
  'Milwaukee', 'Waukesha', 'Pewaukee', 'Brookfield', 'New Berlin', 'Wauwatosa',
  'West Allis', 'Greenfield', 'Franklin', 'Oak Creek', 'Cudahy', 'St. Francis',
  'South Milwaukee', 'Hales Corners', 'Elm Grove', 'Menomonee Falls', 'Germantown',
  'Sussex', 'Hartland', 'Delafield'
];
?>

<section class="py-16 md:py-24 bg-gradient-to-b from-white to-[var(--ice)]">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h1 class="text-4xl md:text-5xl font-bold text-[var(--ink)] mb-4">Service Areas</h1>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        We proudly serve <?php echo htmlspecialchars($config['serviceArea']); ?> and surrounding communities.
      </p>
    </div>

    <div class="max-w-4xl mx-auto">
      <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
        <div class="flex items-center mb-6">
          <svg class="w-6 h-6 text-[var(--blue)] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <h2 class="text-2xl font-bold text-[var(--ink)]">Primary Service Area</h2>
        </div>
        <p class="text-gray-700 mb-6">
          <?php echo htmlspecialchars($config['serviceArea']); ?> is our primary service area, but we also serve many 
          surrounding communities. If you don't see your city listed, please contact us 
          to confirm service availability in your area.
        </p>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
          <?php foreach ($serviceAreas as $area): ?>
          <div class="p-4 bg-[var(--ice)] rounded-lg text-center font-medium text-[var(--ink)]">
            <?php echo htmlspecialchars($area); ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="bg-[var(--blue)] bg-opacity-5 p-6 rounded-lg text-center">
        <p class="text-gray-700">
          Not sure if we serve your area? 
          <a href="contact.php" class="text-[var(--blue)] hover:text-[var(--aqua)] font-semibold">Contact us</a> 
          and we'll let you know!
        </p>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

