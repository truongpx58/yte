<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BenhTHARequest extends FormRequest
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
            'ngay' => 'required',
            'huyetAp' => 'required',
            'canNang' => 'required',
            'chieuCao' => 'required',
            'tinhTrang' => 'required',
            'tl' => 'required',
            'r' => 'required',
            'an' => 'required',
            'vd' => 'required',
        ];
    }
    public function messages (){
        return [
            'ngay.required' => 'Vui lòng nhập ngày',
            //'taiKhoan.unique' => 'Tài khoản đã tồn tại',
            'huyetAp.required' => 'Vui lòng nhập số đo huyết áp',
            'canNang.required' => 'Vui lòng nhập cân nặng',
            'chieuCao.required' => 'Vui lòng nhập chiều cao',
            'tinhTrang.required' => 'Vui lòng nhập tình trạng sức khỏe',
            
            'an.required' => 'Vui lòng nhập dữ liệu',
            'vd.required' => 'Vui lòng nhập dữ liệu',
        ];
    }
}
