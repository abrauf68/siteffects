<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use App\Models\EmailSetting;
use App\Models\OtherSetting;
use App\Models\RecaptchaSetting;
use App\Models\SystemSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanySetting::create([
            'company_name' => 'Siteffect Solutions',
            'email' => 'siteffectsolutions@gmail.com',
            'phone_number' => '+92 310 3792073',
            'country' => 'Pakistan',
            'city' => 'Karachi',
            'zip' => '75850',
            'address' => 'Sector 11 E North Karachi 75850, Karachi',
            'facebook' => 'https://www.facebook.com/siteffects',
            'instagram' => 'https://www.instagram.com/siteffects',
            'linkedin' => 'https://www.linkedin.com/in/siteffects',
            'twitter' => 'https://x.com/Siteffects1',
            'tiktok' => 'https://www.tiktok.com/@siteffects',
        ]);

        RecaptchaSetting::create([
            'google_recaptcha_type' => 'no_captcha',
        ]);

        SystemSetting::create([
            'max_upload_size' => '2048',
            'currency_symbol' => '$',
            'currency_symbol_position' => 'prefix',
            'footer_text' => 'All Copyrights Reserved',
            'sidebar_text' => 'We build personalized customer journeys and digital experiences that improve user engagement, customer satisfaction, and brand loyalty.',
        ]);

        EmailSetting::create([
            'mail_driver' => 'smtp',
            'mail_host' => 'smtp.mailtrap.io',
            'mail_port' => '2525',
            'mail_username' => '725adb089beee5',
            'mail_password' => 'b63984536f3df4',
            'mail_encryption' => 'tls',
            'mail_from_address' => 'admin@example.com',
            'mail_from_name' => 'Admin',
            'is_enabled' => '1',
        ]);
    }
}
