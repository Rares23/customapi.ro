<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'product_id',
        'buyer_id',
    ];

    public function buyer() {
        return $this->belognsTo(Buyer::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
