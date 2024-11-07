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
        Schema::create('card_lists', function (Blueprint $table) {
            $table->id();
            $table->string('cardNo')->nullable();
            $table->string('category')->nullable();
            $table->string('pinNumber')->nullable();
            $table->string('linkUser')->nullable();
            $table->string('activeDate')->nullable();
            $table->string('expiredTime')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_lists');
    }
};
