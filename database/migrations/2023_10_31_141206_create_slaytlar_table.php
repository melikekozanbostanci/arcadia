<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('slaytlar', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('fotograf'); // Fotoğrafın dosya adını saklamak için bir sütun
            $table->string('baslik')->nullable();
            $table->text('metin')->nullable();
            $table->string('buton_metni')->nullable();
            $table->string('buton_linki')->nullable();
            $table->string('dil')->nullable();
            $table->date('gosterim_basla')->nullable();
            $table->date('gosterim_bitis')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

            // Yabancı anahtar tanımlamalarını bu şekilde yapın:
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('CASCADE'); // DELETE işlemi CASCADE olarak tanımlandı
            $table->foreign('deleted_by')->references('id')->on('admins')->onDelete('CASCADE'); // DELETE işlemi CASCADE olarak tanımlandı
            $table->foreign('updated_by')->references('id')->on('admins')->onDelete('CASCADE'); // DELETE işlemi CASCADE olarak tanımlandı
        });
    }

    public function down()
    {
        Schema::dropIfExists('slaytlar');
    }
};
