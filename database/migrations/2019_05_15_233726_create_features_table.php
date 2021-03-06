<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('title');
          $table->string('slug');
          $table->string('dscr');
          $table->text('body');
          $table->integer('category_id')->unsigned()->nullable();
          $table->foreign('category_id')->references('id')->on('categories')
              ->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('features');
    }
}
