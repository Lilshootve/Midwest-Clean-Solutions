# Midwest Clean Solutions LLC - Website

A production-grade, luxury-looking website for Midwest Clean Solutions LLC, built with PHP 8.2, HTML5, CSS (Tailwind CDN), and vanilla JavaScript.

## Features

- 🎨 **Premium Design**: Clean whites, calming blues, aqua accents, refined spacing
- ⚡ **Fast & Lightweight**: No build tools, Tailwind via CDN, optimized assets
- 📧 **Contact Forms**: Server-side validation, CSRF protection, SMTP email
- 🔍 **SEO Optimized**: Schema.org JSON-LD, sitemap, meta tags
- ♿ **Accessible**: WCAG AA compliant, semantic HTML, keyboard navigation
- 🔒 **Secure**: CSRF tokens, spam protection, security headers

## Tech Stack

- **Backend**: PHP 8.2+
- **Frontend**: HTML5, Tailwind CSS (CDN), Vanilla JavaScript
- **Email**: PHPMailer (via Composer)
- **Server**: Apache with .htaccess

## Quick Start

### Prerequisites

- PHP 8.2 or higher
- Composer (for email functionality)
- Apache web server (or PHP built-in server for development)

### Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/Lilshootve/Midwest-Clean-Solutions.git
   cd Midwest-Clean-Solutions
   ```

2. **Install dependencies**:
   ```bash
   composer install
   ```

3. **Configure environment**:
   ```bash
   cp .env.example .env
   # Edit .env with your SMTP credentials
   ```

4. **Run development server**:
   ```bash
   php -S localhost:8000 -t public
   ```

5. **Access the site**:
   Open http://localhost:8000 in your browser

## Hostinger Deployment

1. **Set Document Root**: Configure Hostinger to use `/public` as document root
2. **Configure SMTP**: Update `.env` file with your Hostinger SMTP credentials
3. **Enable PHP 8.2+**: Ensure PHP 8.2 or higher is enabled
4. **Auto-Deploy**: Connect GitHub repository for automatic deployments

### SMTP Configuration

Edit `.env` file with your Hostinger SMTP settings:

```env
SMTP_HOST=smtp.hostinger.com
SMTP_PORT=587
SMTP_USER=your-email@yourdomain.com
SMTP_PASS=your-password
SMTP_SECURE=tls
MAIL_TO=quotes@midwestcleansolutions.com
MAIL_FROM=noreply@midwestcleansolutions.com
```

## Project Structure

```
├── api/              # API endpoints
├── inc/              # PHP includes (config, header, footer, etc.)
├── public/           # Public-facing files (document root)
│   ├── assets/       # CSS, JS, images
│   └── *.php         # Page files
├── composer.json     # PHP dependencies
├── sitemap.xml.php   # Dynamic sitemap generator
└── robots.txt        # Search engine rules
```

## Pages

- **Home** (`/`) - Hero, services overview, quote form
- **Services** (`/services.php`) - All cleaning services by category
- **Pricing** (`/pricing.php`) - Transparent pricing tables
- **Contact** (`/contact.php`) - Full contact form
- **About** (`/about.php`) - Company information
- **Service Areas** (`/service-areas.php`) - Coverage areas
- **Privacy** (`/privacy.php`) - Privacy policy
- **Terms** (`/terms.php`) - Terms of service

## Security Features

- **CSRF Protection**: All forms include CSRF tokens
- **Spam Mitigation**: Honeypot fields and timing checks
- **Input Validation**: Server-side validation for all form fields
- **Security Headers**: X-Content-Type-Options, X-Frame-Options, etc.
- **HTTPS Enforcement**: Automatic redirect to HTTPS

## Customization

### Brand Colors

Edit `public/assets/css/custom.css`:

```css
:root {
  --ink: #0F172A;
  --blue: #2E8BC0;
  --aqua: #00BFA6;
  --ice: #E5F7FB;
  --bg: #FFFFFF;
}
```

### Company Information

Edit `inc/config.php`:

```php
return [
  'name' => 'Your Company Name',
  'phone' => '+1 (XXX) XXX-XXXX',
  // ... etc
];
```

### Services & Pricing

Edit `inc/services-data.php` to update services and pricing.

## Performance

- **No Build Tools**: Direct PHP execution, no compilation needed
- **CDN Assets**: Tailwind CSS loaded from CDN
- **Caching**: Browser caching via .htaccess
- **Compression**: Gzip compression enabled
- **Lazy Loading**: Images use loading="lazy"

## Accessibility

- Semantic HTML5 elements
- ARIA labels where needed
- Keyboard navigation support
- Focus states for all interactive elements
- Color contrast meets WCAG AA standards
- Respects `prefers-reduced-motion`

## SEO

- Schema.org JSON-LD markup
- Dynamic sitemap generation
- Meta tags (title, description, OG, Twitter)
- Canonical URLs
- Semantic HTML structure

## License

Copyright © 2025 Midwest Clean Solutions LLC. All rights reserved.

## Support

For issues or questions, contact: quotes@midwestcleansolutions.com

