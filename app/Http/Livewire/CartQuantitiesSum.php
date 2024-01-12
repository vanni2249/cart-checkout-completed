<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jackiedo\Cart\Facades\Cart;

class CartQuantitiesSum extends Component
{
    public $count;

    protected $listeners = ['cartUpdated' => 'mount'];

    public function mount()
    {
        $this->count = Cart::name('shopping')->getDetails()->get('quantities_sum');
    }
    public function render()
    {
        return view('livewire.cart-quantities-sum');
    }
}
