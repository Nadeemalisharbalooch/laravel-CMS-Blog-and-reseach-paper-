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
        Schema::create('reseaches', function (Blueprint $table) {
          
            $table->foreignId('user_id')->constrained();
            $table->id();
            $table->string('title');
            $table->string('abstract');
            $table->boolean('is_Publish');
            $table->string('author_name');
            $table->string('Pdf_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseaches');
    }
};
