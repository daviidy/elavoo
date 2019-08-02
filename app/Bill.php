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
                         'adress_id',
                         'date_pickup',
                         'tel',
                       ];

  //one bill can only belongs to one user

  public function user()
  {
      return $this->belongsTo('App\User');
  }

  //one bill can only belongs to one adress

  public function user()
  {
      return $this->belongsTo('App\Adress');
  }

  //a  bill can have many orders
  public function orders()
  {
      return $this->hasMany('App\Order');
  }


}
