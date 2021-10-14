 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignProductTruckable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('product_trucks', function(Blueprint $table)
        {
         
            $table->foreign('product_id','product_truck_product_id')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('RESTRICT');
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
            $table->dropForeign('product_trucks_product_id');
        });
    }
}
