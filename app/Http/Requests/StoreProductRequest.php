<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
        if($this->isMethod('post')) {
            return [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'discount' => 'nullable|numeric|min:0',
                'quantity' => 'required|numeric|min:0',
                'category_id' => 'required|exists:categories,id',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ];
        }

        return [
            'name' => 'sometimes|string|max:255',
            'price' => 'sometimes|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'quantity' => 'sometimes|numeric|min:0',
            'category_id' => 'sometimes|exists:categories,id',
            'description' => 'sometimes|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
