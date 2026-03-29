<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index() {
        $products = Product::with('category')->paginate(10); 
   // return response()->json($products);
   return ProductResource::collection($products);
    }
}
