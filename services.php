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
        Our Services
      </h1>
      <p class="text-lg md:text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
        Professional cleaning solutions tailored to your needs. All services include our satisfaction guarantee.
      </p>
    </div>

    <div class="space-y-20">
      <?php foreach ($services as $category => $items): ?>
      <div class="relative">
        <div class="flex items-center mb-8">
          <div class="h-px flex-1 bg-gradient-to-r from-transparent via-[var(--blue)] to-transparent"></div>
          <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-[var(--ink)] px-6 bg-white/80 backdrop-blur-sm rounded-full py-2 shadow-lg">
            <?php echo htmlspecialchars($category); ?>
          </h2>
          <div class="h-px flex-1 bg-gradient-to-r from-transparent via-[var(--blue)] to-transparent"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
          <?php foreach ($items as $service): ?>
          <div class="group relative">
            <!-- Premium Glass Card -->
            <div class="surface premium-card h-full p-6 lg:p-8 hover:scale-[1.02]">
              <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-[var(--aqua)]/10 to-transparent rounded-bl-full"></div>
              <div class="relative z-10">
                <h3 class="text-lg lg:text-xl font-bold text-[var(--ink)] mb-3 group-hover:text-[var(--blue)] transition-colors">
                  <?php echo htmlspecialchars($service[0]); ?>
                </h3>
                <div class="mb-4">
                  <p class="text-2xl lg:text-3xl font-bold bg-gradient-to-r from-[var(--blue)] to-[var(--aqua)] bg-clip-text text-transparent">
                    <?php echo htmlspecialchars($service[1]); ?>
                  </p>
                </div>
                <a href="contact.php" class="inline-flex items-center text-sm font-semibold text-[var(--aqua)] hover:text-[var(--blue)] transition-all group-hover:gap-2 gap-1">
                  Get Quote
                  <span class="transition-transform group-hover:translate-x-1">→</span>
                </a>
              </div>
              <!-- Shine effect on hover -->
              <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000 rounded-2xl"></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-16 surface p-8 lg:p-10 rounded-2xl">
      <div class="flex items-start space-x-4">
        <div class="flex-shrink-0">
          <div class="w-12 h-12 bg-gradient-to-br from-[var(--blue)] to-[var(--aqua)] rounded-full flex items-center justify-center">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
        </div>
        <div>
          <h3 class="font-bold text-lg text-[var(--ink)] mb-2">Pricing Information</h3>
          <p class="text-sm text-gray-700 leading-relaxed">
            <strong>Pricing Disclaimer:</strong> All prices are estimates based on typical Southeastern Wisconsin market rates. 
            Final quotes depend on property size, condition, accessibility, and service frequency. 
            Recurring clients receive preferred rates. Contact us for a personalized quote.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

