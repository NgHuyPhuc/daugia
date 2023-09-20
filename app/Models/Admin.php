<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'id',
        'email',
        'name',
        'dgv_chung_chi',
        'dgv_ngay_cap_chung_chi',
        'dgv_so_the_dgv',
        'dgv_ngay_cap_the_dgv',
        'dgv_noi_cap_the_dgv',
        'level',
    ];

    protected $hidden = [
        'password',
    ];
}
