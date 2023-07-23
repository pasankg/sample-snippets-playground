<?php
/**
 * This is Social Media Factory Generator.
 */

namespace LoginWithSocialMedia;

class SocialMediaFactory {

  const FACEBOOK = 'facebook';

  const GOOGLE = 'google';

  /**
   * Declaring private constructor to avoid instantiation.
   */
  private function __construct() {
  }

  /**
   * @param string $socialMedia
   *  Social media type.
   *
   * @return \LoginWithSocialMedia\Facebook|\LoginWithSocialMedia\Google
   *  Return Social media object.
   *
   * @throws \Exception Throw an error if not found.
   */
  public static function getLogin(string $socialMedia): Facebook|Google|\Exception {
    return match ($socialMedia) {
      static::FACEBOOK => new Facebook(),
      static::GOOGLE => new Google(),
      default => throw new \Exception('Invalid social media type: ' . $socialMedia),
    };
  }
}
