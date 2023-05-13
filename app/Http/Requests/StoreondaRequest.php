<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreondaRequest extends FormRequest
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
            'bateria' => 'required|integer|exists:baterias,id',
            'surfista' => 'required|integer|exists:baterias,id',
        ];
    }
}
