<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedures extends Model
{
  protected $fillable = ['name','price','user_id'];
  public function user (){
    return $this->belongsTo('App\User');
  }
}
