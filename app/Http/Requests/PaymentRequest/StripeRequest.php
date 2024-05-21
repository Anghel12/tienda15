<?php

namespace App\Http\Requests\PaymentRequest;

use Illuminate\Foundation\Http\FormRequest;

class StripeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'coins' => 'required|integer|min:1',
            'name' => 'required|string',
            'email' => 'required|email',
            'card_number' => 'required|digits:16',
            'expiration_date' => 'required|regex:/^\d{2}\/\d{2}$/',
            'cvc' => 'required|digits:3',
            /* 'payment_method_slug' => 'required', */

        ];
    }
}
