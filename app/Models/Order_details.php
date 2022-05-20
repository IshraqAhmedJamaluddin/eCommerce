<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order_details extends Model
{
    use HasFactory, SoftDeletes;
    
        protected $fillable = [
        'price',
        'sku',
        'quantity'
    ];
}
