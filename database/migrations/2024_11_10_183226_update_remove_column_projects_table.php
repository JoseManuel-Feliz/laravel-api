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
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['title', 'author', 'contributors', 'project_start_date', 'status', 'description']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('title', 40)->nullable(false);
            $table->string('author', 30)->nullable(false);
            $table->string('contributors', 150)->nullable(false);
            $table->date('project_start_date')->nullable(false);
            $table->boolean('status')->default(0)->nullable(false);
            $table->text('description')->nullable(true);
        });
    }
};
