<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class benhDTD extends Model
{
    protected $table = 'benhdtd';
    protected $fillable = [
    	'ngay','huyetAp','canNang','chieuCao','duongHuyet','tinhTrang','tl','r','an',
    ];
}
