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
        Schema::create('achiever_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('achiever_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('name');
            $table->text('achievement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achiever_translations');
    }
};
