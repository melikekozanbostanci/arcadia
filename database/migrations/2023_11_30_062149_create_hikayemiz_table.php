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
        Schema::create('hikayemiz', function (Blueprint $table) {
            $table->id();
            $table->string('fotograf_ana');
            $table->string('baslik_teruar');
            $table->string('alt_baslik_teruar');
            $table->longText('aciklama_teruar_alan1');
            $table->string('fotograf_teruar_1');
            $table->string('baslik_teruar_alan2');
            $table->longText('aciklama_teruar_alan2_1');
            $table->longText('aciklama_teruar_alan2_2');
            $table->string('fotograf_teruar_2');

            $table->string('baslik_kurucu');
            $table->string('alt_baslik_kurucu');
            $table->longText('aciklama_kurucu_alan1');
            $table->string('fotograf_kurucu_1');
            $table->string('fotograf_kurucu_text_1');
            $table->string('fotograf_kurucu_2');
            $table->string('fotograf_kurucu_text_2');
            $table->string('fotograf_kurucu_3');
            $table->string('fotograf_kurucu_text_3');

            $table->string('baslik_bag');
            $table->string('alt_baslik_bag');
            $table->longText('aciklama_bag_alan1');
            $table->string('fotograf_bag_1');
            $table->string('baslik_bag_alan2_1');
            $table->string('baslik_bag_alan2_2');
            $table->longText('aciklama_bag_alan2_1');
            $table->longText('aciklama_bag_alan2_2');
            $table->string('fotograf_bag_2');
            $table->string('fotograf_bag_3');
            $table->string('fotograf_bag_4');
            $table->string('fotograf_bag_4_aciklama');
            $table->longText('aciklama_bag_alan3_1');
            $table->longText('aciklama_bag_alan3_2');
            $table->longText('aciklama_bag_alan3_3');
            $table->string('baslik_bag_alan3_1');
            $table->string('baslik_bag_alan3_2');

            $table->string('baslik_arcadia');
            $table->string('alt_baslik_arcadia');
            $table->longText('aciklama_arcadia_alan1');
            $table->string('fotograf_arcadia_1');
            $table->string('baslik_arcadia_alan2_1');
            $table->longText('aciklama_arcadia_alan2_1');
            $table->string('fotograf_arcadia_2');
            $table->string('fotograf_arcadia_3');
            $table->string('baslik_arcadia_alan3_1');
            $table->longText('aciklama_arcadia_alan3_1');
            $table->string('baslik_arcadia_alan4_1');
            $table->longText('aciklama_arcadia_alan4_1');
            $table->string('fotograf_arcadia_4');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hikayemiz');
    }
};
