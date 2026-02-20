<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    /* ---------------- Categorys ---------------- */
    public function index(){
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request){
        //$data ist Objekt vom Category Model Class
        $category=new Category;

        # name ist Column von Category Tabele in Datenbank
        # $request ist Array, die vom Form von admin.dashboard.php kommt
        # category_input ist die Value, die vom input Feld von admin.dashboard.php kommt
        $category->name = $request->category_input;

        $category->save();

    return redirect()->back()->with('message', 'Category Added Successfully');    
    }
   
    public function destroy($id){   
        $category = Category::findOrFail($id);
    
        $category->delete();

        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

}
