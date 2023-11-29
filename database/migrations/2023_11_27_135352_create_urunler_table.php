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
        Schema::create('urunler', function (Blueprint $table) {
            $table->id();
            $table->string('urun_adi');
            $table->string('fotograf1')->nullable();
            $table->string('fotograf2')->nullable();
            $table->string('fotograf3')->nullable();
            $table->string('fotograf4')->nullable();
            $table->string('baslik');
            $table->longText('aciklama');
            $table->integer('urunler_kategori_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urunler');
    }
};
