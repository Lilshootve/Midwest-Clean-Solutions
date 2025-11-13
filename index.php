<?php
require_once __DIR__ . '/inc/config.php';
require_once __DIR__ . '/inc/csrf.php';
require_once __DIR__ . '/inc/services-data.php';

$config = require __DIR__ . '/inc/config.php';
require __DIR__ . '/inc/head.php';
require __DIR__ . '/inc/header.php';
?>

<section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden">
  <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="auto" poster="assets/img/og-home.jpg" aria-hidden="true">
    <source src="assets/videos/limpieza-video-1.mp4" type="video/mp4">
  </video>
  <div class="absolute inset-0 bg-white/75 backdrop-blur-sm"></div>

  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-4xl mx-auto text-center space-y-8">
      <div class="space-y-6">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[var(--ink)] leading-tight">
          Immaculate Cleaning. Visible Results.
        </h1>
        <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
          Residential & commercial cleaning across <?php echo htmlspecialchars($config['serviceArea']); ?>.
        </p>
      </div>

      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="#quote-form" onclick="scrollToForm(); return false;" class="px-8 py-3 bg-[var(--blue)] text-white rounded-lg font-semibold text-lg hover:bg-opacity-90 transition-all shadow-lg hover:shadow-xl">
          Get a Free Quote
        </a>
        <a href="services.php" class="px-8 py-3 border-2 border-[var(--blue)] text-[var(--blue)] rounded-lg font-semibold text-lg hover:bg-[var(--ice)] transition-all">
          View Services
        </a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-12 max-w-3xl mx-auto">
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-700">
          <span class="text-[var(--aqua)]">✓</span>
          <span>Licensed & insured</span>
        </div>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-700">
          <span class="text-[var(--aqua)]">✓</span>
          <span>Background-checked staff</span>
        </div>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-700">
          <span class="text-[var(--aqua)]">✓</span>
          <span>Eco-friendly options</span>
        </div>
        <div class="flex items-center justify-center space-x-2 text-sm text-gray-700">
          <span class="text-[var(--aqua)]">✓</span>
          <span>Flexible scheduling</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-12 md:py-16 relative">
  <div class="absolute inset-0 bg-white/80 backdrop-blur-sm"></div>
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
      <div class="flex flex-col items-center text-center space-y-3">
        <div class="w-16 h-16 rounded-full bg-[var(--ice)] flex items-center justify-center">
          <svg class="w-8 h-8 text-[var(--blue)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
        </div>
        <p class="text-sm font-medium text-[var(--ink)]">Licensed & Insured</p>
      </div>
      <div class="flex flex-col items-center text-center space-y-3">
        <div class="w-16 h-16 rounded-full bg-[var(--ice)] flex items-center justify-center">
          <svg class="w-8 h-8 text-[var(--blue)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <p class="text-sm font-medium text-[var(--ink)]">Background Checked</p>
      </div>
      <div class="flex flex-col items-center text-center space-y-3">
        <div class="w-16 h-16 rounded-full bg-[var(--ice)] flex items-center justify-center">
          <svg class="w-8 h-8 text-[var(--blue)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <p class="text-sm font-medium text-[var(--ink)]">Eco-Friendly Options</p>
      </div>
      <div class="flex flex-col items-center text-center space-y-3">
        <div class="w-16 h-16 rounded-full bg-[var(--ice)] flex items-center justify-center">
          <svg class="w-8 h-8 text-[var(--blue)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
        </div>
        <p class="text-sm font-medium text-[var(--ink)]">Flexible Scheduling</p>
      </div>
    </div>
  </div>
