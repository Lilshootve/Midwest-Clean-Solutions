<?php
require_once __DIR__ . '/inc/config.php';
require_once __DIR__ . '/inc/csrf.php';
require_once __DIR__ . '/inc/services-data.php';

$config = require __DIR__ . '/inc/config.php';
require __DIR__ . '/inc/head.php';
require __DIR__ . '/inc/header.php';
?>

<section class="hero-premium relative min-h-[92vh] flex items-center justify-center overflow-hidden">
  <!-- Premium Light Blooms - Reduced opacity for better text visibility -->
  <div class="absolute inset-0 opacity-15">
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[var(--aqua)] rounded-full blur-[120px] animate-pulse"></div>
    <div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-[var(--blue)] rounded-full blur-[140px] animate-pulse" style="animation-delay: 1s;"></div>
  </div>
  
  <!-- Dark overlay to ensure text readability -->
  <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-black/10 to-black/20 pointer-events-none"></div>

  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-5xl mx-auto text-center space-y-10">
      <!-- Dark backdrop for text content to improve readability -->
      <div class="relative backdrop-blur-lg bg-black/60 rounded-3xl p-8 md:p-12 mx-4 md:mx-0 border-2 border-white/30 shadow-2xl" style="box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5), 0 8px 24px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.1);">
        <div class="space-y-6 animate-fade-in">
          <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight tracking-tight" style="color: #FFFFFF !important; text-shadow: 0 6px 24px rgba(0, 0, 0, 1), 0 3px 12px rgba(0, 0, 0, 0.9), 0 1px 6px rgba(0, 0, 0, 0.7);">
            <span>Immaculate Cleaning.</span><br>
            <span>Visible Results.</span>
          </h1>
          <p class="text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed font-semibold" style="color: #FFFFFF !important; text-shadow: 0 4px 16px rgba(0, 0, 0, 0.9), 0 2px 8px rgba(0, 0, 0, 0.7), 0 1px 4px rgba(0, 0, 0, 0.5);">
            Premium residential & commercial cleaning services across <?php echo htmlspecialchars($config['serviceArea']); ?>.
          </p>
        </div>
      </div>

      <div class="flex flex-col sm:flex-row items-center justify-center gap-5 pt-6">
        <a href="#quote-form" onclick="scrollToForm(); return false;" class="inline-block px-10 py-4 rounded-xl font-bold text-lg relative z-10 text-white shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:scale-105" style="background: linear-gradient(135deg, #2E8BC0 0%, #00BFA6 100%) !important; box-shadow: 0 8px 32px rgba(46, 139, 192, 0.5), 0 4px 16px rgba(0, 191, 166, 0.4), inset 0 2px 0 rgba(255, 255, 255, 0.3); border: 2px solid rgba(255, 255, 255, 0.2);">
          Get a Free Quote
        </a>
        <a href="services.php" class="inline-block px-10 py-4 rounded-xl font-bold text-lg relative z-10 text-white shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 border-2 border-white/40" style="background: rgba(255, 255, 255, 0.2) !important; backdrop-filter: blur(16px); box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.3); text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);">
          View Services
        </a>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16 max-w-4xl mx-auto">
        <div class="flex flex-col items-center space-y-2 text-sm backdrop-blur-md bg-black/40 rounded-2xl p-5 border border-white/30 shadow-xl" style="color: #FFFFFF !important; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7), 0 1px 4px rgba(0, 0, 0, 0.5);">
          <div class="w-12 h-12 rounded-full bg-[var(--aqua)]/40 flex items-center justify-center backdrop-blur-sm border-2 border-[var(--aqua)]/60 shadow-lg">
            <span class="text-[var(--aqua)] text-2xl font-bold" style="filter: drop-shadow(0 0 12px rgba(0, 191, 166, 0.8));">✓</span>
          </div>
          <span class="text-center font-semibold">Licensed & insured</span>
        </div>
        <div class="flex flex-col items-center space-y-2 text-sm backdrop-blur-md bg-black/40 rounded-2xl p-5 border border-white/30 shadow-xl" style="color: #FFFFFF !important; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7), 0 1px 4px rgba(0, 0, 0, 0.5);">
          <div class="w-12 h-12 rounded-full bg-[var(--aqua)]/40 flex items-center justify-center backdrop-blur-sm border-2 border-[var(--aqua)]/60 shadow-lg">
            <span class="text-[var(--aqua)] text-2xl font-bold" style="filter: drop-shadow(0 0 12px rgba(0, 191, 166, 0.8));">✓</span>
          </div>
          <span class="text-center font-semibold">Background-checked staff</span>
        </div>
        <div class="flex flex-col items-center space-y-2 text-sm backdrop-blur-md bg-black/40 rounded-2xl p-5 border border-white/30 shadow-xl" style="color: #FFFFFF !important; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7), 0 1px 4px rgba(0, 0, 0, 0.5);">
          <div class="w-12 h-12 rounded-full bg-[var(--aqua)]/40 flex items-center justify-center backdrop-blur-sm border-2 border-[var(--aqua)]/60 shadow-lg">
            <span class="text-[var(--aqua)] text-2xl font-bold" style="filter: drop-shadow(0 0 12px rgba(0, 191, 166, 0.8));">✓</span>
          </div>
          <span class="text-center font-semibold">Eco-friendly options</span>
        </div>
        <div class="flex flex-col items-center space-y-2 text-sm backdrop-blur-md bg-black/40 rounded-2xl p-5 border border-white/30 shadow-xl" style="color: #FFFFFF !important; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7), 0 1px 4px rgba(0, 0, 0, 0.5);">
          <div class="w-12 h-12 rounded-full bg-[var(--aqua)]/40 flex items-center justify-center backdrop-blur-sm border-2 border-[var(--aqua)]/60 shadow-lg">
            <span class="text-[var(--aqua)] text-2xl font-bold" style="filter: drop-shadow(0 0 12px rgba(0, 191, 166, 0.8));">✓</span>
          </div>
          <span class="text-center font-semibold">Flexible scheduling</span>
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

<section class="py-16 md:py-24 relative">
  <div class="absolute inset-0 bg-gradient-to-b from-white/90 via-[var(--ice)]/40 to-white/90 backdrop-blur-sm"></div>
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-[var(--ink)] mb-4">Our Services</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Comprehensive cleaning solutions for residential and commercial properties
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
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
      <div class="premium-card bg-white/90 backdrop-blur-xl rounded-2xl shadow-lg p-8 border border-white/50">
        <h3 class="text-xl font-bold text-[var(--ink)] mb-3"><?php echo htmlspecialchars($service[0]); ?></h3>
        <p class="text-3xl font-bold text-[var(--blue)] mb-3"><?php echo htmlspecialchars($service[1]); ?></p>
        <p class="text-gray-600 text-base mb-6 leading-relaxed"><?php echo htmlspecialchars($service[2]); ?></p>
        <a href="contact.php" class="inline-flex items-center text-sm text-[var(--aqua)] hover:text-[var(--blue)] font-semibold group">
          Get Quote 
          <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center">
      <a href="services.php" class="btn-premium px-10 py-4 text-white rounded-xl font-semibold text-lg inline-block">
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

