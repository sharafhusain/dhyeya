<?php

namespace App\Http\Controllers;

use App\Settings\SiteSetting;
use App\Settings\SocialMediaSettings;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class SettingController extends Controller
{
    use HasImageUploading;
    public function index(SocialMediaSettings $socialMediaSettingssettings, SiteSetting $siteSetting){
        $title = 'Settings';
        return view('settings.index', compact('title', 'socialMediaSettingssettings',"siteSetting"));
    }

    public function update_social_media(Request $request, SocialMediaSettings $settings){
        $settings->facebook_link = $request->facebook_link;
        $settings->twitter_link = $request->twitter_link;
        $settings->youtube_link = $request->youtube_link;
        $settings->telegram_link = $request->telegram_link;
        $settings->instagram_link = $request->instagram_link;
        $settings->app_link = $request->app_link;
        $settings->save();
        return redirect()->back()->with("status","Data have been saved Successfully")->with("tab","social-media");
    }
    public function update_side_settings(Request $request, SiteSetting $settings){

        $en_logo = $request->file("header_logo_en");
        $hi_logo = $request->file("header_logo_hi");
        $en_logo_footer = $request->file("footer_logo_en");
        $hi_logo_footer = $request->file("footer_logo_hi");
        $address_en = $request->address_en;
        $address_hi = $request->address_hi;
        $mobile_no =  $request->mobile_no;

        if ($address_en == null || $address_hi == null || $mobile_no == null){
            return back()->withErrors("Empty Fields");
        }



        if ($en_logo != Null){
            $en_file_extention = $en_logo->extension();
            $this->deleteImage($settings->header_logo_en);
            $filename_en = $this->uploadImageSeeder($en_logo,"en_logo.".$en_file_extention);
            $settings->header_logo_en = $filename_en;

        }

        if ($hi_logo != Null){
            $hi_file_extention = $hi_logo->extension();
            $this->deleteImage($settings->header_logo_hi);
            $filename_hi = $this->uploadImageSeeder($hi_logo,"hi_logo.".$hi_file_extention);
            $settings->header_logo_hi = $filename_hi;
        }


//        FOOTER
        if ($en_logo_footer != Null){
            $en_logo_footer_extention = $en_logo_footer->extension();
            $this->deleteImage($settings->footer_logo_en);
            $filename_en_footer = $this->uploadImageSeeder($en_logo_footer,"en_logo_footer.".$en_logo_footer_extention);
            $settings->footer_logo_en = $filename_en_footer;

        }

        if ($hi_logo_footer != Null){
            $hi_logo_footer_footer_extention = $hi_logo_footer->extension();
            $this->deleteImage($settings->footer_logo_hi);
            $filename_hi_footer = $this->uploadImageSeeder($hi_logo_footer,"hi_logo_footer.".$hi_logo_footer_footer_extention);
            $settings->footer_logo_hi = $filename_hi_footer;
        }
        $settings->address_en = $address_en;
        $settings->address_hi = $address_hi;
        $settings->mobile_no = $mobile_no;

//        $settings->footer_logo_en = $request->footer_logo_en;
//        $settings->footer_logo_hi = $request->footer_logo_hi;
//        $settings->sidebar_img_en = $request->sidebar_img_en;
//        $settings->sidebar_img_hi = $request->sidebar_img_hi;

        $settings->save();
        return redirect()->back()->with("status","Data have been saved Successfully")->with("tab","side-settings");
    }
}
