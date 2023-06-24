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
        Schema::create('blogsum', function (Blueprint $table) {
            $table->id();
            $table->string('headtitle');
            $table->longText('content');
<<<<<<< HEAD
            $table->longText('imgtitle');
=======
            $table->string('imgtitle');
>>>>>>> 3ba2652f966f1b6dac9486bcedbd03b2f3f1a4ea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogsum');
    }
};
