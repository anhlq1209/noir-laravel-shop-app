<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'firtName',
        'lastName',
        'email',
        'phone',
        'city',
        'postcode',
        'address',
        'country'
    ];
}
