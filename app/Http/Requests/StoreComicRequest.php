<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
    public function rules(): array {
        return [
            'title' => ['required', 'min:5'],
            'description' => ['required', 'max:20'],
            'price' => ['required','integer'],
            'series' => ['required'],
            'sale_date' => ['required'],
            'type' => ['required']
        ];
    }


    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages() {
        return [
            'title' => 'Il titolo deve contenere almeno 5 caratteri',
            'description' => 'La descrizione non può superare i 20 caratteri',
            'price' => 'Il prezzo non può essere vuoto',
            'series' => 'La serie non può essere vuota',
            'sale_date' => 'Il periodo di vendita non può essere vuota',
            'type' => 'La tipologia non può essere vuota',
        ];
    }
}
