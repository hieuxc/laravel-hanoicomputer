<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidatedFilterOptionForm extends FormRequest
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
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('filter_options')->ignore($this->filter_option)->where(function ($query) {
                    $query->where('filter_id', $this->filter_id);
                }),
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên lựa chọn lọc không được để trống',
            'name.unique' => 'Tên lựa chọn lọc phải là duy nhất',
        ];
    }
}
