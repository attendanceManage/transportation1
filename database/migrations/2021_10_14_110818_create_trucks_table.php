<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100);
            $table->integer('load');
            $table->enum('unit', ['GRAM', 'KILOGRAM','TONNE']);
            $table->enum('type', ['TRUCK', 'CAR']);
            $table->float('cost');
            $table->enum('status', ['PENDING', 'ARRIVED','READY TO TRANSIT','INACTIVE']);
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
        Schema::dropIfExists('trucks');
    }
}
