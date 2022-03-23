<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  use HasFactory;

  // Category Attributtes
  // $this->attributes['id'] - int - contains the product primary key
  // $this->attributes['comment'] - string - contains the comment
  // $this->attributes['id_game'] - id - contains the id of game
  // $this->attributes['id_user'] - id - contains the id of user
  // $this->attributes['id_comment'] - id - if this comment is response of other comment

  protected $fillable = ['id', 'comment', 'id_game', 'id_comment', 'id_user'];
  
  public static function validate($request)
  {
    $request->validate([
      'comment' => 'required',
    ]);
  }

  public function getId()
  {
    return $this->attributes['id'];
  }

  public function setId($id)
  {
    $this->attributes['id'] = $id;
  }

  public function getComment()
  {
    return $this->attributes['comment'];
  }

  public function setComment($comment)
  {
    $this->attributes['comment'] = $comment;
  }

  public function getIdGame()
  {
    return $this->attributes['id_game'];
  }

  public function setIdGame($idGame)
  {
    $this->attributes['id_game'] = $idGame;
  }

  public function getIdUser()
  {
    return $this->attributes['id_user'];
  }

  public function setIdUser($idUser)
  {
    $this->attributes['id_user'] = $idUser;
  }

  public function getIdComment()
  {
    return $this->attributes['id_comment'];
  }

  public function setIdComment($idComment)
  {
    $this->attributes['id_comment'] = $idComment;
  }
}
