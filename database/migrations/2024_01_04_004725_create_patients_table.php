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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('document')->unique();
            $table->boolean('smoker')->default(false);
            $table->boolean('allergies')->default(false);
            $table->boolean('diabetic')->default(false);
            $table->boolean('high_pressure')->default(false);
            $table->boolean('dsts')->default(false);
            $table->longText('more_information')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
