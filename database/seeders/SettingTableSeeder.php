<?php

namespace Database\Seeders;

use App\Models\Currency;
use App\Models\Customer;
use App\Models\Setting;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::Create([
            'name' => 'walk-in-customer',
            'email' => 'customer@infypos.com',
            'phone' => '123456789',
            'country' => 'pakistan',
            'city' => 'islamabad',
            'address' => 'Dr Deshmukh Marg , islamabad',
        ]);
        Warehouse::create([
            'name' => 'warehouse',
            'phone' => '123456789',
            'country' => 'pakistan',
            'city' => 'islamabad',
            'email' => 'warehouse1@gmail.com',
            'zip_code' => '12345',
        ]);

        Currency::create([
            'name' => ' Rupees',
            'code' => ' PKR',
            'symbol' => 'Rs',
        ]);
        $logoUrl = ('images/infycare-logo.png');

        if (! keyExist('currency')) {
            Setting::create(['key' => 'currency', 'value' => '1']);
        }

        if (! keyExist('email')) {
            Setting::create(['key' => 'email', 'value' => 'support@gmail.com']);
        }

        if (! keyExist('company_name')) {
            Setting::create(['key' => 'company_name', 'value' => 'POS']);
        }

        if (! keyExist('phone')) {
            Setting::create(['key' => 'phone', 'value' => '1234567890']);
        }

        if (! keyExist('developed')) {
            Setting::create(['key' => 'developed', 'value' => 'demo']);
        }

        if (! keyExist('footer')) {
            Setting::create([
                'key' => 'footer', 'value' => '2024 Developed by pos All rights reserved - v1.1.0',
            ]);
        }

        if (! keyExist('default_language')) {
            Setting::create(['key' => 'default_language', 'value' => '1']);
        }

        if (! keyExist('default_customer')) {
            Setting::create(['key' => 'default_customer', 'value' => '1']);
        }

        if (! keyExist('default_warehouse')) {
            Setting::create(['key' => 'default_warehouse', 'value' => '1']);
        }

        if (! keyExist('address')) {
            Setting::create([
                'key' => 'address', 'value' => 'E11/4 street 53, Islamabad, Pakistan.',
            ]);
        }

        if (! keyExist('stripe_key')) {
            Setting::create(['key' => 'stripe_key', 'value' => 'pu_test_yBzA1qI1PcfRBAVn1vJG2VuS00HcyhQX9LASERTFDDS']);
        }

        if (! keyExist('stripe_secret')) {
            Setting::create(['key' => 'stripe_secret',
                'value' => 'pu_test_yBzA1qI1PcfRBAVn1vJG2VuS00HcyhQX9LASERTFDDS',
            ]);
        }

        //sms configurations

        if (! keyExist('sms_gateway')) {
            Setting::create(['key' => 'sms_gateway', 'value' => '1']);
        }

        if (! keyExist('twillo_sid')) {
            Setting::create(['key' => 'twillo_sid', 'value' => 'asd']);
        }

        if (! keyExist('twillo_token')) {
            Setting::create(['key' => 'twillo_token', 'value' => 'asd']);
        }

        if (! keyExist('twillo_from')) {
            Setting::create(['key' => 'twillo_from', 'value' => 'asd']);
        }

        // smtm configurations

        if (! keyExist('smtp_host')) {
            Setting::create(['key' => 'smtp_host', 'value' => 'mailtrap.io']);
        }

        if (! keyExist('smtp_port')) {
            Setting::create(['key' => 'smtp_port', 'value' => '2525']);
        }

        if (! keyExist('smtp_username')) {
            Setting::create(['key' => 'smtp_username', 'value' => 'test']);
        }

        if (! keyExist('smtp_password')) {
            Setting::create(['key' => 'smtp_password', 'value' => 'test']);
        }

        if (! keyExist('smtp_Encryption')) {
            Setting::create(['key' => 'smtp_Encryption', 'value' => 'tls']);
        }

        if (! keyExist('logo')) {
            Setting::create(['key' => 'logo', 'value' => $logoUrl]);
        }
    }
}
