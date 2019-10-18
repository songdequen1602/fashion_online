<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        
            'email' => [

                'required',
            ],
            'password' =>[
                'required',

            ],
            

            
        ];
        return $validate;
    }
    public function messages(){
        return [
        
            'email.required' => '*Vui lòng điền dữ liệu cho email!',
            'password.required' => '*Vui lòng điển dữ liệu cho password!',

        ];
        }
   
    }

