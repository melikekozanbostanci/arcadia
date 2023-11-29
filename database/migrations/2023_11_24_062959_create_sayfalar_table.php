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
        Schema::create('sayfalar', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('baslik');
            $table->string('slug')->unique();
            $table->string('simge')->nullable();
            $table->string('kisa_aciklama')->nullable();
            $table->text('icerik');
            $table->string('meta_baslik')->nullable();
            $table->text('meta_aciklama')->nullable();
            $table->text('meta_anahtar_kelimeler')->nullable();
            $table->string('fotograf')->nullable();
            $table->integer('sira')->default(0);
            $table->string('dil', 2)->default('tr');
            $table->boolean('aktif')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('kategori_id')->nullable();

            // Yabancı anahtar tanımlamalarını bu şekilde yapın:
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('CASCADE'); // DELETE işlemi CASCADE olarak tanımlandı
            $table->foreign('deleted_by')->references('id')->on('admins')->onDelete('CASCADE'); // DELETE işlemi CASCADE olarak tanımlandı
            $table->foreign('updated_by')->references('id')->on('admins')->onDelete('CASCADE'); // DELETE işlemi CASCADE olarak tanımlandı
            $table->foreign('kategori_id')->references('id')->on('sayfa_kategorileri');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('sayfalar');
    }
};
