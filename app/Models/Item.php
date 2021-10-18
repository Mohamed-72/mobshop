<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'price',
        'name',
        'product_id',
        'order_id',
        'subtotl',
        'image',
    ];
    public function products()
    {
        return $this->hasMany(Product::class,"product_id");
    }
    public function order()
    {
        return $this->belongsTo(Order::class,"order_id");
    }
}
