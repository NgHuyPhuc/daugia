<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
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
    public function category()
    {
        return $this->belongsTo(Category::class, "categories_id", "id");
    }
}
