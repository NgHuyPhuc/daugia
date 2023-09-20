<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fllable = [
        'id',
        'product_name',
        'categories_id',
        'main_image',
        'city_province',
        'description',
        'more_description',
        'ownership',
        'registration_time',
        'registration_deadline',
        'starting_price',
        'price_step',
        'participation_costs',
        'auction_deposit',
    ];
}
