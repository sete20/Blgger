<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class category extends FormRequest
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
            "name"=>"required|unique:categories"

        ];
    }

    // public function attributes()
    // {
    //     return [
    //         'name' => 'Category Name',
    //     ];
    // }
    public function messages()
    {
        return [
        
            "name.unique"=>"The Name Is required And Must Be Unique",
        ];
    }


}
