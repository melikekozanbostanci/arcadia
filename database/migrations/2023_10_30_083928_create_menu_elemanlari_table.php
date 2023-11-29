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
        Schema::create('menu_elemanlari', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique(); // Menü elemanının uuid'sini belirtir
            $table->unsignedBigInteger('menu_id'); // Hangi menüye ait olduğunu belirtir
            $table->unsignedBigInteger('ust_id')->nullable(); // Menü elemanının hangi menü elemanının altında olduğunu belirtir
            $table->string('dil', 2)->default('tr');
            $table->string('baslik'); // Menü elemanının başlığını belirtir
            $table->string('link')->nullable(); // Menü elemanının linkini belirtir
            $table->string('icon')->nullable(); // Menü elemanının iconunu belirtir
            $table->integer('sira')->nullable(); // Menü elemanının sırasını belirtir

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('menu_id')->references('id')->on('menuler')->onDelete('cascade');
            $table->foreign('ust_id')->references('id')->on('menu_elemanlari')->onDelete('cascade');

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
        Schema::dropIfExists('menu_elemanlari');
    }
};
