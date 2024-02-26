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
            $table->string('title');
            $table->text('description');
            $table->date('start_date')->default(now());
            $table->date('estimated_end_date');
            $table->int('priority')->default(0);
            $table->int('status')->default(0);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('team_id')->constrained();
            $table->unsignedBigInteger('project_leader_id');
            $table->foreign('project_leader_id')->references('id')->on('users');
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
