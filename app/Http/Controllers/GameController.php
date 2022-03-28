<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\File;

class GameController extends Controller
{
  public function subComment($comment, $viewData)
  {
    if (count($comment->comments) <= 0) {
      return $viewData = $comment::with('user');
    }
    foreach ($comment->comments as $comment) {
      $viewData[$comment->getId()] = [];
      return $this->subComment($comment, $viewData[$comment->getId()]);
    }
  }

  // Retunr the client game page  
  public function index($id)
  {
    $viewData = [];
    $viewData["title"] = "Name Game - Game";
    $viewData["subTitle"] = "Name of Game";
    $viewData["game"] = Game::find($id);
    $viewData['category'] = Category::find($viewData['game']->getIdCategory());
    $viewData['comments'] = Comment::where(
      [
        ['id_game', '=',   $viewData['game']->getId()],
        ['id_comment', '=', null],
      ]
    )->with('user')->get();

    foreach ($viewData['comments'] as $comment) {
      $viewData[$comment->getId()] = [];
      $this->subComment($comment, $viewData[$comment->getId()]);
    }


    $viewData['images'] = File::files(public_path("image/games/" . $viewData['game']->getId()));
    // dd($viewData['comments']);
    return view("game.index")->with("viewData", $viewData);
  }

  // Return the admin game page
  public function adminIndex()
  {
    $viewData = [];
    $viewData['categories'] = Category::all();
    return view('game.indexAdmin')->with('viewData', $viewData);
  }

  // Return the especific admin game page 
  public function adminShow($id)
  {
    $viewData = [];
    $viewData['category'] = Category::findOrFail($id);
    $viewData['games'] = Game::where('id_category', $id)->get();
    return view('game.showAdmin')->with('viewData', $viewData);
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

    Game::validate($request);
    $filename = time() . $request->image->getClientOriginalName();

    $data = [
      "name" => $request->name,
      "developer" => $request->developer,
      "description" => $request->description,
      "id_category" => $request->idCategory,
      "releasedate" => $request->releasedate,
      "price" => $request->price,
      "agerating" => $request->agerating,
      "buyquantity" => $request->buyquantity
    ];

    $game = Game::create($data);
    $game->setImage($filename);
    $game->save();


    $request["image"]->move(public_path("image/games/" . $game->getId()), $filename);

    return redirect(route('admin.gamesCategory', $request->idCategory));
  }

  // View specific game page in admin profile
  public function show($id)
  {
    $viewData = [];
    $viewData['game'] = Game::findOrFail($id);
    $viewData['category'] = Category::find($viewData['game']->getIdCategory());
    $viewData['images'] = File::files(public_path("image/games/" . $viewData['game']->getId()));
    return view('game.showGame')->with('viewData', $viewData);
  }

  // Delete images of a game
  public function deleteImage($param)
  {
    $params = explode(" $- ", $param);
    File::delete(public_path('image/games/' . $params[0] . '/' . $params[1]));
    return back();
  }

  // Add images for game
  public function addImages(Request $request, $id)
  {
    if ($request->hasfile('files')) {
      foreach ($request->file('files') as $image) {
        $filename = time() . $image->getClientOriginalName();
        $image->move(public_path("image/games/" . $id), $filename);
      }
    }
    return back();
  }

  // Return the edit game page
  public function edit($id)
  {
    $viewData = [];
    $viewData['game'] = Game::findOrFail($id);
    $viewData['categories'] = Category::all();
    return view('game.edit')->with('viewData', $viewData);
  }

  // Buy game
  public function buy($id)
  {
    $game = Game::find($id);
    $game->setBuyquantity($game->getBuyquantity() + 1);
    $game->save();
    return back();
  }

  // Method for update a game
  public function update(Request $request, $id)
  {
    $request->validate([
      'name' => 'required',
      'developer' => 'required',
      'description' => 'required',
      'idCategory' => 'required',
      'releasedate' => 'required',
      'price' => 'required',
      'agerating' => 'required',
    ]);

    $game = Game::find($id);
    if (isset($request->image)) {
      File::delete(public_path('image/games/' . $game->getId() . '/' . $game->getImage()));
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
    File::deleteDirectory(public_path('image/games/' . $game->getId() . '/'));
    $game->delete();
    return redirect(route('admin.gamesCategory', $idCategory));
  }
}
