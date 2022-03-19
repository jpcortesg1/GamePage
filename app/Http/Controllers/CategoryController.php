<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      $viewData = [];
      $viewData["title"] = "Categories - Game";
      $viewData["subTitle"] = "Categories";
      return view("category.index")->with("viewData", $viewData);
    }

    public function category($id)
    {
      $viewData = [];
      $viewData["title"] =  "Category - Game";
      $viewData["subtitle"] = "Name of Category";

      return view('category.category')->with("viewData", $viewData);
    }
}
