<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'product_name'=>['required'],
            // 'product_image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'price'=>['required','numeric'],
            // 'product_stock'=>['required','numeric']
        ];
    }
}