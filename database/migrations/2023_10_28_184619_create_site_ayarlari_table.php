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
        Schema::create('site_ayarlari', function (Blueprint $table) {
            $table->id();
            $table->string('site_adi');
            $table->string('site_baslik');
            $table->string('site_aciklama')->nullable();
            $table->string('site_anahtar_kelimeler')->nullable();
            $table->string('site_beyaz_logo')->nullable();
            $table->string('site_siyah_logo')->nullable();
            $table->string('site_favicon')->nullable();
            $table->string('site_telefon')->nullable();
            $table->string('site_eposta')->nullable();
            $table->string('site_adres')->nullable();
            $table->string('site_facebook')->nullable();
            $table->string('site_twitter')->nullable();
            $table->string('site_instagram')->nullable();
            $table->string('site_youtube')->nullable();
            $table->longText('site_google_harita')->nullable();
            $table->string('site_google_analytics')->nullable();

            $table->string('fotograf_ana');
            $table->string('fotograf_ana_baslik');
            $table->string('baslik_1');
            $table->string('alt_baslik_1');
            $table->longText('aciklama_1');
            $table->string('fotograf_1');
            $table->string('fotograf_yazi_1');
            $table->string('fotograf_yazi_2');
            $table->string('baslik_2');
            $table->string('alt_baslik_2');
            $table->longText('aciklama_2_1');
            $table->longText('aciklama_2_2');
            $table->string('fotograf_2');
            $table->longText('fotograf_3');
            $table->string('baslik_3');
            $table->string('alt_baslik_3');
            $table->longText('aciklama_3');
            $table->string('fotograf_4');
            $table->string('fotograf_5');
            $table->string('fotograf_6');
            $table->string('fotograf_7');
            $table->string('fotograf_8');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_ayarlari');
    }
};
