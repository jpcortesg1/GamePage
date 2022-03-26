<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  // Render view of home 
  public function index()
  {
    $viewData = [];
    $viewData['title'] = 'Home Page - Game';
    $viewData['oe'] = 'pe';
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
}
