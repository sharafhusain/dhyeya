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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained();
            $table->foreignId('center_id')->nullable()->constrained();
            $table->enum('medium',['English','Hindi', 'English & Hindi']);
            $table->enum('mode',['Online','Offline','Online & Offline']);
            $table->string('course_type');
            $table->unsignedInteger('total_fee');
            $table->integer('installment_duration')->nullable();
            $table->float('duration');
            $table->unsignedInteger('one_time_payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
