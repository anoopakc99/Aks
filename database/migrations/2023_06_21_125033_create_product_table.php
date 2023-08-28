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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('subcategory');
            $table->string('productname');
            $table->string('productimage');
            $table->string('shortdesc');
            $table->string('title');
            $table->string('heading');
            $table->string('description');
            $table->string('Contenct');
            $table->string('pdf');
            $table->integer('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
