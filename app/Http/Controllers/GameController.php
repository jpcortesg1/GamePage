<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class GameController extends Controller
{
  // Retunr the client game page  
  public function index($id)
  {
    $viewData = [];
    $viewData["title"] = "Name Game - Game";
    $viewData["subTitle"] = "Name of Game";
    return view("game.index")->with("viewData", $viewData);
  }

  // Return the admin game page
  public function adminIndex()
  {
    $viewData = [];
    $viewData['categories'] = Category::all();
    return view('game.indexAdmin')->with('viewData',$viewData);
  }

  // Return the especific admin game page 
  public function adminShow($id)
  {
    $viewData = [];
    $viewData['category'] = Category::findOrFail($id);
    $viewData['games'] = Game::where('id_category', $id)->get();
    return view('game.showAdmin')->with('viewData',$viewData);
  }

  // Return view for create new game
  public function create($id)
  {
    $viewData['category'] = Category::findOrFail($id);
    return view('game.create')->with('viewData', $viewData);
  }

  // Method to create new game
  public function store(Request $request)
  {

    $request->validate([
      'name'=>'required',
      'developer'=>'required',
      'description'=>'required',
      'idCategory'=>'required',
      'releasedate'=>'required',
      'price'=>'required',
      'agerating'=>'required',
      'image'=>'required'
    ]);


    $game = new Game();
    $filename = time() . $request->image->getClientOriginalName();

    $game->setName($request->name);
    $game->setDeveloper($request->developer);
    $game->setDescription($request->description);
    $game->setIdCategory($request->idCategory);
    $game->setReleasedate($request->releasedate);
    $game->setPrice($request->price);
    $game->setAgerating($request->agerating);
    $game->setBuyquantity($request->buyquantity);
    $game->setImage($filename);

    $game->save();
    $request["image"]->move(public_path("image/games/" . $game->getId()), $filename);

    return redirect(route('admin.gamesCategory', $request->idCategory));
  }

  public function show($id)
  {
      //
  }

    
  // Return the edit game page
  public function edit($id)
  {
    $viewData = [];
    $viewData['game'] = Game::findOrFail($id);
    $viewData['categories'] = Category::all();
    return view('game.edit')->with('viewData',$viewData);
  }
    
  // Method for update a game
  public function update(Request $request, $id)
  {
    $request->validate([
      'name'=>'required',
      'developer'=>'required',
      'description'=>'required',
      'idCategory'=>'required',
      'releasedate'=>'required',
      'price'=>'required',
      'agerating'=>'required',
      'image'=>'required'
    ]);

    $game = Game::find($id);
    if(isset($request->image)){
      File::delete(public_path('image/games/'. $game->getId().'/'.$game->getImage()));
      $filename = time() . $request->image->getClientOriginalName();
      $request["image"]->move(public_path("image/games/" . $game->getId()), $filename);
      $game->setImage($filename);
    }

    $game->setName($request->name);
    $game->setDeveloper($request->developer);
    $game->setDescription($request->description);
    $game->setIdCategory($request->idCategory);
    $game->setReleasedate($request->releasedate);
    $game->setPrice($request->price);
    $game->setAgerating($request->agerating);

    $game->save();

    return redirect(route('admin.gamesCategory', $game->getIdCategory()));
  }

  // Method for delete a game
  public function destroy($id)
  {
    $game = Game::find($id);
    $idCategory = $game->getIdCategory();
    File::deleteDirectory(public_path('image/games/'. $game->getId().'/'));
    $game->delete();
    return redirect(route('admin.gamesCategory', $idCategory));
  }
}