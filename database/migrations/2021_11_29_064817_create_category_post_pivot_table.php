<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPostPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_post', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            //$table->foreignId('category_id')->constrained();

            $table->unsignedBigInteger('post_id')->index();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            //$table->foreignId('post_id')->constrained();

            //$table->primary(['category_id', 'post_id']);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_post');
    }
}