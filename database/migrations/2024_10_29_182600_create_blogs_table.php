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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('cover_url');
            $table->string('cover_url_large')->nullable();
            $table->text('keywords')->nullable();
            $table->string('creator')->nullable();
            $table->string('creator_image')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps(); // This will add both `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
