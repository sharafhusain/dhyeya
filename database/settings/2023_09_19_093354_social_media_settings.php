<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('socialMediaSettings.app_link',"https://www.facebook.com/Dhyeya1/");
        $this->migrator->add('socialMediaSettings.facebook_link',"https://www.facebook.com/Dhyeya1/");
        $this->migrator->add('socialMediaSettings.twitter_link',"https://twitter.com/dhyeya_ias");
        $this->migrator->add('socialMediaSettings.instagram_link',"https://www.instagram.com/dhyeya_ias/");
        $this->migrator->add('socialMediaSettings.youtube_link',"https://www.youtube.com/channel/UCMXdi-xFPcZV2tDXlHuZHgw");
        $this->migrator->add('socialMediaSettings.telegram_link',"https://www.dhyeyaias.com/sites/default/files/telegram.png");
    }

};
