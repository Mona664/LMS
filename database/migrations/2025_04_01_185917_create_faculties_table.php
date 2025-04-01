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
        Schema::create('faculties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('studies_year')->default('0'); // الكلية كم سنة
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->integer('hours_count')->default('0');
            $table->string('description')->nullable();
            $table->integer('mat_counts')->default('0');

            $table->bigInteger('location_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
