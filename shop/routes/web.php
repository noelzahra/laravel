<?php

use App\Product;
use App\Category;

Route::get('/', function () {

    $product = new Product;
    $product->title = 'Macbook Air';
    $product->price = 900;

    $product->save();

    $category = Category::find(2);
    
    $product->categories()->attach($category);    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories/{category}', 'CategoryController@show');
Route::get('/products/{product}', 'ProductController@show');
