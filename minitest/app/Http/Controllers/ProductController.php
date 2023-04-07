<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected function index(){
        $product= Product::all();
        return $product;
    }
    protected function show(string $id){
        $product=Product::findOrFail($id);
        return $product;
    }
    protected function store(Request $request){
        Product::create($request ->all());

    }
}
