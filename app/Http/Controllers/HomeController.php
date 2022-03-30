<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class HomeController extends Controller
{
  // Render view of home 
  public function index()
  {
    $viewData = [];
    $viewData['title'] = 'Home Page - Game';
    $viewData['lastGames'] = Game::orderBy('created_at', 'desc')->limit(5)->get();
    $viewData['bestsellers'] = Game::orderBy('buyquantity', 'desc')->limit(5)->get();
    $viewData['cheapsGame'] = Game::orderBy('price', 'asc')->limit(5)->get();
    return view('home.index')->with('viewData', $viewData);
  }

  // About page
  public function about()
  {
    $viewData = [];
    $viewData['title'] = 'About Page - Game';
    return view('home.about')->with('viewData', $viewData);
  }

  public function support()
  {
    $viewData = [];
    $viewData['title'] = 'Support Page - Game';
    return view('home.support')->with('viewData', $viewData);
  }

  public function view($id)
  {
    return "/si";
  }
}
