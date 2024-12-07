<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MsgToShopUpdateRequest extends FormRequest
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
            'cart_link.msg_to_shop' => 'nullable|string|length:150',
            'cart_link.cart_link_id' => 'numeric',
        ];
    }
}
