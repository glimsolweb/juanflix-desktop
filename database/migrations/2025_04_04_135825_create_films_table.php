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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->text('description')->nullable();
            $table->string('released_at')->nullable();
            $table->text('media_id')->nullable();
            $table->text('trailer_id')->nullable();
            $table->text('film_type')->nullable();
            $table->text('poster')->nullable();
            $table->text('thumbnail')->nullable();
            $table->string('rating')->nullable();
            $table->string('duration')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('country')->nullable();
            $table->string('additional_src')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
