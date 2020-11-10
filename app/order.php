<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
   
class Order extends Model
{

    protected $fillable = ['user_id', 'address'];

    public function showOrders(){
        
        return $this->belongsTo(User::class);

    }

    public function productsList(){
        
        return $this->hasMany(OrderProduct::class);

    }
}
