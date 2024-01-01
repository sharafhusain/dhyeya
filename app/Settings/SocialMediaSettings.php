<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SocialMediaSettings extends Settings
{
    public string $facebook_link;
    public string $twitter_link;
    public string $youtube_link;
    public string $telegram_link;
    public string $app_link;
    public string $instagram_link;

    public static function group(): string
    {
        return 'socialMediaSettings';
    }
}
