<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'code',
        'name',
        'stock',
        'image',
        'sell_price',
        'status',
        'providerId',
        'categoryId',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function provider(){
        return $this->belongsTo(Provider::class);
    }
}
