<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class CartController extends Controller
{

    public function index(Request $request)
    {
        $games = Game::all();
        $gamesInCart = [];
        $ids = $request->session()->get("games"); //we get the ids of the products stored in session
        
        if($ids){
            foreach ($games as $key => $games) {
                if(in_array($key, array_keys($ids))){
                $gamesInCart[$key] = $games;
                }
            }
        }

        $viewData = [];
        $viewData["title"] = "Cart - Online Store";
        $viewData["subtitle"] = "Shopping Cart";
        $viewData["games"] = $games;
        $viewData["gamesInCart"] = $gamesInCart;

        return view('cart.index')->with("viewData",$viewData);

    }

    public function add($id, Request $request)
    {

        $games = $request->session()->get("games");
        $games[$id] = $id;
        $request->session()->put('games', $games);
        return back();
    }

    public function removeAll(Request $request)
    {
        $request->session()->forget('games');
        return back();
    }

}