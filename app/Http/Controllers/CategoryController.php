<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    /* ---------------- Categorys ---------------- */
    public function index() {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(StoreCategoryRequest $request) {
       
        $data = $request->validated();
        Category::create($data);

    return redirect()->back()->with('success', 'Category Added Successfully');    
    }
   
    public function destroy($id) {   
        $category = Category::findOrFail($id);
    
        $category->delete();

        return redirect()->back()->with('success', 'Category Deleted Successfully');
    }

}
