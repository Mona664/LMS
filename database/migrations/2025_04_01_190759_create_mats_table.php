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
        Schema::create('mats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('hours_count')->default('0');
            $table->string('description')->nullable();
            $table->integer('year')->default('1');
            $table->bigInteger('faculty_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mats');
    }
};
