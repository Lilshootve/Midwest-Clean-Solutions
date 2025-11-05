<?php
require_once __DIR__ . '/../inc/config.php';
require_once __DIR__ . '/../inc/csrf.php';

$config = require __DIR__ . '/../inc/config.php';
require __DIR__ . '/../inc/head.php';
require __DIR__ . '/../inc/header.php';
?>

<section class="py-16 md:py-24 bg-gradient-to-b from-white to-[var(--ice)]">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h1 class="text-4xl md:text-5xl font-bold text-[var(--ink)] mb-4">Get Your Free Quote</h1>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Fill out the form below and we'll get back to you within 24 hours with a personalized quote.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
      <div class="text-center p-6 bg-white rounded-lg shadow-sm">
        <svg class="w-8 h-8 text-[var(--blue)] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
        </svg>
        <h3 class="font-semibold mb-2">Phone</h3>
        <a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', $config['phone']); ?>" class="text-[var(--blue)] hover:text-[var(--aqua)]">
          <?php echo htmlspecialchars($config['phone']); ?>
        </a>
      </div>

      <div class="text-center p-6 bg-white rounded-lg shadow-sm">
        <svg class="w-8 h-8 text-[var(--blue)] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
        </svg>
        <h3 class="font-semibold mb-2">Email</h3>
        <a href="mailto:<?php echo htmlspecialchars($config['email']); ?>" class="text-[var(--blue)] hover:text-[var(--aqua)]">
          <?php echo htmlspecialchars($config['email']); ?>
        </a>
      </div>

      <div class="text-center p-6 bg-white rounded-lg shadow-sm">
        <svg class="w-8 h-8 text-[var(--blue)] mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        <h3 class="font-semibold mb-2">Address</h3>
        <p class="text-gray-600"><?php echo htmlspecialchars($config['address']); ?></p>
      </div>
    </div>

    <div class="max-w-2xl mx-auto">
      <form id="quote-form" class="space-y-6 bg-white rounded-2xl shadow-lg p-8" method="POST" action="/api/quote.php">
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
          
          <div>
            <label for="address" class="block text-sm font-medium mb-2">Address *</label>
            <input type="text" id="address" name="address" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--blue)] focus:border-transparent">
          </div>
          
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label for="city" class="block text-sm font-medium mb-2">City *</label>
              <input type="text" id="city" name="city" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--blue)] focus:border-transparent">
            </div>
            
            <div>
              <label for="zip" class="block text-sm font-medium mb-2">ZIP Code *</label>
              <input type="text" id="zip" name="zip" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--blue)] focus:border-transparent">
            </div>
          </div>
          
          <div>
            <label for="squareFootage" class="block text-sm font-medium mb-2">Square Footage *</label>
            <input type="number" id="squareFootage" name="squareFootage" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--blue)] focus:border-transparent">
          </div>
          
          <div>
            <label for="frequency" class="block text-sm font-medium mb-2">Frequency *</label>
            <select id="frequency" name="frequency" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--blue)] focus:border-transparent">
              <option value="">Select...</option>
              <option value="one-time">One-Time</option>
              <option value="weekly">Weekly</option>
              <option value="bi-weekly">Bi-Weekly</option>
              <option value="monthly">Monthly</option>
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
        
        <button type="submit" class="w-full px-8 py-3 bg-[var(--blue)] text-white rounded-lg font-semibold hover:bg-opacity-90 transition-all shadow-lg">
          Submit Quote Request
        </button>
      </form>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../inc/footer.php'; ?>

