<?php
header('Content-Type: application/json');

require_once __DIR__ . '/../inc/config.php';
require_once __DIR__ . '/../inc/csrf.php';
require_once __DIR__ . '/../inc/mailer.php';

session_start();

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['success' => false, 'message' => 'Method not allowed']);
  exit;
}

// CSRF verification
if (!isset($_POST['csrf_token']) || !verifyCSRFToken($_POST['csrf_token'])) {
  http_response_code(403);
  echo json_encode(['success' => false, 'message' => 'Invalid security token']);
  exit;
}

// Honeypot check
if (!empty($_POST['website'])) {
  http_response_code(403);
  echo json_encode(['success' => false, 'message' => 'Spam detected']);
  exit;
}

// Timing check (basic spam mitigation - form should take at least 2 seconds)
$formStartTime = $_SESSION['form_start_time'] ?? 0;
if ($formStartTime > 0 && (time() - $formStartTime) < 2) {
  http_response_code(403);
  echo json_encode(['success' => false, 'message' => 'Please take your time filling out the form']);
  exit;
}

// Validation
$errors = [];

$fullName = trim($_POST['fullName'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$propertyType = $_POST['propertyType'] ?? '';
$address = trim($_POST['address'] ?? '');
$city = trim($_POST['city'] ?? '');
$zip = trim($_POST['zip'] ?? '');
$squareFootage = trim($_POST['squareFootage'] ?? '');
$frequency = $_POST['frequency'] ?? '';
$serviceType = trim($_POST['serviceType'] ?? '');
$message = trim($_POST['message'] ?? '');

if (empty($fullName) || strlen($fullName) < 2) {
  $errors[] = 'Full name is required and must be at least 2 characters';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'Valid email is required';
}

if (empty($phone) || strlen($phone) < 10) {
  $errors[] = 'Valid phone number is required';
}

if (empty($propertyType) || !in_array($propertyType, ['residential', 'commercial'])) {
  $errors[] = 'Property type is required';
}

if (empty($address) || strlen($address) < 5) {
  $errors[] = 'Address is required';
}

if (empty($city) || strlen($city) < 2) {
  $errors[] = 'City is required';
}

if (empty($zip) || strlen($zip) < 5) {
  $errors[] = 'ZIP code is required';
}

if (empty($squareFootage) || !is_numeric($squareFootage)) {
  $errors[] = 'Square footage is required and must be a number';
}

if (empty($frequency) || !in_array($frequency, ['one-time', 'weekly', 'bi-weekly', 'monthly'])) {
  $errors[] = 'Frequency is required';
}

if (empty($serviceType)) {
  $errors[] = 'Service type is required';
}

if (!empty($errors)) {
  http_response_code(400);
  echo json_encode(['success' => false, 'message' => implode('. ', $errors)]);
  exit;
}

// Prepare email data
$emailData = [
  'fullName' => $fullName,
  'email' => $email,
  'phone' => $phone,
  'propertyType' => $propertyType,
  'address' => $address,
  'city' => $city,
  'zip' => $zip,
  'squareFootage' => $squareFootage,
  'frequency' => $frequency,
  'serviceType' => $serviceType,
  'message' => $message,
];

// Send email
$result = sendQuoteEmail($emailData);

if ($result['success']) {
  echo json_encode(['success' => true, 'message' => 'Thank you! We\'ll contact you within 24 hours.']);
} else {
  http_response_code(500);
  echo json_encode(['success' => false, 'message' => $result['message'] ?? 'Failed to send email. Please try again or call us directly.']);
}

