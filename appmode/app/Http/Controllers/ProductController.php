<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        return view('products.index',['products' => Product::all()]);
    }

    public function showSex(string $name){
        $category = Category::where('sex', $name)->get();
        
        $products = [];
        // Pour récuperez le premier id de chaque categorie.
        if(count($category) > 0) {
            $products = $category[0]->products;
        }

        return view("categories.index", ['products' => $products,'category' => $category]);
    
    }

}
