<?php

namespace App\Providers;

use App\Models\BatchDetail;
use App\Models\Category;
use App\Settings\SiteSetting;
use App\Settings\SocialMediaSettings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Schema::defaultStringLength(191);
        if (Schema::hasTable('batch_details')) {
            View::share('batchimgs', BatchDetail::where("status", "active")->orderBy("id", "desc")->limit(10)->get()->pluck("image"));
        }

        if (Schema::hasTable('settings')) {
            $settings = app(SiteSetting::class);
            $mobilenumber = $settings->mobile_no;

            if (app()->getLocale() == "en") {
                $logo = $settings->header_logo_en;
                $logo_footer = $settings->footer_logo_en;
                $address = $settings->address_en;
            } else {
                $logo = $settings->header_logo_hi;
                $logo_footer = $settings->footer_logo_hi;
                $address = $settings->address_hi;
            }

            View::share('logo', $logo);
            View::share('logo_footer', $logo_footer);
            View::share('address', $address);
            View::share('mobilenumber', $mobilenumber);
            View::share('social_media_links', app(SocialMediaSettings::class));
        }

        if (Schema::hasTable('categories')) {
            View::share('primary_download_cat_slug', Category::where("category_type", "download")->where("category_id", null)->get());
            View::share('download_section_categories', Category::where("category_type", "download")->where("level", 1)->get());
        }
    }
}
