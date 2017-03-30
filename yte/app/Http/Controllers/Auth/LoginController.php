<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getLogin(){
        return view('admin.login.login');
    }

    public function postLogin(LoginRequest $request){
        $credentials = $request->only(['taiKhoan', 'password']);
        if (Auth::attempt($credentials)) {
            $userRoles = Auth::user()->roleId;
            //$userRoles = User::find($roleId);
            if($userRoles==1){
                return redirect()->intended('admin');
            }
            if($userRoles==3){
                return redirect()->intended('bs');
            }
            // Authentication passed...
                //return redirect()->intended('/bn');
            return redirect()->intended('bn');
        }
        
        dd('Sai tài khoản/mật khẩu');
    }
    

    // public function getLogout(){
    //     Auth::logout();
    //     return redirect(\URL::previous());
    // }
}
