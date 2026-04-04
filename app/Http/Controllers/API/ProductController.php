<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Requestes\API\StoreProductRequest;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index(Request $request) {
        $query = Product::with('category'); 

        if($request->search) {
            $query->where('name', 'LIKE', "%{$request->search}%");
        }
        if($request->category_id) {
            $query->where('category_id', $request->category_id);
        }
        if($request->sort) {
            $query->orderBy('price', $request->sort);
        }
        $products = $query->paginate(10);
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
