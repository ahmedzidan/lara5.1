<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create employee table
        Schema::create('employee',function($table){
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('telephone' ,11);
            $table->integer('salary');
            $table->date('data_of_birth');
            $table->date('data_of_hire');
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
        //drop table
        Schema::drop('employee') ;
    }
}
