<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
  protected $fillable = ['place',
                         'infos',

                       ];

  //an adress can onlly belongs to one user

  public function user()
  {
      return $this->belongsTo('App\User');
  }

  
}
