<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUyearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('uyear', function(Blueprint $table){
        //     $table->increments('id');
        //     $table->integer('yearbegin');
        //     $table->integer('yearend');
        //     $table->timestamps();
        //     $table->integer('created_by')->unsigned();
        //     $table->integer('updated_by')->unsigned();
        //     $table->foreign('created_by')->references('id')->on('users');
        //     $table->foreign('updated_by')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
