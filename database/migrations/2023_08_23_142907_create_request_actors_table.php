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
        Schema::create('requestactors', function (Blueprint $table) {
            $table->id();
            $table->String('FirstName');
            $table->String('LastName');
            $table->String('Price');
            $table->foreignId('actors_id')->constrained('actors');
            $table->foreignId('users_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requestactors');
    }
};
