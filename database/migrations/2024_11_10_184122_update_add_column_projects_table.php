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
            $table->string('project_title', 40)->nullable(false);
            $table->date('launch_date')->nullable(false);
            $table->text('project_thumbnail')->nullable(true);
            $table->text('repository_url')->nullable(true);
            $table->text('project_summary')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['project_title', 'launch_date', 'project_thumbnail', 'repository_url', 'project_summary']);
        });
    }
};
