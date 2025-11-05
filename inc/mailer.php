<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function loadEnv() {
  $envFile = __DIR__ . '/../.env';
  if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
      if (strpos(trim($line), '#') === 0) continue;
      list($key, $value) = explode('=', $line, 2);
      $_ENV[trim($key)] = trim($value);
    }
  }
}

function sendQuoteEmail($data) {
  loadEnv();
  
  $config = require __DIR__ . '/config.php';
  
  $mail = new PHPMailer(true);
  
  try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host = $_ENV['SMTP_HOST'] ?? 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['SMTP_USER'] ?? '';
    $mail->Password = $_ENV['SMTP_PASS'] ?? '';
    $mail->SMTPSecure = $_ENV['SMTP_SECURE'] ?? 'tls';
    $mail->Port = $_ENV['SMTP_PORT'] ?? 587;
    
    // Recipients
    $mail->setFrom($_ENV['MAIL_FROM'] ?? $config['email'], $config['name']);
    $mail->addAddress($_ENV['MAIL_TO'] ?? $config['email']);
    $mail->addReplyTo($data['email'], $data['fullName']);
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Quote Request from ' . htmlspecialchars($data['fullName']);
    
    $body = "
    <h2>New Quote Request</h2>
    <p><strong>Contact Information:</strong></p>
    <ul>
      <li>Name: " . htmlspecialchars($data['fullName']) . "</li>
      <li>Email: " . htmlspecialchars($data['email']) . "</li>
      <li>Phone: " . htmlspecialchars($data['phone']) . "</li>
    </ul>
    <p><strong>Property Details:</strong></p>
    <ul>
      <li>Address: " . htmlspecialchars($data['address']) . ", " . htmlspecialchars($data['city']) . ", " . htmlspecialchars($data['zip']) . "</li>
      <li>Property Type: " . htmlspecialchars($data['propertyType']) . "</li>
      <li>Square Footage: " . htmlspecialchars($data['squareFootage']) . "</li>
    </ul>
    <p><strong>Service Details:</strong></p>
    <ul>
      <li>Services Needed: " . htmlspecialchars($data['serviceType']) . "</li>
      <li>Frequency: " . htmlspecialchars($data['frequency']) . "</li>
    </ul>
    " . (!empty($data['message']) ? "<p><strong>Additional Message:</strong><br>" . nl2br(htmlspecialchars($data['message'])) . "</p>" : "") . "
    ";
    
    $mail->Body = $body;
    $mail->AltBody = strip_tags($body);
    
    $mail->send();
    return ['success' => true, 'message' => 'Email sent successfully'];
  } catch (Exception $e) {
    return ['success' => false, 'message' => 'Mailer Error: ' . $mail->ErrorInfo];
  }
}

