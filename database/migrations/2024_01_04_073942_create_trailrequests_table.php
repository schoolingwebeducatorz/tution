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
        Schema::create('trailrequests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->integer('grade_id')->nullable();
            $table->integer('timetable_id')->nullable();
            $table->string('traildate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trailrequests');
    }
};
