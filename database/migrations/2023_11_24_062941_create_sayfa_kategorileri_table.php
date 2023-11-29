<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sayfa_kategorileri', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('kategori_adi');
            $table->string('slug')->unique();
            $table->string("dil", 2)->default("tr");
            $table->integer('ust_id')->default(0);
            $table->boolean('aktif')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

            // Yabancı anahtar tanımlamalarını CASCADE ile yapın:
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('CASCADE'); // DELETE işlemi CASCADE olarak tanımlandı
            $table->foreign('deleted_by')->references('id')->on('admins')->onDelete('CASCADE'); // DELETE işlemi CASCADE olarak tanımlandı
            $table->foreign('updated_by')->references('id')->on('admins')->onDelete('CASCADE'); // DELETE işlemi CASCADE olarak tanımlandı

        });
    }

    public function down()
    {
        Schema::dropIfExists('sayfa_kategorileri');
    }
};
