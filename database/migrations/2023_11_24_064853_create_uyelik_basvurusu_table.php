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
        Schema::create('uyelik_basvurusu', function (Blueprint $table) {
            $table->id();
            $table->string('faaliyet_alani');
            $table->string('ticari_unvan');
            $table->string('tapdk_belge_no');
            $table->string('ad');
            $table->string('soyad');
            $table->string('dogum_tarihi');
            $table->string('telefon');
            $table->string('eposta');
            $table->string('adres');
            $table->string('il');
            $table->string('ilce');
            $table->string('ekler') ->nullable();
            $table->string('sifre')->nullable();
            $table->boolean('onay')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uyelik_basvurusu');
    }
};
