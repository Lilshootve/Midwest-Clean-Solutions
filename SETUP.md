# Setup Instructions

## Git Repository Setup

Execute these commands in order:

```bash
git init
git checkout -b main
git remote add origin https://github.com/Lilshootve/Midwest-Clean-Solutions.git
git add .
git commit -m "feat: initial luxury PHP site for Midwest Clean Solutions"
git push -u origin main
```

## After Pushing to GitHub

Hostinger Git auto-deploy will automatically pull from the `main` branch.

## Local Development Setup

1. **Install Composer** (if not already installed):
   ```bash
   php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
   php composer-setup.php
   php -r "unlink('composer-setup.php');"
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   ```

3. **Configure Environment**:
   ```bash
   cp .env.example .env
   # Edit .env with your SMTP credentials
   ```

4. **Run Local Server**:
   ```bash
   php -S localhost:8000 -t public
   ```

5. **Access Site**:
   Open http://localhost:8000 in your browser

## Hostinger Deployment

1. Connect GitHub repository in Hostinger panel
2. Set document root to `/public`
3. Configure SMTP settings in `.env` file
4. Ensure PHP 8.2+ is enabled
5. Deploy automatically from `main` branch

## File Structure

```
Midwest-Clean-Solutions/
├── api/
│   └── quote.php          # Form submission handler
├── inc/
│   ├── config.php         # Company configuration
│   ├── services-data.php  # Services & pricing data
│   ├── csrf.php           # CSRF protection
│   ├── mailer.php         # Email sending
│   ├── schema.php         # Schema.org JSON-LD
│   ├── head.php           # HTML head includes
│   ├── header.php         # Site header
│   └── footer.php         # Site footer
├── assets/
│   ├── css/
│   │   └── custom.css     # Custom styles
│   ├── js/
│   │   └── main.js        # JavaScript
│   └── img/               # Images
├── index.php              # Home page
├── services.php           # Services page
├── pricing.php            # Pricing page
├── contact.php            # Contact page
├── about.php              # About page
├── service-areas.php      # Service areas
├── privacy.php            # Privacy policy
├── terms.php              # Terms of service
├── 404.php                # 404 error page
├── .htaccess              # Apache configuration
├── composer.json          # PHP dependencies
├── sitemap.xml.php        # Dynamic sitemap
├── robots.txt             # Search engine crawler rules
└── .env.example           # Environment template
```

