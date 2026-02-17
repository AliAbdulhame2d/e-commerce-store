<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Catagory;
use App\Models\Product;

class AdminController extends Controller
{

    /* ---------------- Catagorys ---------------- */
    public function view_catagory(){
        $catagory = Catagory::all();
        return view('main.admin.pages_admin.catagory', compact('catagory'));
    }

    public function add_catagory(Request $request){
        //$data ist Objekt vom Catagory Model Class
        $data=new Catagory;

        # catagory_name ist Column von Catagory Tabele in Datenbank
        # $request ist Array, die vom Form von admin.dashboard.php kommt
        # catagory_input ist die Value, die vom input Feld von admin.dashboard.php kommt
        $data->catagory_name = $request->catagory_input;

        $data->save();

    return redirect()->back()->with('message', 'Catagory Added Successfully');    
    }
   
    public function delete_catagory($id){
        $data = Catagory::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Catagory Deleted Successfully');
    }

    /* ---------------- Products ---------------- */
    public function view_product(){
        $catagory = Catagory::all(); 
        return view('main.admin.pages_admin.product', compact('catagory'));
    }

    public function show_product(){
        $product = Product::all(); 
        return view('main.admin.pages_admin.show_product', compact('product'));
    }

    public function add_product(Request $request){
        //$data ist Objekt vom Product Model Class
        $data=new Product;

        # name ist Column von Product Tabele in Datenbank
        # $request ist Array, die vom Form von admin.pages_admin.product.php kommt
        # produktname ist die Value, die vom input Feld von admin.pages_admin.product.php kommt
        $data->name = $request->produktname;
        $data->price = $request->price;
        $data->discount_price = $request->discount;
        $data->quantity = $request->quantity;
        $data->catagory = $request->catagory;
        $data->description = $request->description;
        
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images/product_images', $imagename);
        $data->image = $imagename;
        
        $data->save();
       

    return redirect()->back()->with('message', 'Product Added Successfully');    
    }

    public function delete_product($id){
        $data=Product::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Product Deleted Successfuly');
    }

}
