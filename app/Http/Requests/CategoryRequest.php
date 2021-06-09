<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'=>'required|unique:categories,name',
            'category_id'=> 'numeric'

        ];
    }
    public function messages()
    {
        return [
            'name.required'=>"Truong nay khong duoc de trong",
            'name.unique'=>"Truong nay khong duoc de trong",
            'category_id.numeric'=>"Truong nay phai la so",
        ];
    }
}
