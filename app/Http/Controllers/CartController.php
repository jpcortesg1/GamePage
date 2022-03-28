<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class CartController extends Controller
{

  public function index(Request $request)
  {
    $viewData = [];
    $ids = $request->session()->get('games');
    $games = Game::all();
    $viewData["title"] = "Cart - Online Store";
    $viewData["subtitle"] = "Shopping Cart";
    $viewData['games'] = [];


    if ($ids) {
      foreach ($games as $key => $game) {
        if (in_array($game->getId(), array_keys($ids))) {
          $viewData['games'][$game->getId()] = $game;
        }
      }
    }

    return view('cart.index')->with("viewData", $viewData);
  }

  public function add($id, Request $request)
  {
    $ids = $request->session()->get('games');
    $ids[$id] = $id;
    $request->session()->put('games', $ids);
    return back();
  }

  public function remove($id, Request $request)
  {
    $ids = $request->session()->get('games');
    unset($ids[$id]);
    $request->session()->put('games', $ids);
    return back();
  }

  public function removeAll(Request $request)
  {
    $request->session()->forget('games');
    return back();
  }

  public function checkOut(Request $request)
  {
    $ids = $request->session()->get('games');
    foreach ($ids as $id) {
      $game = Game::find($id);
      $game->setBuyquantity($game->getBuyquantity() + 1);
      $game->save();
    }
    $request->session()->forget('games');
    return back();
  }
}
