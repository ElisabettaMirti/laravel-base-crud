<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required', 'min:2', 'max:255'],
            'specie' => ['required', 'min:3', 'max:255'],
            'razza' => ['min:2', 'max:255', 'nullable'],
            'eta' => ['integer', 'nullable'],
            'sesso' => ['required', 'min:1', 'max:15'],
            'colore' => ['min:2', 'max:255', 'nullable'],
            'peso' => ['decimal:1,8', 'nullable'],
            'altezza' => ['decimal:1,8', 'nullable'],
            'url_img' => ['url', 'nullable'],
            'info' => ['min:3', 'nullable']
        ];
    }
}
