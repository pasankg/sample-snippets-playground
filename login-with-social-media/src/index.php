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
  echo $login->createLogin();
} catch (Exception $e) {
  echo('<pre> Error: ' . $e . '</pre>');
  return $e;
}

