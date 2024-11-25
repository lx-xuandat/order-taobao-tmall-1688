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
            'product.item_title' => ['required', 'string'],
            'product.item_link' => ['required', 'string'],
            'product.item_picture' => ['required', 'string'],
            'product.item_price' => ['required', 'string'],
            'product.item_quantity' => ['required', 'string'],
            'product.sku_name' => ['required', 'string'],
            'shop.shop_link' => ['required', 'string'],
            'shop.shop_name' => ['required', 'string'],
        ];
    }
}
