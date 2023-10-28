<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApplicationSetting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ApplicationSetting::create([
            'item_name' => 'HealthPulse',
            'item_short_name' => 'HealthPulse',
            'item_version' => '2.0',
            'company_name' => 'TeamKcat',
            'company_email' => 'support@fedr.in',
            'company_address' => 'Shillong, India',
            'developed_by' => 'TeamKcat',
            'developed_by_href' => 'https://raselmandol.com/',
            'developed_by_title' => 'Your hope our goal',
            'developed_by_prefix' => 'Developed by',
            'support_email' => 'support@fedr.in',
            'language' => 'en',
            'is_demo' => '0',
            'time_zone' => 'Asia/Kolkata',
        ]);
    }
}
