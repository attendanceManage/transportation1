<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $productId = Product::where('id',1)->exists();
      
        if($productId){
            Product::whereIn('id',[1,2,3,4])->delete();
        }

            $product = array(
                array(
                    'id'           => 1,
                    'title'        => "LG",
                    'weight'       => random_int(100000, 999999),
                    'weight_unit'  =>'KILOGRAM',
                    'status'       =>'ACTIVE',
                    'created_at'   => Carbon::now(),
                    'updated_at'   => Carbon::now(),
    
                ),
                array(
                    'id'           => 2,
                    'title'        => "LG2",
                    'weight'       =>  random_int(100000, 999999),
                    'weight_unit'  => 'KILOGRAM',
                    'status'       => 'ACTIVE',
                    'created_at'   => Carbon::now(),
                    'updated_at'   => Carbon::now(),
    
                ),  array(
                    'id'           => 3,
                    'title'        => "Song",
                    'weight'       =>  random_int(100000, 999999),
                    'weight_unit'  => 'KILOGRAM',
                    'status'       => 'ACTIVE',
                    'created_at'   => Carbon::now(),
                    'updated_at'   => Carbon::now(),
                ),
                array(
                    'id'           => 4,
                    'title'        => "HP",
                    'weight'       =>  random_int(100000, 999999),
                    'weight_unit'  => 'KILOGRAM',
                    'status'       => 'ACTIVE',
                    'created_at'   => Carbon::now(),
                    'updated_at'   => Carbon::now(),
                )
    
                
            );
    
            
            \DB::table('products')->insert($product);
        

    }
}
