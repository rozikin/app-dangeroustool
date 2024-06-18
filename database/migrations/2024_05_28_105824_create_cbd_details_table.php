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
        Schema::create('cbd_details', function (Blueprint $table) {
            $table->id();
            $table->string('order_no');  // Kolom order_no untuk foreign key
            $table->string('color_code');
            $table->string('color');
            $table->string('size_code');
            $table->string('size');
            $table->string('qty');
            $table->timestamps();
            $table->foreign('order_no')->references('order_no')->on('cbds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cbd_details');
    }
};
