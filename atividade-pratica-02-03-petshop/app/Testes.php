<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testes extends Model
{
    protected $fillable = ['user_id', 'procedure_id' ,'date'];
    public function user (){
      return $this->belongsTo('App\User');
    }
    public function procedures (){
      return $this->belongsTo('App\Procedures');
    }
}
