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
        Schema::create('ai_models', function (Blueprint $table) {
            $table->id();
            $table->string('model_id')->unique();
            $table->string('name');
            $table->text('description');
            $table->string('ai_model_type');
            $table->string('ios_model_type');
            $table->text('prompt_engineering')->nullable();
            $table->foreignId('provider_id')->constrained('providers')->onDelete('cascade');
            $table->string('ad_type')->nullable();
            $table->integer('delay');
            $table->string('image');
            $table->boolean('popularity')->default(false);
            $table->boolean('is_default')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamp('added_date')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ai_models');
    }
};
