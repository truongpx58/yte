<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class benhTHA extends Model
{
    protected $table = 'benhtha';
    protected $fillable = [
    	'ngay','huyetAp','canNang','chieuCao','tinhTrang','tl','r','an','vd',
    ];
}
