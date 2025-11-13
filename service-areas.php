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

<section class="py-16 md:py-24 relative overflow-hidden">
  <!-- Premium Gradient Background -->
  <div class="absolute inset-0 bg-gradient-to-br from-[#E5F7FB] via-white to-[#F0FAFC]"></div>
  <div class="absolute inset-0 opacity-40">
    <div class="absolute top-0 left-0 w-96 h-96 bg-[var(--aqua)] rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-[var(--blue)] rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
    <div class="absolute bottom-0 left-1/2 w-96 h-96 bg-[var(--ice)] rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 4s;"></div>
  </div>
  
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center mb-16">
      <div class="inline-block mb-4">
        <div class="h-1 w-24 bg-gradient-to-r from-[var(--blue)] to-[var(--aqua)] mx-auto rounded-full"></div>
      </div>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[var(--ink)] mb-6 bg-gradient-to-r from-[var(--ink)] to-[var(--blue)] bg-clip-text text-transparent">
        Service Areas
      </h1>
      <p class="text-lg md:text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
        We proudly serve <?php echo htmlspecialchars($config['serviceArea']); ?> and surrounding communities.
      </p>
    </div>

    <div class="max-w-4xl mx-auto">
      <div class="surface premium-card p-8 lg:p-10 rounded-2xl mb-8">
        <div class="flex items-center mb-8">
          <div class="w-12 h-12 bg-gradient-to-br from-[var(--blue)] to-[var(--aqua)] rounded-full flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
          </div>
          <h2 class="text-2xl md:text-3xl font-bold text-[var(--ink)]">Primary Service Area</h2>
        </div>
        <p class="text-gray-700 mb-8 text-lg leading-relaxed">
          <?php echo htmlspecialchars($config['serviceArea']); ?> is our primary service area, but we also serve many 
          surrounding communities. If you don't see your city listed, please contact us 
          to confirm service availability in your area.
        </p>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
          <?php foreach ($serviceAreas as $area): ?>
          <div class="group p-4 bg-gradient-to-br from-[var(--ice)] to-white rounded-xl text-center font-semibold text-[var(--ink)] border border-[var(--ice)] hover:border-[var(--blue)] hover:shadow-lg transition-all duration-300 hover:scale-105">
            <?php echo htmlspecialchars($area); ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="surface p-8 lg:p-10 rounded-2xl border-l-4 border-[var(--blue)]">
        <div class="flex items-start space-x-4">
          <div class="flex-shrink-0">
            <div class="w-12 h-12 bg-gradient-to-br from-[var(--blue)] to-[var(--aqua)] rounded-full flex items-center justify-center">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
          </div>
          <div>
            <p class="text-gray-800 text-lg leading-relaxed">
              <span class="font-semibold text-[var(--ink)]">Not sure if we serve your area?</span> 
              <a href="contact.php" class="text-[var(--blue)] hover:text-[var(--aqua)] font-bold underline decoration-2 underline-offset-2 transition-colors">Contact us</a> 
              <span class="text-gray-700"> and we'll let you know!</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

