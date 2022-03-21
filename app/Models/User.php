<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  // User Attributtes
  // $this->attributes['id'] - int - contains the user primary key
  // $this->attributes['name'] - string - contains the user name 
  // $this->attributes['email'] - string - contains the user email
  // $this->attributes['rol'] - string - contains the user rol
  // $this->attributes['password'] - string - contains the user password

    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['name','email','password',];
    protected $hidden = ['password','remember_token',];
    protected $casts = ['email_verified_at' => 'datetime',];

    public function getRol(){
        return $this->attributes['rol'];
    }

    public function setRol($rol){
        return $this->attributes['rol'] = $rol;
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

    public function getEmail()
    {
        return $this->attributes['email'];
    }

    public function setEmail($email)
    {
        return $this->attributes['email'] = $email;
    }

    public function getPassword()
    {
        return $this->attributes['password'];
    }

    public function setPassword($password)
    {
        return $this->attributes['password'] = $password;
    }

    public function getCreateAt()
    {
      return $this->attributes['created_at'];
    }
  
    public function getUpdateAt()
    {
      return $this->attributes['updated_at'];
    }
}
