<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $setting = new Setting();

            $keys = [
            'show_note' => 1,
            'show_phone' => 1,
            'show_customer' => 1,
            'show_address' => 1,
            'show_email' => 1,
            'show_warehouse' => 1,
            'show_tax_discount_shipping' => 1,
            'show_barcode_in_receipt' => 1,
            'notes' => 'Thanks for order',
            ];

            foreach ($keys as $key => $value) {
                $setting = new Setting();
                $setting->key = $key;
                $setting->value = $value;
                $setting->save();
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
};
