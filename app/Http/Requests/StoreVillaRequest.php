<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVillaRequest extends FormRequest
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
            'name' => 'required|string',
            'country_id' => 'required|exists:countries,id',
            'image' => 'required|image',
            'address' => 'required|string',
            'price' => 'required|numeric',
            'bed_count' => 'required|integer',
            'bath_count' => 'required|integer',
            'guest_count' => 'required|integer',
        ];
    }
}
