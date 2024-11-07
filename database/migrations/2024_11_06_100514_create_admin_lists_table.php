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
        Schema::create('admin_lists', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('adminType')->nullable();
            $table->string('adminRule')->nullable();
            $table->string('userId')->nullable();
            $table->string('password')->nullable();
            $table->string('status')->nullable();
            $table->string('divisionCode')->nullable();
            $table->string('districtCode')->nullable();
            $table->string('thanaCode')->nullable();
            $table->string('upCode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_lists');
    }
};
