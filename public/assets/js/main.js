// Header scroll effect
(function() {
  const header = document.getElementById('header');
  let lastScroll = 0;
  
  window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 20) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
    
    lastScroll = currentScroll;
  });
})();

// Mobile menu toggle
(function() {
  const menuBtn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');
  
  if (menuBtn && menu) {
    menuBtn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  }
})();

// Smooth scroll to form
function scrollToForm() {
  const form = document.getElementById('quote-form');
  if (form) {
    form.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}

// Toast notification
function showToast(message, type = 'success') {
  const toast = document.createElement('div');
  toast.className = `toast ${type}`;
  toast.textContent = message;
  document.body.appendChild(toast);
  
  setTimeout(() => {
    toast.style.animation = 'slideIn 0.3s ease reverse';
    setTimeout(() => toast.remove(), 300);
  }, 5000);
}

// Quote form submission
(function() {
  const form = document.getElementById('quote-form');
  if (!form) return;
  
  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.disabled = true;
    submitBtn.textContent = 'Submitting...';
    
    const formData = new FormData(form);
    
    try {
      const response = await fetch('/api/quote.php', {
        method: 'POST',
        body: formData,
      });
      
      const data = await response.json();
      
      if (data.success) {
        showToast('Thank you! We\'ll contact you within 24 hours.', 'success');
        form.reset();
      } else {
        showToast(data.message || 'Something went wrong. Please try again.', 'error');
      }
    } catch (error) {
      showToast('Network error. Please try again or call us directly.', 'error');
    } finally {
      submitBtn.disabled = false;
      submitBtn.textContent = originalText;
    }
  });
})();

// Honeypot field (should remain empty)
(function() {
  const honeypot = document.querySelector('input[name="website"]');
  if (honeypot) {
    honeypot.style.display = 'none';
  }
})();

