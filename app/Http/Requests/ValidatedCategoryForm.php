<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidatedCategoryForm extends FormRequest
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
            'parent_id' => 'required',
            'name' => [
                'required',
                Rule::unique('categories')->ignore($this->category),
            ]
        ];
    }

    public function messages()
    {
        return [
            'parent_id.required' => 'Danh mục cha không được để trống',
            'name.required' => 'Tên danh mục không được để trống',
            'name.unique' => 'Tên danh mục phải là duy nhất'
        ];
    }
}
