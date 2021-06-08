<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = ['unit_price',
                         'name_item',
                         'quantity',
                         'bill_id',
                         'image',
                       ];


  //an order blongs to one bill
  public function bill()
  {
      return $this->belongsTo('App\Models\Bill');
  }
}
