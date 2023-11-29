<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menuler', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique(); // Menü elemanının uuid'sini belirtir
            $table->string('konum'); // Menü elemanının başlığını belirtir
            $table->string('baslik'); // Menü elemanının başlığını belirtir
            $table->string('slug')->unique(); // Menü elemanının slugını belirtir
            $table->string('dil', 2)->default('tr');
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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menuler');
    }
};
