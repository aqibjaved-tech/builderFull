<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name', 255);
          $table->boolean('active');
          $table->longText('description');
          $table->string('favicon', 255);
          $table->string('image', 255);
          $table->string('setting')->nullable();
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
        Schema::dropIfExists('themes');
    }
}
