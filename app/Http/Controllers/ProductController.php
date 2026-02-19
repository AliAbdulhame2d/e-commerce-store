<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{

    
    /* ---------------- Products ---------------- */

    //Zeigen alle Produkte
    public function index(){
        $products = Product::all(); 
        return view('main.admin.products.index', compact('products'));
    }

    //Zeigen Add-Produkt-GUI, um ein neues Produkt zu hinzufügen
    public function create(){
        $categories = Category::all(); 
        return view('main.admin.products.create', compact('categories'));
    }
        
    public function store(Request $request){
        //$product ist Objekt vom Product Model Class
        $product=new Product;

        # name ist Column von Product Tabele in Datenbank
        # $request ist Array, die vom Form von admin.product.product.php kommt
        # produktname ist die Value, die vom input Feld von admin.product.product.php kommt
        $product->name = $request->produktname;
        $product->price = $request->price;
        $product->discount_price = $request->discount;
        $product->quantity = $request->quantity;
        $product->category = $request->category;
        $product->description = $request->description;
        
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images/products', $imagename);
        $product->image = $imagename;
        
        $product->save();
       

    return redirect()->back()->with('message', 'Product Added Successfully');    
    }

    public function destroy($id){
        $product=Product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfuly');
    }

    public function edit($id){
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('main.admin.products.edit', compact('categories', 'product'));
    }

    public function update($id){
      /*  $product = Product::findOrFail($id);

        return view('main.admin.products.create', compact('categories', 'product'));
    */
    }


}
