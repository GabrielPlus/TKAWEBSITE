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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('designation')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('user_id')->nullable();
            $table->string('post_status')->nullable();
            $table->string('usertype')->nullable();
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
