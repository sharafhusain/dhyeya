<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('siteSetting.header_logo_en',"logo");
        $this->migrator->add('siteSetting.header_logo_hi',"logo");

        $this->migrator->add('siteSetting.footer_logo_en',"logo");
        $this->migrator->add('siteSetting.footer_logo_hi',"logo");

        $this->migrator->add('siteSetting.address_en',"635, Ground Floor, Main Road, Dr. Mukherjee Nagar, Delhi 110009");
        $this->migrator->add('siteSetting.address_hi',"635, Ground Floor, Main Road, Dr. Mukherjee Nagar, Delhi 110009");

        $this->migrator->add('siteSetting.sidebar_img_en',"logo");
        $this->migrator->add('siteSetting.sidebar_img_hi',"logo");

        $this->migrator->add('siteSetting.mobile_no',"9205274741");
    }
};
