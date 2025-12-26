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
        Schema::create('posts_table2', function (Blueprint $table) {
            $table->id();
            $table->string('kasym');
            $table->string('ibrahim');
            $table->string('hamza');
            $table->string('umar');
            $table->string('yusuf');
            $table->string('bilal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts_table2');
    }
};
