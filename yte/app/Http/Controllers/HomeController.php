<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Auth;
class HomeController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth', ['except' => 'getLogout']);
    }
    public function getBn() {
    	return view('users.benhdtd');
    }

    public function getBs() {
        return view('users.testbs');
    }

    public function getLogout(){
        Auth::logout();
        return redirect(\URL::previous()); //tránh bug return vẫn còn tài khoản
    }
}
