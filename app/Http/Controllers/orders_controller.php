<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products_description;
use App\orders_product;
use DB;
use App\Http\Requests;

class orders_controller extends Controller
{
 		public function create(Request $request, products_description $products_description)
		{
			//$orders = new orders_product;
			//$orders->orders_products_id = 230;
			//$orders->orders_id = $request->orders_id;
			//$products_description->orders_products()->save($orders);
			$this->validate($request,['orders_id' => 'required|min:5']);
			
			$products_description->orders_products()->create(['orders_id' => $request->orders_id]);			
			
			return back();
		}
		
		public function edit(orders_product $orders_product)
		{
			return view('orders.edit',compact('orders_product'));
		}
		
		public function update(Request $request, orders_product $orders_product)
		{
				//dd('hit');				
				$orders_product->where('orders_products_id', $orders_product->orders_products_id)->update(['orders_id' => $request->orders_id ]);
				return back();
		}
}
