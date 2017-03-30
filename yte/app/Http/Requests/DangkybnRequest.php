<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangkybnRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'taiKhoan' => 'required',
            'password' => 'required',
            'hoTen' => 'required',
            'cmnd' => 'required',
        ];
    }
    public function messages (){
        return [
            'taiKhoan.required' => 'Vui lòng nhập tài khoản',
            //'taiKhoan.unique' => 'Tài khoản đã tồn tại',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'hoTen.required' => 'Vui lòng nhập họ tên',
            'cmnd.required' => 'Vui lòng nhập số cmnd/thẻ căn cước',
        ];
    }
}
