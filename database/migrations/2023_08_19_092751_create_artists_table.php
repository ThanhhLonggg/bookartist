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
        Schema::create('artists', function (Blueprint $t) {
            $t->id();
            $t->String('Name');
            $t->String('Product');
            $t->String('Img');
            $t->String('Sex');
            $t->String('BirthDate');
            $t->String('Description');
            $t->String('Price');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
