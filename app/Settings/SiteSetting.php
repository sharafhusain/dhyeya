<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteSetting extends Settings
{
    public string $header_logo_en;
    public string $header_logo_hi;
    public string $footer_logo_en;
    public string $footer_logo_hi;
    public string $address_en;
    public string $address_hi;
    public string $sidebar_img_en;
    public string $sidebar_img_hi;
    public string $mobile_no;

    public static function group(): string
    {
        return 'siteSetting';
    }
}
