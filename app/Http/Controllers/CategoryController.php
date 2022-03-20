<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
  // Return the of client page
  public function index()
  {
    $viewData = [];
    $viewData["title"] = "Categories - Game";
    $viewData["subTitle"] = "Categories";
    return view("category.index")->with("viewData", $viewData);
  }

  // Return the of admin page
  public function indexAdmin()
  {
    $viewData = [];
    $viewData["categories"] = Category::all();
    $viewData["title"] = "Admin Categories";
    return view('category.indexAdmin')->with('viewData', $viewData);
  }

  // Return the specific category page
  public function category($id)
  {
    $viewData = [];
    $viewData["title"] =  "Category - Game";
    $viewData["subtitle"] = "Name of Category";

    return view('category.category')->with("viewData", $viewData);
  }

  // Return the create category page
  public function create()
  {
    $viewData["title"] = "Admin Create Category";
    return view('category.create')->with("viewData", $viewData);
  }

  // Method for create new category
  public function store(Request $request)
  {
    // Create unique name of image
    $filename = time() . $request->image->getClientOriginalName();

    // Create the category
    $categories = new Category();
    $categories->setName($request->name);
    $categories->setDescription($request->description);
    $categories->setImage($filename);

    // Save client, image and redirect
    $categories->save();
    $request["image"]->move(public_path("image/category/"), $filename);
    return redirect('/admin/category');
  }

  public function show($id)
  {
      //
  }

  // Return the edit category page
  public function edit($id)
  {
    $viewData = [];
    $viewData["title"] = "Admin Edit Category";
    $viewData["category"] = Category::find($id);
    return view('category.edit')->with('viewData',$viewData);
  }

  // Method for update a category
  public function update(Request $request, $id)
  {
    $category = Category::find($id);
    if(isset($request->image)){
      File::delete(public_path('image/category/'. $category->getImage()));
      $filename = time() . $request["image"]->getClientOriginalName();
      $request["image"]->move(public_path("image/category/"), $filename);
      $category->setImage($filename);
    }
    
    $category->setName($request->name);
    $category->setDescription($request->description);
    
    $category->save();

    return redirect('/admin/category');
  }

  // Method for delete a category
  public function destroy($id)
  {
    $category = Category::find($id);
    File::delete(public_path('image/category/'. $category->image));
    $category->delete();
    return redirect('/admin/category');
  }
}
