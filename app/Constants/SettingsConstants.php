<?php

namespace App\Constants;

class SettingsConstants
{

    /**
     * @return array
     */
    public function contacts(): array
    {
        return [
            ['name' => 'address', 'value' => SettingsConstants::ADDRESS, 'section' => 'contacts'],
            ['name' => 'phone', 'value' => SettingsConstants::PHONE, 'section' => 'contacts'],
            ['name' => 'email', 'value' => SettingsConstants::EMAIL, 'section' => 'contacts'],
            ['name' => 'web_site', 'value' => SettingsConstants::WEB_SITE, 'section' => 'contacts'],
        ];
    }
    const ADDRESS = 'address name';
    const EMAIL = 'yourmail@email.com';
    const PHONE = '+998971234567';
    const WEB_SITE = 'domain.com';

    /**
     * @return array
     */
    public function social(): array
    {
        return [
            ['name' => 'facebook', 'value' => SettingsConstants::FACEBOOK, 'section' => 'social'],
            ['name' => 'twitter', 'value' => SettingsConstants::TWITTER, 'section' => 'social'],
            ['name' => 'instagram', 'value' => SettingsConstants::INSTAGRAM, 'section' => 'social'],
            ['name' => 'telegram', 'value' => SettingsConstants::TELEGRAM, 'section' => 'social'],
        ];
    }
    const FACEBOOK = 'https://facebook.com/';
    const TWITTER = 'https://twitter.com/';
    const INSTAGRAM = 'https://instagram.com';
    const TELEGRAM = 'https://telegram.org';

    const CERTIFIED_TEACHERS_NUMBER = 18;
    const SUCCESSFUL_KIDS = 351;
    const HAPPY_PARENTS = 564;
    const AWARDS_WON = 300;
    /**
     * @return array
     */
    public function experience(): array
    {
        return [
            ['name' => 'certified', 'value' => SettingsConstants::CERTIFIED_TEACHERS_NUMBER, 'section' => 'experience'],
            ['name' => 'successful', 'value' => SettingsConstants::SUCCESSFUL_KIDS, 'section' => 'experience'],
            ['name' => 'happy', 'value' => SettingsConstants::HAPPY_PARENTS, 'section' => 'experience'],
            ['name' => 'awards', 'value' => SettingsConstants::AWARDS_WON, 'section' => 'experience'],
        ];
    }
}
