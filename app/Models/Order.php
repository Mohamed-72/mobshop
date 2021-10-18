<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'address',
        'firstname',
        'lastname',
        'phone',
        'total-price',
        'ship-date',
        'user_id',
        'city',
        'email',
        'status',
        

        
    ];
    public function itemes()
    {
        return $this->hasMany(Item::class);
    }
    public function user()
    {   
        return $this->belongsTo(User::class,"user_id");
    }
    

}
