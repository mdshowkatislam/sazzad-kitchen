<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutDevinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_devinfos', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('doc')->nullable();
            $table->string('conclusion')->nullable();

            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('about_devinfos');
    }
}
