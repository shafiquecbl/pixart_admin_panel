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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('api_key');
            $table->string('api_url');
            $table->string('queue_url')->nullable();
            $table->string('api_key_location')->default('header');
            $table->boolean('safety_checker')->default(true);
            $table->string('safety_checker_type')->nullable();
            $table->boolean('tomesd')->default(false);
            $table->boolean('karras_sigmas')->default(false);
            $table->boolean('multi_lingual')->default(false);
            $table->boolean('panorama')->default(false);
            $table->boolean('self_attention')->default(false);
            $table->integer('upscale')->nullable();
            $table->integer('clip_skip')->nullable();
            $table->boolean('highres_fix')->default(false);
            $table->integer('samples')->nullable();
            $table->integer('inference_steps')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
