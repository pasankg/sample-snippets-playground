<?php
/**
 * Google service.
 */

namespace LoginWithSocialMedia;

class Google implements ISocialMediaInterface {

  public static function createLogin(): string {
    // Google's integration code goes here.
    return 'google';
  }
}
