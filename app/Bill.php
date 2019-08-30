<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  protected $fillable = ['amount',
                         'trans_id',
                         'signature',
                         'state',
                         'statut_livraison',
                         'user_id',
                         'delivery_id',
                         'adress_id',
                         'date_pickup',
                         'tel',
                         'service',
                         'payment_mode',
                       ];

  //one bill can only belongs to one user

  public function user()
  {
      return $this->belongsTo('App\User');
  }

  //one bill can only belongs to one delivery man

  public function delivery()
  {
      return $this->belongsTo('App\User');
  }

  //one bill can only belongs to one adress

  public function adress()
  {
      return $this->belongsTo('App\Adress');
  }

  //a  bill can have many orders
  public function orders()
  {
      return $this->hasMany('App\Order');
  }


}