</section>

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
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[var(--ink)] mb-6 bg-gradient-to-r from-[var(--ink)] to-[var(--blue)] bg-clip-text text-transparent">
        Our Services
      </h2>
      <p class="text-lg md:text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
        Comprehensive cleaning solutions for residential and commercial properties
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-16">
      <?php
      $featuredServices = [
        ['Standard House Cleaning', '$100 – $220', 'Regular maintenance cleaning for your home'],
        ['Deep Cleaning', '$150 – $350', 'Thorough, detailed cleaning for all areas'],
        ['Office Cleaning (recurring)', '$0.11 – $0.20 / sq ft', 'Regular commercial office cleaning'],
        ['Post-Construction Cleanup', '$0.50 – $1.00 / sq ft', 'Complete post-construction cleaning'],
        ['Full Disinfection Service', '$150 – $400', 'Comprehensive disinfection treatment'],
        ['Pressure Washing', '$120 – $400', 'Driveways, decks, and exterior surfaces'],
      ];
      
      foreach ($featuredServices as $service):
      ?>
      <div class="group relative">
        <!-- Premium Glass Card -->
        <div class="surface premium-card h-full p-6 lg:p-8 hover:scale-[1.02]">
          <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-[var(--aqua)]/10 to-transparent rounded-bl-full"></div>
          <div class="relative z-10">
            <h3 class="text-xl lg:text-2xl font-bold text-[var(--ink)] mb-4 group-hover:text-[var(--blue)] transition-colors">
              <?php echo htmlspecialchars($service[0]); ?>
            </h3>
            <div class="mb-4">
              <p class="text-2xl lg:text-3xl font-bold bg-gradient-to-r from-[var(--blue)] to-[var(--aqua)] bg-clip-text text-transparent">
                <?php echo htmlspecialchars($service[1]); ?>
              </p>
            </div>
            <p class="text-gray-600 text-base mb-6 leading-relaxed">
              <?php echo htmlspecialchars($service[2]); ?>
            </p>
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

    <div class="text-center">
      <a href="services.php" class="btn-premium px-10 py-4 text-white rounded-xl font-semibold text-lg inline-block shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
        View All Services
      </a>
    </div>
  </div>
</section>

<section id="quote-form" class="py-16 md:py-24 relative">
  <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[var(--ice)]/30 to-transparent"></div>
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-2xl mx-auto">
      <div class="text-center mb-10">
        <h2 class="text-4xl md:text-5xl font-bold text-[var(--ink)] mb-4">Get Your Free Quote</h2>
        <p class="text-lg text-gray-600">Fill out the form below and we'll get back to you within 24 hours.</p>
      </div>

      <form id="quote-form" class="space-y-6 surface p-10" method="POST" action="api/quote.php">
        <input type="hidden" name="csrf_token" value="<?php echo generateCSRFToken(); ?>">
        <input type="text" name="website" style="display: none;" tabindex="-1" autocomplete="off">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label for="fullName" class="block text-sm font-medium mb-2">Full Name *</label>
            <input type="text" id="fullName" name="fullName" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--blue)] focus:border-transparent">
          </div>
          
          <div>
            <label for="email" class="block text-sm font-medium mb-2">Email *</label>
            <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--blue)] focus:border-transparent">
          </div>
          
          <div>
            <label for="phone" class="block text-sm font-medium mb-2">Phone *</label>
            <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--blue)] focus:border-transparent">
          </div>
          
          <div>
            <label for="propertyType" class="block text-sm font-medium mb-2">Property Type *</label>
            <select id="propertyType" name="propertyType" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--blue)] focus:border-transparent">
              <option value="">Select...</option>
              <option value="residential">Residential</option>
              <option value="commercial">Commercial</option>
            </select>
          </div>
        </div>
        
          <div>
            <label for="serviceType" class="block text-sm font-medium mb-2">Services Needed *</label>
            <textarea id="serviceType" name="serviceType" rows="3" required placeholder="Please describe the services you need..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--blue)] focus:border-transparent"></textarea>
          </div>
          
          <div>
            <label for="message" class="block text-sm font-medium mb-2">Additional Message</label>
            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--blue)] focus:border-transparent"></textarea>
          </div>
        
        <button type="submit" class="w-full btn-premium px-8 py-4 text-white rounded-xl font-semibold text-lg">
          Submit Quote Request
        </button>
      </form>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

