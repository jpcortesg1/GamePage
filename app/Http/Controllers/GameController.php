<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $viewData = [];
      $viewData["title"] = "Name Game - Game";
      $viewData["subTitle"] = "Name of Game";
      return view("game.index")->with("viewData", $viewData);
    }

    public function adminIndex()
    {
      $games = Game::all();
      return view('gameCrud.index')->with('games',$games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('gameCrud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $games = new Game();

      $games->name = $request->get('name');
      $games->developer = $request->get('developer');
      $games->description = $request->get('description');
      $games->id_category = $request->get('id_category');
      $games->releasedate = $request->get('releasedate');
      $games->price = $request->get('price');
      $games->agerating = $request->get('agerating');
      $games->buyquantity = $request->get('buyquantity');

      $games->save();

      return redirect('/games');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $game = Game::find($id);
      return view('gameCrud.edit')->with('game',$game);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $game = Game::find($id);

      $game->name = $request->get('name');
      $game->developer = $request->get('developer');
      $game->description = $request->get('description');
      $game->id_category = $request->get('id_category');
      $game->releasedate = $request->get('releasedate');
      $game->price = $request->get('price');
      $game->agerating = $request->get('agerating');
      $game->buyquantity = $request->get('buyquantity');

      $game->save();

      return redirect('/games');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $game = Game::find($id);
      $game->delete();
      return redirect('/games');
    }
}