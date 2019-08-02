<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
  protected $fillable = ['city',
                         'state',
                         'town',
                         'infos',
                         'user_id'

                       ];

  //an adress can onlly belongs to one user

  public function user()
  {
      return $this->belongsTo('App\User');
  }

  //an adress can have many bills

  public function bills()
  {
      return $this->hasMany('App\Bill');
  }


}
