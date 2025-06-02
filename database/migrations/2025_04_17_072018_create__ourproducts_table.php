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
        Schema::create('ourproducts', function (Blueprint $table) {
            $table->id();
            $table->string('Oproduct_no');
            $table->string('Oproduct_name');
            $table->text('Oproduct_description');
            $table->string('Oproduct_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ourproducts');
    }
};
