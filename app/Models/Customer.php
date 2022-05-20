<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'fname',
        'lname',
        'email',
        'address',
        'country',
        'phone',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}
