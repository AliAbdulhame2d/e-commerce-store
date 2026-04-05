<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\API\StoreCategoryRequest;

class CategoryController extends Controller
{
  public function index() {
    $categories = Category::paginate(10);
    return CategoryResource::collection($categories);
  } 

  public function store(StoreCategoryRequest $request) {
    $data = $request->validated();
    $category = Category::create($data);
    return new CategoryResource($category);
  }

  public function update(StoreCategoryRequest $request, Category $category) {
    $data = $request->validated();
    $category->update($data);
    return new CategoryResource($category);
  }

  public function destroy(Category $category) {
    $category->delete();
    return response()->json(["message" => "Category deleted Successfully"]);
  }


}
