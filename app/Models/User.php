<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'id',
        'email',
        'password',
        'name',
        'phone',
        'avatar',
        'imgccdtrc',
        'imgccdsau',
        'dob',
        'gender',
        'address',
        'cccd',
        'ngay_cap_cccd',
        'noi_cap_cccd',
        'bank_account_number',
        'bank',
        'bank_branch',
        'account_holder_name',
        'dgv_chung_chi',
        'dgv_ngay_cap_chung_chi',
        'dgv_so_the_dgv',
        'dgv_ngay_cap_the_dgv',
        'dgv_noi_cap_the_dgv',
        'checkmail',
        'token',
        'level',
    ];
}
