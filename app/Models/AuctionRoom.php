<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_product',
        'thoi_gian_bat_dau',
        'thoi_gian_ket_thuc',
        'id_dgv',
        'state',
    ];
    public function product (){
        return $this->belongsto(Product::class ,"id_product","id");
    }
    public function dgv(){
        return $this->belongsto(User::class ,"id_dgv","id");
    }
}
