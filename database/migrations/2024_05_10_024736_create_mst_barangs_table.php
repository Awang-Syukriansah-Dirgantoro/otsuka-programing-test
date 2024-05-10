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
        Schema::create('mst_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('mst_category_barangs')->onDelete('cascade');
            $table->string('image');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_barangs');
    }
};
