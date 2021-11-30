<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable=['user_id'];

    // public function TransactionProduct()
    // {
    //     return $this->belongsToMany(TransactionProduct::class);
    // }

    public function products(){
        return $this->belongsToMany(Product::class, 'transaction_products')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
