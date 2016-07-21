@extends('layout')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">

    <!--<li>{{-- $products_description->products_name --}}</li>-->
    
    <!--<li>{{-- $Products->products_name --}}</li>-->
    
    <h1>{{ $products_description->products_name }}</h1>
    
    <ul class="list-group">
      @foreach($products_description->orders_products as $orders_product)
      <li class="list-group-item">
      	<a href="../orders/{{$orders_product->orders_products_id}}/edit">Order ID: {{ $orders_product->orders_id }}</a>
        <a href="#" class="pull-right">{{ $orders_product->order->customers_name }}</a>
      </li>
      @endforeach
    </ul>
    
    <h1>Add a new Order</h1>
    
    <form method="post" action="{{ $orders_product->products_id }}/orders">
    	<div class="form-group">
	    	<textarea name="orders_id" class="form-control">{{ old('orders_id') }}</textarea>
      </div>
      
      <div class="form-group">
      	<button type="submit" class="btn btn-primary">Add Order to this product</button>
        {{ csrf_field() }}
      </div>
    </form>
    
    {{-- var_dump($errors) --}}
    
    @if(count($errors))
    	<ul>
    	@foreach($errors->all() as $error)
      	<li>Error {{ $error }}</li>
      @endforeach
      </ul>    
    @endif
    
	</div>
</div>
@stop