<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bill', function (Blueprint $table) {
            $table->increments('Bill_id');
            $table->string('Name');
            $table->unsignedInteger('Bill_car');
            $table->foreign('Bill_car')
                  ->references('car_id')
                  ->on('Car')
                  ->onDelete('cascade');

                


            $table->unsignedInteger('Bill_aiport');
            $table->foreign('Bill_aiport')
                  ->references('Aiport_id')
                  ->on('Aiport')
                  ->onDelete('cascade');


           
            $table->unsignedInteger('Bill_service');
            $table->foreign('Bill_service')
                  ->references('Serice_id')
                  ->on('Service')
                  ->onDelete('cascade');


            $table->integer('People');
            $table->string('Peopleset');
            $table->date('date');
            $table->string('Flight_number');
            $table->string('Email');
            $table->string('Phone');
            $table->text('Comment');







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
        Schema::dropIfExists('Bill');
    }
}
