<?php

namespace App\Models;

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
                         'pressing_id',
                         'adress_id',
                         'date_pickup',
                         'tel',
                         'service',
                         'payment_mode',
                       ];

  //one bill can only belongs to one user

  public function user()
  {
      return $this->belongsTo('App\Models\User');
  }

  //one bill can only belongs to one delivery man

  public function delivery()
  {
      return $this->belongsTo('App\Models\User');
  }

  //one bill can only belongs to one pressing

  public function pressing()
  {
      return $this->belongsTo('App\Models\User');
  }

  //one bill can only belongs to one adress

  public function adress()
  {
      return $this->belongsTo('App\Models\Adress');
  }

  //a  bill can have many orders
  public function orders()
  {
      return $this->hasMany('App\Models\Order');
  }


}
