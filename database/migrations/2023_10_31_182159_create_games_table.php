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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('gameID');
            $table->string('gameType');
            $table->string('gameName');
            $table->string('gamePhoto');
            $table->string('gameThumbnail');
            $table->string('gameLogo');
            $table->string('gameRentPath');
            $table->string('gameInfoPath');
            $table->string('gamePrice');
            $table->string('slide_on' , 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
