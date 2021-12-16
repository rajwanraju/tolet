<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
             $table->string('title');
            $table->string('flatNo');
            $table->string('houseNo');
            $table->string('roadNo');
            $table->string('block');
            $table->string('SubArea');
             $table->string('area');
             $table->Integer('phone');
            $table->Integer('rent');
            $table->Integer('category');
            $table->Integer('flatType');
            $table->Integer('gasLine');
             $table->Integer('parking');
             $table->Integer('lift');
            $table->Integer('generator');
             $table->text('flatDescription');
             $table->text('flatImage');
             $table->tinyInteger('publicationStatus');
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
        Schema::dropIfExists('posts');
    }
}
