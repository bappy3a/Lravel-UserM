<?php

use App\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'app_name' => 'Farazisoft',
            'app_title' => 'Elegant',
            'app_email' => 'support@farazisoft.com',
            'phone' => '01745666',
            'mobile' => '01745519614',
            'currency' => '$',
            'remember_me' => 'ON',
            'forget_password' => 'ON',
            'notify_signup' => 'OFF',
            're_capcha' => 'OFF',
			'logo' => 'logo.png',			
            'address' => 'Amtali,Barguna'
        ]);
    }
}
