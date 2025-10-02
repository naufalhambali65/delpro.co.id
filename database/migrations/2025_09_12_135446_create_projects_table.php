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
            $table->foreignid('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreignid('style_id')->references('id')->on('styles')->onDelete('cascade');
            $table->foreignid('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('client_name');
            $table->string('client_address');
            $table->string('client_contact');
            $table->text('job_list');
            $table->string('material');
            $table->text('worker');
            $table->enum('job_status', ['in_progress', 'done', 'waiting', 'cancelled', 'rejected', 'in_review'])->default('waiting');
            $table->enum('visibility', ['public', 'private'])->default('private');
            $table->integer('progress');
            $table->json('images');
            $table->string('cover_image');
            $table->string('unit_size');
            $table->text('description')->nullable();
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