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
        Schema::create('user_lists', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('userCategory')->nullable();
            $table->string('mobile')->nullable();
            $table->string('cardNo')->nullable();
            $table->string('pinNumber')->nullable();
            $table->string('activeBy')->nullable();
            $table->string('email')->nullable();
            $table->string('dob')->nullable();
            $table->string('blGroup')->nullable();
            $table->string('address')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_lists');
    }
};
