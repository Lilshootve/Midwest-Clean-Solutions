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
        <h4 class="font-semibold mb-4">Quick Links</h4>
        <nav class="space-y-2">
          <a href="/" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">Home</a>
          <a href="/services.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">Services</a>
          <a href="/pricing.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">Pricing</a>
          <a href="/about.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">About</a>
          <a href="/contact.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">Contact</a>
        </nav>
      </div>
      
      <div>
        <h4 class="font-semibold mb-4">Legal</h4>
        <nav class="space-y-2">
          <a href="/privacy.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">Privacy Policy</a>
          <a href="/terms.php" class="block text-sm text-gray-300 hover:text-[var(--aqua)] transition-colors">Terms of Service</a>
        </nav>
      </div>
    </div>
    
    <div class="mt-8 pt-8 border-t border-gray-700 text-center text-sm text-gray-400">
      <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($config['name']); ?>. All rights reserved.</p>
    </div>
  </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>

