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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");

            $table->longText("definition")->nullable();
            $table->longText("inspiction")->nullable();
            $table->longText("act")->nullable();
            $table->integer("published")->default(1);
            $table->longText('content')->nullable();

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')
            ->references('id')
            ->on('categories');

            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')
            ->references('id')
            ->on('pages');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
