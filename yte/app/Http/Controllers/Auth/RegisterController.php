<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\benhNhan;
use App\bacSi;
use App\benhDTD;
use App\benhTHA;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\DangkybnRequest;
use App\Http\Requests\DangkybsRequest;
use App\Http\Requests\BenhDTDRequest;
use App\Http\Requests\BenhTHARequest;

use Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|max:255',
    //         'email' => 'required|email|max:255|unique:users',
    //         'password' => 'required|min:6|confirmed',
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }
    public function getDangkybn() {
        return view('admin.login.dangkybn');
    }

    public function postDangkybn(DangkybnRequest $request) {

        $x = new User;
        $a = new benhNhan;
        $x->taiKhoan = $request->taiKhoan;
        $x->password = Hash::make($request->password);
        $x->remember_token = $request->_token;
        $x->roleId = 2;
        $a->hoTen = $request->hoTen;
        $a->cmnd = $request->cmnd;
        $a->MBS = 0;
        $x->save();
        $a->save();
        return redirect('login');
    }

    public function getDangkybs() {
        return view('admin.login.dangkybs');
    }

    public function postDangkybs(DangkybsRequest $request) {

        $x = new User;
        $a = new bacSi;
        $x->taiKhoan = $request->taiKhoan;
        $x->password = Hash::make($request->password);
        $x->remember_token = $request->_token;
        $x->roleId = 3;
        $a->hoTen = $request->hoTen;
        $a->ngheNghiep = $request->ngheNghiep;
        $a->chuyenNganh = $request->chuyenNganh;
        $a->cmnd = $request->cmnd;
        $a->sdt = $request->sdt;
        $x->save();
        $a->save();
        return redirect('login');
    }

    //cap nhat tinh trang benh
    

    
}