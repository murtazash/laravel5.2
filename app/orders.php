<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
	protected $primaryKey = 'orders_id';
	
	public function order()
	{
  	$this->hasMany('orders_products','orders_id','orders_id');
	}
}
