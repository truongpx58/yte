<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'taiKhoan', 'password','roleId'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function userRoles()
    // {
    //     $userRoles = UserRole::where('userId', $this->id)->get();
    //     $result = [];
    //     foreach ($userRoles as $key => $value) {
    //         array_push($result, $value->roleId);
    //     }
    //     return $result;
    // }
}
