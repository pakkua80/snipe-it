<?php

use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('media', function ($table) {
            $table->increments('id');
            $table->string('filename');
            $table->string('asset_type');
            $table->integer('user_id');
            $table->integer('asset_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('media');
    }

}
