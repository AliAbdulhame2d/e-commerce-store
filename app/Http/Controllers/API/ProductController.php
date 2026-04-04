<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Requestes\API\StoreProductRequest;

use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index() {
        $products = Product::with('category')->paginate(10); 
        // return response()->json($products);
        return ProductResource::collection($products);
    }

    public function store(StoreProductRequest $request) {
        $data = $request->validated();
        $product = Product::create($data);
        return new ProductResource($product);
    }

    public function update(StoreProductRequest $request) {
        $data = $request->validated();
        $product = Product::findOrFail($id);
        $product->update($data);
        return new ProductResource($product);
    }

    public function destroy(Product $product) {
        $product->delete();
        return response()->json(["message" => "Product deleted successfully"]);
    }
}
