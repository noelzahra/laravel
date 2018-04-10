<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {   
        $categories = $product->categories()->orderBy('title')->paginate(1);
        return view('product.show', [
            'product' => $product,
            'categories' => $categories
            ]);
    }
}
