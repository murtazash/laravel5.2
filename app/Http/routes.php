<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'products_controller@index');
Route::get('products','products_controller@show');
Route::get('products/{products_description}','products_controller@show1');

Route::post('products/{products_description}/orders','orders_controller@create');

Route::get('orders/{orders_product}/edit','orders_controller@edit');
Route::patch('order/{orders_product}','orders_controller@update');

