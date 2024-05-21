<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;

class CheckoutComponent extends Component
{
   public $payment_method;

    public function render()
    {
        return view('livewire.shop.checkout-component');

    }
}
