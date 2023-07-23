<?php
/**
 * Facebook service.
 */

namespace LoginWithSocialMedia;

class Facebook implements ISocialMediaInterface {

  public static function createLogin(): string {
    // Facebook's integration code goes here.
    return 'facebook';
  }
}
