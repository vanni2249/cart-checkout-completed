<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Jackiedo\Cart\Facades\Cart;

class CartItems extends Component
{
    public $test;
    public $quantity;

    public function mount()
    {
        // $this->test = Cart::name('shopping')->getItem('item_9f717d0eb93327ea91374ee24014772a')->getQuantity();
    }

    public function render()
    {
        return view('livewire.cart-items', [
            'items' => Cart::name('shopping')->getItems()
        ]);
    }

    public function updateQuantityItemSum($hash)
    {
        $item = Cart::name('shopping')->getItem($hash);
        $quantity = $item->getQuantity();
        $available = Product::find($item->getId())->available();

        if ($quantity < $available ) {
            Cart::name('shopping')->updateItem($hash, [
                'quantity' => $quantity + 1,
            ]);
        }

        $this->emit('cartUpdated');
    }

    public function updateQuantityItemSubtraction($hash)
    {
        $quantity = Cart::name('shopping')->getItem($hash)->getQuantity();
        if ($quantity > 1) {
            Cart::name('shopping')->updateItem($hash, [
                'quantity' => $quantity - 1,
            ]);
        }

        $this->emit('cartUpdated');
    }

    public function removeItem($hash)
    {
        Cart::name('shopping')->removeItem($hash);

        $this->emit('cartUpdated');
    }
}
