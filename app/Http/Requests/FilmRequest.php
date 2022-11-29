<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'titre' => 'required',
            'annee' => 'required|min:1895|max:2023',
            'minutes' => 'required|min:1|max:999',
            'img' => 'required',
        ];
    }

    public function messages() 
    {
        return [
            'annee.min' => 'Le premier film est paru en 1895.',
        ];
    }

}
