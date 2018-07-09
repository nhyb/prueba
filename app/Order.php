<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
      'start_date','end_date','entry_permit','description','status','order_type_id','aparment_id'
  ];

    public function ordertype()
    {
        return $this->belongsTo(OrderType::class);
    }

    public function aparment()
    {
        return $this->belongsTo(Aparment::class);
    }

  /**  public function users()
    {
        return $this->belongsToMany(User::class);
    }
    **/
}
