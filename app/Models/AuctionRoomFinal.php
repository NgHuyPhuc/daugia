<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionRoomFinal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_product',
        'id_auction_room',
        'id_dgv',
        'id_user',
        'bidding_price',
    ];
    public function product (){
        return $this->belongsto(Product::class ,"id_product","id");
    }
    public function userdgv(){
        return $this->belongsto(User::class ,"id_dgv","id");
    }
    public function user(){
        return $this->belongsto(User::class ,"id_user","id");
    }
}
