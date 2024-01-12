<?php

namespace App\Http\Livewire;

use Brick\Money\Money;
use Livewire\Component;
use Jackiedo\Cart\Facades\Cart;

class CartBalance extends Component
{
    public $items_count;
    public $quantities_sum;
    public $subtotal;
    public $total;

    protected $listeners = ['cartUpdated' => 'mount'];

    public function mount()
    {
        $cart = Cart::name('shopping');
        $this->items_count = $cart->getDetails()->get('items_count');
        $this->quantities_sum = $cart->getDetails()->get('quantities_sum');
        $this->subtotal = $cart->getSubtotal();
        $this->total = $cart->getTotal();
    }
    public function render()
    {
        return view('livewire.cart-balance');
    }
}
