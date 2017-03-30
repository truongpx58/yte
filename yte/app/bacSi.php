<?php

namespace App;

use Illuminate\Database\Eloquent\Model  as Eloquent;

class bacSi extends Eloquent
{
    protected $table = 'bacSi';
    protected $fillable = [
        'hoTen', 'ngheNghiep', 'chuyenNganh', 'cmnd', 'sdt',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
