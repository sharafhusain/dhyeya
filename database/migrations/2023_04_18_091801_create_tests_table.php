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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained();
            $table->date('starting_date')->nullable();
            $table->integer('total_no_of_test');
            $table->enum('medium',['English','Hindi','English & Hindi']);
            $table->enum('mode',['Online','Offline',"Offline & Online"]);
            $table->string('test_type');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
