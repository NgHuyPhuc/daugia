<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fllable = [
        'id',
        'id_user',
        'id_product',
        'bank_account_number',
        'bank',
        'account_holder_name',
        'total_amount',
        'state',
    ];
}
