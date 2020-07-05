<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoCreateRequest extends FormRequest
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
            'title' => 'required|unique:todos|max:255',
            'desc'  => 'required',

        ];
    }

    public function messages()
    {
        return [
            'title.unique' => 'This title is already exits. Please choose another!!!',
        ];
    }
}
