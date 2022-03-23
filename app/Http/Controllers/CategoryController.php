<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Game;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
  // Return the of client page
  public function index()
  {
    $viewData = [];
    $viewData["title"] = "Categories - Game";
    $viewData["subTitle"] = "Categories";
    $viewData["categories"] = Category::all();
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

  // Return the create category page
  public function create()
  {
    $viewData["title"] = "Admin Create Category";
    return view('category.create')->with("viewData", $viewData);
  }

  // Method for create new category
  public function store(Request $request)
  {
    Category::validate($request);

    // Create unique name of image
    $filename = time() . $request->image->getClientOriginalName();
    $request['image']->move(public_path("image/category/"), $filename);
    $data = ["name" => $request->name, "description" => $request->description, "image" => $filename];

    // Create the category
    Category::create($data);

    return redirect(route('admin.category', $request->idCategory));
  }

  // Return the specific category page
  public function show($id)
  {
    $viewData = [];
    $viewData["title"] =  "Category - Game";
    $viewData["subtitle"] = "Name of Category";
    $viewData["category"] = Category::find($id);
    $viewData['games'] = Game::where('id_category', $id)->orderBy('created_at', 'desc')->get();
    $viewData['highlights'] = Game::where('id_category', $id)->orderBy('buyquantity', 'desc')->get();

    return view('category.show')->with("viewData", $viewData);
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
    $request->validate([
      'name'=>'required',
      'description'=>'required',
    ]);
    
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

    return redirect(route('admin.category', $category->getId()));
  }

  // Method for delete a category
  public function destroy($id)
  {
    $category = Category::findOrFail($id);
    File::delete(public_path('image/category/'. $category->getImage()));
    $category->delete();
    return redirect(route('admin.category'));
  }
}
