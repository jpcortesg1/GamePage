<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;
use App\Models\Category;

class AdminHomeController extends Controller
{
  public function index()
  {
    $viewData = [];
    $viewData["title"] = "Home Page - Game";
    $viewData["totalGames"] = count(Game::all());
    $viewData["totalUsers"] = count(User::all());
    $viewData["totalCategory"] = count(Category::all());
    $viewData["totalAdmins"] = count(User::where('rol', 'admin')->get());

    return view("admin.index")->with("viewData", $viewData);
  }
}
