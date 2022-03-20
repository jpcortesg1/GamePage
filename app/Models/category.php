<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  // Category Attributtes
  // $this->attributes['id'] - int - contains the product primary key
  // $this->attributes['name'] - string - contains the product name 
  // $this->attributes['description'] - string - contains the product description

  protected $fillable = ['id', 'name', 'description'];

  public function getId()
  {
    return $this->attributes['id'];
  }

  public function setId($id)
  {
    $this->attributes['id'] = $id;
  }
  
}
