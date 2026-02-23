<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{

    
    /* ---------------- Products ---------------- */

    //Zeigen alle Produkte
    public function index() {
        $products = Product::with('category')->paginate(10); //get(); 
        return view('admin.products.index', compact('products'));
    }

    //Zeigen Add-Produkt-GUI, um ein neues Produkt zu hinzufügen
    public function create() {
        $categories = Category::all(); 
        return view('admin.products.create', compact('categories'));
    }

    public function edit($id) {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('categories', 'product'));
    }

    public function destroy($id) {
        $product=Product::find($id);

        if($product->image){
            \Storage::disk('public')->delete($product->image);
        }

        $product->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfuly');
    }

    public function store(StoreProductRequest $request) {
        $data = $request->validated();
       
        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($data);
       
    return redirect()->back()->with('success', 'Product Added Successfully');    
    }

    public function update(StoreProductRequest $request, $id) { 
        
        $product = Product::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            //löchen das alte Bild
            if ($product->image) {
                \Storage::disk('public')->delete($product->image);
            }
            //speichern das Bild in Storage-Ordner
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('products.index')
            ->with('success', 'Product Updated Successfully');
    }

}
