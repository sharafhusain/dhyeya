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
        Schema::create('test_paper_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_paper_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('test_name');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_paper_translations');
    }
};
