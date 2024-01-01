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
        Schema::create('test_schedule_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_schedule_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('subject');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_schedule_translations');
    }
};
