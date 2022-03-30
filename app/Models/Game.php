<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
  // Category Attributtes
  // $this->attributes['id'] - int - contains the product primary key
  // $this->attributes['name'] - string - contains the game name 
  // $this->attributes['developer'] - string - contains the game developer
  // $this->attributes['description'] - string - contains the game description
  // $this->attributes['id_category'] - init - contains the game foreign key relase with category
  // $this->attributes['releasedate'] - string - contains the date of releasedate game
  // $this->attributes['price'] - int - contains the date of relase game
  // $this->attributes['agerating'] - int - contains the date of agerating game
  // $this->attributes['buyquantity'] - int - contains the buyquantity of agerating game

  protected $table = 'games';
  protected $primaryKey = 'id';
  protected $fillable = ['id', 'name', 'developer', 'description', 'id_category', 'releasedate', 'price', 'agerating', 'buyquantity'];

  public static function validate($request)
  {
    $request->validate([
      'name' => 'required|max:255',
      'developer' => 'required|max:255',
      'description' => 'required:max:6000',
      'idCategory' => 'required:number',
      'releasedate' => 'required|max:255',
      'price' => 'required|max:2000',
      'agerating' => 'required',
      'image' => 'required|image'
    ]);
  }

  public static function validateUpdate($request)
  {
    $request->validate([
      'name' => 'required|max:255',
      'developer' => 'required|max:255',
      'description' => 'required:max:6000',
      'idCategory' => 'required:number',
      'releasedate' => 'required|max:255',
      'price' => 'required|max:2000',
      'agerating' => 'required',
      'image' => 'nullable|image'
    ]);
  }

  public function getId()
  {
    return $this->attributes['id'];
  }

  public function setId($id)
  {
    return $this->attributes['id'] = $id;
  }

  public function getName()
  {
    return $this->attributes['name'];
  }

  public function setName($name)
  {
    return $this->attributes['name'] = $name;
  }

  public function getDeveloper()
  {
    return $this->attributes['developer'];
  }

  public function setDeveloper($developer)
  {
    return $this->attributes['developer'] = $developer;
  }

  public function getDescription()
  {
    return $this->attributes['description'];
  }

  public function setDescription($description)
  {
    return $this->attributes['description'] = $description;
  }

  public function getIdCategory()
  {
    return $this->attributes['id_category'];
  }

  public function setIdCategory($id_category)
  {
    return $this->attributes['id_category'] = $id_category;
  }

  public function getReleasedate()
  {
    return $this->attributes['releasedate'];
  }

  public function setReleasedate($releasedate)
  {
    return $this->attributes['releasedate'] = $releasedate;
  }

  public function getPrice()
  {
    return $this->attributes['price'];
  }

  public function setPrice($price)
  {
    return $this->attributes['price'] = $price;
  }

  public function getAgerating()
  {
    return $this->attributes['agerating'];
  }

  public function setAgerating($agerating)
  {
    return $this->attributes['agerating'] = $agerating;
  }

  public function getBuyquantity()
  {
    return $this->attributes['buyquantity'];
  }

  public function setBuyquantity($buyquantity)
  {
    return $this->attributes['buyquantity'] = $buyquantity;
  }

  public function getCreateAt()
  {
    return $this->attributes['created_at'];
  }

  public function getUpdateAt()
  {
    return $this->attributes['updated_at'];
  }

  public function getImage()
  {
    return $this->attributes['image'];
  }

  public function setImage($image)
  {
    $this->attributes['image'] = $image;
  }
}
