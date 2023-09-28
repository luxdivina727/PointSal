<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    protected $fillable = [

        'purchaseId',
        'productId',
        'quantity',
        'price',
    ];
    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
