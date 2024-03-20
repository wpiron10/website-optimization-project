<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->decimal('promo', 8, 2)->nullable();
            $table->string('image');
            $table->string('tags');
            $table->string('status')->default('draft');
            $table->timestamps();
        });

        $currentTimestamp = now();

        DB::table('products')->insert([
            [
                'name' => 'Calabrese Broccoli',
                'price' => 20.00,
                'promo' => 13.00,
                'image' => 'products/broccoli-WOSs.webp',
                'tags' => "Vegetable",
                'status' => 'active',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Fresh Banana Fruites',
                'price' => 20.00,
                'promo' => 14.00,
                'image' => 'products/banana-UhWR.webp',
                'tags' => "Fresh",
                'status' => 'active',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'White Nuts',
                'price' => 20.00,
                'promo' => 15.00,
                'image' => 'products/white-nuts-a0o7.webp',
                'tags' => "Millets",
                'status' => 'active',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Vegan Red Tomato',
                'price' => 20.00,
                'promo' => 17.00,
                'image' => 'products/tomato-vv0d.webp',
                'tags' => "Vegetable",
                'status' => 'active',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Mung Bean',
                'price' => 20.00,
                'promo' => 11.00,
                'image' => 'products/mung-beans-PO8f.webp',
                'tags' => "Health",
                'status' => 'active',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Brown Hazelnut',
                'price' => 20.00,
                'promo' => 12.00,
                'image' => 'products/hazelnut-FpAN.webp',
                'tags' => "Nuts",
                'status' => 'active',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Eggs',
                'price' => 20.00,
                'promo' => 17.00,
                'image' => 'products/eggs-Kfei.webp',
                'tags' => "Fresh",
                'status' => 'active',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'name' => 'Zelco Suji Elaichi Rusk',
                'price' => 20.00,
                'promo' => 15.00,
                'image' => 'products/zelco-suji-elaichi-rusk-bglU.webp',
                'tags' => "Fresh",
                'status' => 'active',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
