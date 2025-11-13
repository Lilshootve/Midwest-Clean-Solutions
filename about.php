<?php
require_once __DIR__ . '/inc/config.php';

$config = require __DIR__ . '/inc/config.php';
require __DIR__ . '/inc/head.php';
require __DIR__ . '/inc/header.php';
?>

<section class="relative py-16 md:py-24 overflow-hidden">
  <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="auto" poster="assets/img/og-home.jpg" aria-hidden="true">
    <source src="assets/videos/limpieza-video-2.mp4" type="video/mp4">
  </video>
  <div class="absolute inset-0 bg-white/80 backdrop-blur-sm"></div>

  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-4xl mx-auto">
      <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-[var(--ink)] mb-4">About <?php echo htmlspecialchars($config['name']); ?></h1>
        <p class="text-lg text-gray-600">Professional cleaning services you can trust</p>
      </div>

      <div class="prose prose-lg max-w-none mb-12">
        <p class="text-gray-700 leading-relaxed mb-4">
          <?php echo htmlspecialchars($config['name']); ?> is a professional cleaning company serving <?php echo htmlspecialchars($config['serviceArea']); ?>. 
          We specialize in residential and commercial cleaning services, delivering immaculate 
          results that exceed expectations.
        </p>
        <p class="text-gray-700 leading-relaxed mb-4">
          Our team is committed to providing exceptional service with attention to detail, 
          reliability, and professionalism. We understand that your home or business is 
          important to you, which is why we treat every property with the utmost care and respect.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
          <svg class="w-10 h-10 text-[var(--blue)] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
          <h3 class="text-xl font-semibold mb-2">Licensed & Insured</h3>
          <p class="text-gray-600">Fully licensed and comprehensively insured for your peace of mind.</p>
        </div>
        
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
          <svg class="w-10 h-10 text-[var(--blue)] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <h3 class="text-xl font-semibold mb-2">Background-Checked Staff</h3>
          <p class="text-gray-600">Every team member undergoes thorough background checks before joining our crew.</p>
        </div>
        
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
          <svg class="w-10 h-10 text-[var(--blue)] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <h3 class="text-xl font-semibold mb-2">Eco-Friendly Options</h3>
          <p class="text-gray-600">We offer environmentally responsible cleaning products and methods.</p>
        </div>
        
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
          <svg class="w-10 h-10 text-[var(--blue)] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
          <h3 class="text-xl font-semibold mb-2">Flexible Scheduling</h3>
          <p class="text-gray-600">We work around your schedule to provide convenient service times.</p>
        </div>
      </div>

      <div class="bg-[var(--ice)] p-8 rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Safety & Insurance</h2>
        <p class="text-gray-700 mb-4">
          Your safety and satisfaction are our top priorities. We are fully licensed, 
          bonded, and insured, providing comprehensive coverage for both our team and your property.
        </p>
        <p class="text-gray-700 mb-6">
          All our staff members undergo rigorous background checks and training to ensure 
          they meet our high standards for professionalism and reliability.
        </p>
        
        <?php if (!empty($config['instagram'])): ?>
        <div class="flex items-center justify-center pt-4 border-t border-white/50">
          <a href="<?php echo htmlspecialchars($config['instagram']); ?>" target="_blank" rel="noopener noreferrer" class="group flex items-center space-x-3 px-6 py-3 bg-gradient-to-r from-[#E4405F] to-[#F56040] text-white rounded-xl font-semibold hover:shadow-lg transition-all duration-300 hover:scale-105">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
            <span>Follow us on Instagram</span>
            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

