<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  protected $fillable = ['amount',
                         'trans_id',
                         'signature',
                         'state',
                         'type',
                         'user_id',
                         'date',
                         'tel',
                       ];

  //one bill can onlly belongs to one user

  public function user()
  {
      return $this->belongsTo('App\User');
  }

  //a  bill can have many orders
  public function orders()
  {
      return $this->hasMany('App\Order');
  }


}
