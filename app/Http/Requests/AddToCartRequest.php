<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddToCartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('web')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'product.customer_id' => ['required', 'string'],
            // 'product.item_id' => ['required', 'string'],
            // 'product.sku_id' => ['required', 'string'],
            // 'product.po_status' => ['required', 'string'],
            'product.title' => ['required', 'string'],
            'product.link' => ['required', 'string'],
            'product.thumbnail' => ['required', 'string'],
            'product.price' => ['required', 'numeric'],
            'product.quantity' => ['required', 'numeric'],
            'product.sku' => ['required', 'string'],
            'shop.website' => ['required', 'string'],
            'shop.name' => ['required', 'string'],
        ];
    }
}
