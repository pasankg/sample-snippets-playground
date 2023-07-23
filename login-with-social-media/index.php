<?php
/**
 * Entry file to request a social login request.
 */

namespace App;
use App\src\SocialMediaFactory;
use Exception;

// Create autoloader.
require_once 'autoloader.php';
spl_autoload_register('autoloader');

// Try to create a login request.
try {
  $login = SocialMediaFactory::getLogin('facebook');
  $login->createLogin();
} catch (Exception $e) {
  print_r('<pre>'. 'Error: ' . $e .'</pre>');
}

