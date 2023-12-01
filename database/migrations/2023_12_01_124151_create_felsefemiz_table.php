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
        Schema::create('felsefemiz', function (Blueprint $table) {
            $table->id();
            $table->string('fotograf_ana');
            $table->string('baslik_surdurebilirlik');
            $table->string('alt_baslik_surdurebilirlik');
            $table->longText('aciklama_surdurebilirlik_alan1');
            $table->string('fotograf_surdurebilirlik_1');
            $table->string('baslik_surdurebilirlik_2');
            $table->longText('aciklama_surdurebilirlik_alan2');
            $table->string('fotograf_surdurebilirlik_2');
            $table->string('fotograf_surdurebilirlik_3');
            $table->string('fotograf_surdurebilirlik_4');
            $table->string('fotograf_surdurebilirlik_5');
            $table->string('baslik_surdurebilirlik_3');
            $table->longText('aciklama_surdurebilirlik_alan3');
            $table->string('baslik_surdurebilirlik_4');
            $table->longText('aciklama_surdurebilirlik_alan4');
            $table->string('baslik_surdurebilirlik_5');
            $table->longText('aciklama_surdurebilirlik_alan5');
            $table->string('fotograf_surdurebilirlik_6');
            $table->string('baslik_fauna');
            $table->string('alt_baslik_fauna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('felsefemiz');
    }
};
