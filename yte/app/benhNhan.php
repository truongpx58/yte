<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class benhNhan extends Eloquent
{
    protected $table = 'benhNhan';
    protected $fillable = [
        'hoTen', 'cmnd', 'MBS',
    ];

}
