<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products_description;
use App\orders_product;
use App\orders;
use DB;
use App\Http\Requests;

class products_controller extends Controller
{
    public function index()
		{
			$People = ['Person 1','Person 2','Person 3','Person 4'];	
			return view('welcome',compact('People'));
		}
		
		public function show()
		{
			$Products = products_description::where('products_id','<',40)->orderby('products_name')->get();
			//$Products = Products_description::all();
			//$Products = DB::table('products_description')->get();
			return view('products.index',compact('Products'));
		}
		
		/*
		public function show1(products_description $products_description)
		{
			return view('products.show',compact('products_description'));
				
		}
		*/
		/*
		public function show1($id)
		{
			$Products = Products_description::find($id);
			return view('products.show',compact('Products'));
		}
		*/
		public function show1(products_description $products_description)
		{
			$products_description->load('orders_products.order');
			//return $products_description;
			return view('products.show',compact('products_description'));
		}
		
}