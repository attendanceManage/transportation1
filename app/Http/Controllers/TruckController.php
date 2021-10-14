<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Truck;
use App\ProductTruck;
use Validator;


class TruckController extends Controller
{
    function index(Request $request){
      $product = Product::get();
      return view('truck.index',compact('product'));
     }
   
     function create(Request $request)
    {
      
        $input = $request->only('title','type','product_id','load','unit','status');
    
        $rules = [
            'title'      => 'required|max:100',
            'type'       => 'required|in:TRUCK,CAR',
            'product_id' => 'required|array',
            'load'       => 'required|integer|between:1,8',
            'unit'       => 'required|in:GRAM,KILOGRAM,TONNE',
            'status'     => 'nullable|in:ARRIVED,INACTIVE',
        ];

        $messages = [];
        $cost;

        $validator = Validator::make($input,$rules, $messages);

        if ($validator->fails()) {
            $code = 406;
            $output = $validator->messages()->first();
            
            return redirect()->back()->with('alert-danger', $output);
        } else {
        

            $truck        = new Truck();
            $truck->title = $input['title'];
            $truck->type  = $input['type'];
            $truck->load  = $input['load'];
            $truck->unit  = $input['unit'];
            if($input['type']=='CAR'){
                $cost = 60;
                
            }else{
                
               $cost = count($input['product_id']) * 1;

            }
           

            $truck->cost  = $cost;
           
            if($truck->save()){
               foreach($input['product_id'] as $key=>$value)
               {
                $product_truck             = new ProductTruck();
                $product_truck->product_id = $value;
                $product_truck->truck_id   = $truck->id;
                $product_truck->save();
               }
                
            }

            $title     =  $input['title'];
            $load      =  $input['load'];
            $unit      =  $input['unit'];
            $products  = Product::whereIn('id',$input['product_id'])->get();
            $alert_success ="Transportation created successfully!!";

            return view('transportation_success_info',compact('alert_success','title','load','unit','products','cost'));
            
            
           

        }

    }

    function data()
    {
        return view('truck.button');
    }
   

}
