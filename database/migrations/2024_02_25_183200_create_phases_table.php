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
        Schema::create('phases', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('start_date')->default(now());
            $table->date('estimated_end_date');
            $table->enum('priority', ['Low', 'Medium', 'High', 'Urgent']);
            $table->enum('status', ['Not Started', 'In Progress', 'Completed'])->default('Not Started');
            $table->boolean('is_completed')->default(false);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('project_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phases');
    }
};
