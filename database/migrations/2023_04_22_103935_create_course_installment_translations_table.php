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
        Schema::create('course_installment_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_installment_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('title');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_installment_translations');
    }
};
