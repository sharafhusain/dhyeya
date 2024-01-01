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
        Schema::create('post_meta_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_meta_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index();
            $table->text('title');
            $table->longText('description')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_meta_translations');
    }
};
