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
        Schema::create('basindan', function (Blueprint $table) {
            $table->id();
            $table->string('baslik');
            $table->string('alt_baslik');
            $table->longText('aciklama');
            $table->string('fotograf_ana');
            $table->string('fotograf1');
            $table->string('fotograf2');
            $table->string('fotograf3');
            $table->string('fotograf4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basindan');
    }
};
