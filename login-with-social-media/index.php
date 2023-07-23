<?php
/**
 * Entry file to request a social login request.
 */

namespace App;

use LoginWithSocialMedia\SocialMediaFactory;
use Exception;

// Create autoloader.
require_once 'autoloader.php';
spl_autoload_register('autoloader');

// Try to create a login request.
try {
  $login = SocialMediaFactory::getLogin('facebook');
  echo $login->createLogin();
} catch (Exception $e) {
  echo('<pre> Error: ' . $e . '</pre>');
  return $e;
}

