@extends('layout')

@section('content')

@foreach($Products as $Product)
	<li><a href="products/{{$Product->products_id}}">{{ $Product->products_name }}</a></li>
@endforeach


@stop