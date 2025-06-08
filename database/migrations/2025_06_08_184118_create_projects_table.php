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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_ar');
            $table->string('client');
            $table->string('client_ar');
            $table->string('description');
            $table->string('description_ar');
            $table->string('image');
            $table->string('link')->nullable();
            $table->date('date');
            $table->json('photos')->nullable();
            $table->json('videos')->nullable();
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
