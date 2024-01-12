<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jackiedo\Cart\Facades\Cart;

class CheckoutItems extends Component
{
    public function render()
    {
        return view('livewire.checkout-items',[
            'items' => Cart::name('shopping')->getItems()
        ]);
    }
}
