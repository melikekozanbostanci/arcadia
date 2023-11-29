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
        Schema::create('sablonlar', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();

            $table->longText('sablon')->nullable();
            $table->string('baslik');
            $table->string('slug');
            $table->string('fotograf')->nullable();
            $table->string("short_code")->nullable();

            $table->timestamps();
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
        Schema::dropIfExists('sablonlar');
    }
};
