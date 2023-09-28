<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'providersName',
        'providersNit',
        'providersEmail',
        'providersPhone',
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
