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
            $table->text('src')->nullable();
            $table->text('trailer_src')->nullable();
            $table->text('poster')->nullable();
            $table->text('thumbnail')->nullable();
            $table->string('rating')->nullable();
            $table->string('duration')->nullable();
            $table->tinyInteger('is_free')->nullable();
            $table->tinyInteger('has_detailed_page')->nullable();
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
