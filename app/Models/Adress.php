<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Adress extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'state',
        'town',
        'infos',
        'user_id'
    ];

  //an adress can onlly belongs to one user

  public function user()
  {
      return $this->belongsTo('App\Models\User');
  }

  //an adress can have many bills

  public function bills()
  {
      return $this->hasMany('App\Models\Bill');
  }


}
