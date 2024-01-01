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
        Schema::create('batch_detail_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_detail_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('title');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batch_detail_translations');
    }
};
