<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUseridToSections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('sections', function($table){
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
