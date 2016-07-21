<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products_description extends Model
{
    protected $table = "products_description";
		protected $primaryKey = "products_id";
		
		public function orders_products()
		{
			//return $this->belongsTo('App\orders_product','products_id','products_id');
			//return $this->hasMany('App\orders_product','products_id','products_id');
			return $this->hasMany(orders_product::class,'products_id','products_id');
			//return $this->hasOne('App\Orders_product', 'products_id');
		}
}
