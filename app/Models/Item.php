<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $fillable = ['price',
                         'name',
                         'image',
                         'category_id',
                       ];


  //an item can have many bills and vice versa
  public function bills()
  {
      return $this->belongsToMany('App\Models\Bill');
  }

  //an item can have only one category
  public function category()
  {
      return $this->belongsTo('App\Models\Category');
  }
}
