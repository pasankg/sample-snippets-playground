<?php
/**
 * Entry file to request a social login request.
 */

namespace LoginWithSocialMedia;
use Exception;
require '../vendor/autoload.php';

// Try to create a login request.
try {
  $login = SocialMediaFactory::getLogin('facebook');
  $login->createLogin();
} catch (Exception $e) {
  print_r('<pre> Error: ' . $e .'</pre>');
}

