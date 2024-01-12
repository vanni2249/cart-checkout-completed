<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Jackiedo\Cart\Facades\Cart;

class ProductAddToCart extends Component
{
    public $product;
    public $quantity;
    public $available;
    public $options = [];
    public $test;
    public $completed;

    protected $listeners = ['recivedDataFromProductSelect','recivedDataFromProductQuantity'];

    public function recivedDataFromProductSelect($data)
    {
        $this->product = $data['product'];
        $this->available = $data['available'];
        $this->quantity = 1;
        if ($this->product['options']) {
            $this->options = json_decode($this->product['options'],true);
        }
    }

    public function recivedDataFromProductQuantity($data)
    {
        $this->quantity = $data['quantity'];
    }
    

    public function render()
    {
        return view('livewire.product-add-to-cart');
    }

    public function addToCart()
    {
        $cart   = Cart::name('shopping');
        $item  = $cart->addItem([
            'id'       => $this->product['id'],
            'title'    => $this->product['item']['title'],
            'quantity' => $this->quantity,
            'price'    => $this->product['price'],
            'options'  => $this->options,
            'extra_info' => [
                'date_time' => [
                    'added_at' => time(),
                ]
            ]
        ]);

        $this->test = $this->available; 

        if ($item->getDetails()->quantity > $this->available) {

            Cart::name('shopping')->updateItem($item->getDetails()->hash, [
                'quantity' => $this->available,
            ]);

        }

        $this->quantity = 1;

        if($item){
            $this->completed = 'success';

        }

        $this->emit('cartUpdated');
    }

}
