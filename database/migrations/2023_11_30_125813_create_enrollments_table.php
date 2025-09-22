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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->nullable();
            $table->integer('subject_id')->nullable();
            $table->integer('grade_id')->nullable();
            $table->integer('trainer_id')->nullable();
            $table->string('amount')->nullable();
            $table->date('admissiondate')->nullable();
            $table->date('feeproccess')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
