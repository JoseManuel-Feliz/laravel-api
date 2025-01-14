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
        Schema::create('project_technology', function (Blueprint $table) {
            /* $table->unsignedBigInteger('technology_id')->on('technologies');
            $table->unsignedBigInteger('project_id')->on('projects'); */

            $table->primary(['project_id', 'technology_id']);
            $table->foreignId("technology_id")->constrained('technologies')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("project_id")->constrained('projects')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_technology');
    }
};