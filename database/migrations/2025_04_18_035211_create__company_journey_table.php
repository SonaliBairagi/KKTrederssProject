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
        Schema::create('company_journey', function (Blueprint $table) {
            $table->id();
            $table->string('WhyChooseTitle');
            $table->string('WhyChooseDescription');
            $table->string('whyChooseImage')->nullable();

            $table->string('OurMission');
            $table->string('OurVision');

            $table->string('OurValuesTitle');
            $table->string('OurValuesDescription');
            $table->string('OurValuesImage')->nullable();

            $table->string('OurServicetitle1');
            $table->string('OurServiceDescription1');
            $table->string('OurServicetitle2');
            $table->string('OurServiceDescription2');
            $table->string('OurServicetitle3');
            $table->string('OurServiceDescription3');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_journey');
    }
};
