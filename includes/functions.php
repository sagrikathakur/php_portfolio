<?php
/**
 * Helper Functions
 * Reusable functions for your project
 */

/**
 * Sanitize user input
 * @param string $data
 * @return string
 */
function sanitize($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

/**
 * Redirect to a URL
 * @param string $url
 */
function redirect($url)
{
  header("Location: $url");
  exit();
}

/**
 * Check if user is logged in
 * @return bool
 */
function isLoggedIn()
{
  return isset($_SESSION['user_id']);
}

/**
 * Display flash message
 * @param string $type - success, error, warning, info
 * @param string $message
 */
function setFlashMessage($type, $message)
{
  $_SESSION['flash'] = [
    'type' => $type,
    'message' => $message
  ];
}

/**
 * Get and clear flash message
 * @return array|null
 */
function getFlashMessage()
{
  if (isset($_SESSION['flash'])) {
    $flash = $_SESSION['flash'];
    unset($_SESSION['flash']);
    return $flash;
  }
  return null;
}

/**
 * Format date
 * @param string $date
 * @param string $format
 * @return string
 */
function formatDate($date, $format = 'd M Y')
{
  return date($format, strtotime($date));
}

/**
 * Generate a random string
 * @param int $length
 * @return string
 */
function generateRandomString($length = 10)
{
  return bin2hex(random_bytes($length / 2));
}
?>