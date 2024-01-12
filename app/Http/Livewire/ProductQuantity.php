<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jackiedo\Cart\Facades\Cart;

class ProductQuantity extends Component
{
    public $product_id;
    public $quantity;
    public $available;
    public $test;

    protected $listeners = ['recivedDataFromProductSelect'];

    public function recivedDataFromProductSelect($data)
    {
        $this->product_id = $data['product']['id'];
        $this->available = $data['available'];
        $this->quantity = 1;
    }

    public function mount()
    {
        $this->quantity = 1;
    }

    public function render()
    {
        return view('livewire.product-quantity');
    }

    public function sum($id)
    {
        // $this->test = $this->product_id;
        // $this->test = Cart::name('shopping')->getItem(1);
        $this->quantity++;
        $this->sendDataFromProductSelect();
    }

    public function subtraction()
    {
            $this->quantity--;
            $this->sendDataFromProductSelect();
    }

    public function sendDataFromProductSelect()
    {
        $data = [
            'quantity' => $this->quantity,
        ];
        $this->emit('recivedDataFromProductQuantity', $data);
    }
}
