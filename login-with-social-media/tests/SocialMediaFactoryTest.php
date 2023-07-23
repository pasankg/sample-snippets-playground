<?php

use LoginWithSocialMedia\Facebook;
use LoginWithSocialMedia\Google;
use LoginWithSocialMedia\SocialMediaFactory;
use PHPUnit\Framework\TestCase;

final class SocialMediaFactoryTest extends TestCase {

  /**
   * Tests to validate SocialMediaFactory factory creation and
   * login creation method of each social media service.
   */
  public function testGetLogin() {
    $facebook = SocialMediaFactory::getLogin('facebook');
    $this->assertInstanceOf(Facebook::class, $facebook, 'Facebook instance creation passed');
    $this->assertEquals(SocialMediaFactory::FACEBOOK, $facebook->createLogin(), 'Facebook service passed');

    $google = SocialMediaFactory::getLogin('google');
    $this->assertInstanceOf(Google::class, $google, 'Google instance creation passed');
    $this->assertEquals(SocialMediaFactory::GOOGLE, $google->createLogin(), 'Google service passed');

    try {
      SocialMediaFactory::getLogin('something-else');
    } catch (Exception $e) {
      $this->assertInstanceOf(Exception::class, $e, 'Invalid service check Passed');
    }
  }
}
