<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $viewData = [];
      $viewData["title"] = "Home Page - Game";
      return view("home.index")->with("viewData", $viewData);
    }
}
