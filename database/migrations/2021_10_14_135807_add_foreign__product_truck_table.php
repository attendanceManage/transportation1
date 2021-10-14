<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignProductTruckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          //
          Schema::table('product_trucks', function(Blueprint $table)
          {
           
             #
              $table->foreign('product_id','product_trucks_product_id_foreign')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
              $table->foreign('truck_id','product_trucks_truck_id_foreign')->references('id')->on('trucks')->onUpdate('CASCADE')->onDelete('CASCADE');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('product_trucks', function(Blueprint $table)
        {
            $table->dropForeign('product_trucks_product_id_foreign');
            $table->dropForeign('product_trucks_truck_id_foreign');
        });
    }
}
