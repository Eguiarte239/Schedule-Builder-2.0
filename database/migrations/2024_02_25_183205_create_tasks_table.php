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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('start_date')->default(now());
            $table->date('estimated_end_date');
            $table->integer('priority')->default(0);
            $table->integer('status')->default(0);
            $table->boolean('is_completed')->default(false);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('phase_id')->constrained();
            $table->unsignedBigInteger('user_assigned_id');
            $table->foreign('user_assigned_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
