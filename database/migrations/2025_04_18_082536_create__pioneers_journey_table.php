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
        Schema::create('pioneers_journey', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('description1');
            $table->string('image1');
            $table->string('title2');
            $table->string('description2');
            $table->string('image2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pioneers_journey');
    }
};
