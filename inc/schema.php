<?php
$config = require __DIR__ . '/config.php';
$currentPage = basename($_SERVER['PHP_SELF'], '.php');

// LocalBusiness schema for all pages
$localBusinessSchema = [
  '@context' => 'https://schema.org',
  '@type' => 'LocalBusiness',
  'name' => $config['name'],
  'telephone' => $config['phone'],
  'email' => $config['email'],
  'address' => [
    '@type' => 'PostalAddress',
    'streetAddress' => '1310 Sunnyridge Rd',
    'addressLocality' => 'Pewaukee',
    'addressRegion' => 'WI',
    'postalCode' => '53072',
    'addressCountry' => 'US',
  ],
  'url' => $config['siteUrl'],
  'priceRange' => $config['priceRange'],
  'areaServed' => [
    '@type' => 'City',
    'name' => $config['serviceArea'],
  ],
];

// Service schemas for services page
if ($currentPage === 'services') {
  $serviceSchemas = [
    [
      '@context' => 'https://schema.org',
      '@type' => 'Service',
      'serviceType' => 'Standard House Cleaning',
      'provider' => [
        '@type' => 'LocalBusiness',
        'name' => $config['name'],
      ],
      'areaServed' => [
        '@type' => 'City',
        'name' => $config['serviceArea'],
      ],
      'offers' => [
        '@type' => 'Offer',
        'priceCurrency' => 'USD',
        'priceSpecification' => [
          '@type' => 'PriceSpecification',
          'minPrice' => 100,
          'maxPrice' => 220,
        ],
      ],
    ],
    [
      '@context' => 'https://schema.org',
      '@type' => 'Service',
      'serviceType' => 'Deep Cleaning',
      'provider' => [
        '@type' => 'LocalBusiness',
        'name' => $config['name'],
      ],
      'areaServed' => [
        '@type' => 'City',
        'name' => $config['serviceArea'],
      ],
      'offers' => [
        '@type' => 'Offer',
        'priceCurrency' => 'USD',
        'priceSpecification' => [
          '@type' => 'PriceSpecification',
          'minPrice' => 150,
          'maxPrice' => 350,
        ],
      ],
    ],
    [
      '@context' => 'https://schema.org',
      '@type' => 'Service',
      'serviceType' => 'Move-In / Move-Out Cleaning',
      'provider' => [
        '@type' => 'LocalBusiness',
        'name' => $config['name'],
      ],
      'areaServed' => [
        '@type' => 'City',
        'name' => $config['serviceArea'],
      ],
      'offers' => [
        '@type' => 'Offer',
        'priceCurrency' => 'USD',
        'priceSpecification' => [
          '@type' => 'PriceSpecification',
          'minPrice' => 180,
          'maxPrice' => 400,
        ],
      ],
    ],
    [
      '@context' => 'https://schema.org',
      '@type' => 'Service',
      'serviceType' => 'Office Cleaning (recurring)',
      'provider' => [
        '@type' => 'LocalBusiness',
        'name' => $config['name'],
      ],
      'areaServed' => [
        '@type' => 'City',
        'name' => $config['serviceArea'],
      ],
      'offers' => [
        '@type' => 'Offer',
        'priceCurrency' => 'USD',
        'description' => '$0.11 – $0.20 per sq ft',
      ],
    ],
    [
      '@context' => 'https://schema.org',
      '@type' => 'Service',
      'serviceType' => 'Post-Construction Cleanup',
      'provider' => [
        '@type' => 'LocalBusiness',
        'name' => $config['name'],
      ],
      'areaServed' => [
        '@type' => 'City',
        'name' => $config['serviceArea'],
      ],
      'offers' => [
        '@type' => 'Offer',
        'priceCurrency' => 'USD',
        'description' => '$0.50 – $1.00 per sq ft',
      ],
    ],
    [
      '@context' => 'https://schema.org',
      '@type' => 'Service',
      'serviceType' => 'Full Disinfection Service',
      'provider' => [
        '@type' => 'LocalBusiness',
        'name' => $config['name'],
      ],
      'areaServed' => [
        '@type' => 'City',
        'name' => $config['serviceArea'],
      ],
      'offers' => [
        '@type' => 'Offer',
        'priceCurrency' => 'USD',
        'priceSpecification' => [
          '@type' => 'PriceSpecification',
          'minPrice' => 150,
          'maxPrice' => 400,
        ],
      ],
    ],
  ];
}

function renderSchema($schema) {
  return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

