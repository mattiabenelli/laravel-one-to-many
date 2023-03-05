<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'unique:projects', 'max:100'],
            'content' => ['nullable']
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Il titolo è richiesto',
            'title.unique' => 'esiste già un progetto con questo titolo',
            'title.max' => 'il post non può essere più lungo di :max caratteri',
        ];
    }
        
}

?>