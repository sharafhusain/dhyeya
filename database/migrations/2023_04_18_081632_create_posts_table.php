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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->enum('post_type',[
                'download',
                'course',
                'test',
                'post',
                'infographic',
                'daily-pre-pare',
                'mcqs',
                'article',
                'exam',
                'page',
                'daily-current-affairs',
                'child-of-daily-current-affairs',
                'current-affairs',
                'Info-paedia',
                'child-of-Info-paedia',
                'air-debate',
                'child-of-air-debate',
                'brain-booster',
                'child-of-brain-booster',
                'daily-static-mcqs',
                'child-of-daily-static-mcqs',
                'daily-mcqs',
                'child-of-daily-mcqs',
                "book_section"
            ]);
            $table->foreignId('user_id')->constrained();
            $table->enum("status",["active","inactive"]);
            $table->string("slug");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
