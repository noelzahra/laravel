<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $products = $category->products()->orderBy('created_at')->paginate(1);
        return view('category.show', [
            'category' => $category, 
            'products' => $products
            ] 
        );
    }
}
