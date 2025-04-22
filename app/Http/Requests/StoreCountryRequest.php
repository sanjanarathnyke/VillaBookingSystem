<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCountryRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'languagespoke' => 'required|string|max:255',
            'capital' => 'required|string|max:255',
            'currency' => 'required|string|max:255',
            'visarequimnets' => 'required|string',
            'area' => 'required|numeric|min:0',
            'desctription' => 'required|string',

        ];
    }
}
