<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $results =Product::latest()->get();
        $products = array_chunk($results->toArray(),4,true);  //chunked array
        // dd($products);
        return view('products.index',['products' => $products]);
    }
}
