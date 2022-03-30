<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
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

  // View of create new user
  public function create()
  {
    $viewData["title"] = "Admin create user";
    return view('user.create')->with("viewData", $viewData);
  }

  // Method to create new user
  public function store(Request $request)
  {
    User::validateRegister($request);

    $user = new User();
    $user->setName($request->name);
    $user->setEmail($request->email);
    $user->setPassword($request->password);
    $user->setRol($request->rol);

    $user->save();

    return redirect(route('admin.user', $request->idUser));
  }

  // Return view of specific user
  public function show($id)
  {
    $viewData = [];
    $viewData['user'] = User::where('id', $id)->with('comments')->with('game')->get()[0];
    $viewData['current'] = Auth::id() == $id;
    return view('user.show')->with('viewData', $viewData);
  }

  // Return view to edit new user
  public function edit($id)
  {
    $viewData = [];
    $viewData["title"] = "Admin Edit User";
    $viewData["user"] = User::find($id);
    return view('user.edit')->with('viewData', $viewData);
  }

  // Method to update new user
  public function update(Request $request, $id)
  {
    User::validate($request);
    $user = User::find($id);

    // Password
    // Logic where change of pasword

    // Image
    if (isset($request->image)) {
      if ($user->getImage() != "no-image.png") {
        File::delete(public_path('image/user/' . $user->getImage()));
      }
      $filename = time() . $request->image->getClientOriginalName();
      $request["image"]->move(public_path("image/user"), $filename);
      $user->setImage($filename);
    }

    $user->setName($request->name);
    $user->setEmail($request->email);

    $user->save();

    return back();
  }

  // Method for delete new user
  public function destroy($id)
  {
    $user = User::findOrFail($id);
    $user->delete();

    return redirect(route('admin.user'));
  }
}
