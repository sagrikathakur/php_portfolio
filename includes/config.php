<?php
/**
 * Configuration File
 * Store your project settings here
 */

// Site Settings
define('SITE_NAME', 'My PHP Project');
define('SITE_URL', 'http://localhost/my-php/projectphp');

// Database Configuration (update when needed)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'projectphp_db');

// Error Reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Timezone
date_default_timezone_set('Asia/Kolkata');

// Session Start
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>