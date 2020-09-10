<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidatedSpecificationForm extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('specifications')->ignore($this->specification)->where(function($query){
                    $query->where('product_type_id',$this->product_type_id);
                }),
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên thông số kĩ thuật không được để trống',
            'name.unique' => 'Tên thông số kĩ thuật phải là duy nhất',
        ];
    }
}
