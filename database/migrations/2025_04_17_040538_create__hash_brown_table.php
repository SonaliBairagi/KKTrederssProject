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
        Schema::create('hash_brown', function (Blueprint $table) {
            $table->id();
            $table->string('Hproduct_no');
            $table->string('Hproduct_name');
            $table->text('Hproduct_description');
            $table->string('Hproduct_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_hash_brown');
    }
};
