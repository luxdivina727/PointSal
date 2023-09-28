<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'categoryName',
        'categoryDescription',
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
