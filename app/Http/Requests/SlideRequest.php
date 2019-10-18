<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
class SlideRequest extends FormRequest
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
        'order_number' => [
        'required',
      
        ],      
    ];
    if(!$this->id){
            $validate['image'] = 'required|file|mimes:jpeg,png';
        }
    
        return $validate;
    }
    public function messages(){
        return [
          
        'order_number.required' => '*Vui lòng điền dữ liệu cho order_number!',
            
        ];
    }

}
