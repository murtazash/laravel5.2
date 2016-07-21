@extends('layout')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">

    <h1>Edit Order</h1>
    
    <ul class="list-group">
    	<li class="list-group-item">Orders ID: {{ $orders_product->orders_id }}</li>
    </ul>
    
    <form method="POST" action="/order/{{ $orders_product->orders_products_id }}">
    	{{ method_field('PATCH') }}
    	<div class="form-group">
	    	<textarea name="orders_id" class="form-control">{{ $orders_product->orders_id }}</textarea>
      </div>
      
      <div class="form-group">
      	<button type="submit" class="btn btn-primary">Edit Order</button>
      </div>
      {{ csrf_field() }}
    </form>
</div>
</div>    

@stop