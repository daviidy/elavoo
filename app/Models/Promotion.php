<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['date_exp',
                           'value',
                         ];
     /**
      * [users description]
      * relationship many to many with Category model
      * @return [array] [description]
      */
      public function categories()
      {
          return $this->belongsToMany('App\Models\Category');
      }
}
