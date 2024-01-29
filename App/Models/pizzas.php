<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//same as table name
class pizzas extends Model
{
    protected $casts=[
        'toppings'=>'array'
    ];
}
