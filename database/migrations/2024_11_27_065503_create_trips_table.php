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
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->string('firebase_user_id'); // Firebase user ID (ownerId)
            $table->string('trip_id')->unique(); // Unique trip ID from Google protobuf data
            $table->string('title')->nullable(); // Title of the trip
            $table->text('img_url')->nullable(); // Image URL for the trip
            $table->date('travel_date')->nullable(); // Start date of the trip
            $table->integer('days')->nullable(); // Number of days for the trip
            $table->string('budget_type')->nullable(); // Budget type
            $table->string('group_type')->nullable(); // Group type
            $table->json('destination_meta')->nullable(); // JSON object for destination details
            $table->json('plan_request')->nullable(); // JSON object for trip plans
            $table->timestamps(); // Created at and Updated at timestamps

            // Indexes
            $table->index('firebase_user_id'); // Index for Firebase user ID
            $table->index('travel_date'); // Index for travel date
            $table->index('budget_type'); // Index for budget type
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
