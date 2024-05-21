<?php

namespace App\Http\Requests\PaymentRequest;

use Illuminate\Foundation\Http\FormRequest;

class PayPalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Permitir que cualquier usuario realice la solicitud
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'coins' => 'required|integer|min:1', // Verificar que el campo 'coins' esté presente y sea un número entero positivo
            'amount' => 'required|numeric|min:1', // Verificar que el campo 'amount' esté presente y sea un número positivo
            'payment_method_id' => 'required|exists:payment_methods,id' // Verificar que el campo 'payment_method_id' esté presente y corresponda a un método de pago válido en la base de datos
        ];
    }
}
