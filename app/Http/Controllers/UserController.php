<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    //return admin user page
    public function indexAdmin()
    {
        $viewData = [];
        $viewData["users"] = User::all();
        $viewData["title"] = "Admin Users";
        return view('user.indexAdmin')->with('viewData', $viewData);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $viewData["title"] = "Admin create user";
        return view('user.create')->with("viewData", $viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'passwword'=>'required',
            'rol'=>'required'
          ]);

        $user = new User();
        $user->setName($request->name);
        $user->setEmail($request->email);
        $user->setPassword($request->password);
        $user->setRol($request->rol);

        $user->save();

        return redirect(route('admin.user', $request->idUser));
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
        $viewData = [];
        $viewData["title"] = "Admin Edit User";
        $viewData["user"] = User::find($id);
        return view('user.edit')->with('viewData',$viewData);
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
        $user = User::find($id);

        $user->setName($request->name);
        $user->setEmail($request->email);

        $user->save();

        return redirect(route('admin.user', $user->getId()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect(route('admin.user'));
    }
}
