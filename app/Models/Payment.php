<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_user',
        'id_product',
        'bank_account_number',
        'bank',
        'account_holder_name',
        'total_amount',
        'state',
    ];
    public function product(){
        return $this->belongsto(Product::class ,"id_product","id");
    }
    public function user(){
        return $this->belongsto(User::class ,"id_user","id");
    }
}
