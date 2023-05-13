<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorebateriaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'surfista1' => 'required|exists:surfistas,numero',
            'surfista2' => 'required|exists:surfistas,numero'
        ];
    }
}
