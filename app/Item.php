<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $fillable = ['price',
                         'name',
                         'image',
                         'quantity',

                       ];


  //an item can have many bills and vice versa
  public function bills()
  {
      return $this->belongsToMany('App\Bill');
  }
}
