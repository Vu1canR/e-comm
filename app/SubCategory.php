<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function category(){
        
        return $this->belongsTo(Category::class);

    }

    public function amount(){
        return $this->hasMany(Product::class);
    }
}
