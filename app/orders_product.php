<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders_product extends Model
{
	public $timestamps = false;
	protected $fillable = ['orders_products_id','orders_id'];	
  protected $primaryKey = "orders_products_id";
	
	public function products_description()
	{
		//return $this->belongsTo('orders','orders_id','orders_id');
		return $this->belongsTo(products_description::class,'products_id','products_id');
		//return $this->hasOne('App\Orders_product', 'foreign_key');
	}
	public function order()
	{
		return $this->belongsTo(orders::class,'orders_id','orders_id');	
	}
}
