<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Product extends Model
{   
    public $timestamps = false;
    
    // protected $fillable = ['category_id','name', 'description','keywords','subcategory_id','store_code'];
    protected $fillable = ['category_id','name','model','brand','price','description','images','keywords','subcategory_id','store_code'];

    public function specs(){

        return $this->belongsToMany(Spec::class)->withPivot('value');

    }

    public function pivotValue(){

        return $this->belongsToMany(Spec::class);

    }

    public function addComment($body, $user_id, $product_id){

    Comment::create([
            'body' => $body,
            'user_id' => $user_id,
            'product_id' => $product_id
        ]);
    }

   

}


