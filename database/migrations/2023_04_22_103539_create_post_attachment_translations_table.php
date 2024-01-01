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
        Schema::create('post_attachment_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_attachment_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index();
            $table->text('title');
            $table->string('filename');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_attachment_translations');
    }
};
