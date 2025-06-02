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
        Schema::create('baked_snacks', function (Blueprint $table) {
            $table->id();
            $table->string('BSproduct_no');
            $table->string('BSproduct_name');
            $table->text('BSproduct_description');
            $table->string('BSproduct_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baked_snacks');
    }
};
