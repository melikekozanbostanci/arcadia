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
        Schema::create('teruar', function (Blueprint $table) {
            $table->id();
            $table->string('baslik');
            $table->string('alt_baslik');
            $table->string('fotograf_ana');
            $table->string('fotograf_1');
            $table->string('fotograf_2');
            $table->string('fotograf_3');
            $table->string('fotograf_4');
            $table->longText('aciklama');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teruar');
    }
};
