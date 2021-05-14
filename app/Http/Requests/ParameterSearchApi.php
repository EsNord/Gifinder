<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParameterSearchApi extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'q' => 'required|max:255',
            ''
        ];
    }
    public function messages()
    {
        return [
            'q.required' => 'A q is required',
        ];
    }
    public function attributes()
    {
        return [
            'q' => 'query for search',
        ];
    }
}
