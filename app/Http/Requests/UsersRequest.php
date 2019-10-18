<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
class UsersRequest extends FormRequest
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
        $validate = [
            'name' => [
                'required',
            ],
            'email' => [

                'required',
                 Rule::unique('users')->ignore($this->id),
            ],
            'password' =>[
                'required',

            ],
            

            
        ];
        return $validate;
    }
    public function messages(){
        return [
            'name.required' => '*Vui lòng điền dữ liệu cho name!',
            'email.required' => '*Vui lòng điền dữ liệu cho email!',
            'email.unique' => '*Email đã tồn tại vui lòng nhập email mới!',
            'password.required' => '*Vui lòng điển dữ liệu cho password!',

        ];
     }
}


