<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('quantity');
            $table->decimal('price');

            $table->String('category');
            $table->String('short_desc')->nullable();
            $table->String('des')->nullable();
            $table->String('aditional_desc')->nullable();
            $table->String('gallery')->nullable();
            $table->String('file_path')->nullable();
            $table->String('image')->nullable();
            $table->text('images')->nullable();
            $table->enum('condition',['default','new','hot','special','popular','top-selling'])->default('default');

            $table->float('discount')->nullabale();
            $table->bigInteger('categories_id')->unsigned()->nullable();


            $table->timestamps();

            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
