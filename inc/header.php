<?php
$config = require __DIR__ . '/config.php';
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<header id="header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
  <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 md:h-20">
      <a href="index.php" class="text-2xl md:text-3xl font-bold text-[var(--ink)] hover:text-[var(--blue)] transition-colors">
        <?php echo htmlspecialchars($config['name']); ?>
      </a>
      
      <div class="hidden md:flex items-center space-x-1">
        <a href="index.php" class="px-4 py-2 text-sm font-medium <?php echo $currentPage === 'index' ? 'text-[var(--blue)]' : 'text-[var(--ink)] hover:text-[var(--blue)]'; ?> transition-colors">Home</a>
        <a href="services.php" class="px-4 py-2 text-sm font-medium <?php echo $currentPage === 'services' ? 'text-[var(--blue)]' : 'text-[var(--ink)] hover:text-[var(--blue)]'; ?> transition-colors">Services</a>
        <a href="pricing.php" class="px-4 py-2 text-sm font-medium <?php echo $currentPage === 'pricing' ? 'text-[var(--blue)]' : 'text-[var(--ink)] hover:text-[var(--blue)]'; ?> transition-colors">Pricing</a>
        <a href="about.php" class="px-4 py-2 text-sm font-medium <?php echo $currentPage === 'about' ? 'text-[var(--blue)]' : 'text-[var(--ink)] hover:text-[var(--blue)]'; ?> transition-colors">About</a>
        <a href="service-areas.php" class="px-4 py-2 text-sm font-medium <?php echo $currentPage === 'service-areas' ? 'text-[var(--blue)]' : 'text-[var(--ink)] hover:text-[var(--blue)]'; ?> transition-colors">Service Areas</a>
        <a href="contact.php" class="px-4 py-2 text-sm font-medium <?php echo $currentPage === 'contact' ? 'text-[var(--blue)]' : 'text-[var(--ink)] hover:text-[var(--blue)]'; ?> transition-colors">Contact</a>
      </div>
      
      <div class="hidden md:flex items-center space-x-3">
        <a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', $config['phone']); ?>" class="px-4 py-2 text-sm font-medium text-[var(--ink)] hover:text-[var(--blue)] transition-colors">
          Call Now
        </a>
        <a href="contact.php" class="px-6 py-2 bg-[var(--blue)] text-white rounded-lg font-semibold hover:bg-opacity-90 transition-all shadow-lg hover:shadow-xl">
          Get a Free Quote
        </a>
      </div>
      
      <button id="mobile-menu-btn" class="md:hidden p-2 text-[var(--ink)]" aria-label="Toggle menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
    
    <div id="mobile-menu" class="hidden md:hidden pb-4">
      <div class="flex flex-col space-y-2 pt-4">
        <a href="index.php" class="px-4 py-2 text-base font-medium <?php echo $currentPage === 'index' ? 'text-[var(--blue)]' : 'text-[var(--ink)]'; ?>">Home</a>
        <a href="services.php" class="px-4 py-2 text-base font-medium <?php echo $currentPage === 'services' ? 'text-[var(--blue)]' : 'text-[var(--ink)]'; ?>">Services</a>
        <a href="pricing.php" class="px-4 py-2 text-base font-medium <?php echo $currentPage === 'pricing' ? 'text-[var(--blue)]' : 'text-[var(--ink)]'; ?>">Pricing</a>
        <a href="about.php" class="px-4 py-2 text-base font-medium <?php echo $currentPage === 'about' ? 'text-[var(--blue)]' : 'text-[var(--ink)]'; ?>">About</a>
        <a href="service-areas.php" class="px-4 py-2 text-base font-medium <?php echo $currentPage === 'service-areas' ? 'text-[var(--blue)]' : 'text-[var(--ink)]'; ?>">Service Areas</a>
        <a href="contact.php" class="px-4 py-2 text-base font-medium <?php echo $currentPage === 'contact' ? 'text-[var(--blue)]' : 'text-[var(--ink)]'; ?>">Contact</a>
        <div class="pt-4 space-y-2 border-t">
          <a href="contact.php" class="block w-full px-4 py-2 bg-[var(--blue)] text-white rounded-lg font-semibold text-center">Get a Free Quote</a>
          <a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', $config['phone']); ?>" class="block w-full px-4 py-2 border-2 border-[var(--blue)] text-[var(--blue)] rounded-lg font-semibold text-center">Call Now</a>
        </div>
      </div>
    </div>
  </nav>
</header>
<main class="pt-16 md:pt-20">

