<?php
$config = require __DIR__ . '/config.php';
?>
<footer class="bg-[var(--ink)] text-white mt-20">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div>
        <h3 class="text-xl font-bold mb-4"><?php echo htmlspecialchars($config['name']); ?></h3>
        <p class="text-gray-300 text-sm">
          Professional cleaning services in <?php echo htmlspecialchars($config['serviceArea']); ?>
        </p>
      </div>
      
      <div>
        <h4 class="font-semibold mb-4">Contact</h4>
        <div class="space-y-2 text-sm text-gray-300">
          <p>
            <a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', $config['phone']); ?>" class="hover:text-[var(--aqua)] transition-colors">
              <?php echo htmlspecialchars($config['phone']); ?>
            </a>
          </p>
          <p>
            <a href="mailto:<?php echo htmlspecialchars($config['email']); ?>" class="hover:text-[var(--aqua)] transition-colors">
              <?php echo htmlspecialchars($config['email']); ?>
            </a>
          </p>
          <p><?php echo htmlspecialchars($config['address']); ?></p>
        </div>
      </div>
      
      <div>
        <h4 class="font-semibold mb-4">Follow Us</h4>
        <div class="flex items-center space-x-4">
          <?php if (!empty($config['instagram'])): ?>
          <a href="<?php echo htmlspecialchars($config['instagram']); ?>" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-center w-10 h-10 rounded-full bg-white/10 hover:bg-[var(--aqua)] transition-all duration-300 hover:scale-110" aria-label="Follow us on Instagram">
            <svg class="w-5 h-5 text-white group-hover:text-[var(--ink)] transition-colors" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
          </a>
          <?php endif; ?>
        </div>
      </div>
      
      <div>
        <h4 class="font-semibold mb-4">Quick Links</h4>
        <nav class="space-y-2">
          <a href="index.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">Home</a>
          <a href="services.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">Services</a>
          <a href="pricing.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">Pricing</a>
          <a href="about.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">About</a>
          <a href="contact.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">Contact</a>
        </nav>
      </div>
      
      <div>
        <h4 class="font-semibold mb-4">Legal</h4>
        <nav class="space-y-2">
          <a href="privacy.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">Privacy Policy</a>
          <a href="terms.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">Terms of Service</a>
        </nav>
      </div>
    </div>
    
    <div class="mt-8 pt-8 border-t border-gray-700 text-center text-sm text-gray-400">
      <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($config['name']); ?>. All rights reserved.</p>
    </div>
  </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>

