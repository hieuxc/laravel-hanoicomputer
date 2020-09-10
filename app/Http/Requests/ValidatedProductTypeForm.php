<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidatedProductTypeForm extends FormRequest
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
                Rule::unique('product_types')->ignore($this->product_type),
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên loại sản phẩm không được để trống',
            'name.unique' => 'Tên loại sản phẩm phải là duy nhất',
        ];
    }
}
