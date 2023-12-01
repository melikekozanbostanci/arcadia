<?php

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
        Schema::create('arcadia_baglari', function (Blueprint $table) {
            $table->id();
            $table->string('fotograf_ana');
            $table->string('baslik_arcadia');
            $table->string('alt_baslik_arcadia');
            $table->longText('aciklama_arcadia_alan1');
            $table->string('fotograf_arcadia_1');
            $table->string('baslik_arcadia_alan2_1');
            $table->longText('aciklama_arcadia_alan2_1');
            $table->longText('aciklama_arcadia_alan2_2');
            $table->string('baslik_arcadia_alan3_1');
            $table->longText('aciklama_arcadia_alan3_1');
            $table->string('fotograf_arcadia_2');


            $table->string('baslik_uzum');
            $table->string('alt_baslik_uzum');
            $table->longText('aciklama_uzum_alan1');
            $table->string('fotograf_uzum_1');
            $table->longText('fotograf_uzum_1_aciklama');
            $table->longText('fotograf_uzum_1_aciklama2');
            $table->longText('aciklama_uzum_alan2');
            $table->string('fotograf_uzum_2');
            $table->string('fotograf_uzum_3');

            $table->string('baslik_bag');
            $table->string('alt_baslik_bag');
            $table->string('fotograf_bag');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arcadia_baglari');
    }
};
