<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drafts', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->longText('description')->nullable();
          $table->integer('brewery_id');
          $table->string('style');
          $table->string('glassware')->nullable();
          $table->string('abv')->nullable();
          $table->string('ibu')->nullable();
          $table->string('pour');
          $table->float('tasterPrice');
          $table->float('pourPrice');
          $table->boolean('available');
          $table->boolean('haveTapHandle');
          $table->boolean('onSpecial');
          $table->boolean('specialPrice')->nullable();
          $table->string('image')->nullable();
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
        Schema::drop('drafts');
    }
}
