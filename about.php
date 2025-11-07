<?php
require_once __DIR__ . '/inc/config.php';

$config = require __DIR__ . '/inc/config.php';
require __DIR__ . '/inc/head.php';
require __DIR__ . '/inc/header.php';
?>

<section class="py-16 md:py-24 bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
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

      <div class="relative rounded-3xl overflow-hidden shadow-2xl mb-16">
        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="auto" poster="assets/img/og-home.jpg" aria-hidden="true">
          <source src="assets/videos/limpieza-video-2.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
        <div class="relative z-10 p-8 md:p-12 lg:p-16 text-white space-y-4 max-w-3xl">
          <h2 class="text-3xl md:text-4xl font-bold">Dedicated To Immaculate Spaces</h2>
          <p class="text-lg md:text-xl text-white/90">
            From meticulous detail work to full-scale facility maintenance, our trained technicians deliver
            the shine your space deserves. See our team in action in this behind-the-scenes look at a typical project day.
          </p>
        </div>
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
        <p class="text-gray-700">
          All our staff members undergo rigorous background checks and training to ensure 
          they meet our high standards for professionalism and reliability.
        </p>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>

