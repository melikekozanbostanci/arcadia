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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->string('hesap_turu')->nullable();
            $table->string('sirket_adi')->nullable();
            $table->string('vergi_dairesi')->nullable();
            $table->string('vergi_numarasi')->nullable();
            $table->unsignedBigInteger('il_id')->nullable();
            $table->unsignedBigInteger('ilce_id')->nullable();
            $table->string('mahalle')->nullable();
            $table->text('adres')->nullable();
            $table->string('uyruk')->nullable();
            $table->string('cinsiyet')->nullable();
            $table->string('ad')->nullable();
            $table->string('soyad')->nullable();
            $table->date('dogum_tarihi')->nullable();
            $table->string('deneyim')->nullable();
            $table->string('telefon')->nullable();
            $table->string('eposta')->nullable();
            $table->boolean('iletisim_izin')->default(false);
            $table->boolean('kisisel_veri_izin')->default(false);
            $table->string('profil_fotografi')->nullable();
            $table->string('kimlik_fotokopisi')->nullable();
            $table->string('uye_tip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
