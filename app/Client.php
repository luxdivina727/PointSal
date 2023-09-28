<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=[
        'name',
        'cedula',
        'adress',
        'phone',
        'email',
        'identificationTypeId',
    ];
    public function identificationType(){
        return $this->belongsTo(IdentificationType::class);
    }
}
