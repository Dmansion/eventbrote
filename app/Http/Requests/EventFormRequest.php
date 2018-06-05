<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
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
        return 
        [
            'title' => 'required|min:3',
            'description' => 'required|min:5'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Le titre est requis.',
            'description.required' => 'La description est requise.',
            'title.min' => 'Le titre doit avoir :min caractères minimum.',
            'description.min' => 'La description doit avoir :min caractères minimum.',
        ];
    }
}
