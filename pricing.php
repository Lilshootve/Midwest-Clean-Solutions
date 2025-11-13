<?php
require_once __DIR__ . '/inc/config.php';
require_once __DIR__ . '/inc/services-data.php';

$config = require __DIR__ . '/inc/config.php';
require __DIR__ . '/inc/head.php';
require __DIR__ . '/inc/header.php';
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
        Pricing
      </h1>
      <p class="text-lg md:text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
        Transparent pricing for all our services. All prices are estimates—contact us for a personalized quote.
      </p>
    </div>

    <div class="space-y-8 lg:space-y-12">
      <?php foreach ($services as $category => $items): ?>
      <div class="surface premium-card p-6 md:p-8 lg:p-10 rounded-2xl">
        <div class="flex items-center mb-8">
          <div class="h-1 w-12 bg-gradient-to-r from-[var(--blue)] to-[var(--aqua)] rounded-full mr-4"></div>
          <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-[var(--ink)]">
            <?php echo htmlspecialchars($category); ?>
          </h2>
        </div>
        <div class="space-y-4">
          <?php foreach ($items as $service): ?>
          <div class="group flex justify-between items-center py-4 px-4 rounded-xl hover:bg-gradient-to-r hover:from-[var(--ice)]/50 hover:to-transparent transition-all duration-300 border-b border-gray-100/50 last:border-0">
            <span class="text-gray-800 font-medium text-lg group-hover:text-[var(--ink)] transition-colors">
              <?php echo htmlspecialchars($service[0]); ?>
            </span>
            <span class="font-bold text-xl lg:text-2xl bg-gradient-to-r from-[var(--blue)] to-[var(--aqua)] bg-clip-text text-transparent group-hover:scale-110 transition-transform">
              <?php echo htmlspecialchars($service[1]); ?>
            </span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-16 space-y-6">
      <div class="surface p-8 lg:p-10 rounded-2xl">
        <div class="flex items-start space-x-4">
          <div class="flex-shrink-0">
            <div class="w-12 h-12 bg-gradient-to-br from-[var(--blue)] to-[var(--aqua)] rounded-full flex items-center justify-center">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
          </div>
          <div>
            <h3 class="font-bold text-xl text-[var(--ink)] mb-4">What Affects Price?</h3>
            <ul class="space-y-3 text-gray-700">
              <li class="flex items-start">
                <span class="text-[var(--aqua)] mr-3 mt-1">•</span>
                <span>Property size and square footage</span>
              </li>
              <li class="flex items-start">
                <span class="text-[var(--aqua)] mr-3 mt-1">•</span>
                <span>Current condition and level of cleaning needed</span>
              </li>
              <li class="flex items-start">
                <span class="text-[var(--aqua)] mr-3 mt-1">•</span>
                <span>Accessibility and special requirements</span>
              </li>
              <li class="flex items-start">
                <span class="text-[var(--aqua)] mr-3 mt-1">•</span>
                <span>Service frequency (one-time vs. recurring)</span>
              </li>
              <li class="flex items-start">
                <span class="text-[var(--aqua)] mr-3 mt-1">•</span>
                <span>Additional services or add-ons</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="surface p-8 lg:p-10 rounded-2xl border-l-4 border-[var(--blue)]">
        <div class="flex items-start space-x-4">
          <div class="flex-shrink-0">
            <div class="w-12 h-12 bg-gradient-to-br from-[var(--blue)] to-[var(--aqua)] rounded-full flex items-center justify-center">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
          </div>
          <div>
            <h3 class="font-bold text-lg text-[var(--ink)] mb-2">Pricing Disclaimer</h3>
            <p class="text-sm text-gray-700 leading-relaxed">
              Ranges reflect typical jobs in SE Wisconsin; final quote varies by size, condition, access, frequency; recurring clients receive preferred rates.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

