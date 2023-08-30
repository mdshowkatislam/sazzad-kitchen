<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id')->nullable();
            // $table->unsignedBigInteger('product_id')->nullable();
            // $table->tinyInteger('rate')->default(0);
            // $table->text('review')->nullable();
            // $table->enum('status',['active','inactive'])->default('active');
            // $table->bigInteger('order_items_id')->unsigned();
            //
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('SET NULL');
            // $table->foreign('order_items_id')->references('id')->on('order_items')->onDelete('cascade');


            $table->integer('rate');
            $table->text('comment');
            $table->bigInteger('order_item_id')->unsigned();
            $table->timestamps();
            $table->foreign('order_item_id')->references('id')->on('order_items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
